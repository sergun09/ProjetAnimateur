<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220210153039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite_user (activite_id INTEGER NOT NULL, user_id INTEGER NOT NULL, PRIMARY KEY(activite_id, user_id))');
        $this->addSql('CREATE INDEX IDX_FA43CF3B9B0F88B1 ON activite_user (activite_id)');
        $this->addSql('CREATE INDEX IDX_FA43CF3BA76ED395 ON activite_user (user_id)');
        $this->addSql('DROP INDEX IDX_B8755515A76ED395');
        $this->addSql('CREATE TEMPORARY TABLE __temp__activite AS SELECT id, user_id, nom, description FROM activite');
        $this->addSql('DROP TABLE activite');
        $this->addSql('CREATE TABLE activite (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, nom VARCHAR(255) NOT NULL, description CLOB NOT NULL, CONSTRAINT FK_B8755515A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO activite (id, user_id, nom, description) SELECT id, user_id, nom, description FROM __temp__activite');
        $this->addSql('DROP TABLE __temp__activite');
        $this->addSql('CREATE INDEX IDX_B8755515A76ED395 ON activite (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activite_user');
        $this->addSql('DROP INDEX IDX_B8755515A76ED395');
        $this->addSql('CREATE TEMPORARY TABLE __temp__activite AS SELECT id, user_id, nom, description FROM activite');
        $this->addSql('DROP TABLE activite');
        $this->addSql('CREATE TABLE activite (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, nom VARCHAR(255) NOT NULL, description CLOB NOT NULL)');
        $this->addSql('INSERT INTO activite (id, user_id, nom, description) SELECT id, user_id, nom, description FROM __temp__activite');
        $this->addSql('DROP TABLE __temp__activite');
        $this->addSql('CREATE INDEX IDX_B8755515A76ED395 ON activite (user_id)');
    }
}
