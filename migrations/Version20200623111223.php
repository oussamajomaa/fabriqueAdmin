<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623111223 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C9139DF194');
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C9C5697D6D');
        $this->addSql('DROP INDEX IDX_765AE0C9139DF194 ON absence');
        $this->addSql('DROP INDEX IDX_765AE0C9C5697D6D ON absence');
        $this->addSql('ALTER TABLE absence DROP apprenant_id, DROP promotion_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absence ADD apprenant_id INT DEFAULT NULL, ADD promotion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C9139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C9C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('CREATE INDEX IDX_765AE0C9139DF194 ON absence (promotion_id)');
        $this->addSql('CREATE INDEX IDX_765AE0C9C5697D6D ON absence (apprenant_id)');
    }
}
