<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231102144527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE prochains_evenements');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD31683DA5256D');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD31683DA5256D FOREIGN KEY (image_id) REFERENCES media_object (id)');
        $this->addSql('ALTER TABLE media_object ADD image_id INT DEFAULT NULL, ADD filename VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE media_object ADD CONSTRAINT FK_14D431323DA5256D FOREIGN KEY (image_id) REFERENCES media_object (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_14D431323DA5256D ON media_object (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prochains_evenements (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, paragraph VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE media_object DROP FOREIGN KEY FK_14D431323DA5256D');
        $this->addSql('DROP INDEX UNIQ_14D431323DA5256D ON media_object');
        $this->addSql('ALTER TABLE media_object DROP image_id, DROP filename');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD31683DA5256D');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD31683DA5256D FOREIGN KEY (image_id) REFERENCES media_object (id) ON DELETE CASCADE');
    }
}
