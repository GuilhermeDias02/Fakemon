<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231206144438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pc_box (id INT AUTO_INCREMENT NOT NULL, level INT DEFAULT NULL, captured TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pokemon (id INT AUTO_INCREMENT NOT NULL, pc_box_id INT DEFAULT NULL, id_pokedex INT NOT NULL, name VARCHAR(30) NOT NULL, description LONGTEXT DEFAULT NULL, type_first VARCHAR(30) NOT NULL, type_second VARCHAR(30) DEFAULT NULL, sprite_path VARCHAR(30) DEFAULT NULL, INDEX IDX_62DC90F3F48633E1 (pc_box_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trainer (id INT AUTO_INCREMENT NOT NULL, pc_box_id INT DEFAULT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C5150820F85E0677 (username), INDEX IDX_C5150820F48633E1 (pc_box_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F3F48633E1 FOREIGN KEY (pc_box_id) REFERENCES pc_box (id)');
        $this->addSql('ALTER TABLE trainer ADD CONSTRAINT FK_C5150820F48633E1 FOREIGN KEY (pc_box_id) REFERENCES pc_box (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F3F48633E1');
        $this->addSql('ALTER TABLE trainer DROP FOREIGN KEY FK_C5150820F48633E1');
        $this->addSql('DROP TABLE pc_box');
        $this->addSql('DROP TABLE pokemon');
        $this->addSql('DROP TABLE trainer');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
