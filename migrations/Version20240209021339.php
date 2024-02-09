<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209021339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sinister_life DROP date_sinister, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE sinister_life ADD CONSTRAINT FK_6E7B84DFBF396750 FOREIGN KEY (id) REFERENCES sinister (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sinister_property CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE sinister_property ADD CONSTRAINT FK_274B42E2BF396750 FOREIGN KEY (id) REFERENCES sinister (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sinister_vehicle DROP date_sinister, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE sinister_vehicle ADD CONSTRAINT FK_1E2798ADBF396750 FOREIGN KEY (id) REFERENCES sinister (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sinister_life DROP FOREIGN KEY FK_6E7B84DFBF396750');
        $this->addSql('ALTER TABLE sinister_life ADD date_sinister DATE NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE sinister_property DROP FOREIGN KEY FK_274B42E2BF396750');
        $this->addSql('ALTER TABLE sinister_property CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE sinister_vehicle DROP FOREIGN KEY FK_1E2798ADBF396750');
        $this->addSql('ALTER TABLE sinister_vehicle ADD date_sinister DATE NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}
