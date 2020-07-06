<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200706151107 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE day_of_week (id INT AUTO_INCREMENT NOT NULL, day VARCHAR(255) NOT NULL, day_index INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Sunday", 0)');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Monday", 1)');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Tuesday", 2)');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Wendesday", 3)');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Thursday", 4)');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Friday", 5)');
        $this->addSql('INSERT INTO day_of_week (day, day_index) VALUES ("Saturday", 6)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE day_of_week');
    }
}
