<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200908092132 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fichier_fichier DROP FOREIGN KEY FK_40E5A9286E5ACED6');
        $this->addSql('ALTER TABLE fichier_fichier DROP FOREIGN KEY FK_40E5A92877BF9E59');
        $this->addSql('DROP TABLE fichier');
        $this->addSql('DROP TABLE fichier_fichier');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fichier (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, extension VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, taille DOUBLE PRECISION NOT NULL, INDEX IDX_9B76551FFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fichier_fichier (fichier_source INT NOT NULL, fichier_target INT NOT NULL, INDEX IDX_40E5A92877BF9E59 (fichier_source), INDEX IDX_40E5A9286E5ACED6 (fichier_target), PRIMARY KEY(fichier_source, fichier_target)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE fichier ADD CONSTRAINT FK_9B76551FFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE fichier_fichier ADD CONSTRAINT FK_40E5A9286E5ACED6 FOREIGN KEY (fichier_target) REFERENCES fichier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fichier_fichier ADD CONSTRAINT FK_40E5A92877BF9E59 FOREIGN KEY (fichier_source) REFERENCES fichier (id) ON DELETE CASCADE');
    }
}
