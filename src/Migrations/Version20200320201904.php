<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320201904 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE datas (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, titre_professionnel VARCHAR(255) NOT NULL, adresse_postal VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, telephone INT NOT NULL, email VARCHAR(255) NOT NULL, intitule_de_post VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, date_de_debut DATE NOT NULL, employeur VARCHAR(255) NOT NULL, departement VARCHAR(255) NOT NULL, travail_actuellement VARCHAR(255) NOT NULL, description_responsabilite LONGTEXT NOT NULL, etablissement VARCHAR(255) NOT NULL, diplome VARCHAR(255) NOT NULL, domaine_detude VARCHAR(255) NOT NULL, competence LONGTEXT NOT NULL, profil_professionnel LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE datas');
    }
}
