<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240112171239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F398260155');
        $this->addSql('DROP INDEX IDX_62DC90F398260155 ON pokemon');
        $this->addSql('ALTER TABLE pokemon CHANGE region_id region INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F3F62F176 FOREIGN KEY (region) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_62DC90F3F62F176 ON pokemon (region)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F3F62F176');
        $this->addSql('DROP INDEX IDX_62DC90F3F62F176 ON pokemon');
        $this->addSql('ALTER TABLE pokemon CHANGE region region_id INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F398260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_62DC90F398260155 ON pokemon (region_id)');
    }
}
