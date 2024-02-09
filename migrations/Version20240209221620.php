<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209221620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE service_devis (service_id INT NOT NULL, devis_id INT NOT NULL, INDEX IDX_225528CCED5CA9E6 (service_id), INDEX IDX_225528CC41DEFADA (devis_id), PRIMARY KEY(service_id, devis_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_life (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_property (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_vehicle (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service_devis ADD CONSTRAINT FK_225528CCED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_devis ADD CONSTRAINT FK_225528CC41DEFADA FOREIGN KEY (devis_id) REFERENCES devis (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_life ADD CONSTRAINT FK_D78E8A12BF396750 FOREIGN KEY (id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_property ADD CONSTRAINT FK_728447E3BF396750 FOREIGN KEY (id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_vehicle ADD CONSTRAINT FK_D404B61ABF396750 FOREIGN KEY (id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE devis ADD devis_client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B6838A35B FOREIGN KEY (devis_client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52B6838A35B ON devis (devis_client_id)');
        $this->addSql('ALTER TABLE service ADD type VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service_devis DROP FOREIGN KEY FK_225528CCED5CA9E6');
        $this->addSql('ALTER TABLE service_devis DROP FOREIGN KEY FK_225528CC41DEFADA');
        $this->addSql('ALTER TABLE service_life DROP FOREIGN KEY FK_D78E8A12BF396750');
        $this->addSql('ALTER TABLE service_property DROP FOREIGN KEY FK_728447E3BF396750');
        $this->addSql('ALTER TABLE service_vehicle DROP FOREIGN KEY FK_D404B61ABF396750');
        $this->addSql('DROP TABLE service_devis');
        $this->addSql('DROP TABLE service_life');
        $this->addSql('DROP TABLE service_property');
        $this->addSql('DROP TABLE service_vehicle');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B6838A35B');
        $this->addSql('DROP INDEX IDX_8B27C52B6838A35B ON devis');
        $this->addSql('ALTER TABLE devis DROP devis_client_id');
        $this->addSql('ALTER TABLE service DROP type');
    }
}
