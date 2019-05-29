<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190524135006 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, cover VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, related_member_id INT NOT NULL, status VARCHAR(20) NOT NULL, date_created DATETIME NOT NULL, date_updated DATETIME DEFAULT NULL, title VARCHAR(100) NOT NULL, content LONGTEXT NOT NULL, cover VARCHAR(255) DEFAULT NULL, excerpt VARCHAR(255) DEFAULT NULL, comments_open TINYINT(1) NOT NULL, comment_count INT DEFAULT NULL, INDEX IDX_5A8A6C8DDD568FE5 (related_member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(20) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, role INT NOT NULL, description LONGTEXT DEFAULT NULL, about LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE form_entry (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(128) NOT NULL, last_name VARCHAR(128) NOT NULL, email VARCHAR(128) NOT NULL, subject VARCHAR(255) DEFAULT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, related_post_id INT NOT NULL, related_member_id INT DEFAULT NULL, content LONGTEXT NOT NULL, author VARCHAR(128) NOT NULL, author_email VARCHAR(128) DEFAULT NULL, INDEX IDX_9474526C7490C989 (related_post_id), INDEX IDX_9474526CDD568FE5 (related_member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DDD568FE5 FOREIGN KEY (related_member_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C7490C989 FOREIGN KEY (related_post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CDD568FE5 FOREIGN KEY (related_member_id) REFERENCES member (id)');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE form_entries');
        $this->addSql('DROP TABLE members');
        $this->addSql('DROP TABLE posts');
        $this->addSql('DROP TABLE tags');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C7490C989');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DDD568FE5');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CDD568FE5');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, cover VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, related_post_id INT NOT NULL, related_member_id INT DEFAULT NULL, content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, author VARCHAR(128) NOT NULL COLLATE utf8mb4_unicode_ci, author_email VARCHAR(128) DEFAULT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_9474526CDD568FE5 (related_member_id), INDEX IDX_9474526C7490C989 (related_post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE form_entries (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(128) NOT NULL COLLATE utf8mb4_unicode_ci, last_name VARCHAR(128) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(128) NOT NULL COLLATE utf8mb4_unicode_ci, subject VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, message LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, password VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, avatar VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, role INT NOT NULL, description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, about LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, related_member_id INT NOT NULL, status VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, date_created DATETIME NOT NULL, date_updated DATETIME DEFAULT NULL, title VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, cover VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, excerpt VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, comments_open TINYINT(1) NOT NULL, comment_count INT DEFAULT NULL, INDEX IDX_5A8A6C8DDD568FE5 (related_member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(25) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE form_entry');
        $this->addSql('DROP TABLE comment');
    }
}
