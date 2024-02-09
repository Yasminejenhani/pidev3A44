<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209214730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contract_life (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_property (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_vehicle (id INT NOT NULL, immatriculation VARCHAR(255) NOT NULL, fiscal_power VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contract_life ADD CONSTRAINT FK_71B87096BF396750 FOREIGN KEY (id) REFERENCES contract (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contract_property ADD CONSTRAINT FK_1E450721BF396750 FOREIGN KEY (id) REFERENCES contract (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contract_vehicle ADD CONSTRAINT FK_13D1994EBF396750 FOREIGN KEY (id) REFERENCES contract (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contract ADD contract_user_id INT DEFAULT NULL, CHANGE type type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859AF3FAE5D FOREIGN KEY (contract_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E98F2859AF3FAE5D ON contract (contract_user_id)');
        $this->addSql('ALTER TABLE insurance_request ADD request_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE insurance_request ADD CONSTRAINT FK_D6B6AA3A8D4AA1C2 FOREIGN KEY (request_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D6B6AA3A8D4AA1C2 ON insurance_request (request_user_id)');
        $this->addSql('ALTER TABLE reclamation ADD reclamation_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640476440D04 FOREIGN KEY (reclamation_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CE60640476440D04 ON reclamation (reclamation_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contract_life DROP FOREIGN KEY FK_71B87096BF396750');
        $this->addSql('ALTER TABLE contract_property DROP FOREIGN KEY FK_1E450721BF396750');
        $this->addSql('ALTER TABLE contract_vehicle DROP FOREIGN KEY FK_13D1994EBF396750');
        $this->addSql('DROP TABLE contract_life');
        $this->addSql('DROP TABLE contract_property');
        $this->addSql('DROP TABLE contract_vehicle');
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859AF3FAE5D');
        $this->addSql('DROP INDEX IDX_E98F2859AF3FAE5D ON contract');
        $this->addSql('ALTER TABLE contract DROP contract_user_id, CHANGE type type VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE insurance_request DROP FOREIGN KEY FK_D6B6AA3A8D4AA1C2');
        $this->addSql('DROP INDEX IDX_D6B6AA3A8D4AA1C2 ON insurance_request');
        $this->addSql('ALTER TABLE insurance_request DROP request_user_id');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640476440D04');
        $this->addSql('DROP INDEX IDX_CE60640476440D04 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP reclamation_user_id');
    }
}
