<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019085808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles ADD filepath_id INT DEFAULT NULL, DROP filepath');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD316898489757 FOREIGN KEY (filepath_id) REFERENCES media_object (id)');
        $this->addSql('CREATE INDEX IDX_BFDD316898489757 ON articles (filepath_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD316898489757');
        $this->addSql('DROP INDEX IDX_BFDD316898489757 ON articles');
        $this->addSql('ALTER TABLE articles ADD filepath VARCHAR(255) DEFAULT NULL, DROP filepath_id');
    }
}
