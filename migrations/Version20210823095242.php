<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210823095242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, year DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `from` (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mobile (id INT AUTO_INCREMENT NOT NULL, brand_id INT DEFAULT NULL, mobile_from_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, info LONGTEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, price INT DEFAULT NULL, amount INT DEFAULT NULL, reviews INT DEFAULT NULL, rate INT DEFAULT NULL, INDEX IDX_3C7323E044F5D008 (brand_id), INDEX IDX_3C7323E0986414FE (mobile_from_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mobile_from (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mobile ADD CONSTRAINT FK_3C7323E044F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE mobile ADD CONSTRAINT FK_3C7323E0986414FE FOREIGN KEY (mobile_from_id) REFERENCES mobile_from (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mobile DROP FOREIGN KEY FK_3C7323E044F5D008');
        $this->addSql('ALTER TABLE mobile DROP FOREIGN KEY FK_3C7323E0986414FE');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP TABLE `from`');
        $this->addSql('DROP TABLE mobile');
        $this->addSql('DROP TABLE mobile_from');
    }
}
