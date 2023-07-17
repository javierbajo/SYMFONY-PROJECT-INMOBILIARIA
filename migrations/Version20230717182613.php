<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717182613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vivienda ADD localidad_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vivienda ADD CONSTRAINT FK_2DFFABDE67707C89 FOREIGN KEY (localidad_id) REFERENCES localidad (id)');
        $this->addSql('CREATE INDEX IDX_2DFFABDE67707C89 ON vivienda (localidad_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vivienda DROP FOREIGN KEY FK_2DFFABDE67707C89');
        $this->addSql('DROP INDEX IDX_2DFFABDE67707C89 ON vivienda');
        $this->addSql('ALTER TABLE vivienda DROP localidad_id');
    }
}
