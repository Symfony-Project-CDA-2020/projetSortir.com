<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200918085231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, campus_id INT NOT NULL, num_event INT NOT NULL, name VARCHAR(30) NOT NULL, start_date DATE NOT NULL, duration INT DEFAULT NULL, end_date DATE NOT NULL, max_registrations INT NOT NULL, description TEXT DEFAULT NULL, event_state INT DEFAULT NULL, url_photo VARCHAR(250) DEFAULT NULL, organizer INT NOT NULL, location_num_location INT NOT NULL, state_num_state INT NOT NULL, INDEX IDX_3BAE0AA7AF5D55E1 (campus_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7AF5D55E1 FOREIGN KEY (campus_id) REFERENCES campus (id)');
        $this->addSql('ALTER TABLE campus CHANGE no_campus num_campus INT NOT NULL, CHANGE nom_campus name_campus VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE event');
        $this->addSql('ALTER TABLE campus CHANGE num_campus no_campus INT NOT NULL, CHANGE name_campus nom_campus VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
