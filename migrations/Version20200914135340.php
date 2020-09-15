<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200914135340 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sorties (id INT AUTO_INCREMENT NOT NULL, no_sortie INT NOT NULL, nom VARCHAR(30) NOT NULL, datedebut DATE NOT NULL, duree INT DEFAULT NULL, datecloture DATE NOT NULL, nbinscriptionsmax INT NOT NULL, descriptioninfos TEXT DEFAULT NULL, etatsortie INT DEFAULT NULL, url_photo VARCHAR(250) DEFAULT NULL, organisateur INT NOT NULL, lieux_no_lieu INT NOT NULL, etats_no_etat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sorties');
    }
}
