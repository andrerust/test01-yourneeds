<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180802122551 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, document_type_id INT DEFAULT NULL, company_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, public_name VARCHAR(255) DEFAULT NULL, note TEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_D8698A7661232A4F (document_type_id), INDEX IDX_D8698A76979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document_type (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE achievement (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, achievement_type VARCHAR(128) NOT NULL, main_image VARCHAR(255) NOT NULL, main_text TEXT NOT NULL, is_active TINYINT(1) NOT NULL, active_from DATETIME NOT NULL, active_until DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, short_description VARCHAR(512) DEFAULT NULL, context VARCHAR(256) DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, company_id INT DEFAULT NULL, city_id INT DEFAULT NULL, country_id INT DEFAULT NULL, additional_info VARCHAR(255) DEFAULT NULL, street VARCHAR(255) NOT NULL, street_number VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, type INT NOT NULL, is_active TINYINT(1) NOT NULL, is_blocked TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_D4E6F81A76ED395 (user_id), INDEX IDX_D4E6F81979B1AD6 (company_id), INDEX IDX_D4E6F818BAC62AF (city_id), INDEX IDX_D4E6F81F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bank_account (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, country_id INT DEFAULT NULL, iban VARCHAR(255) NOT NULL, bic VARCHAR(255) NOT NULL, bank VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_blocked TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_53A23E0AA76ED395 (user_id), INDEX IDX_53A23E0AF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_default TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_default TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_default TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_group (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, is_default TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_title (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_default TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_title_id INT DEFAULT NULL, family_status_id INT DEFAULT NULL, job_group_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, user_name VARCHAR(255) NOT NULL, phone_number VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, gender INT NOT NULL, birthdate VARCHAR(255) DEFAULT NULL, employer VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, plain_password VARCHAR(255) NOT NULL, coins VARCHAR(255) DEFAULT NULL, note TEXT DEFAULT NULL, profile_picture VARCHAR(255) DEFAULT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json_array)\', is_active TINYINT(1) NOT NULL, is_blocked TINYINT(1) NOT NULL, terms_accepted TINYINT(1) DEFAULT NULL, terms_accepted_update DATETIME NOT NULL, receive_newsletter TINYINT(1) NOT NULL, receive_newsletter_update DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D64924A232CF (user_name), UNIQUE INDEX UNIQ_8D93D6496B01BC5B (phone_number), INDEX IDX_8D93D649EA1263BD (user_title_id), INDEX IDX_8D93D649A2399AD0 (family_status_id), INDEX IDX_8D93D64999137C3C (job_group_id), INDEX search_id_email_username (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_achievement (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, achievement_id INT DEFAULT NULL, won_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_3F68B664A76ED395 (user_id), INDEX IDX_3F68B664B3EC99FE (achievement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_activity (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, activity_id INT NOT NULL, context INT DEFAULT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_4CF9ED5AA76ED395 (user_id), INDEX IDX_4CF9ED5A81C06096 (activity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_security_log (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_7E90166BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, public_name VARCHAR(255) DEFAULT NULL, department VARCHAR(255) DEFAULT NULL, contact_person VARCHAR(255) DEFAULT NULL, contact_phone_number VARCHAR(255) DEFAULT NULL, contact_fax_number VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, note TEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE damage (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type VARCHAR(255) NOT NULL, sub_type VARCHAR(255) DEFAULT NULL, context VARCHAR(255) DEFAULT NULL, json LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_11C8546CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structure (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type VARCHAR(255) NOT NULL, sub_type VARCHAR(255) DEFAULT NULL, context VARCHAR(255) DEFAULT NULL, json LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_6F0137EAA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE target_group (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, identifier LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tariff (id INT AUTO_INCREMENT NOT NULL, tariff_type_id INT DEFAULT NULL, company_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, slug VARCHAR(255) NOT NULL, note TEXT DEFAULT NULL, method_of_payment VARCHAR(255) DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_9465207D989D9B62 (slug), INDEX IDX_9465207D3553CF0A (tariff_type_id), INDEX IDX_9465207D979B1AD6 (company_id), INDEX search_id_title (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tariff_private_liability (id INT NOT NULL, amount_covered_body_injury VARCHAR(255) DEFAULT NULL, amount_covered_material_damage VARCHAR(255) DEFAULT NULL, amount_covered_financial_damage VARCHAR(255) DEFAULT NULL, amount_covered_jung_kids VARCHAR(255) DEFAULT NULL, include_internship VARCHAR(255) DEFAULT NULL, bad_dept_loss VARCHAR(255) NOT NULL, data_exchange VARCHAR(255) NOT NULL, own_residential_home_living_in VARCHAR(255) DEFAULT NULL, own_residential_home_rental_others VARCHAR(255) DEFAULT NULL, undeveloped_properties VARCHAR(255) DEFAULT NULL, rented_properties_abroad VARCHAR(255) DEFAULT NULL, water_damage_liability_above_ground VARCHAR(255) DEFAULT NULL, water_damage_liability_underground VARCHAR(255) DEFAULT NULL, take_care_of_dogs VARCHAR(255) DEFAULT NULL, ebikes VARCHAR(255) DEFAULT NULL, horses_and_wagons VARCHAR(255) DEFAULT NULL, gradual_damage VARCHAR(255) DEFAULT NULL, acts_of_kindness VARCHAR(255) DEFAULT NULL, damage_to_movables VARCHAR(255) DEFAULT NULL, loss_of_private_keys VARCHAR(255) DEFAULT NULL, loss_of_job_keys VARCHAR(255) DEFAULT NULL, with_parent_living_in_house VARCHAR(255) DEFAULT NULL, voluntary_work VARCHAR(255) DEFAULT NULL, childminder_non_commercial VARCHAR(255) DEFAULT NULL, discount_balancing VARCHAR(255) DEFAULT NULL, renovations VARCHAR(255) DEFAULT NULL, surfboards VARCHAR(255) DEFAULT NULL, conditionl_update VARCHAR(255) DEFAULT NULL, tariff_individual_specials VARCHAR(255) DEFAULT NULL, run_time VARCHAR(255) DEFAULT NULL, retention VARCHAR(255) DEFAULT NULL, number_of_previous_cases VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tariff_rate (id INT AUTO_INCREMENT NOT NULL, target_group_id INT DEFAULT NULL, tariff_id INT DEFAULT NULL, amount_of_coverage VARCHAR(8) DEFAULT NULL, age_from INT DEFAULT NULL, age_until INT DEFAULT NULL, rate NUMERIC(10, 0) DEFAULT NULL, rate_interval VARCHAR(2) DEFAULT NULL, retention_value INT DEFAULT NULL, discount_value INT DEFAULT NULL, discount_name LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_788882B724FF092E (target_group_id), INDEX IDX_788882B792348FD2 (tariff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tariff_target_group (id INT AUTO_INCREMENT NOT NULL, tariff_id INT DEFAULT NULL, target_group_id INT DEFAULT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_871A688B92348FD2 (tariff_id), INDEX IDX_871A688B24FF092E (target_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tariff_type (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, short_name LONGTEXT NOT NULL, identifier LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_tariff (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, tariff_rate_id INT DEFAULT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_F1373B40A76ED395 (user_id), INDEX IDX_F1373B404C86DC06 (tariff_rate_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7661232A4F FOREIGN KEY (document_type_id) REFERENCES document_type (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F81A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F81979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F818BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F81F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE bank_account ADD CONSTRAINT FK_53A23E0AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE bank_account ADD CONSTRAINT FK_53A23E0AF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649EA1263BD FOREIGN KEY (user_title_id) REFERENCES user_title (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A2399AD0 FOREIGN KEY (family_status_id) REFERENCES family_status (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64999137C3C FOREIGN KEY (job_group_id) REFERENCES job_group (id)');
        $this->addSql('ALTER TABLE user_achievement ADD CONSTRAINT FK_3F68B664A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_achievement ADD CONSTRAINT FK_3F68B664B3EC99FE FOREIGN KEY (achievement_id) REFERENCES achievement (id)');
        $this->addSql('ALTER TABLE user_activity ADD CONSTRAINT FK_4CF9ED5AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_activity ADD CONSTRAINT FK_4CF9ED5A81C06096 FOREIGN KEY (activity_id) REFERENCES activity (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_security_log ADD CONSTRAINT FK_7E90166BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE damage ADD CONSTRAINT FK_11C8546CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE structure ADD CONSTRAINT FK_6F0137EAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tariff ADD CONSTRAINT FK_9465207D3553CF0A FOREIGN KEY (tariff_type_id) REFERENCES tariff_type (id)');
        $this->addSql('ALTER TABLE tariff ADD CONSTRAINT FK_9465207D979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE tariff_private_liability ADD CONSTRAINT FK_88DD20F9BF396750 FOREIGN KEY (id) REFERENCES tariff (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tariff_rate ADD CONSTRAINT FK_788882B724FF092E FOREIGN KEY (target_group_id) REFERENCES target_group (id)');
        $this->addSql('ALTER TABLE tariff_rate ADD CONSTRAINT FK_788882B792348FD2 FOREIGN KEY (tariff_id) REFERENCES tariff (id)');
        $this->addSql('ALTER TABLE tariff_target_group ADD CONSTRAINT FK_871A688B92348FD2 FOREIGN KEY (tariff_id) REFERENCES tariff (id)');
        $this->addSql('ALTER TABLE tariff_target_group ADD CONSTRAINT FK_871A688B24FF092E FOREIGN KEY (target_group_id) REFERENCES target_group (id)');
        $this->addSql('ALTER TABLE user_tariff ADD CONSTRAINT FK_F1373B40A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_tariff ADD CONSTRAINT FK_F1373B404C86DC06 FOREIGN KEY (tariff_rate_id) REFERENCES tariff_rate (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7661232A4F');
        $this->addSql('ALTER TABLE user_achievement DROP FOREIGN KEY FK_3F68B664B3EC99FE');
        $this->addSql('ALTER TABLE user_activity DROP FOREIGN KEY FK_4CF9ED5A81C06096');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F818BAC62AF');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F81F92F3E70');
        $this->addSql('ALTER TABLE bank_account DROP FOREIGN KEY FK_53A23E0AF92F3E70');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A2399AD0');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64999137C3C');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649EA1263BD');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F81A76ED395');
        $this->addSql('ALTER TABLE bank_account DROP FOREIGN KEY FK_53A23E0AA76ED395');
        $this->addSql('ALTER TABLE user_achievement DROP FOREIGN KEY FK_3F68B664A76ED395');
        $this->addSql('ALTER TABLE user_activity DROP FOREIGN KEY FK_4CF9ED5AA76ED395');
        $this->addSql('ALTER TABLE user_security_log DROP FOREIGN KEY FK_7E90166BA76ED395');
        $this->addSql('ALTER TABLE damage DROP FOREIGN KEY FK_11C8546CA76ED395');
        $this->addSql('ALTER TABLE structure DROP FOREIGN KEY FK_6F0137EAA76ED395');
        $this->addSql('ALTER TABLE user_tariff DROP FOREIGN KEY FK_F1373B40A76ED395');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76979B1AD6');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F81979B1AD6');
        $this->addSql('ALTER TABLE tariff DROP FOREIGN KEY FK_9465207D979B1AD6');
        $this->addSql('ALTER TABLE tariff_rate DROP FOREIGN KEY FK_788882B724FF092E');
        $this->addSql('ALTER TABLE tariff_target_group DROP FOREIGN KEY FK_871A688B24FF092E');
        $this->addSql('ALTER TABLE tariff_private_liability DROP FOREIGN KEY FK_88DD20F9BF396750');
        $this->addSql('ALTER TABLE tariff_rate DROP FOREIGN KEY FK_788882B792348FD2');
        $this->addSql('ALTER TABLE tariff_target_group DROP FOREIGN KEY FK_871A688B92348FD2');
        $this->addSql('ALTER TABLE user_tariff DROP FOREIGN KEY FK_F1373B404C86DC06');
        $this->addSql('ALTER TABLE tariff DROP FOREIGN KEY FK_9465207D3553CF0A');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE document_type');
        $this->addSql('DROP TABLE achievement');
        $this->addSql('DROP TABLE activity');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE bank_account');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE family_status');
        $this->addSql('DROP TABLE job_group');
        $this->addSql('DROP TABLE user_title');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_achievement');
        $this->addSql('DROP TABLE user_activity');
        $this->addSql('DROP TABLE user_security_log');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE damage');
        $this->addSql('DROP TABLE structure');
        $this->addSql('DROP TABLE target_group');
        $this->addSql('DROP TABLE tariff');
        $this->addSql('DROP TABLE tariff_private_liability');
        $this->addSql('DROP TABLE tariff_rate');
        $this->addSql('DROP TABLE tariff_target_group');
        $this->addSql('DROP TABLE tariff_type');
        $this->addSql('DROP TABLE user_tariff');
    }
}
