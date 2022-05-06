<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506132104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, photo VARCHAR(100) NOT NULL, nom VARCHAR(50) NOT NULL, statut VARCHAR(50) NOT NULL)');
        $this->addSql('CREATE TABLE partenariat (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, logo VARCHAR(100) NOT NULL, description CLOB NOT NULL, url VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE projet (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, photo VARCHAR(100) NOT NULL, date DATETIME DEFAULT NULL, description CLOB NOT NULL, texte CLOB NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE partenariat');
        $this->addSql('DROP TABLE projet');
    }
}
