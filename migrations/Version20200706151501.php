<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200706151501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event_day_of_week (event_id INT NOT NULL, day_of_week_id INT NOT NULL, INDEX IDX_AD2E42F171F7E88B (event_id), INDEX IDX_AD2E42F1139A4A41 (day_of_week_id), PRIMARY KEY(event_id, day_of_week_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event_day_of_week ADD CONSTRAINT FK_AD2E42F171F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_day_of_week ADD CONSTRAINT FK_AD2E42F1139A4A41 FOREIGN KEY (day_of_week_id) REFERENCES day_of_week (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE event_day_of_week');
    }
}
