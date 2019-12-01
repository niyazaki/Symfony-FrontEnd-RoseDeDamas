<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191127023101 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredient_sweets (ingredient_id INT NOT NULL, sweets_id INT NOT NULL, INDEX IDX_5B47B0DC933FE08C (ingredient_id), INDEX IDX_5B47B0DCE4DDDBC3 (sweets_id), PRIMARY KEY(ingredient_id, sweets_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ingredient_sweets ADD CONSTRAINT FK_5B47B0DC933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ingredient_sweets ADD CONSTRAINT FK_5B47B0DCE4DDDBC3 FOREIGN KEY (sweets_id) REFERENCES sweets (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sweets DROP ingredients');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ingredient_sweets DROP FOREIGN KEY FK_5B47B0DC933FE08C');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE ingredient_sweets');
        $this->addSql('ALTER TABLE sweets ADD ingredients VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
