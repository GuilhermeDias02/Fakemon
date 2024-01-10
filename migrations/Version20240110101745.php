<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110101745 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pc_box ADD id_trainer_id INT DEFAULT NULL, ADD id_pokemon_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pc_box ADD CONSTRAINT FK_F42F235E826D21 FOREIGN KEY (id_trainer_id) REFERENCES trainer (id)');
        $this->addSql('ALTER TABLE pc_box ADD CONSTRAINT FK_F42F238A6D9CE9 FOREIGN KEY (id_pokemon_id) REFERENCES pokemon (id)');
        $this->addSql('CREATE INDEX IDX_F42F235E826D21 ON pc_box (id_trainer_id)');
        $this->addSql('CREATE INDEX IDX_F42F238A6D9CE9 ON pc_box (id_pokemon_id)');
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F3F48633E1');
        $this->addSql('DROP INDEX IDX_62DC90F3F48633E1 ON pokemon');
        $this->addSql('ALTER TABLE pokemon DROP pc_box_id');
        $this->addSql('ALTER TABLE trainer DROP FOREIGN KEY FK_C5150820F48633E1');
        $this->addSql('DROP INDEX IDX_C5150820F48633E1 ON trainer');
        $this->addSql('ALTER TABLE trainer DROP pc_box_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pc_box DROP FOREIGN KEY FK_F42F235E826D21');
        $this->addSql('ALTER TABLE pc_box DROP FOREIGN KEY FK_F42F238A6D9CE9');
        $this->addSql('DROP INDEX IDX_F42F235E826D21 ON pc_box');
        $this->addSql('DROP INDEX IDX_F42F238A6D9CE9 ON pc_box');
        $this->addSql('ALTER TABLE pc_box DROP id_trainer_id, DROP id_pokemon_id');
        $this->addSql('ALTER TABLE pokemon ADD pc_box_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F3F48633E1 FOREIGN KEY (pc_box_id) REFERENCES pc_box (id)');
        $this->addSql('CREATE INDEX IDX_62DC90F3F48633E1 ON pokemon (pc_box_id)');
        $this->addSql('ALTER TABLE trainer ADD pc_box_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trainer ADD CONSTRAINT FK_C5150820F48633E1 FOREIGN KEY (pc_box_id) REFERENCES pc_box (id)');
        $this->addSql('CREATE INDEX IDX_C5150820F48633E1 ON trainer (pc_box_id)');
    }
}
