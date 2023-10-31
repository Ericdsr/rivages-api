<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019073243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168820AEF50');
        $this->addSql('DROP INDEX IDX_BFDD3168820AEF50 ON articles');
        $this->addSql('ALTER TABLE articles CHANGE file_path_id file_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD316893CB796C FOREIGN KEY (file_id) REFERENCES media_object (id)');
        $this->addSql('CREATE INDEX IDX_BFDD316893CB796C ON articles (file_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD316893CB796C');
        $this->addSql('DROP INDEX IDX_BFDD316893CB796C ON articles');
        $this->addSql('ALTER TABLE articles CHANGE file_id file_path_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168820AEF50 FOREIGN KEY (file_path_id) REFERENCES media_object (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_BFDD3168820AEF50 ON articles (file_path_id)');
    }
}
