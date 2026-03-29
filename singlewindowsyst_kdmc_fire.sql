-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2026 at 04:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdmc_fire`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_reject`
--

CREATE TABLE `accept_reject` (
  `id` int(11) NOT NULL,
  `rec_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `db_name` varchar(255) NOT NULL,
  `is_survey_needed` varchar(255) NOT NULL,
  `sendbackto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_mapping`
--

CREATE TABLE `application_mapping` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `rec_id` varchar(255) NOT NULL,
  `appl_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_prefix`
--

CREATE TABLE `application_prefix` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `prefix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authorization_sequence`
--

CREATE TABLE `authorization_sequence` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `can_reject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authorization_sequence`
--

INSERT INTO `authorization_sequence` (`id`, `user_id`, `stage`, `zone`, `db_name`, `can_reject`) VALUES
(1, '4', '1', '', 'fire_final_noc_renewal', 'YES'),
(2, '165', '1', '', 'fire_final_noc', 'YES'),
(3, '4', '1', '', 'fire_final_part_noc', 'YES'),
(4, '4', '1', '', 'fire_noc_revised_provisional', 'YES'),
(5, '165', '1', '', 'fire_noc_provisional_new', 'YES'),
(6, '4', '1', '', 'fire_noc_establishment', 'YES'),
(7, '5', '2', '1', 'fire_final_noc_renewal', 'YES'),
(8, '9', '2', '2', 'fire_final_noc_renewal', 'YES'),
(9, '10', '2', '3', 'fire_final_noc_renewal', 'YES'),
(10, '11', '2', '4', 'fire_final_noc_renewal', 'YES'),
(11, '12', '2', '5', 'fire_final_noc_renewal', 'YES'),
(12, '13', '2', '6', 'fire_final_noc_renewal', 'YES'),
(13, '14', '2', '7', 'fire_final_noc_renewal', 'YES'),
(14, '15', '2', '8', 'fire_final_noc_renewal', 'YES'),
(15, '16', '2', '9', 'fire_final_noc_renewal', 'YES'),
(16, '163', '2', '', 'fire_final_noc', 'YES'),
(17, '164', '2', '', 'fire_final_noc', 'YES'),
(25, '5', '2', '1', 'fire_final_part_noc', 'YES'),
(26, '9', '2', '2', 'fire_final_part_noc', 'YES'),
(27, '10', '2', '3', 'fire_final_part_noc', 'YES'),
(28, '11', '2', '4', 'fire_final_part_noc', 'YES'),
(29, '12', '2', '5', 'fire_final_part_noc', 'YES'),
(30, '13', '2', '6', 'fire_final_part_noc', 'YES'),
(31, '14', '2', '7', 'fire_final_part_noc', 'YES'),
(32, '15', '2', '8', 'fire_final_part_noc', 'YES'),
(33, '16', '2', '9', 'fire_final_part_noc', 'YES'),
(34, '5', '2', '1', 'fire_noc_revised_provisional', 'YES'),
(35, '9', '2', '2', 'fire_noc_revised_provisional', 'YES'),
(36, '10', '2', '3', 'fire_noc_revised_provisional', 'YES'),
(37, '11', '2', '4', 'fire_noc_revised_provisional', 'YES'),
(38, '12', '2', '5', 'fire_noc_revised_provisional', 'YES'),
(39, '13', '2', '6', 'fire_noc_revised_provisional', 'YES'),
(40, '14', '2', '7', 'fire_noc_revised_provisional', 'YES'),
(41, '15', '2', '8', 'fire_noc_revised_provisional', 'YES'),
(42, '16', '2', '9', 'fire_noc_revised_provisional', 'YES'),
(43, '163', '2', '', 'fire_noc_provisional_new', 'YES'),
(52, '5', '2', '1', 'fire_noc_establishment', 'YES'),
(53, '9', '2', '2', 'fire_noc_establishment', 'YES'),
(54, '10', '2', '3', 'fire_noc_establishment', 'YES'),
(55, '11', '2', '4', 'fire_noc_establishment', 'YES'),
(56, '12', '2', '5', 'fire_noc_establishment', 'YES'),
(57, '13', '2', '6', 'fire_noc_establishment', 'YES'),
(58, '14', '2', '7', 'fire_noc_establishment', 'YES'),
(59, '15', '2', '8', 'fire_noc_establishment', 'YES'),
(60, '16', '2', '9', 'fire_noc_establishment', 'YES'),
(169, '6', '3', '', 'fire_final_noc_renewal', 'YES'),
(170, '162', '3', '', 'fire_final_noc', 'YES'),
(171, '6', '3', '', 'fire_final_part_noc', 'YES'),
(172, '6', '3', '', 'fire_noc_revised_provisional', 'YES'),
(173, '162', '3', '', 'fire_noc_provisional_new', 'YES'),
(174, '6', '3', '', 'fire_noc_establishment', 'YES'),
(175, '7', '4', '', 'fire_final_noc_renewal', 'YES'),
(177, '7', '4', '', 'fire_final_part_noc', 'YES'),
(178, '7', '4', '', 'fire_noc_revised_provisional', 'YES'),
(180, '7', '4', '', 'fire_noc_establishment', 'YES'),
(181, '164', '2', '', 'fire_noc_provisional_new', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `bhuilding_details_for_fire_noc`
--

CREATE TABLE `bhuilding_details_for_fire_noc` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `establishment_name` varchar(255) NOT NULL,
  `establishment_address` varchar(255) NOT NULL,
  `name_of_building` varchar(255) NOT NULL,
  `number_of_wing_in_building` varchar(255) NOT NULL,
  `building_type_id` varchar(255) NOT NULL,
  `building_type_value` int(11) NOT NULL,
  `height_of_building_in_mtr` float NOT NULL,
  `number_of_staircase` int(11) NOT NULL,
  `staircase_added` int(11) NOT NULL,
  `number_of_lifts` int(11) NOT NULL,
  `lifts_added` int(11) NOT NULL,
  `location_count_of_refuge_area` int(11) NOT NULL,
  `hight_of_refuge_area_from_ground_in_mtr` float NOT NULL,
  `provided_refuge_area_in_sqr_mtr` float NOT NULL,
  `recid` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `wing_id` int(11) NOT NULL,
  `count_wing` int(11) NOT NULL,
  `do_you_have_wing` varchar(255) NOT NULL,
  `locked` int(11) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_upload`
--

CREATE TABLE `certificate_upload` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `upload_tippni` varchar(255) NOT NULL,
  `upload_noc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_upload2`
--

CREATE TABLE `certificate_upload2` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `admin_report` varchar(255) NOT NULL,
  `upload_noc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corresponding_values`
--

CREATE TABLE `corresponding_values` (
  `id` int(11) NOT NULL,
  `target_table` varchar(255) NOT NULL,
  `target_table_field_name` varchar(255) NOT NULL,
  `target_table_value_field` varchar(255) NOT NULL,
  `fetch_table` varchar(255) NOT NULL,
  `fetch_table_field_name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE `demand` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `rec_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_flag` varchar(255) NOT NULL,
  `payment_person` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paid_by` varchar(255) NOT NULL,
  `payment_chq_no` varchar(255) NOT NULL,
  `payment_chq_date` varchar(255) NOT NULL,
  `payment_bankname` varchar(255) NOT NULL,
  `payment_cash_collection_center` varchar(255) NOT NULL,
  `payment_counter` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `upload_dd_or_cheque` text DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` varchar(255) DEFAULT NULL,
  `remark` varchar(255) NOT NULL,
  `demand_required` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expiry_services`
--

CREATE TABLE `expiry_services` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `expiry_type` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `years` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_final_noc`
--

CREATE TABLE `fire_final_noc` (
  `id` int(11) NOT NULL,
  `do_you_want_to_apply_with_full_potential_plan` varchar(255) NOT NULL,
  `upload_the_full_potential_plan` text NOT NULL,
  `provisional_noc_number` varchar(255) NOT NULL,
  `revised_provisional_noc_number` varchar(255) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `architect_or_developers_lic_number` varchar(255) NOT NULL,
  `survey_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `vp_number` varchar(255) NOT NULL,
  `number_of_buildings` int(11) NOT NULL,
  `number_of_floors` int(11) NOT NULL,
  `road_width` float NOT NULL,
  `road_width_north` float NOT NULL,
  `road_width_south` float NOT NULL,
  `road_width_east` float NOT NULL,
  `road_width_west` float NOT NULL,
  `open_space_margin_north` float NOT NULL,
  `open_space_margin_south` float NOT NULL,
  `open_space_margin_east` float NOT NULL,
  `open_space_margin_west` float NOT NULL,
  `upload_provisional_fire_noc` text NOT NULL,
  `upload_revised_provisional_fire_noc` text NOT NULL,
  `upload_fire_final_part_noc` text NOT NULL,
  `upload_architect_application_letter` text NOT NULL,
  `upload_builders_application_letter` text NOT NULL,
  `upload_gross_built_up_area_certificate` text NOT NULL,
  `upload_cc_rdp_oc` text NOT NULL,
  `upload_floor_plan_set` text NOT NULL,
  `upload_location_site_photo` text NOT NULL,
  `upload_google_map_of_land_in_color` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `building_record_count` int(11) NOT NULL,
  `floor_record_count` int(11) NOT NULL,
  `servey_done` int(11) NOT NULL DEFAULT 0,
  `upload_noc` varchar(255) NOT NULL,
  `admin_report` varchar(255) NOT NULL,
  `upload_work_completion_certificate` text NOT NULL,
  `upload_structural_stability_certificate` text NOT NULL,
  `upload_lift_certificate` text NOT NULL,
  `upload_fixed_fire_fighting_installations_letter` text NOT NULL,
  `upload_electric_contractor_certificate_and_license_copy` text NOT NULL,
  `upload_diesel_engine_generator_invoice_copy_and_test_certificate` text NOT NULL,
  `upload_form_A_certificate_from_license_agency` text NOT NULL,
  `upload_license_copy_of_MFS` text NOT NULL,
  `upload_fire_auto_cad_drawing` text NOT NULL,
  `upload_affidavit` text NOT NULL,
  `upload_fire_resistance_door` text NOT NULL,
  `upload_firefighting_specs_basements_or_terraces_and_water_tank_c` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_final_noc_renewal`
--

CREATE TABLE `fire_final_noc_renewal` (
  `id` int(11) NOT NULL,
  `old_final_fire_noc_number` varchar(255) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `architect_or_developers_lic_number` varchar(255) NOT NULL,
  `survey_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `vp_number` varchar(255) NOT NULL,
  `number_of_buildings` int(11) NOT NULL,
  `number_of_floors` int(11) NOT NULL,
  `road_width` float NOT NULL,
  `road_width_north` float NOT NULL,
  `road_width_south` float NOT NULL,
  `road_width_east` float NOT NULL,
  `road_width_west` float NOT NULL,
  `open_space_margin_north` float NOT NULL,
  `open_space_margin_south` float NOT NULL,
  `open_space_margin_east` float NOT NULL,
  `open_space_margin_west` float NOT NULL,
  `upload_last_year_final_fire_noc` text NOT NULL,
  `upload_architect_application_letter` text NOT NULL,
  `upload_builders_application_letter` text NOT NULL,
  `upload_gross_built_up_area_certificate` text NOT NULL,
  `upload_cc_rdp_oc` text NOT NULL,
  `upload_floor_plan_set` text NOT NULL,
  `upload_location_site_photo` text NOT NULL,
  `upload_google_map_of_land_in_color` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `building_record_count` int(11) NOT NULL,
  `floor_record_count` int(11) NOT NULL,
  `servey_done` int(11) NOT NULL DEFAULT 0,
  `upload_noc` varchar(255) NOT NULL,
  `admin_report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_final_part_noc`
--

CREATE TABLE `fire_final_part_noc` (
  `id` int(11) NOT NULL,
  `provisional_noc_number` varchar(255) NOT NULL,
  `revised_provisional_noc_number` varchar(255) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `architect_or_developers_lic_number` varchar(255) NOT NULL,
  `survey_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `vp_number` varchar(255) NOT NULL,
  `number_of_buildings` int(11) NOT NULL,
  `number_of_floors` int(11) NOT NULL,
  `road_width` float NOT NULL,
  `road_width_north` float NOT NULL,
  `road_width_south` float NOT NULL,
  `road_width_east` float NOT NULL,
  `road_width_west` float NOT NULL,
  `open_space_margin_north` float NOT NULL,
  `open_space_margin_south` float NOT NULL,
  `open_space_margin_east` float NOT NULL,
  `open_space_margin_west` float NOT NULL,
  `upload_provisional_fire_noc` text NOT NULL,
  `upload_revised_provisional_fire_noc` text NOT NULL,
  `upload_architect_application_letter` text NOT NULL,
  `upload_builders_application_letter` text NOT NULL,
  `upload_gross_built_up_area_certificate` text NOT NULL,
  `upload_cc_rdp_oc` text NOT NULL,
  `upload_floor_plan_set` text NOT NULL,
  `upload_location_site_photo` text NOT NULL,
  `upload_google_map_of_land_in_color` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `building_record_count` int(11) NOT NULL,
  `floor_record_count` int(11) NOT NULL,
  `servey_done` int(11) NOT NULL DEFAULT 0,
  `upload_noc` varchar(255) NOT NULL,
  `admin_report` varchar(255) NOT NULL,
  `is_revised_noc_taken` varchar(255) NOT NULL,
  `is_revised_provisional_taken` varchar(255) NOT NULL,
  `upload_form_a` varchar(255) NOT NULL,
  `upload_lic_of_mfs` varchar(255) NOT NULL,
  `upload_electric_contract` varchar(255) NOT NULL,
  `upload_site_photo` varchar(255) NOT NULL,
  `upload_affidavit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_noc_establishment`
--

CREATE TABLE `fire_noc_establishment` (
  `id` int(11) NOT NULL,
  `property_number` varchar(255) NOT NULL,
  `name_of_property_owner` varchar(255) NOT NULL,
  `pending_due_amount` double NOT NULL,
  `area_in_sq_ft` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `establishment_name` varchar(255) NOT NULL,
  `establishment_address` varchar(255) NOT NULL,
  `establishment_type_id` int(11) NOT NULL,
  `establishment_type_value` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `ward_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date_of_application` date NOT NULL,
  `upload_form_b` text NOT NULL,
  `upload_agency_license_copy` text NOT NULL,
  `upload_license_agencies_certificate` text NOT NULL,
  `upload_fire_equipment_color_photos` text NOT NULL,
  `upload_available_fire_equipments_isi_certificate` text NOT NULL,
  `upload_property_tax_receipt_or_agreement_or_rent_copy` text NOT NULL,
  `upload_mpcb_certificate` text NOT NULL,
  `upload_society_noc` text NOT NULL,
  `upload_internal_map` text NOT NULL,
  `upload_location_layout_map` text NOT NULL,
  `upload_electric_audit_report` text NOT NULL,
  `upload_affidavite` text NOT NULL,
  `upload_lift_annual_maintenance_certificate` text NOT NULL,
  `upload_ac_annual_maintenance_certificate` text NOT NULL,
  `upload_building_structural_stability_report` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `working_hours_from` time NOT NULL,
  `working_hours_to` time NOT NULL,
  `worker_count` int(11) NOT NULL,
  `working_area_sqr_feet` float NOT NULL,
  `expiry_date` date NOT NULL,
  `inspection_done` int(11) NOT NULL DEFAULT 0,
  `tippni` varchar(255) NOT NULL,
  `noc` varchar(255) NOT NULL,
  `application_type` varchar(255) NOT NULL,
  `do_you_want_to_add_more_property` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_noc_establishment_subentry`
--

CREATE TABLE `fire_noc_establishment_subentry` (
  `id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `property_number` varchar(255) NOT NULL,
  `name_of_property_owner` varchar(255) NOT NULL,
  `pending_due_amount` double NOT NULL,
  `area_in_sq_ft` double NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_noc_provisional_new`
--

CREATE TABLE `fire_noc_provisional_new` (
  `id` int(11) NOT NULL,
  `do_you_want_to_apply_with_full_potential_plan` varchar(255) NOT NULL,
  `upload_the_full_potential_plan` text NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `architect_or_developers_lic_number` varchar(255) NOT NULL,
  `survey_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `vp_number` varchar(255) NOT NULL,
  `number_of_buildings` int(11) NOT NULL,
  `number_of_floors` int(11) NOT NULL,
  `road_width` float NOT NULL,
  `road_width_north` float NOT NULL,
  `road_width_south` float NOT NULL,
  `road_width_east` float NOT NULL,
  `road_width_west` float NOT NULL,
  `open_space_margin_north` float NOT NULL,
  `open_space_margin_south` float NOT NULL,
  `open_space_margin_east` float NOT NULL,
  `open_space_margin_west` float NOT NULL,
  `upload_architect_application_letter` text NOT NULL,
  `upload_builders_application_letter` text NOT NULL,
  `upload_gross_built_up_area_certificate` text NOT NULL,
  `upload_cc_rdp_oc` text NOT NULL,
  `upload_floor_plan_set` text NOT NULL,
  `upload_location_site_photo` text NOT NULL,
  `upload_google_map_of_land_in_color` text NOT NULL,
  `uplaod_architect_application_with_building_plans` text NOT NULL,
  `upload_layout_of_fire_prevention_and_protection_measures` text NOT NULL,
  `is_redevelopment` varchar(255) NOT NULL,
  `upload_society_consent_or_recommendation_letter` text NOT NULL,
  `upload_dbr_report` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `building_record_count` int(11) NOT NULL,
  `floor_record_count` int(11) NOT NULL,
  `servey_done` int(11) NOT NULL DEFAULT 0,
  `upload_noc` varchar(255) NOT NULL,
  `admin_report` varchar(255) NOT NULL,
  `survey_done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_noc_provisional_new_deleted`
--

CREATE TABLE `fire_noc_provisional_new_deleted` (
  `id` int(11) NOT NULL,
  `do_you_want_to_apply_with_full_potential_plan` varchar(255) NOT NULL,
  `upload_the_full_potential_plan` text NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `architect_or_developers_lic_number` varchar(255) NOT NULL,
  `survey_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `vp_number` varchar(255) NOT NULL,
  `number_of_buildings` int(11) NOT NULL,
  `number_of_floors` int(11) NOT NULL,
  `road_width` float NOT NULL,
  `road_width_north` float NOT NULL,
  `road_width_south` float NOT NULL,
  `road_width_east` float NOT NULL,
  `road_width_west` float NOT NULL,
  `open_space_margin_north` float NOT NULL,
  `open_space_margin_south` float NOT NULL,
  `open_space_margin_east` float NOT NULL,
  `open_space_margin_west` float NOT NULL,
  `upload_architect_application_letter` text NOT NULL,
  `upload_builders_application_letter` text NOT NULL,
  `upload_gross_built_up_area_certificate` text NOT NULL,
  `upload_cc_rdp_oc` text NOT NULL,
  `upload_floor_plan_set` text NOT NULL,
  `upload_location_site_photo` text NOT NULL,
  `upload_google_map_of_land_in_color` text NOT NULL,
  `uplaod_architect_application_with_building_plans` text NOT NULL,
  `upload_layout_of_fire_prevention_and_protection_measures` text NOT NULL,
  `is_redevelopment` varchar(255) NOT NULL,
  `upload_society_consent_or_recommendation_letter` text NOT NULL,
  `upload_dbr_report` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `building_record_count` int(11) NOT NULL,
  `floor_record_count` int(11) NOT NULL,
  `servey_done` int(11) NOT NULL DEFAULT 0,
  `upload_noc` varchar(255) NOT NULL,
  `admin_report` varchar(255) NOT NULL,
  `survey_done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_noc_revised_provisional`
--

CREATE TABLE `fire_noc_revised_provisional` (
  `id` int(11) NOT NULL,
  `provisional_noc_number` varchar(255) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `zone_value` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `architect_or_developers_lic_number` varchar(255) NOT NULL,
  `survey_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `vp_number` varchar(255) NOT NULL,
  `number_of_buildings` int(11) NOT NULL,
  `number_of_floors` int(11) NOT NULL,
  `road_width` float NOT NULL,
  `road_width_north` float NOT NULL,
  `road_width_south` float NOT NULL,
  `road_width_east` float NOT NULL,
  `road_width_west` float NOT NULL,
  `open_space_margin_north` float NOT NULL,
  `open_space_margin_south` float NOT NULL,
  `open_space_margin_east` float NOT NULL,
  `open_space_margin_west` float NOT NULL,
  `upload_provisional_fire_noc` text NOT NULL,
  `upload_architect_application_letter` text NOT NULL,
  `upload_builders_application_letter` text NOT NULL,
  `upload_gross_built_up_area_certificate` text NOT NULL,
  `upload_cc_rdp_oc` text NOT NULL,
  `upload_floor_plan_set` text NOT NULL,
  `upload_location_site_photo` text NOT NULL,
  `upload_google_map_of_land_in_color` text NOT NULL,
  `declaration` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `application_no` varchar(255) NOT NULL,
  `building_record_count` int(11) NOT NULL,
  `floor_record_count` int(11) NOT NULL,
  `servey_done` int(11) NOT NULL DEFAULT 0,
  `upload_noc` varchar(255) NOT NULL,
  `admin_report` varchar(255) NOT NULL,
  `change_of_usage` varchar(255) NOT NULL,
  `upload_change_of_usage_certificate` text NOT NULL,
  `upload_old_provisional_receipt_copy` text NOT NULL,
  `upload_hardship_letter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_rcc_form`
--

CREATE TABLE `fire_rcc_form` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `bpms_code` varchar(255) NOT NULL,
  `is_property_amalgmated` varchar(255) NOT NULL,
  `have_you_taken_full_potential_plan` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `auth_remark` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `floor_details`
--

CREATE TABLE `floor_details` (
  `id` int(11) NOT NULL,
  `foor_name_id` int(11) NOT NULL,
  `foor_name_value` varchar(255) NOT NULL,
  `recid` int(11) NOT NULL COMMENT 'wing_id',
  `floor_wise_p_line_area_in_sqr_mtr` float NOT NULL,
  `hight_in_mtr_from_ground` float NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `locked` int(11) NOT NULL,
  `refuge_area` varchar(255) NOT NULL,
  `hight_of_refuge_area_from_ground_in_mtr` double NOT NULL,
  `provided_refuge_area_in_sqr_mtr` double NOT NULL,
  `floor_type` varchar(255) NOT NULL,
  `typical_floor_plan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `govt_hospital_inspection_form`
--

CREATE TABLE `govt_hospital_inspection_form` (
  `id` int(11) NOT NULL,
  `hospital_or_health_center_name` varchar(255) NOT NULL,
  `hospital_or_health_center_address` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_mobile_no` varchar(255) NOT NULL,
  `building_height` varchar(255) NOT NULL,
  `lifts_company_name` varchar(255) NOT NULL,
  `no_lifts_in_building` int(11) NOT NULL,
  `capacity_of_lifts` varchar(255) NOT NULL,
  `elevators_amc_done_by_org_name` varchar(255) NOT NULL,
  `elevators_amc_period` varchar(255) NOT NULL,
  `number_of_staircase_in_bulding` int(11) NOT NULL,
  `width_of_staircase_in_bulding` varchar(255) NOT NULL,
  `entrance_routes_count` int(11) NOT NULL,
  `exit_routes_count` int(11) NOT NULL,
  `is_record_room_available` varchar(255) NOT NULL,
  `hospital_area` varchar(255) NOT NULL,
  `doctors_count` int(11) NOT NULL,
  `nurses_count` int(11) NOT NULL,
  `ward_boy_count` int(11) NOT NULL,
  `aunts_count` int(11) NOT NULL,
  `clerk_count` int(11) NOT NULL,
  `other_employees_count` int(11) NOT NULL,
  `floor_number_of_hospital_id` int(11) NOT NULL,
  `floor_number_of_hospital_value` varchar(255) NOT NULL,
  `is_ot_dept` varchar(255) NOT NULL,
  `is_xray_dept` varchar(255) NOT NULL,
  `is_opd_dept` varchar(255) NOT NULL,
  `is_emergency_opd_dept` varchar(255) NOT NULL,
  `is_patholoty_dept` varchar(255) NOT NULL,
  `is_post_nutal_care_dept` varchar(255) NOT NULL,
  `is_icu_dept` varchar(255) NOT NULL,
  `is_gw_men_dept` varchar(255) NOT NULL,
  `is_gw_women_dept` varchar(255) NOT NULL,
  `is_special_ward_dept` varchar(255) NOT NULL,
  `is_ante_nutal_care_dept` varchar(255) NOT NULL,
  `is_nicu_dept` varchar(255) NOT NULL,
  `directional_board` varchar(255) NOT NULL,
  `total_no_beds_hospital` int(11) NOT NULL,
  `generator_system_capacity` varchar(255) NOT NULL,
  `generator_system_amc_org_name` varchar(255) NOT NULL,
  `generator_system_amc_period` varchar(255) NOT NULL,
  `electrical_audit_report_org_name` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `emergency_power_system` varchar(255) NOT NULL,
  `info_about_fire_prevention_measures` varchar(255) NOT NULL,
  `mock_drill_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_emp_present_for_mock_drill` int(11) NOT NULL,
  `upload_photo_of_employee_present_for_mock_drill` text DEFAULT NULL,
  `upload_fire_marshal_names_with_mobile_no` text DEFAULT NULL,
  `water_storage_capacity_terrace` varchar(255) NOT NULL,
  `water_storage_capacity_groundfloor` varchar(255) NOT NULL,
  `fire_noc_details` varchar(255) NOT NULL,
  `fire_noc_date` date NOT NULL,
  `other_info_about_hospital` varchar(255) NOT NULL,
  `oxygen_system` varchar(255) NOT NULL,
  `maintenance_of_emergency_routes` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_inspection_form`
--

CREATE TABLE `hotel_inspection_form` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `owners_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `type_of_application_id` int(11) NOT NULL,
  `type_of_application_value` varchar(255) NOT NULL,
  `old_noc_number` varchar(255) NOT NULL,
  `old_noc_date` date NOT NULL,
  `building_height` varchar(255) NOT NULL,
  `building_floor` varchar(255) NOT NULL,
  `no_n_width_stairs_one` varchar(255) NOT NULL,
  `no_n_width_stairs_two` varchar(255) NOT NULL,
  `no_n_width_stairs_three` varchar(255) NOT NULL,
  `no_lifts_in_the_building` varchar(255) NOT NULL,
  `no_entrance_routes` varchar(255) NOT NULL,
  `no_exit_routes` varchar(255) NOT NULL,
  `store_room_id` int(11) NOT NULL,
  `store_room_value` varchar(255) NOT NULL,
  `natural_ventilation_windows` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `no_employees_female` int(11) NOT NULL,
  `no_employees_male` int(11) NOT NULL,
  `no_employees_total` int(11) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `floor_number_of_hotel` varchar(255) NOT NULL,
  `is_directional_board_available` varchar(255) NOT NULL,
  `hotel_departments` varchar(255) NOT NULL,
  `table_quantity` int(11) NOT NULL,
  `chair_quantity` int(11) NOT NULL,
  `is_generator_system_available` varchar(255) NOT NULL,
  `is_structural_audit_report_avilable_id` int(11) NOT NULL,
  `is_structural_audit_report_avilable_value` varchar(255) NOT NULL,
  `structural_audit_report_date` date NOT NULL,
  `is_electrical_audit_report_available_id` int(11) NOT NULL,
  `is_electrical_audit_report_available_value` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `fire_prevention_measures_information` varchar(255) NOT NULL,
  `extinguishing_licen_agency_name` varchar(255) NOT NULL,
  `extinguishing_licen_agency_no` varchar(255) NOT NULL,
  `extinguishing_licen_agency_validity` varchar(255) NOT NULL,
  `extinguishing_licen_agency_cert_no` varchar(255) NOT NULL,
  `water_storage_capacity_terrace` int(11) NOT NULL,
  `water_storage_capacity_groundfloor` int(11) NOT NULL,
  `gas_bank` varchar(255) NOT NULL,
  `lpg_cylender` varchar(255) NOT NULL,
  `cng_pipe_line` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industrial_factory_inspection_form`
--

CREATE TABLE `industrial_factory_inspection_form` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `owners_name` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `owners_mobile_number` int(11) NOT NULL,
  `type_of_application_id` int(11) NOT NULL,
  `type_of_application_value` varchar(255) NOT NULL,
  `old_noc_number` varchar(255) NOT NULL,
  `old_noc_date` date NOT NULL,
  `building_type` varchar(255) NOT NULL,
  `building_height` int(11) NOT NULL,
  `building_floor` int(11) NOT NULL,
  `no_of_staircase_in_building_and_width` varchar(255) NOT NULL,
  `no_of_commercial_spaces` int(11) NOT NULL,
  `structural_audit_report_year_of_construction` int(11) NOT NULL,
  `structural_audit_report_date` date NOT NULL,
  `structural_audit_agency_name` varchar(255) NOT NULL,
  `structural_audit_agency_address` varchar(255) NOT NULL,
  `structural_audit_agency_mobile_no` int(11) NOT NULL,
  `permissions_obtained_for_the_business` varchar(255) NOT NULL,
  `female_employees_count` int(11) NOT NULL,
  `male_employees_count` int(11) NOT NULL,
  `total_employees_count` int(11) NOT NULL,
  `working_hours_at_business_premises` varchar(255) NOT NULL,
  `natural_ventilation_total_windows` int(11) NOT NULL,
  `natural_ventilation_total_doors` int(11) NOT NULL,
  `area_of_business_premises` varchar(255) NOT NULL,
  `entrance_route_premises` varchar(255) NOT NULL,
  `exit_route_premises` varchar(255) NOT NULL,
  `record_room` varchar(255) NOT NULL,
  `water_storage_capacity_terrace` int(11) NOT NULL,
  `water_storage_capacity_groundfloor` int(11) NOT NULL,
  `no_lifts_in_the_building` int(11) NOT NULL,
  `capacity_lifts_in_the_building` varchar(255) NOT NULL,
  `electrical_connection_capacity` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `electrical_audit_agency_name` varchar(255) NOT NULL,
  `electrical_audit_agency_address` varchar(255) NOT NULL,
  `electrical_audit_agency_mobile_no` int(11) NOT NULL,
  `generator_system` varchar(255) NOT NULL,
  `raw_material_name` varchar(255) NOT NULL,
  `raw_material_storage_capacity` varchar(255) NOT NULL,
  `no_of_lpg_gas_cylinders` int(11) NOT NULL,
  `name_of_final_product` varchar(255) NOT NULL,
  `storage_capacity_of_final_product` varchar(255) NOT NULL,
  `fire_extinguishing_permanent` varchar(255) NOT NULL,
  `fire_extinguishing_temporary` varchar(255) NOT NULL,
  `extinguishing_license_agency_name` varchar(255) NOT NULL,
  `extinguishing_license_agency_lno` varchar(255) NOT NULL,
  `extinguishing_license_agency_lvalidity` date NOT NULL,
  `extinguishing_licen_agency_cert_no` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `label_names`
--

CREATE TABLE `label_names` (
  `id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `label_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `label_names`
--

INSERT INTO `label_names` (`id`, `db_name`, `field`, `label_name`) VALUES
(1, 'accept_reject', 'id', 'ID '),
(2, 'accept_reject', 'rec_id', 'RECORD ID '),
(3, 'accept_reject', 'action', 'ACTION '),
(4, 'accept_reject', 'remark', 'REMARK '),
(5, 'accept_reject', 'timestamp', 'TIMESTAMP '),
(6, 'accept_reject', 'db_name', 'DATABASE NAME '),
(7, 'accept_reject', 'is_survey_needed', 'IS SURVEY NEEDED? '),
(8, 'application_prefix', 'id', 'ID '),
(9, 'application_prefix', 'db_name', 'DATABASE NAME '),
(10, 'application_prefix', 'prefix', 'PREFIX '),
(11, 'authorization_sequence', 'id', 'ID '),
(12, 'authorization_sequence', 'user_id', 'USER ID '),
(13, 'authorization_sequence', 'stage', 'STAGE '),
(14, 'authorization_sequence', 'zone', 'ZONE '),
(15, 'authorization_sequence', 'db_name', 'DATABASE NAME '),
(16, 'authorization_sequence', 'can_reject', 'CAN REJECT '),
(17, 'bhuilding_details_for_fire_noc', 'id', 'ID '),
(18, 'bhuilding_details_for_fire_noc', 'applicant_name', 'APPLICANT NAME '),
(19, 'bhuilding_details_for_fire_noc', 'establishment_name', 'ESTABLISHMENT NAME '),
(20, 'bhuilding_details_for_fire_noc', 'establishment_address', 'ESTABLISHMENT ADDRESS '),
(21, 'bhuilding_details_for_fire_noc', 'name_of_building', 'NAME OF BUILDING '),
(22, 'bhuilding_details_for_fire_noc', 'number_of_wing_in_building', 'NUMBER OF WINGS IN BUILDING '),
(23, 'bhuilding_details_for_fire_noc', 'building_type_id', 'BUILDING TYPE ID '),
(24, 'bhuilding_details_for_fire_noc', 'building_type_value', 'BUILDING TYPE '),
(25, 'bhuilding_details_for_fire_noc', 'height_of_building_in_mtr', 'HEIGHT OF BUILDING (M) '),
(26, 'bhuilding_details_for_fire_noc', 'number_of_staircase', 'NUMBER OF STAIRCASES '),
(27, 'bhuilding_details_for_fire_noc', 'staircase_added', 'STAIRCASES ADDED '),
(28, 'bhuilding_details_for_fire_noc', 'number_of_lifts', 'NUMBER OF LIFTS '),
(29, 'bhuilding_details_for_fire_noc', 'lifts_added', 'LIFTS ADDED '),
(30, 'bhuilding_details_for_fire_noc', 'location_count_of_refuge_area', 'LOCATION COUNT OF REFUGE AREA '),
(31, 'bhuilding_details_for_fire_noc', 'hight_of_refuge_area_from_ground_in_mtr', 'HEIGHT OF REFUGE AREA FROM GROUND (M) '),
(32, 'bhuilding_details_for_fire_noc', 'provided_refuge_area_in_sqr_mtr', 'PROVIDED REFUGE AREA (SQ.M) '),
(33, 'bhuilding_details_for_fire_noc', 'recid', 'RECORD ID '),
(34, 'bhuilding_details_for_fire_noc', 'date', 'DATE '),
(35, 'bhuilding_details_for_fire_noc', 'user_id', 'USER ID '),
(36, 'bhuilding_details_for_fire_noc', 'db_name', 'DATABASE NAME '),
(37, 'bhuilding_details_for_fire_noc', 'wing_id', 'WING ID '),
(38, 'bhuilding_details_for_fire_noc', 'count_wing', 'COUNT WING '),
(39, 'bhuilding_details_for_fire_noc', 'do_you_have_wing', 'DO YOU HAVE WING? '),
(40, 'bhuilding_details_for_fire_noc', 'locked', 'LOCKED '),
(41, 'bhuilding_details_for_fire_noc', 'flag', 'FLAG '),
(42, 'certificate_upload', 'id', 'ID '),
(43, 'certificate_upload', 'db_name', 'DATABASE NAME '),
(44, 'certificate_upload', 'rec_id', 'RECORD ID '),
(45, 'certificate_upload', 'upload_tippni', 'UPLOAD TIPPNI '),
(46, 'certificate_upload', 'upload_noc', 'UPLOAD NOC '),
(47, 'certificate_upload2', 'id', 'ID '),
(48, 'certificate_upload2', 'db_name', 'DATABASE NAME '),
(49, 'certificate_upload2', 'rec_id', 'RECORD ID '),
(50, 'certificate_upload2', 'admin_report', 'ADMIN REPORT '),
(51, 'certificate_upload2', 'upload_noc', 'UPLOAD NOC '),
(52, 'corresponding_values', 'id', 'ID '),
(53, 'corresponding_values', 'target_table', 'TARGET TABLE '),
(54, 'corresponding_values', 'target_table_field_name', 'TARGET TABLE FIELD NAME '),
(55, 'corresponding_values', 'target_table_value_field', 'TARGET TABLE VALUE FIELD '),
(56, 'corresponding_values', 'fetch_table', 'FETCH TABLE '),
(57, 'corresponding_values', 'fetch_table_field_name', 'FETCH TABLE FIELD NAME '),
(58, 'corresponding_values', 'status', 'STATUS '),
(59, 'corresponding_values', 'paid', 'PAID '),
(60, 'corresponding_values', 'int_no', 'INTERNAL NUMBER '),
(61, 'corresponding_values', 'yr', 'YEAR '),
(62, 'corresponding_values', 'zone', 'ZONE '),
(63, 'corresponding_values', 'payment_done', 'PAYMENT DONE '),
(64, 'corresponding_values', 'certificate_file', 'CERTIFICATE FILE '),
(65, 'corresponding_values', 'timestamp', 'TIMESTAMP '),
(66, 'corresponding_values', 'user_id', 'USER ID '),
(67, 'demand', 'id', 'ID '),
(68, 'demand', 'db_name', 'DATABASE NAME '),
(69, 'demand', 'rec_id', 'RECORD ID '),
(70, 'demand', 'amount', 'AMOUNT '),
(71, 'demand', 'payment_flag', 'PAYMENT FLAG '),
(72, 'demand', 'payment_person', 'PAYMENT PERSON '),
(73, 'demand', 'payment_type', 'PAYMENT TYPE '),
(74, 'demand', 'paid_by', 'PAID BY '),
(75, 'demand', 'payment_chq_no', 'PAYMENT CHEQUE NO. '),
(76, 'demand', 'payment_chq_date', 'PAYMENT CHEQUE DATE '),
(77, 'demand', 'payment_bankname', 'PAYMENT BANK NAME '),
(78, 'demand', 'payment_cash_collection_center', 'PAYMENT CASH COLLECTION CENTER '),
(79, 'demand', 'payment_counter', 'PAYMENT COUNTER '),
(80, 'demand', 'status', 'STATUS '),
(81, 'demand', 'paid', 'PAID '),
(82, 'demand', 'upload_dd_or_cheque', 'UPLOAD DD OR CHEQUE '),
(83, 'demand', 'payment_done', 'PAYMENT DONE '),
(84, 'demand', 'timestamp', 'TIMESTAMP '),
(85, 'demand', 'user_id', 'USER ID '),
(86, 'demand', 'remark', 'REMARK '),
(87, 'demand', 'demand_required', 'DEMAND REQUIRED '),
(88, 'expiry_services', 'id', 'ID '),
(89, 'expiry_services', 'db_name', 'DATABASE NAME '),
(90, 'expiry_services', 'expiry_type', 'EXPIRY TYPE '),
(91, 'expiry_services', 'month', 'MONTH '),
(92, 'expiry_services', 'day', 'DAY '),
(93, 'expiry_services', 'years', 'YEARS '),
(94, 'fire_final_noc', 'id', 'ID '),
(95, 'fire_final_noc', 'provisional_noc_number', 'PROVISIONAL NOC NUMBER '),
(96, 'fire_final_noc', 'revised_provisional_noc_number', 'REVISED PROVISIONAL NOC NUMBER '),
(97, 'fire_final_noc', 'applicant_name', 'APPLICANT NAME '),
(98, 'fire_final_noc', 'applicant_address', 'APPLICANT ADDRESS '),
(99, 'fire_final_noc', 'zone_id', 'ZONE '),
(100, 'fire_final_noc', 'zone_value', 'ZONE  '),
(101, 'fire_final_noc', 'mobile_no', 'MOBILE NO. '),
(102, 'fire_final_noc', 'architect_or_developers_lic_number', 'ARCHITECT '),
(103, 'fire_final_noc', 'survey_number', 'SURVEY NUMBER '),
(104, 'fire_final_noc', 'village', 'VILLAGE '),
(105, 'fire_final_noc', 'vp_number', 'VP NUMBER '),
(106, 'fire_final_noc', 'number_of_buildings', 'NUMBER OF BUILDINGS '),
(107, 'fire_final_noc', 'number_of_floors', 'NUMBER OF FLOORS '),
(108, 'fire_final_noc', 'road_width', 'ROAD WIDTH '),
(109, 'fire_final_noc', 'road_width_north', 'ROAD WIDTH NORTH '),
(110, 'fire_final_noc', 'road_width_south', 'ROAD WIDTH SOUTH '),
(111, 'fire_final_noc', 'road_width_east', 'ROAD WIDTH EAST '),
(112, 'fire_final_noc', 'road_width_west', 'ROAD WIDTH WEST '),
(113, 'fire_final_noc', 'open_space_margin_north', 'OPEN SPACE MARGIN NORTH '),
(114, 'fire_final_noc', 'open_space_margin_south', 'OPEN SPACE MARGIN SOUTH '),
(115, 'fire_final_noc', 'open_space_margin_east', 'OPEN SPACE MARGIN EAST '),
(116, 'fire_final_noc', 'open_space_margin_west', 'OPEN SPACE MARGIN WEST '),
(117, 'fire_final_noc', 'upload_provisional_fire_noc', 'UPLOAD PROVISIONAL FIRE NOC '),
(118, 'fire_final_noc', 'upload_revised_provisional_fire_noc', 'UPLOAD REVISED PROVISIONAL FIRE NOC '),
(119, 'fire_final_noc', 'upload_fire_final_part_noc', 'UPLOAD FIRE FINAL PART NOC '),
(120, 'fire_final_noc', 'upload_architect_application_letter', 'UPLOAD ARCHITECT APPLICATION LETTER '),
(121, 'fire_final_noc', 'upload_builders_application_letter', 'UPLOAD BUILDERS APPLICATION LETTER '),
(122, 'fire_final_noc', 'upload_gross_built_up_area_certificate', 'UPLOAD GROSS BUILT-UP AREA CERTIFICATE '),
(123, 'fire_final_noc', 'upload_cc_rdp_oc', 'UPLOAD CC'),
(124, 'fire_final_noc', 'upload_floor_plan_set', 'UPLOAD FLOOR PLAN SET '),
(125, 'fire_final_noc', 'upload_location_site_photo', 'UPLOAD LOCATION'),
(126, 'fire_final_noc', 'upload_google_map_of_land_in_color', 'UPLOAD GOOGLE MAP OF LAND IN COLOR '),
(127, 'fire_final_noc', 'declaration', 'DECLARATION '),
(128, 'fire_final_noc', 'user_id', 'USER ID '),
(129, 'fire_final_noc', 'status', 'STATUS '),
(130, 'fire_final_noc', 'paid', 'PAID '),
(131, 'fire_final_noc', 'int_no', 'INTERNAL NUMBER '),
(132, 'fire_final_noc', 'yr', 'YEAR '),
(133, 'fire_final_noc', 'zone', 'ZONE '),
(134, 'fire_final_noc', 'payment_done', 'PAYMENT DONE '),
(135, 'fire_final_noc', 'certificate_file', 'CERTIFICATE FILE '),
(136, 'fire_final_noc', 'timestamp', 'TIMESTAMP '),
(137, 'fire_final_noc', 'application_no', 'APPLICATION NO. '),
(138, 'fire_final_noc', 'date', 'DATE '),
(139, 'fire_final_noc', 'building_record_count', 'BUILDING RECORD COUNT '),
(140, 'fire_final_noc', 'floor_record_count', 'FLOOR RECORD COUNT '),
(141, 'fire_final_noc', 'servey_done', 'SURVEY DONE '),
(142, 'fire_final_noc', 'upload_noc', 'UPLOAD NOC '),
(143, 'fire_final_noc', 'admin_report', 'ADMIN REPORT '),
(144, 'fire_final_noc', 'upload_work_completion_certificate', 'UPLOAD WORK COMPLETION CERTIFICATE '),
(145, 'fire_final_noc', 'upload_structural_stability_certificate', 'UPLOAD STRUCTURAL STABILITY CERTIFICATE '),
(146, 'fire_final_noc', 'upload_lift_certificate', 'UPLOAD LIFT CERTIFICATE '),
(147, 'fire_final_noc', 'upload_fixed_fire_fighting_installations_letter', 'UPLOAD FIXED FIRE FIGHTING INSTALLATIONS LETTER '),
(148, 'fire_final_noc', 'upload_electric_contractor_certificate_and_license_copy', 'UPLOAD ELECTRIC CONTRACTOR CERTIFICATE & LICENSE COPY '),
(149, 'fire_final_noc', 'upload_diesel_engine_generator_invoice_copy_and_test_certificate', 'UPLOAD DIESEL ENGINE GENERATOR INVOICE & TEST CERTIFICATE '),
(150, 'fire_final_noc', 'upload_form_A_certificate_from_license_agency', 'UPLOAD FORM A CERTIFICATE FROM LICENSE AGENCY '),
(151, 'fire_final_noc', 'upload_license_copy_of_MFS', 'UPLOAD LICENSE COPY OF MFS '),
(152, 'fire_final_noc', 'upload_fire_auto_cad_drawing', 'UPLOAD FIRE AUTOCAD DRAWING '),
(153, 'fire_final_noc', 'upload_affidavit', 'UPLOAD AFFIDAVIT '),
(154, 'fire_final_noc_renewal', 'id', 'ID '),
(155, 'fire_final_noc_renewal', 'old_final_fire_noc_number', 'OLD FINAL FIRE NOC NUMBER '),
(156, 'fire_final_noc_renewal', 'applicant_name', 'APPLICANT NAME '),
(157, 'fire_final_noc_renewal', 'applicant_address', 'APPLICANT ADDRESS '),
(158, 'fire_final_noc_renewal', 'zone_id', 'ZONE '),
(159, 'fire_final_noc_renewal', 'zone_value', 'ZONE '),
(160, 'fire_final_noc_renewal', 'mobile_no', 'MOBILE NO. '),
(161, 'fire_final_noc_renewal', 'architect_or_developers_lic_number', 'ARCHITECT '),
(162, 'fire_final_noc_renewal', 'survey_number', 'SURVEY NUMBER '),
(163, 'fire_final_noc_renewal', 'village', 'VILLAGE '),
(164, 'fire_final_noc_renewal', 'vp_number', 'VP NUMBER '),
(165, 'fire_final_noc_renewal', 'number_of_buildings', 'NUMBER OF BUILDINGS '),
(166, 'fire_final_noc_renewal', 'number_of_floors', 'NUMBER OF FLOORS '),
(167, 'fire_final_noc_renewal', 'road_width', 'ROAD WIDTH '),
(168, 'fire_final_noc_renewal', 'road_width_north', 'ROAD WIDTH NORTH '),
(169, 'fire_final_noc_renewal', 'road_width_south', 'ROAD WIDTH SOUTH '),
(170, 'fire_final_noc_renewal', 'road_width_east', 'ROAD WIDTH EAST '),
(171, 'fire_final_noc_renewal', 'road_width_west', 'ROAD WIDTH WEST '),
(172, 'fire_final_noc_renewal', 'open_space_margin_north', 'OPEN SPACE MARGIN NORTH '),
(173, 'fire_final_noc_renewal', 'open_space_margin_south', 'OPEN SPACE MARGIN SOUTH '),
(174, 'fire_final_noc_renewal', 'open_space_margin_east', 'OPEN SPACE MARGIN EAST '),
(175, 'fire_final_noc_renewal', 'open_space_margin_west', 'OPEN SPACE MARGIN WEST '),
(176, 'fire_final_noc_renewal', 'upload_last_year_final_fire_noc', 'UPLOAD LAST YEAR FINAL FIRE NOC '),
(177, 'fire_final_noc_renewal', 'upload_architect_application_letter', 'UPLOAD ARCHITECT APPLICATION LETTER '),
(178, 'fire_final_noc_renewal', 'upload_builders_application_letter', 'UPLOAD BUILDER’S APPLICATION LETTER '),
(179, 'fire_final_noc_renewal', 'upload_gross_built_up_area_certificate', 'UPLOAD GROSS BUILT-UP AREA CERTIFICATE '),
(180, 'fire_final_noc_renewal', 'upload_cc_rdp_oc', 'UPLOAD CC / RDP / OC'),
(181, 'fire_final_noc_renewal', 'upload_floor_plan_set', 'UPLOAD FLOOR PLAN SET '),
(182, 'fire_final_noc_renewal', 'upload_location_site_photo', 'UPLOAD LOCATION / SITE PHOTO'),
(183, 'fire_final_noc_renewal', 'upload_google_map_of_land_in_color', 'UPLOAD GOOGLE MAP OF LAND (COLOR) '),
(184, 'fire_final_noc_renewal', 'declaration', 'DECLARATION '),
(185, 'fire_final_noc_renewal', 'user_id', 'USER ID '),
(186, 'fire_final_noc_renewal', 'status', 'STATUS '),
(187, 'fire_final_noc_renewal', 'paid', 'PAID '),
(188, 'fire_final_noc_renewal', 'int_no', 'INTERNAL NO. '),
(189, 'fire_final_noc_renewal', 'yr', 'YEAR '),
(190, 'fire_final_noc_renewal', 'zone', 'ZONE '),
(191, 'fire_final_noc_renewal', 'payment_done', 'PAYMENT DONE '),
(192, 'fire_final_noc_renewal', 'certificate_file', 'CERTIFICATE FILE '),
(193, 'fire_final_noc_renewal', 'timestamp', 'TIMESTAMP '),
(194, 'fire_final_noc_renewal', 'application_no', 'APPLICATION NO. '),
(195, 'fire_final_noc_renewal', 'date', 'DATE '),
(196, 'fire_final_noc_renewal', 'building_record_count', 'BUILDING RECORD COUNT '),
(197, 'fire_final_noc_renewal', 'floor_record_count', 'FLOOR RECORD COUNT '),
(198, 'fire_final_noc_renewal', 'servey_done', 'SURVEY DONE '),
(199, 'fire_final_noc_renewal', 'upload_noc', 'UPLOAD NOC '),
(200, 'fire_final_noc_renewal', 'admin_report', 'ADMIN REPORT '),
(201, 'fire_final_part_noc', 'id', 'ID '),
(202, 'fire_final_part_noc', 'provisional_noc_number', 'PROVISIONAL NOC NUMBER '),
(203, 'fire_final_part_noc', 'revised_provisional_noc_number', 'REVISED PROVISIONAL NOC NUMBER '),
(204, 'fire_final_part_noc', 'applicant_name', 'APPLICANT NAME '),
(205, 'fire_final_part_noc', 'applicant_address', 'APPLICANT ADDRESS '),
(206, 'fire_final_part_noc', 'zone_id', 'ZONE  '),
(207, 'fire_final_part_noc', 'zone_value', 'ZONE '),
(208, 'fire_final_part_noc', 'mobile_no', 'MOBILE NO. '),
(209, 'fire_final_part_noc', 'architect_or_developers_lic_number', 'ARCHITECT / DEVELOPER LICENSE NO. '),
(210, 'fire_final_part_noc', 'survey_number', 'SURVEY NUMBER '),
(211, 'fire_final_part_noc', 'village', 'VILLAGE '),
(212, 'fire_final_part_noc', 'vp_number', 'VP NUMBER '),
(213, 'fire_final_part_noc', 'number_of_buildings', 'NUMBER OF BUILDINGS '),
(214, 'fire_final_part_noc', 'number_of_floors', 'NUMBER OF FLOORS '),
(215, 'fire_final_part_noc', 'road_width', 'ROAD WIDTH '),
(216, 'fire_final_part_noc', 'road_width_north', 'ROAD WIDTH NORTH '),
(217, 'fire_final_part_noc', 'road_width_south', 'ROAD WIDTH SOUTH '),
(218, 'fire_final_part_noc', 'road_width_east', 'ROAD WIDTH EAST '),
(219, 'fire_final_part_noc', 'road_width_west', 'ROAD WIDTH WEST '),
(220, 'fire_final_part_noc', 'open_space_margin_north', 'OPEN SPACE MARGIN NORTH '),
(221, 'fire_final_part_noc', 'open_space_margin_south', 'OPEN SPACE MARGIN SOUTH '),
(222, 'fire_final_part_noc', 'open_space_margin_east', 'OPEN SPACE MARGIN EAST '),
(223, 'fire_final_part_noc', 'open_space_margin_west', 'OPEN SPACE MARGIN WEST '),
(224, 'fire_final_part_noc', 'upload_provisional_fire_noc', 'UPLOAD PROVISIONAL FIRE NOC '),
(225, 'fire_final_part_noc', 'upload_revised_provisional_fire_noc', 'UPLOAD REVISED PROVISIONAL FIRE NOC '),
(226, 'fire_final_part_noc', 'upload_architect_application_letter', 'UPLOAD ARCHITECT APPLICATION LETTER '),
(227, 'fire_final_part_noc', 'upload_builders_application_letter', 'UPLOAD BUILDER’S APPLICATION LETTER '),
(228, 'fire_final_part_noc', 'upload_gross_built_up_area_certificate', 'UPLOAD GROSS BUILT-UP AREA CERTIFICATE '),
(229, 'fire_final_part_noc', 'upload_cc_rdp_oc', 'UPLOAD CC / RDP / OC'),
(230, 'fire_final_part_noc', 'upload_floor_plan_set', 'UPLOAD FLOOR PLAN SET '),
(231, 'fire_final_part_noc', 'upload_location_site_photo', 'UPLOAD LOCATION / SITE PHOTO'),
(232, 'fire_final_part_noc', 'upload_google_map_of_land_in_color', 'UPLOAD GOOGLE MAP OF LAND (COLOR) '),
(233, 'fire_final_part_noc', 'declaration', 'DECLARATION '),
(234, 'fire_final_part_noc', 'user_id', 'USER ID '),
(235, 'fire_final_part_noc', 'status', 'STATUS '),
(236, 'fire_final_part_noc', 'paid', 'PAID '),
(237, 'fire_final_part_noc', 'int_no', 'INTERNAL NO. '),
(238, 'fire_final_part_noc', 'yr', 'YEAR '),
(239, 'fire_final_part_noc', 'zone', 'ZONE '),
(240, 'fire_final_part_noc', 'payment_done', 'PAYMENT DONE '),
(241, 'fire_final_part_noc', 'certificate_file', 'CERTIFICATE FILE '),
(242, 'fire_final_part_noc', 'timestamp', 'TIMESTAMP '),
(243, 'fire_final_part_noc', 'application_no', 'APPLICATION NO. '),
(244, 'fire_final_part_noc', 'date', 'DATE '),
(245, 'fire_final_part_noc', 'building_record_count', 'BUILDING RECORD COUNT '),
(246, 'fire_final_part_noc', 'floor_record_count', 'FLOOR RECORD COUNT '),
(247, 'fire_final_part_noc', 'servey_done', 'SURVEY DONE '),
(248, 'fire_final_part_noc', 'upload_noc', 'UPLOAD NOC '),
(249, 'fire_final_part_noc', 'admin_report', 'ADMIN REPORT '),
(250, 'fire_final_part_noc', 'is_revised_noc_taken', 'IS REVISED NOC TAKEN? '),
(251, 'fire_final_part_noc', 'is_revised_provisional_taken', 'IS REVISED PROVISIONAL NOC TAKEN? '),
(252, 'fire_final_part_noc', 'upload_form_a', 'UPLOAD FORM A '),
(253, 'fire_final_part_noc', 'upload_lic_of_mfs', 'UPLOAD LIC OF MFS '),
(254, 'fire_final_part_noc', 'upload_electric_contract', 'UPLOAD ELECTRIC CONTRACT '),
(255, 'fire_final_part_noc', 'upload_site_photo', 'UPLOAD SITE PHOTO '),
(256, 'fire_final_part_noc', 'upload_affidavit', 'UPLOAD AFFIDAVIT '),
(257, 'fire_noc_establishment', 'id', 'ID '),
(258, 'fire_noc_establishment', 'property_number', 'PROPERTY NUMBER '),
(259, 'fire_noc_establishment', 'name_of_property_owner', 'NAME OF PROPERTY OWNER '),
(260, 'fire_noc_establishment', 'pending_due_amount', 'PENDING DUE AMOUNT '),
(261, 'fire_noc_establishment', 'area_in_sq_ft', 'AREA (SQ. FT.) '),
(262, 'fire_noc_establishment', 'applicant_name', 'APPLICANT NAME '),
(263, 'fire_noc_establishment', 'establishment_name', 'ESTABLISHMENT NAME '),
(264, 'fire_noc_establishment', 'establishment_address', 'ESTABLISHMENT ADDRESS '),
(265, 'fire_noc_establishment', 'establishment_type_id', 'ESTABLISHMENT TYPE  '),
(266, 'fire_noc_establishment', 'establishment_type_value', 'ESTABLISHMENT TYPE '),
(267, 'fire_noc_establishment', 'zone_id', 'ZONE '),
(268, 'fire_noc_establishment', 'zone_value', 'ZONE '),
(269, 'fire_noc_establishment', 'ward_id', 'WARD  '),
(270, 'fire_noc_establishment', 'ward_value', 'WARD '),
(271, 'fire_noc_establishment', 'mobile_no', 'MOBILE NO. '),
(272, 'fire_noc_establishment', 'subject', 'SUBJECT '),
(273, 'fire_noc_establishment', 'date_of_application', 'DATE OF APPLICATION '),
(274, 'fire_noc_establishment', 'upload_form_b', 'UPLOAD FORM B '),
(275, 'fire_noc_establishment', 'upload_agency_license_copy', 'UPLOAD AGENCY LICENSE COPY '),
(276, 'fire_noc_establishment', 'upload_license_agencies_certificate', 'UPLOAD LICENSE AGENCY CERTIFICATE '),
(277, 'fire_noc_establishment', 'upload_fire_equipment_color_photos', 'UPLOAD FIRE EQUIPMENT COLOR PHOTOS '),
(278, 'fire_noc_establishment', 'upload_available_fire_equipments_isi_certificate', 'UPLOAD AVAILABLE FIRE EQUIPMENTS ISI CERTIFICATE '),
(279, 'fire_noc_establishment', 'upload_property_tax_receipt_or_agreement_or_rent_copy', 'UPLOAD PROPERTY TAX  / AGREEMENT / RENT COPY '),
(280, 'fire_noc_establishment', 'upload_mpcb_certificate', 'UPLOAD MPCB CERTIFICATE '),
(281, 'fire_noc_establishment', 'upload_society_noc', 'UPLOAD SOCIETY NOC '),
(282, 'fire_noc_establishment', 'upload_internal_map', 'UPLOAD INTERNAL MAP '),
(283, 'fire_noc_establishment', 'upload_location_layout_map', 'UPLOAD LOCATION / LAYOUT MAP'),
(284, 'fire_noc_establishment', 'upload_electric_audit_report', 'UPLOAD ELECTRIC AUDIT REPORT '),
(285, 'fire_noc_establishment', 'upload_affidavite', 'UPLOAD AFFIDAVIT '),
(286, 'fire_noc_establishment', 'upload_lift_annual_maintenance_certificate', 'UPLOAD LIFT ANNUAL MAINTENANCE CERTIFICATE '),
(287, 'fire_noc_establishment', 'upload_ac_annual_maintenance_certificate', 'UPLOAD AC ANNUAL MAINTENANCE CERTIFICATE '),
(288, 'fire_noc_establishment', 'upload_building_structural_stability_report', 'UPLOAD BUILDING STRUCTURAL STABILITY REPORT '),
(289, 'fire_noc_establishment', 'declaration', 'DECLARATION '),
(290, 'fire_noc_establishment', 'user_id', 'USER ID '),
(291, 'fire_noc_establishment', 'status', 'STATUS '),
(292, 'fire_noc_establishment', 'paid', 'PAID '),
(293, 'fire_noc_establishment', 'int_no', 'INTERNAL NO. '),
(294, 'fire_noc_establishment', 'yr', 'YEAR '),
(295, 'fire_noc_establishment', 'zone', 'ZONE '),
(296, 'fire_noc_establishment', 'payment_done', 'PAYMENT DONE '),
(297, 'fire_noc_establishment', 'certificate_file', 'CERTIFICATE FILE '),
(298, 'fire_noc_establishment', 'timestamp', 'TIMESTAMP '),
(299, 'fire_noc_establishment', 'application_no', 'APPLICATION NO. '),
(300, 'fire_noc_establishment', 'working_hours_from', 'WORKING HOURS FROM '),
(301, 'fire_noc_establishment', 'working_hours_to', 'WORKING HOURS TO '),
(302, 'fire_noc_establishment', 'worker_count', 'WORKER COUNT '),
(303, 'fire_noc_establishment', 'working_area_sqr_feet', 'WORKING AREA (SQ. FT.) '),
(304, 'fire_noc_establishment', 'expiry_date', 'EXPIRY DATE '),
(305, 'fire_noc_establishment', 'inspection_done', 'INSPECTION DONE '),
(306, 'fire_noc_establishment', 'tippni', 'TIPPANI '),
(307, 'fire_noc_establishment', 'noc', 'NOC '),
(308, 'fire_noc_establishment', 'application_type', 'APPLICATION TYPE '),
(309, 'fire_noc_provisional_new', 'id', 'ID '),
(310, 'fire_noc_provisional_new', 'applicant_name', 'APPLICANT NAME '),
(311, 'fire_noc_provisional_new', 'applicant_address', 'APPLICANT ADDRESS '),
(312, 'fire_noc_provisional_new', 'zone_id', 'ZONE '),
(313, 'fire_noc_provisional_new', 'zone_value', 'ZONE '),
(314, 'fire_noc_provisional_new', 'mobile_no', 'MOBILE NO. '),
(315, 'fire_noc_provisional_new', 'architect_or_developers_lic_number', 'ARCHITECT / DEVELOPER LICENSE NO.'),
(316, 'fire_noc_provisional_new', 'survey_number', 'SURVEY NUMBER '),
(317, 'fire_noc_provisional_new', 'village', 'VILLAGE '),
(318, 'fire_noc_provisional_new', 'vp_number', 'VP NUMBER '),
(319, 'fire_noc_provisional_new', 'number_of_buildings', 'NUMBER OF BUILDINGS '),
(320, 'fire_noc_provisional_new', 'number_of_floors', 'NUMBER OF FLOORS '),
(321, 'fire_noc_provisional_new', 'road_width', 'ROAD WIDTH '),
(322, 'fire_noc_provisional_new', 'road_width_north', 'ROAD WIDTH NORTH '),
(323, 'fire_noc_provisional_new', 'road_width_south', 'ROAD WIDTH SOUTH '),
(324, 'fire_noc_provisional_new', 'road_width_east', 'ROAD WIDTH EAST '),
(325, 'fire_noc_provisional_new', 'road_width_west', 'ROAD WIDTH WEST '),
(326, 'fire_noc_provisional_new', 'open_space_margin_north', 'OPEN SPACE MARGIN NORTH '),
(327, 'fire_noc_provisional_new', 'open_space_margin_south', 'OPEN SPACE MARGIN SOUTH '),
(328, 'fire_noc_provisional_new', 'open_space_margin_east', 'OPEN SPACE MARGIN EAST '),
(329, 'fire_noc_provisional_new', 'open_space_margin_west', 'OPEN SPACE MARGIN WEST '),
(330, 'fire_noc_provisional_new', 'upload_architect_application_letter', 'UPLOAD ARCHITECT APPLICATION LETTER '),
(331, 'fire_noc_provisional_new', 'upload_builders_application_letter', 'UPLOAD BUILDER’S APPLICATION LETTER '),
(332, 'fire_noc_provisional_new', 'upload_gross_built_up_area_certificate', 'UPLOAD GROSS BUILT-UP AREA CERTIFICATE '),
(333, 'fire_noc_provisional_new', 'upload_cc_rdp_oc', 'UPLOAD CC / RDP / OC '),
(334, 'fire_noc_provisional_new', 'upload_floor_plan_set', 'UPLOAD FLOOR PLAN SET '),
(335, 'fire_noc_provisional_new', 'upload_location_site_photo', 'UPLOAD LOCATION / SITE PHOTO'),
(336, 'fire_noc_provisional_new', 'upload_google_map_of_land_in_color', 'UPLOAD GOOGLE MAP OF LAND (COLOR) '),
(337, 'fire_noc_provisional_new', 'declaration', 'DECLARATION '),
(338, 'fire_noc_provisional_new', 'date', 'DATE '),
(339, 'fire_noc_provisional_new', 'user_id', 'USER ID '),
(340, 'fire_noc_provisional_new', 'status', 'STATUS '),
(341, 'fire_noc_provisional_new', 'paid', 'PAID '),
(342, 'fire_noc_provisional_new', 'int_no', 'INTERNAL NO. '),
(343, 'fire_noc_provisional_new', 'yr', 'YEAR '),
(344, 'fire_noc_provisional_new', 'zone', 'ZONE '),
(345, 'fire_noc_provisional_new', 'payment_done', 'PAYMENT DONE '),
(346, 'fire_noc_provisional_new', 'certificate_file', 'CERTIFICATE FILE '),
(347, 'fire_noc_provisional_new', 'timestamp', 'TIMESTAMP '),
(348, 'fire_noc_provisional_new', 'application_no', 'APPLICATION NO. '),
(349, 'fire_noc_provisional_new', 'building_record_count', 'BUILDING RECORD COUNT '),
(350, 'fire_noc_provisional_new', 'floor_record_count', 'FLOOR RECORD COUNT '),
(351, 'fire_noc_provisional_new', 'servey_done', 'SURVEY DONE '),
(352, 'fire_noc_provisional_new', 'upload_noc', 'UPLOAD NOC '),
(353, 'fire_noc_provisional_new', 'admin_report', 'ADMIN REPORT '),
(354, 'fire_noc_provisional_new', 'survey_done', 'SURVEY DONE '),
(355, 'fire_noc_provisional_new', 'uplaod_architect_application_with_building_plans', 'UPLOAD ARCHITECT APPLICATION WITH BUILDING PLANS '),
(356, 'fire_noc_provisional_new', 'upload_layout_of_fire_prevention_and_protection_measures', 'UPLOAD LAYOUT OF FIRE PREVENTION AND PROTECTION MEASURES '),
(357, 'fire_noc_provisional_new', 'is_redevelopment', 'IS REDEVELOPMENT? '),
(358, 'fire_noc_provisional_new', 'upload_society_consent_or_recommendation_letter', 'UPLOAD SOCIETY CONSENT OR RECOMMENDATION LETTER '),
(359, 'fire_noc_provisional_new', 'upload_dbr_report', 'UPLOAD D. B. R. REPORT (FOR BUILDINGS ABOVE 90 METERS IN HEIGHT) '),
(360, 'fire_noc_revised_provisional', 'provisional_noc_number', 'PROVISIONAL NOC NUMBER '),
(361, 'fire_noc_revised_provisional', 'applicant_name', 'APPLICANT NAME '),
(362, 'fire_noc_revised_provisional', 'applicant_address', 'APPLICANT ADDRESS '),
(363, 'fire_noc_revised_provisional', 'zone_id', 'ZONE  '),
(364, 'fire_noc_revised_provisional', 'zone_value', 'ZONE '),
(365, 'fire_noc_revised_provisional', 'mobile_no', 'MOBILE NO. '),
(366, 'fire_noc_revised_provisional', 'architect_or_developers_lic_number', 'ARCHITECT / DEVELOPER LICENSE NO.'),
(367, 'fire_noc_revised_provisional', 'survey_number', 'SURVEY NUMBER '),
(368, 'fire_noc_revised_provisional', 'village', 'VILLAGE '),
(369, 'fire_noc_revised_provisional', 'vp_number', 'VP NUMBER '),
(370, 'fire_noc_revised_provisional', 'number_of_buildings', 'NUMBER OF BUILDINGS '),
(371, 'fire_noc_revised_provisional', 'number_of_floors', 'NUMBER OF FLOORS '),
(372, 'fire_noc_revised_provisional', 'road_width', 'ROAD WIDTH '),
(373, 'fire_noc_revised_provisional', 'road_width_north', 'ROAD WIDTH NORTH '),
(374, 'fire_noc_revised_provisional', 'road_width_south', 'ROAD WIDTH SOUTH '),
(375, 'fire_noc_revised_provisional', 'road_width_east', 'ROAD WIDTH EAST '),
(376, 'fire_noc_revised_provisional', 'road_width_west', 'ROAD WIDTH WEST '),
(377, 'fire_noc_revised_provisional', 'open_space_margin_north', 'OPEN SPACE MARGIN NORTH '),
(378, 'fire_noc_revised_provisional', 'open_space_margin_south', 'OPEN SPACE MARGIN SOUTH '),
(379, 'fire_noc_revised_provisional', 'open_space_margin_east', 'OPEN SPACE MARGIN EAST '),
(380, 'fire_noc_revised_provisional', 'open_space_margin_west', 'OPEN SPACE MARGIN WEST '),
(381, 'fire_noc_revised_provisional', 'upload_provisional_fire_noc', 'UPLOAD PROVISIONAL FIRE NOC '),
(382, 'fire_noc_revised_provisional', 'upload_architect_application_letter', 'UPLOAD ARCHITECT APPLICATION LETTER '),
(383, 'fire_noc_revised_provisional', 'upload_builders_application_letter', 'UPLOAD BUILDER’S APPLICATION LETTER '),
(384, 'fire_noc_revised_provisional', 'upload_gross_built_up_area_certificate', 'UPLOAD GROSS BUILT-UP AREA CERTIFICATE '),
(385, 'fire_noc_revised_provisional', 'upload_cc_rdp_oc', 'UPLOAD CC / RDP / OC '),
(386, 'fire_noc_revised_provisional', 'upload_floor_plan_set', 'UPLOAD FLOOR PLAN SET '),
(387, 'fire_noc_revised_provisional', 'upload_location_site_photo', 'UPLOAD LOCATION  / SITE PHOTO'),
(388, 'fire_noc_revised_provisional', 'upload_google_map_of_land_in_color', 'UPLOAD GOOGLE MAP OF LAND (COLOR) '),
(389, 'fire_noc_revised_provisional', 'declaration', 'DECLARATION '),
(390, 'fire_noc_revised_provisional', 'date', 'DATE '),
(391, 'fire_noc_revised_provisional', 'user_id', 'USER ID '),
(392, 'fire_noc_revised_provisional', 'status', 'STATUS '),
(393, 'fire_noc_revised_provisional', 'paid', 'PAID '),
(394, 'fire_noc_revised_provisional', 'int_no', 'INTERNAL NO. '),
(395, 'fire_noc_revised_provisional', 'yr', 'YEAR '),
(396, 'fire_noc_revised_provisional', 'zone', 'ZONE '),
(397, 'fire_noc_revised_provisional', 'payment_done', 'PAYMENT DONE '),
(398, 'fire_noc_revised_provisional', 'certificate_file', 'CERTIFICATE FILE '),
(399, 'fire_noc_revised_provisional', 'timestamp', 'TIMESTAMP '),
(400, 'fire_noc_revised_provisional', 'application_no', 'APPLICATION NO. '),
(401, 'fire_noc_revised_provisional', 'building_record_count', 'BUILDING RECORD COUNT '),
(402, 'fire_noc_revised_provisional', 'floor_record_count', 'FLOOR RECORD COUNT '),
(403, 'fire_noc_revised_provisional', 'servey_done', 'SURVEY DONE '),
(404, 'fire_noc_revised_provisional', 'upload_noc', 'UPLOAD NOC '),
(405, 'fire_noc_revised_provisional', 'admin_report', 'ADMIN REPORT '),
(406, 'fire_noc_revised_provisional', 'change_of_usage', 'CHANGE OF USAGE '),
(407, 'fire_noc_revised_provisional', 'upload_change_of_usage_certificate', 'UPLOAD CHANGE OF USAGE CERTIFICATE '),
(408, 'fire_noc_revised_provisional', 'upload_old_provisional_receipt_copy', 'UPLOAD OLD PROVISIONAL RECEIPT COPY '),
(409, 'fire_noc_revised_provisional', 'upload_hardship_letter', 'UPLOAD HARDSHIP LETTER '),
(410, 'floor_details', 'id', 'ID '),
(411, 'floor_details', 'foor_name_id', 'FLOOR NAME  '),
(412, 'floor_details', 'foor_name_value', 'FLOOR NAME '),
(413, 'floor_details', 'recid', 'RECORD  '),
(414, 'floor_details', 'floor_wise_p_line_area_in_sqr_mtr', 'FLOOR-WISE P-LINE AREA (SQ. M) '),
(415, 'floor_details', 'hight_in_mtr_from_ground', 'HEIGHT FROM GROUND (M) '),
(416, 'floor_details', 'date', 'DATE '),
(417, 'floor_details', 'user_id', 'USER ID '),
(418, 'floor_details', 'db_name', 'DATABASE NAME '),
(419, 'floor_details', 'locked', 'LOCKED '),
(420, 'floor_details', 'refuge_area', 'REFUGE AREA '),
(421, 'floor_details', 'hight_of_refuge_area_from_ground_in_mtr', 'HEIGHT OF REFUGE AREA FROM GROUND (M) '),
(422, 'floor_details', 'provided_refuge_area_in_sqr_mtr', 'PROVIDED REFUGE AREA (SQ. M) '),
(423, 'floor_details', 'floor_type', 'FLOOR TYPE '),
(424, 'floor_details', 'typical_floor_plan', 'TYPICAL FLOOR PLAN '),
(425, 'govt_hospital_inspection_form', 'id', 'ID '),
(426, 'govt_hospital_inspection_form', 'hospital_or_health_center_name', 'HOSPITAL / HEALTH CENTER NAME'),
(427, 'govt_hospital_inspection_form', 'hospital_or_health_center_address', 'HOSPITAL / HEALTH CENTER ADDRESS'),
(428, 'govt_hospital_inspection_form', 'doctor_name', 'DOCTOR NAME '),
(429, 'govt_hospital_inspection_form', 'doctor_mobile_no', 'DOCTOR MOBILE NO. '),
(430, 'govt_hospital_inspection_form', 'building_height', 'BUILDING HEIGHT '),
(431, 'govt_hospital_inspection_form', 'lifts_company_name', 'LIFTS COMPANY NAME '),
(432, 'govt_hospital_inspection_form', 'no_lifts_in_building', 'NUMBER OF LIFTS IN BUILDING '),
(433, 'govt_hospital_inspection_form', 'capacity_of_lifts', 'CAPACITY OF LIFTS '),
(434, 'govt_hospital_inspection_form', 'elevators_amc_done_by_org_name', 'ELEVATORS AMC DONE BY ORGANIZATION NAME '),
(435, 'govt_hospital_inspection_form', 'elevators_amc_period', 'ELEVATORS AMC PERIOD '),
(436, 'govt_hospital_inspection_form', 'number_of_staircase_in_bulding', 'NUMBER OF STAIRCASES IN BUILDING '),
(437, 'govt_hospital_inspection_form', 'width_of_staircase_in_bulding', 'WIDTH OF STAIRCASE IN BUILDING '),
(438, 'govt_hospital_inspection_form', 'entrance_routes_count', 'ENTRANCE ROUTES COUNT '),
(439, 'govt_hospital_inspection_form', 'exit_routes_count', 'EXIT ROUTES COUNT '),
(440, 'govt_hospital_inspection_form', 'is_record_room_available', 'IS RECORD ROOM AVAILABLE? '),
(441, 'govt_hospital_inspection_form', 'hospital_area', 'HOSPITAL AREA '),
(442, 'govt_hospital_inspection_form', 'doctors_count', 'NUMBER OF DOCTORS '),
(443, 'govt_hospital_inspection_form', 'nurses_count', 'NUMBER OF NURSES '),
(444, 'govt_hospital_inspection_form', 'ward_boy_count', 'NUMBER OF WARD BOYS '),
(445, 'govt_hospital_inspection_form', 'aunts_count', 'NUMBER OF AUNTS '),
(446, 'govt_hospital_inspection_form', 'clerk_count', 'NUMBER OF CLERKS '),
(447, 'govt_hospital_inspection_form', 'other_employees_count', 'OTHER EMPLOYEES COUNT '),
(448, 'govt_hospital_inspection_form', 'floor_number_of_hospital_id', 'FLOOR NUMBER  '),
(449, 'govt_hospital_inspection_form', 'floor_number_of_hospital_value', 'FLOOR NUMBER '),
(450, 'govt_hospital_inspection_form', 'is_ot_dept', 'IS OT DEPT? '),
(451, 'govt_hospital_inspection_form', 'is_xray_dept', 'IS X-RAY DEPT? '),
(452, 'govt_hospital_inspection_form', 'is_opd_dept', 'IS OPD DEPT? '),
(453, 'govt_hospital_inspection_form', 'is_emergency_opd_dept', 'IS EMERGENCY OPD DEPT? '),
(454, 'govt_hospital_inspection_form', 'is_patholoty_dept', 'IS PATHOLOGY DEPT? '),
(455, 'govt_hospital_inspection_form', 'is_post_nutal_care_dept', 'IS POST-NATAL CARE DEPT? '),
(456, 'govt_hospital_inspection_form', 'is_icu_dept', 'IS ICU DEPT? '),
(457, 'govt_hospital_inspection_form', 'is_gw_men_dept', 'IS GENERAL WARD MEN DEPT? '),
(458, 'govt_hospital_inspection_form', 'is_gw_women_dept', 'IS GENERAL WARD WOMEN DEPT? '),
(459, 'govt_hospital_inspection_form', 'is_special_ward_dept', 'IS SPECIAL WARD DEPT? '),
(460, 'govt_hospital_inspection_form', 'is_ante_nutal_care_dept', 'IS ANTE-NATAL CARE DEPT? '),
(461, 'govt_hospital_inspection_form', 'is_nicu_dept', 'IS NICU DEPT? '),
(462, 'govt_hospital_inspection_form', 'directional_board', 'DIRECTIONAL BOARD '),
(463, 'govt_hospital_inspection_form', 'total_no_beds_hospital', 'TOTAL NO. OF BEDS IN HOSPITAL '),
(464, 'govt_hospital_inspection_form', 'generator_system_capacity', 'GENERATOR SYSTEM CAPACITY '),
(465, 'govt_hospital_inspection_form', 'generator_system_amc_org_name', 'GENERATOR AMC ORGANIZATION NAME '),
(466, 'govt_hospital_inspection_form', 'generator_system_amc_period', 'GENERATOR AMC PERIOD '),
(467, 'govt_hospital_inspection_form', 'electrical_audit_report_org_name', 'ELECTRICAL AUDIT REPORT ORG NAME '),
(468, 'govt_hospital_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(469, 'govt_hospital_inspection_form', 'emergency_power_system', 'EMERGENCY POWER SYSTEM '),
(470, 'govt_hospital_inspection_form', 'info_about_fire_prevention_measures', 'INFO ABOUT FIRE PREVENTION MEASURES '),
(471, 'govt_hospital_inspection_form', 'mock_drill_date', 'MOCK DRILL DATE '),
(472, 'govt_hospital_inspection_form', 'no_emp_present_for_mock_drill', 'NO. OF EMPLOYEES PRESENT FOR MOCK DRILL '),
(473, 'govt_hospital_inspection_form', 'upload_photo_of_employee_present_for_mock_drill', 'UPLOAD PHOTO OF EMPLOYEES PRESENT FOR MOCK DRILL '),
(474, 'govt_hospital_inspection_form', 'upload_fire_marshal_names_with_mobile_no', 'UPLOAD FIRE MARSHAL NAMES WITH MOBILE NO. '),
(475, 'govt_hospital_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE CAPACITY (TERRACE) '),
(476, 'govt_hospital_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE CAPACITY (GROUND FLOOR) '),
(477, 'govt_hospital_inspection_form', 'fire_noc_details', 'FIRE NOC DETAILS '),
(478, 'govt_hospital_inspection_form', 'fire_noc_date', 'FIRE NOC DATE '),
(479, 'govt_hospital_inspection_form', 'other_info_about_hospital', 'OTHER INFO ABOUT HOSPITAL '),
(480, 'govt_hospital_inspection_form', 'oxygen_system', 'OXYGEN SYSTEM '),
(481, 'govt_hospital_inspection_form', 'maintenance_of_emergency_routes', 'MAINTENANCE OF EMERGENCY ROUTES '),
(482, 'govt_hospital_inspection_form', 'remark', 'REMARK '),
(483, 'govt_hospital_inspection_form', 'user_id', 'USER ID '),
(484, 'govt_hospital_inspection_form', 'date', 'DATE '),
(485, 'govt_hospital_inspection_form', 'status', 'STATUS '),
(486, 'govt_hospital_inspection_form', 'paid', 'PAID '),
(487, 'govt_hospital_inspection_form', 'int_no', 'INTERNAL NO. '),
(488, 'govt_hospital_inspection_form', 'yr', 'YEAR '),
(489, 'govt_hospital_inspection_form', 'zone', 'ZONE '),
(490, 'govt_hospital_inspection_form', 'payment_done', 'PAYMENT DONE '),
(491, 'govt_hospital_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(492, 'govt_hospital_inspection_form', 'recid', 'RECORD ID '),
(493, 'hotel_inspection_form', 'id', 'ID '),
(494, 'hotel_inspection_form', 'hotel_name', 'HOTEL NAME '),
(495, 'hotel_inspection_form', 'hotel_address', 'HOTEL ADDRESS '),
(496, 'hotel_inspection_form', 'owners_name', 'OWNERS NAME '),
(497, 'hotel_inspection_form', 'mobile_no', 'MOBILE NO. '),
(498, 'hotel_inspection_form', 'type_of_application_id', 'TYPE OF APPLICATION  '),
(499, 'hotel_inspection_form', 'type_of_application_value', 'TYPE OF APPLICATION '),
(500, 'hotel_inspection_form', 'old_noc_number', 'OLD NOC NUMBER '),
(501, 'hotel_inspection_form', 'old_noc_date', 'OLD NOC DATE '),
(502, 'hotel_inspection_form', 'building_height', 'BUILDING HEIGHT '),
(503, 'hotel_inspection_form', 'building_floor', 'NUMBER OF FLOORS '),
(504, 'hotel_inspection_form', 'no_n_width_stairs_one', 'STAIRCASE 1 WIDTH '),
(505, 'hotel_inspection_form', 'no_n_width_stairs_two', 'STAIRCASE 2 WIDTH '),
(506, 'hotel_inspection_form', 'no_n_width_stairs_three', 'STAIRCASE 3 WIDTH '),
(507, 'hotel_inspection_form', 'no_lifts_in_the_building', 'NUMBER OF LIFTS '),
(508, 'hotel_inspection_form', 'no_entrance_routes', 'NUMBER OF ENTRANCE ROUTES '),
(509, 'hotel_inspection_form', 'no_exit_routes', 'NUMBER OF EXIT ROUTES '),
(510, 'hotel_inspection_form', 'store_room_id', 'STORE ROOM ID '),
(511, 'hotel_inspection_form', 'store_room_value', 'STORE ROOM '),
(512, 'hotel_inspection_form', 'natural_ventilation_windows', 'NATURAL VENTILATION WINDOWS '),
(513, 'hotel_inspection_form', 'area', 'AREA '),
(514, 'hotel_inspection_form', 'no_employees_female', 'NUMBER OF FEMALE EMPLOYEES '),
(515, 'hotel_inspection_form', 'no_employees_male', 'NUMBER OF MALE EMPLOYEES '),
(516, 'hotel_inspection_form', 'no_employees_total', 'TOTAL EMPLOYEES '),
(517, 'hotel_inspection_form', 'working_hours', 'WORKING HOURS '),
(518, 'hotel_inspection_form', 'floor_number_of_hotel', 'FLOOR NUMBER OF HOTEL '),
(519, 'hotel_inspection_form', 'is_directional_board_available', 'IS DIRECTIONAL BOARD AVAILABLE? '),
(520, 'hotel_inspection_form', 'hotel_departments', 'HOTEL DEPARTMENTS '),
(521, 'hotel_inspection_form', 'table_quantity', 'TABLE QUANTITY '),
(522, 'hotel_inspection_form', 'chair_quantity', 'CHAIR QUANTITY '),
(523, 'hotel_inspection_form', 'is_generator_system_available', 'IS GENERATOR SYSTEM AVAILABLE? '),
(524, 'hotel_inspection_form', 'is_structural_audit_report_avilable_id', 'STRUCTURAL AUDIT REPORT AVAILABLE  '),
(525, 'hotel_inspection_form', 'is_structural_audit_report_avilable_value', 'STRUCTURAL AUDIT REPORT AVAILABLE '),
(526, 'hotel_inspection_form', 'structural_audit_report_date', 'STRUCTURAL AUDIT REPORT DATE '),
(527, 'hotel_inspection_form', 'is_electrical_audit_report_available_id', 'ELECTRICAL AUDIT REPORT AVAILABLE ID '),
(528, 'hotel_inspection_form', 'is_electrical_audit_report_available_value', 'ELECTRICAL AUDIT REPORT AVAILABLE '),
(529, 'hotel_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(530, 'hotel_inspection_form', 'fire_prevention_measures_information', 'FIRE PREVENTION MEASURES INFORMATION '),
(531, 'hotel_inspection_form', 'extinguishing_licen_agency_name', 'EXTINGUISHING LICENSE AGENCY NAME '),
(532, 'hotel_inspection_form', 'extinguishing_licen_agency_no', 'EXTINGUISHING LICENSE AGENCY NUMBER '),
(533, 'hotel_inspection_form', 'extinguishing_licen_agency_validity', 'EXTINGUISHING LICENSE VALIDITY '),
(534, 'hotel_inspection_form', 'extinguishing_licen_agency_cert_no', 'EXTINGUISHING LICENSE CERTIFICATE NUMBER '),
(535, 'hotel_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE CAPACITY (TERRACE) '),
(536, 'hotel_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE CAPACITY (GROUND FLOOR) '),
(537, 'hotel_inspection_form', 'gas_bank', 'GAS BANK '),
(538, 'hotel_inspection_form', 'lpg_cylender', 'LPG CYLINDER '),
(539, 'hotel_inspection_form', 'cng_pipe_line', 'CNG PIPE LINE '),
(540, 'hotel_inspection_form', 'user_id', 'USER ID '),
(541, 'hotel_inspection_form', 'date', 'DATE '),
(542, 'hotel_inspection_form', 'status', 'STATUS '),
(543, 'hotel_inspection_form', 'paid', 'PAID '),
(544, 'hotel_inspection_form', 'int_no', 'INTERNAL NO. '),
(545, 'hotel_inspection_form', 'yr', 'YEAR '),
(546, 'hotel_inspection_form', 'zone', 'ZONE '),
(547, 'hotel_inspection_form', 'payment_done', 'PAYMENT DONE '),
(548, 'hotel_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(549, 'hotel_inspection_form', 'timestamp', 'TIMESTAMP '),
(550, 'hotel_inspection_form', 'recid', 'RECORD ID '),
(551, 'industrial_factory_inspection_form', 'id', 'ID '),
(552, 'industrial_factory_inspection_form', 'business_name', 'BUSINESS NAME '),
(553, 'industrial_factory_inspection_form', 'business_address', 'BUSINESS ADDRESS '),
(554, 'industrial_factory_inspection_form', 'mobile_no', 'MOBILE NO. '),
(555, 'industrial_factory_inspection_form', 'owners_name', 'OWNER’S NAME '),
(556, 'industrial_factory_inspection_form', 'residential_address', 'RESIDENTIAL ADDRESS '),
(557, 'industrial_factory_inspection_form', 'owners_mobile_number', 'OWNER’S MOBILE NUMBER '),
(558, 'industrial_factory_inspection_form', 'type_of_application_id', 'TYPE OF APPLICATION  '),
(559, 'industrial_factory_inspection_form', 'type_of_application_value', 'TYPE OF APPLICATION '),
(560, 'industrial_factory_inspection_form', 'old_noc_number', 'OLD NOC NUMBER '),
(561, 'industrial_factory_inspection_form', 'old_noc_date', 'OLD NOC DATE '),
(562, 'industrial_factory_inspection_form', 'building_type', 'BUILDING TYPE '),
(563, 'industrial_factory_inspection_form', 'building_height', 'BUILDING HEIGHT '),
(564, 'industrial_factory_inspection_form', 'building_floor', 'BUILDING FLOORS '),
(565, 'industrial_factory_inspection_form', 'no_of_staircase_in_building_and_width', 'NO. & WIDTH OF STAIRCASES '),
(566, 'industrial_factory_inspection_form', 'no_of_commercial_spaces', 'NO. OF COMMERCIAL SPACES '),
(567, 'industrial_factory_inspection_form', 'structural_audit_report_year_of_construction', 'YEAR OF CONSTRUCTION (AUDIT REPORT) '),
(568, 'industrial_factory_inspection_form', 'structural_audit_report_date', 'STRUCTURAL AUDIT REPORT DATE '),
(569, 'industrial_factory_inspection_form', 'structural_audit_agency_name', 'STRUCTURAL AUDIT AGENCY NAME '),
(570, 'industrial_factory_inspection_form', 'structural_audit_agency_address', 'STRUCTURAL AUDIT AGENCY ADDRESS '),
(571, 'industrial_factory_inspection_form', 'structural_audit_agency_mobile_no', 'STRUCTURAL AUDIT AGENCY MOBILE NO. '),
(572, 'industrial_factory_inspection_form', 'permissions_obtained_for_the_business', 'PERMISSIONS OBTAINED '),
(573, 'industrial_factory_inspection_form', 'female_employees_count', 'FEMALE EMPLOYEES COUNT '),
(574, 'industrial_factory_inspection_form', 'male_employees_count', 'MALE EMPLOYEES COUNT '),
(575, 'industrial_factory_inspection_form', 'total_employees_count', 'TOTAL EMPLOYEES COUNT '),
(576, 'industrial_factory_inspection_form', 'working_hours_at_business_premises', 'WORKING HOURS '),
(577, 'industrial_factory_inspection_form', 'natural_ventilation_total_windows', 'TOTAL WINDOWS (VENTILATION) '),
(578, 'industrial_factory_inspection_form', 'natural_ventilation_total_doors', 'TOTAL DOORS (VENTILATION) '),
(579, 'industrial_factory_inspection_form', 'area_of_business_premises', 'AREA OF BUSINESS PREMISES '),
(580, 'industrial_factory_inspection_form', 'entrance_route_premises', 'ENTRANCE ROUTE '),
(581, 'industrial_factory_inspection_form', 'exit_route_premises', 'EXIT ROUTE '),
(582, 'industrial_factory_inspection_form', 'record_room', 'RECORD ROOM '),
(583, 'industrial_factory_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE (TERRACE) '),
(584, 'industrial_factory_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE (GROUND FLOOR) '),
(585, 'industrial_factory_inspection_form', 'no_lifts_in_the_building', 'NO. OF LIFTS '),
(586, 'industrial_factory_inspection_form', 'capacity_lifts_in_the_building', 'LIFT CAPACITY '),
(587, 'industrial_factory_inspection_form', 'electrical_connection_capacity', 'ELECTRICAL CONNECTION CAPACITY '),
(588, 'industrial_factory_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(589, 'industrial_factory_inspection_form', 'electrical_audit_agency_name', 'ELECTRICAL AUDIT AGENCY NAME '),
(590, 'industrial_factory_inspection_form', 'electrical_audit_agency_address', 'ELECTRICAL AUDIT AGENCY ADDRESS '),
(591, 'industrial_factory_inspection_form', 'electrical_audit_agency_mobile_no', 'ELECTRICAL AUDIT AGENCY MOBILE NO. '),
(592, 'industrial_factory_inspection_form', 'generator_system', 'GENERATOR SYSTEM '),
(593, 'industrial_factory_inspection_form', 'raw_material_name', 'RAW MATERIAL NAME '),
(594, 'industrial_factory_inspection_form', 'raw_material_storage_capacity', 'RAW MATERIAL STORAGE CAPACITY '),
(595, 'industrial_factory_inspection_form', 'no_of_lpg_gas_cylinders', 'NO. OF LPG CYLINDERS '),
(596, 'industrial_factory_inspection_form', 'name_of_final_product', 'FINAL PRODUCT NAME '),
(597, 'industrial_factory_inspection_form', 'storage_capacity_of_final_product', 'FINAL PRODUCT STORAGE CAPACITY '),
(598, 'industrial_factory_inspection_form', 'fire_extinguishing_permanent', 'FIRE EXTINGUISHING (PERMANENT) '),
(599, 'industrial_factory_inspection_form', 'fire_extinguishing_temporary', 'FIRE EXTINGUISHING (TEMPORARY) '),
(600, 'industrial_factory_inspection_form', 'extinguishing_license_agency_name', 'FIRE LICENSE AGENCY NAME '),
(601, 'industrial_factory_inspection_form', 'extinguishing_license_agency_lno', 'LICENSE NO. '),
(602, 'industrial_factory_inspection_form', 'extinguishing_license_agency_lvalidity', 'LICENSE VALIDITY '),
(603, 'industrial_factory_inspection_form', 'extinguishing_licen_agency_cert_no', 'CERTIFICATE NO. '),
(604, 'industrial_factory_inspection_form', 'user_id', 'USER ID '),
(605, 'industrial_factory_inspection_form', 'date', 'DATE '),
(606, 'industrial_factory_inspection_form', 'status', 'STATUS '),
(607, 'industrial_factory_inspection_form', 'paid', 'PAID '),
(608, 'industrial_factory_inspection_form', 'int_no', 'INTERNAL NO. '),
(609, 'industrial_factory_inspection_form', 'yr', 'YEAR '),
(610, 'industrial_factory_inspection_form', 'zone', 'ZONE '),
(611, 'industrial_factory_inspection_form', 'payment_done', 'PAYMENT DONE '),
(612, 'industrial_factory_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(613, 'industrial_factory_inspection_form', 'timestamp', 'TIMESTAMP '),
(614, 'industrial_factory_inspection_form', 'recid', 'RECORD ID '),
(615, 'lift_details', 'id', 'ID '),
(616, 'lift_details', 'building_id', 'BUILDING ID '),
(617, 'lift_details', 'lift_no', 'LIFT NUMBER '),
(618, 'lift_details', 'lift_type', 'LIFT TYPE '),
(619, 'lift_details', 'lift_from_floor', 'LIFT FROM FLOOR '),
(620, 'lift_details', 'lift_to_floor', 'LIFT TO FLOOR '),
(621, 'lift_details', 'rec_id', 'RECORD ID '),
(622, 'lift_details', 'db_name', 'DATABASE NAME '),
(623, 'mall_cinema_inspection_form', 'id', 'ID '),
(624, 'mall_cinema_inspection_form', 'business_name', 'BUSINESS NAME '),
(625, 'mall_cinema_inspection_form', 'business_address', 'BUSINESS ADDRESS '),
(626, 'mall_cinema_inspection_form', 'mobile_no', 'MOBILE NO. '),
(627, 'mall_cinema_inspection_form', 'owners_name', 'OWNER’S NAME '),
(628, 'mall_cinema_inspection_form', 'residential_address', 'RESIDENTIAL ADDRESS '),
(629, 'mall_cinema_inspection_form', 'owners_mobile_number', 'OWNER’S MOBILE NUMBER '),
(630, 'mall_cinema_inspection_form', 'type_of_application_id', 'TYPE OF APPLICATION '),
(631, 'mall_cinema_inspection_form', 'type_of_application_value', 'TYPE OF APPLICATION '),
(632, 'mall_cinema_inspection_form', 'old_noc_number', 'OLD NOC NUMBER '),
(633, 'mall_cinema_inspection_form', 'old_noc_date', 'OLD NOC DATE '),
(634, 'mall_cinema_inspection_form', 'building_type', 'BUILDING TYPE '),
(635, 'mall_cinema_inspection_form', 'building_height', 'BUILDING HEIGHT '),
(636, 'mall_cinema_inspection_form', 'building_floor', 'BUILDING FLOORS '),
(637, 'mall_cinema_inspection_form', 'no_of_staircase_in_building_and_width', 'NO. & WIDTH OF STAIRCASES '),
(638, 'mall_cinema_inspection_form', 'no_of_commercial_spaces', 'NO. OF COMMERCIAL SPACES '),
(639, 'mall_cinema_inspection_form', 'structural_audit_report_year_of_construction', 'YEAR OF CONSTRUCTION (AUDIT REPORT) '),
(640, 'mall_cinema_inspection_form', 'structural_audit_report_date', 'STRUCTURAL AUDIT REPORT DATE '),
(641, 'mall_cinema_inspection_form', 'structural_audit_agency_name', 'STRUCTURAL AUDIT AGENCY NAME '),
(642, 'mall_cinema_inspection_form', 'structural_audit_agency_address', 'STRUCTURAL AUDIT AGENCY ADDRESS '),
(643, 'mall_cinema_inspection_form', 'structural_audit_agency_mobile_no', 'STRUCTURAL AUDIT AGENCY MOBILE NO. '),
(644, 'mall_cinema_inspection_form', 'permissions_obtained_for_the_business', 'PERMISSIONS OBTAINED '),
(645, 'mall_cinema_inspection_form', 'female_employees_count', 'FEMALE EMPLOYEES COUNT '),
(646, 'mall_cinema_inspection_form', 'male_employees_count', 'MALE EMPLOYEES COUNT '),
(647, 'mall_cinema_inspection_form', 'total_employees_count', 'TOTAL EMPLOYEES COUNT '),
(648, 'mall_cinema_inspection_form', 'working_hours_at_business_premises', 'WORKING HOURS '),
(649, 'mall_cinema_inspection_form', 'natural_ventilation_total_windows', 'TOTAL WINDOWS (VENTILATION) '),
(650, 'mall_cinema_inspection_form', 'natural_ventilation_total_doors', 'TOTAL DOORS (VENTILATION) '),
(651, 'mall_cinema_inspection_form', 'area_of_business_premises', 'AREA OF BUSINESS PREMISES '),
(652, 'mall_cinema_inspection_form', 'entrance_route_premises', 'ENTRANCE ROUTE '),
(653, 'mall_cinema_inspection_form', 'exit_route_premises', 'EXIT ROUTE '),
(654, 'mall_cinema_inspection_form', 'record_room', 'RECORD ROOM '),
(655, 'mall_cinema_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE (TERRACE) '),
(656, 'mall_cinema_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE (GROUND FLOOR) '),
(657, 'mall_cinema_inspection_form', 'no_lifts_in_the_building', 'NO. OF LIFTS '),
(658, 'mall_cinema_inspection_form', 'capacity_lifts_in_the_building', 'LIFT CAPACITY '),
(659, 'mall_cinema_inspection_form', 'electrical_connection_capacity', 'ELECTRICAL CONNECTION CAPACITY '),
(660, 'mall_cinema_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(661, 'mall_cinema_inspection_form', 'electrical_audit_agency_name', 'ELECTRICAL AUDIT AGENCY NAME '),
(662, 'mall_cinema_inspection_form', 'electrical_audit_agency_address', 'ELECTRICAL AUDIT AGENCY ADDRESS '),
(663, 'mall_cinema_inspection_form', 'electrical_audit_agency_mobile_no', 'ELECTRICAL AUDIT AGENCY MOBILE NO. '),
(664, 'mall_cinema_inspection_form', 'generator_system', 'GENERATOR SYSTEM ');
INSERT INTO `label_names` (`id`, `db_name`, `field`, `label_name`) VALUES
(665, 'mall_cinema_inspection_form', 'raw_material_name', 'RAW MATERIAL NAME '),
(666, 'mall_cinema_inspection_form', 'raw_material_storage_capacity', 'RAW MATERIAL STORAGE CAPACITY '),
(667, 'mall_cinema_inspection_form', 'no_of_lpg_gas_cylinders', 'NO. OF LPG CYLINDERS '),
(668, 'mall_cinema_inspection_form', 'name_of_final_product', 'FINAL PRODUCT NAME '),
(669, 'mall_cinema_inspection_form', 'storage_capacity_of_final_product', 'FINAL PRODUCT STORAGE CAPACITY '),
(670, 'mall_cinema_inspection_form', 'fire_extinguishing_permanent', 'FIRE EXTINGUISHING (PERMANENT) '),
(671, 'mall_cinema_inspection_form', 'fire_extinguishing_temporary', 'FIRE EXTINGUISHING (TEMPORARY) '),
(672, 'mall_cinema_inspection_form', 'extinguishing_license_agency_name', 'FIRE LICENSE AGENCY NAME '),
(673, 'mall_cinema_inspection_form', 'extinguishing_license_agency_lno', 'LICENSE NO. '),
(674, 'mall_cinema_inspection_form', 'extinguishing_license_agency_lvalidity', 'LICENSE VALIDITY '),
(675, 'mall_cinema_inspection_form', 'extinguishing_licen_agency_cert_no', 'CERTIFICATE NO. '),
(676, 'mall_cinema_inspection_form', 'mpcb_certificate_date', 'MPCB CERTIFICATE DATE '),
(677, 'mall_cinema_inspection_form', 'mpcb_certificate_validity_date', 'MPCB CERTIFICATE VALIDITY DATE '),
(678, 'mall_cinema_inspection_form', 'ac_amc_date', 'AC AMC DATE '),
(679, 'mall_cinema_inspection_form', 'ac_amc_validity_date', 'AC AMC VALIDITY DATE '),
(680, 'mall_cinema_inspection_form', 'ac_amc_agency_name', 'AC AMC AGENCY NAME '),
(681, 'mall_cinema_inspection_form', 'ac_amc_agency_address', 'AC AMC AGENCY ADDRESS '),
(682, 'mall_cinema_inspection_form', 'ac_amc_agency_contact', 'AC AMC AGENCY CONTACT '),
(683, 'mall_cinema_inspection_form', 'direction_board', 'DIRECTION BOARD '),
(684, 'mall_cinema_inspection_form', 'user_id', 'USER ID '),
(685, 'mall_cinema_inspection_form', 'date', 'DATE '),
(686, 'mall_cinema_inspection_form', 'status', 'STATUS '),
(687, 'mall_cinema_inspection_form', 'paid', 'PAID '),
(688, 'mall_cinema_inspection_form', 'int_no', 'INTERNAL NO. '),
(689, 'mall_cinema_inspection_form', 'yr', 'YEAR '),
(690, 'mall_cinema_inspection_form', 'zone', 'ZONE '),
(691, 'mall_cinema_inspection_form', 'payment_done', 'PAYMENT DONE '),
(692, 'mall_cinema_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(693, 'mall_cinema_inspection_form', 'timestamp', 'TIMESTAMP '),
(694, 'mall_cinema_inspection_form', 'recid', 'RECORD ID '),
(695, 'master_establishment_type', 'id', 'ID '),
(696, 'master_establishment_type', 'type_name', 'ESTABLISHMENT TYPE NAME '),
(697, 'master_yes_no', 'id', 'ID '),
(698, 'master_yes_no', 'type', 'YES '),
(699, 'master_zone_ward', 'id', 'ID '),
(700, 'master_zone_ward', 'zone', 'ZONE '),
(701, 'master_zone_ward', 'ward', 'WARD '),
(702, 'm_application_type', 'id', 'ID '),
(703, 'm_application_type', 'application_type', 'APPLICATION TYPE '),
(704, 'm_building_type', 'id', 'ID '),
(705, 'm_building_type', 'building_type', 'BUILDING TYPE '),
(706, 'm_floor', 'id', 'ID '),
(707, 'm_floor', 'floor', 'FLOOR '),
(708, 'm_floor_type', 'id', 'ID '),
(709, 'm_floor_type', 'floor_type', 'FLOOR TYPE '),
(710, 'm_lift', 'id', 'ID '),
(711, 'm_lift', 'lift_type', 'LIFT TYPE '),
(712, 'm_staircase', 'id', 'ID '),
(713, 'm_staircase', 'staircase_type', 'STAIRCASE TYPE '),
(714, 'other_establishment_inspection_form', 'id', 'ID '),
(715, 'other_establishment_inspection_form', 'business_name', 'BUSINESS NAME '),
(716, 'other_establishment_inspection_form', 'business_address', 'BUSINESS ADDRESS '),
(717, 'other_establishment_inspection_form', 'mobile_no', 'MOBILE NO. '),
(718, 'other_establishment_inspection_form', 'owners_name', 'OWNER’S NAME '),
(719, 'other_establishment_inspection_form', 'residential_address', 'RESIDENTIAL ADDRESS '),
(720, 'other_establishment_inspection_form', 'owners_mobile_number', 'OWNER’S MOBILE NUMBER '),
(721, 'other_establishment_inspection_form', 'type_of_application_id', 'TYPE OF APPLICATION '),
(722, 'other_establishment_inspection_form', 'type_of_application_value', 'TYPE OF APPLICATION '),
(723, 'other_establishment_inspection_form', 'old_noc_number', 'OLD NOC NUMBER '),
(724, 'other_establishment_inspection_form', 'old_noc_date', 'OLD NOC DATE '),
(725, 'other_establishment_inspection_form', 'building_type', 'BUILDING TYPE '),
(726, 'other_establishment_inspection_form', 'building_height', 'BUILDING HEIGHT '),
(727, 'other_establishment_inspection_form', 'building_floor', 'BUILDING FLOORS '),
(728, 'other_establishment_inspection_form', 'no_of_staircase_in_building_and_width', 'NO. & WIDTH OF STAIRCASES '),
(729, 'other_establishment_inspection_form', 'no_of_commercial_spaces', 'NO. OF COMMERCIAL SPACES '),
(730, 'other_establishment_inspection_form', 'structural_audit_report_year_of_construction', 'YEAR OF CONSTRUCTION (AUDIT REPORT) '),
(731, 'other_establishment_inspection_form', 'structural_audit_report_date', 'STRUCTURAL AUDIT REPORT DATE '),
(732, 'other_establishment_inspection_form', 'structural_audit_agency_name', 'STRUCTURAL AUDIT AGENCY NAME '),
(733, 'other_establishment_inspection_form', 'structural_audit_agency_address', 'STRUCTURAL AUDIT AGENCY ADDRESS '),
(734, 'other_establishment_inspection_form', 'structural_audit_agency_mobile_no', 'STRUCTURAL AUDIT AGENCY MOBILE NO. '),
(735, 'other_establishment_inspection_form', 'permissions_obtained_for_the_business', 'PERMISSIONS OBTAINED '),
(736, 'other_establishment_inspection_form', 'female_employees_count', 'FEMALE EMPLOYEES COUNT '),
(737, 'other_establishment_inspection_form', 'male_employees_count', 'MALE EMPLOYEES COUNT '),
(738, 'other_establishment_inspection_form', 'total_employees_count', 'TOTAL EMPLOYEES COUNT '),
(739, 'other_establishment_inspection_form', 'working_hours_at_business_premises', 'WORKING HOURS '),
(740, 'other_establishment_inspection_form', 'natural_ventilation_total_windows', 'TOTAL WINDOWS (VENTILATION) '),
(741, 'other_establishment_inspection_form', 'natural_ventilation_total_doors', 'TOTAL DOORS (VENTILATION) '),
(742, 'other_establishment_inspection_form', 'area_of_business_premises', 'AREA OF BUSINESS PREMISES '),
(743, 'other_establishment_inspection_form', 'entrance_route_premises', 'ENTRANCE ROUTE '),
(744, 'other_establishment_inspection_form', 'exit_route_premises', 'EXIT ROUTE '),
(745, 'other_establishment_inspection_form', 'record_room', 'RECORD ROOM '),
(746, 'other_establishment_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE (TERRACE) '),
(747, 'other_establishment_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE (GROUND FLOOR) '),
(748, 'other_establishment_inspection_form', 'no_lifts_in_the_building', 'NO. OF LIFTS '),
(749, 'other_establishment_inspection_form', 'capacity_lifts_in_the_building', 'LIFT CAPACITY '),
(750, 'other_establishment_inspection_form', 'electrical_connection_capacity', 'ELECTRICAL CONNECTION CAPACITY '),
(751, 'other_establishment_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(752, 'other_establishment_inspection_form', 'electrical_audit_agency_name', 'ELECTRICAL AUDIT AGENCY NAME '),
(753, 'other_establishment_inspection_form', 'electrical_audit_agency_address', 'ELECTRICAL AUDIT AGENCY ADDRESS '),
(754, 'other_establishment_inspection_form', 'electrical_audit_agency_mobile_no', 'ELECTRICAL AUDIT AGENCY MOBILE NO. '),
(755, 'other_establishment_inspection_form', 'generator_system', 'GENERATOR SYSTEM '),
(756, 'other_establishment_inspection_form', 'raw_material_name', 'RAW MATERIAL NAME '),
(757, 'other_establishment_inspection_form', 'raw_material_storage_capacity', 'RAW MATERIAL STORAGE CAPACITY '),
(758, 'other_establishment_inspection_form', 'no_of_lpg_gas_cylinders', 'NO. OF LPG CYLINDERS '),
(759, 'other_establishment_inspection_form', 'name_of_final_product', 'FINAL PRODUCT NAME '),
(760, 'other_establishment_inspection_form', 'storage_capacity_of_final_product', 'FINAL PRODUCT STORAGE CAPACITY '),
(761, 'other_establishment_inspection_form', 'fire_extinguishing_permanent', 'FIRE EXTINGUISHING (PERMANENT) '),
(762, 'other_establishment_inspection_form', 'fire_extinguishing_temporary', 'FIRE EXTINGUISHING (TEMPORARY) '),
(763, 'other_establishment_inspection_form', 'extinguishing_license_agency_name', 'FIRE LICENSE AGENCY NAME '),
(764, 'other_establishment_inspection_form', 'extinguishing_license_agency_lno', 'LICENSE NO. '),
(765, 'other_establishment_inspection_form', 'extinguishing_license_agency_lvalidity', 'LICENSE VALIDITY '),
(766, 'other_establishment_inspection_form', 'extinguishing_licen_agency_cert_no', 'CERTIFICATE NO. '),
(767, 'other_establishment_inspection_form', 'mpcb_certificate_date', 'MPCB CERTIFICATE DATE '),
(768, 'other_establishment_inspection_form', 'mpcb_certificate_validity_date', 'MPCB CERTIFICATE VALIDITY DATE '),
(769, 'other_establishment_inspection_form', 'ac_amc_date', 'AC AMC DATE '),
(770, 'other_establishment_inspection_form', 'ac_amc_validity_date', 'AC AMC VALIDITY DATE '),
(771, 'other_establishment_inspection_form', 'ac_amc_agency_name', 'AC AMC AGENCY NAME '),
(772, 'other_establishment_inspection_form', 'ac_amc_agency_address', 'AC AMC AGENCY ADDRESS '),
(773, 'other_establishment_inspection_form', 'ac_amc_agency_contact', 'AC AMC AGENCY CONTACT '),
(774, 'other_establishment_inspection_form', 'direction_board', 'DIRECTION BOARD '),
(775, 'other_establishment_inspection_form', 'user_id', 'USER ID '),
(776, 'other_establishment_inspection_form', 'date', 'DATE '),
(777, 'other_establishment_inspection_form', 'status', 'STATUS '),
(778, 'other_establishment_inspection_form', 'paid', 'PAID '),
(779, 'other_establishment_inspection_form', 'int_no', 'INTERNAL NO. '),
(780, 'other_establishment_inspection_form', 'yr', 'YEAR '),
(781, 'other_establishment_inspection_form', 'zone', 'ZONE '),
(782, 'other_establishment_inspection_form', 'payment_done', 'PAYMENT DONE '),
(783, 'other_establishment_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(784, 'other_establishment_inspection_form', 'timestamp', 'TIMESTAMP '),
(785, 'other_establishment_inspection_form', 'recid', 'RECORD ID '),
(786, 'payments', 'id', 'ID '),
(787, 'payments', 'userid_added', 'USER ID ADDED '),
(788, 'payments', 'db_name', 'DATABASE NAME '),
(789, 'payments', 'rec_id', 'RECORD ID '),
(790, 'payments', 'amount', 'AMOUNT '),
(791, 'payments', 'txn_no', 'TRANSACTION NUMBER '),
(792, 'payments', 'payment_mode', 'PAYMENT MODE '),
(793, 'payments', 'timestamp', 'TIMESTAMP '),
(794, 'payments', 'remark', 'REMARK '),
(795, 'payments', 'citizen_userid', 'CITIZEN USER ID '),
(796, 'payments', 'int_no', 'INTERNAL NO. '),
(797, 'payments', 'yr', 'YEAR '),
(798, 'payments', 'rec_no', 'RECORD NO. '),
(799, 'payments', 'payment_person', 'PAYMENT PERSON '),
(800, 'payments', 'payment_type', 'PAYMENT TYPE '),
(801, 'payments', 'payment_chq_no', 'CHEQUE NUMBER '),
(802, 'payments', 'payment_chq_date', 'CHEQUE DATE '),
(803, 'payments', 'payment_bankname', 'BANK NAME '),
(804, 'payments', 'payment_cash_collection_center', 'CASH COLLECTION CENTER '),
(805, 'payments', 'payment_counter', 'PAYMENT COUNTER '),
(806, 'payments', 'paid_by', 'PAID BY '),
(807, 'private_hospital_inspection_form', 'id', 'ID '),
(808, 'private_hospital_inspection_form', 'hospital_or_health_center_name', 'HOSPITAL / HEALTH CENTER NAME'),
(809, 'private_hospital_inspection_form', 'hospital_or_health_center_address', 'HOSPITAL / HEALTH CENTER ADDRESS'),
(810, 'private_hospital_inspection_form', 'doctor_name', 'DOCTOR NAME '),
(811, 'private_hospital_inspection_form', 'doctor_mobile_no', 'DOCTOR MOBILE NO. '),
(812, 'private_hospital_inspection_form', 'building_height', 'BUILDING HEIGHT '),
(813, 'private_hospital_inspection_form', 'lifts_company_name', 'LIFTS COMPANY NAME '),
(814, 'private_hospital_inspection_form', 'no_lifts_in_building', 'NO. OF LIFTS '),
(815, 'private_hospital_inspection_form', 'capacity_of_lifts', 'LIFT CAPACITY '),
(816, 'private_hospital_inspection_form', 'elevators_amc_done_by_org_name', 'ELEVATORS AMC DONE BY '),
(817, 'private_hospital_inspection_form', 'elevators_amc_period', 'ELEVATORS AMC PERIOD '),
(818, 'private_hospital_inspection_form', 'number_of_staircase_in_bulding', 'NO. OF STAIRCASES '),
(819, 'private_hospital_inspection_form', 'width_of_staircase_in_bulding', 'WIDTH OF STAIRCASES '),
(820, 'private_hospital_inspection_form', 'entrance_routes_count', 'ENTRANCE ROUTES COUNT '),
(821, 'private_hospital_inspection_form', 'exit_routes_count', 'EXIT ROUTES COUNT '),
(822, 'private_hospital_inspection_form', 'is_record_room_available', 'RECORD ROOM AVAILABLE '),
(823, 'private_hospital_inspection_form', 'hospital_area', 'HOSPITAL AREA '),
(824, 'private_hospital_inspection_form', 'doctors_count', 'DOCTORS COUNT '),
(825, 'private_hospital_inspection_form', 'nurses_count', 'NURSES COUNT '),
(826, 'private_hospital_inspection_form', 'ward_boy_count', 'WARD BOY COUNT '),
(827, 'private_hospital_inspection_form', 'aunts_count', 'AUNTS COUNT '),
(828, 'private_hospital_inspection_form', 'clerk_count', 'CLERK COUNT '),
(829, 'private_hospital_inspection_form', 'other_employees_count', 'OTHER EMPLOYEES COUNT '),
(830, 'private_hospital_inspection_form', 'floor_number_of_hospital_id', 'FLOOR NUMBER '),
(831, 'private_hospital_inspection_form', 'floor_number_of_hospital_value', 'FLOOR NUMBER '),
(832, 'private_hospital_inspection_form', 'is_ot_dept', 'OT DEPARTMENT '),
(833, 'private_hospital_inspection_form', 'is_xray_dept', 'X-RAY DEPARTMENT '),
(834, 'private_hospital_inspection_form', 'is_opd_dept', 'OPD DEPARTMENT '),
(835, 'private_hospital_inspection_form', 'is_emergency_opd_dept', 'EMERGENCY OPD DEPARTMENT '),
(836, 'private_hospital_inspection_form', 'is_patholoty_dept', 'PATHOLOGY DEPARTMENT '),
(837, 'private_hospital_inspection_form', 'is_post_nutal_care_dept', 'POST-NATAL CARE DEPARTMENT '),
(838, 'private_hospital_inspection_form', 'is_icu_dept', 'ICU DEPARTMENT '),
(839, 'private_hospital_inspection_form', 'is_gw_men_dept', 'GENERAL WARD MEN '),
(840, 'private_hospital_inspection_form', 'is_gw_women_dept', 'GENERAL WARD WOMEN '),
(841, 'private_hospital_inspection_form', 'is_special_ward_dept', 'SPECIAL WARD '),
(842, 'private_hospital_inspection_form', 'is_ante_nutal_care_dept', 'ANTE-NATAL CARE DEPARTMENT '),
(843, 'private_hospital_inspection_form', 'is_nicu_dept', 'NICU DEPARTMENT '),
(844, 'private_hospital_inspection_form', 'directional_board', 'DIRECTIONAL BOARD '),
(845, 'private_hospital_inspection_form', 'total_no_beds_hospital', 'TOTAL NO. OF BEDS '),
(846, 'private_hospital_inspection_form', 'generator_system_capacity', 'GENERATOR SYSTEM CAPACITY '),
(847, 'private_hospital_inspection_form', 'generator_system_amc_org_name', 'GENERATOR AMC ORGANIZATION '),
(848, 'private_hospital_inspection_form', 'generator_system_amc_period', 'GENERATOR AMC PERIOD '),
(849, 'private_hospital_inspection_form', 'electrical_audit_report_org_name', 'ELECTRICAL AUDIT ORGANIZATION '),
(850, 'private_hospital_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(851, 'private_hospital_inspection_form', 'emergency_power_system', 'EMERGENCY POWER SYSTEM '),
(852, 'private_hospital_inspection_form', 'info_about_fire_prevention_measures', 'FIRE PREVENTION MEASURES '),
(853, 'private_hospital_inspection_form', 'mock_drill_date', 'MOCK DRILL DATE '),
(854, 'private_hospital_inspection_form', 'no_emp_present_for_mock_drill', 'EMPLOYEES PRESENT IN DRILL '),
(855, 'private_hospital_inspection_form', 'upload_photo_of_employee_present_for_mock_drill', 'UPLOAD PHOTO OF EMPLOYEES '),
(856, 'private_hospital_inspection_form', 'upload_fire_marshal_names_with_mobile_no', 'FIRE MARSHAL NAMES WITH MOBILE '),
(857, 'private_hospital_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE TERRACE '),
(858, 'private_hospital_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE GROUND FLOOR '),
(859, 'private_hospital_inspection_form', 'fire_noc_details', 'FIRE NOC DETAILS '),
(860, 'private_hospital_inspection_form', 'fire_noc_date', 'FIRE NOC DATE '),
(861, 'private_hospital_inspection_form', 'other_info_about_hospital', 'OTHER INFO '),
(862, 'private_hospital_inspection_form', 'oxygen_system', 'OXYGEN SYSTEM '),
(863, 'private_hospital_inspection_form', 'maintenance_of_emergency_routes', 'MAINTENANCE OF EMERGENCY ROUTES '),
(864, 'private_hospital_inspection_form', 'remark', 'REMARK '),
(865, 'private_hospital_inspection_form', 'user_id', 'USER ID '),
(866, 'private_hospital_inspection_form', 'date', 'DATE '),
(867, 'private_hospital_inspection_form', 'status', 'STATUS '),
(868, 'private_hospital_inspection_form', 'paid', 'PAID '),
(869, 'private_hospital_inspection_form', 'int_no', 'INTERNAL NO. '),
(870, 'private_hospital_inspection_form', 'yr', 'YEAR '),
(871, 'private_hospital_inspection_form', 'zone', 'ZONE '),
(872, 'private_hospital_inspection_form', 'payment_done', 'PAYMENT DONE '),
(873, 'private_hospital_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(874, 'private_hospital_inspection_form', 'recid', 'RECORD ID '),
(875, 'report_header_footer', 'id', 'ID '),
(876, 'report_header_footer', 'header', 'HEADER '),
(877, 'report_header_footer', 'footer', 'FOOTER '),
(878, 'report_header_footer', 'type', 'TYPE '),
(879, 'report_header_footer', 'status', 'STATUS '),
(880, 'report_header_footer', 'paid', 'PAID '),
(881, 'report_header_footer', 'int_no', 'INTERNAL NO. '),
(882, 'report_header_footer', 'yr', 'YEAR '),
(883, 'report_header_footer', 'zone', 'ZONE '),
(884, 'report_header_footer', 'payment_done', 'PAYMENT DONE '),
(885, 'report_header_footer', 'certificate_file', 'CERTIFICATE FILE '),
(886, 'report_header_footer', 'timestamp', 'TIMESTAMP '),
(887, 'roles', 'role_id', 'ROLE ID '),
(888, 'roles', 'role_name', 'ROLE NAME '),
(889, 'role_permissions', 'permission_id', 'PERMISSION ID '),
(890, 'role_permissions', 'role_id', 'ROLE ID '),
(891, 'role_permissions', 'page_name', 'PAGE NAME '),
(892, 'role_permissions', 'action_name', 'ACTION NAME '),
(893, 'school_college_coaching_inspection_form', 'id', 'ID '),
(894, 'school_college_coaching_inspection_form', 'institute_name', 'INSTITUTE NAME '),
(895, 'school_college_coaching_inspection_form', 'institute_address', 'INSTITUTE ADDRESS '),
(896, 'school_college_coaching_inspection_form', 'building_floors', 'BUILDING FLOORS '),
(897, 'school_college_coaching_inspection_form', 'institute_owners_name', 'OWNER’S NAME '),
(898, 'school_college_coaching_inspection_form', 'owners_mobile_no', 'OWNER’S MOBILE NO. '),
(899, 'school_college_coaching_inspection_form', 'principals_name', 'PRINCIPAL’S NAME '),
(900, 'school_college_coaching_inspection_form', 'principals_mobile_no', 'PRINCIPAL’S MOBILE NO. '),
(901, 'school_college_coaching_inspection_form', 'grade_n_class_from', 'GRADE/CLASS FROM'),
(902, 'school_college_coaching_inspection_form', 'grade_n_class_to', 'GRADE/CLASS TO'),
(903, 'school_college_coaching_inspection_form', 'entrance_and_exit_routes_details', 'ENTRANCE & EXIT ROUTES DETAILS '),
(904, 'school_college_coaching_inspection_form', 'stairecase_count', 'STAIRCASE COUNT '),
(905, 'school_college_coaching_inspection_form', 'water_storage_capacity_terrace', 'WATER STORAGE TERRACE '),
(906, 'school_college_coaching_inspection_form', 'water_storage_capacity_groundfloor', 'WATER STORAGE GROUND FLOOR '),
(907, 'school_college_coaching_inspection_form', 'institute_total_area', 'TOTAL AREA '),
(908, 'school_college_coaching_inspection_form', 'number_of_classrooms', 'NUMBER OF CLASSROOMS '),
(909, 'school_college_coaching_inspection_form', 'is_laboratory_in_good_condition', 'LABORATORY IN GOOD CONDITION '),
(910, 'school_college_coaching_inspection_form', 'is_reading_room_in_good_condition', 'READING ROOM IN GOOD CONDITION '),
(911, 'school_college_coaching_inspection_form', 'no_table_reading_room', 'NO. OF TABLES IN READING ROOM '),
(912, 'school_college_coaching_inspection_form', 'no_chair_reading_room', 'NO. OF CHAIRS IN READING ROOM '),
(913, 'school_college_coaching_inspection_form', 'is_record_room_in_good_condition', 'RECORD ROOM IN GOOD CONDITION '),
(914, 'school_college_coaching_inspection_form', 'is_computer_n_server_room_in_good_condition', 'COMPUTER & SERVER ROOM IN GOOD CONDITION '),
(915, 'school_college_coaching_inspection_form', 'computer_n_server_room_count', 'COMPUTER & SERVER ROOM COUNT '),
(916, 'school_college_coaching_inspection_form', 'is_lifts_in_the_good_condition', 'LIFTS IN GOOD CONDITION '),
(917, 'school_college_coaching_inspection_form', 'no_lifts_in_the_building', 'NO. OF LIFTS '),
(918, 'school_college_coaching_inspection_form', 'status_lifts_in_the_building', 'STATUS OF LIFTS '),
(919, 'school_college_coaching_inspection_form', 'generator_system_capacity', 'GENERATOR SYSTEM CAPACITY '),
(920, 'school_college_coaching_inspection_form', 'is_generator_system_in_good_condition', 'GENERATOR IN GOOD CONDITION '),
(921, 'school_college_coaching_inspection_form', 'is_electrical_conection_in_good_condition', 'ELECTRICAL CONNECTION IN GOOD CONDITION '),
(922, 'school_college_coaching_inspection_form', 'is_electrical_audit_report', 'ELECTRICAL AUDIT REPORT AVAILABLE '),
(923, 'school_college_coaching_inspection_form', 'is_electric_audit_report_value', 'ELECTRICAL AUDIT REPORT VALUE '),
(924, 'school_college_coaching_inspection_form', 'electrical_audit_report_date', 'ELECTRICAL AUDIT REPORT DATE '),
(925, 'school_college_coaching_inspection_form', 'air_conditioning_system_cert', 'AC SYSTEM CERTIFICATE '),
(926, 'school_college_coaching_inspection_form', 'fire_fighting_system_abc_type', 'FIRE FIGHTING SYSTEM ABC TYPE '),
(927, 'school_college_coaching_inspection_form', 'fire_fighting_system_co2_type', 'FIRE FIGHTING SYSTEM CO2 TYPE '),
(928, 'school_college_coaching_inspection_form', 'fire_fighting_noc', 'FIRE FIGHTING NOC '),
(929, 'school_college_coaching_inspection_form', 'user_id', 'USER ID '),
(930, 'school_college_coaching_inspection_form', 'date', 'DATE '),
(931, 'school_college_coaching_inspection_form', 'status', 'STATUS '),
(932, 'school_college_coaching_inspection_form', 'paid', 'PAID '),
(933, 'school_college_coaching_inspection_form', 'int_no', 'INTERNAL NO. '),
(934, 'school_college_coaching_inspection_form', 'yr', 'YEAR '),
(935, 'school_college_coaching_inspection_form', 'zone', 'ZONE '),
(936, 'school_college_coaching_inspection_form', 'payment_done', 'PAYMENT DONE '),
(937, 'school_college_coaching_inspection_form', 'certificate_file', 'CERTIFICATE FILE '),
(938, 'school_college_coaching_inspection_form', 'timestamp', 'TIMESTAMP '),
(939, 'school_college_coaching_inspection_form', 'recid', 'RECORD ID '),
(940, 'staircase_details', 'id', 'ID '),
(941, 'staircase_details', 'building_id', 'BUILDING ID '),
(942, 'staircase_details', 'staircase_no', 'STAIRCASE NUMBER '),
(943, 'staircase_details', 'staircase_width', 'STAIRCASE WIDTH '),
(944, 'staircase_details', 'staircase_from_floor', 'STAIRCASE FROM FLOOR '),
(945, 'staircase_details', 'staircase_to_floor', 'STAIRCASE TO FLOOR '),
(946, 'staircase_details', 'rec_id', 'RECORD ID '),
(947, 'staircase_details', 'db_name', 'DATABASE NAME '),
(948, 'survey_visit', 'id', 'ID '),
(949, 'survey_visit', 'date_of_visit', 'DATE OF VISIT '),
(950, 'survey_visit', 'upload_survey_report', 'UPLOAD SURVEY REPORT '),
(951, 'survey_visit', 'remark', 'REMARK '),
(952, 'survey_visit', 'rec_id', 'RECORD ID '),
(953, 'survey_visit', 'db_name', 'DATABASE NAME '),
(954, 'survey_visit', 'upload_photo_site_visit', 'UPLOAD PHOTO OF SITE VISIT '),
(955, 'typical_floor_plan', 'id', 'ID '),
(956, 'typical_floor_plan', 'foor_name_id', 'FLOOR NAME  '),
(957, 'typical_floor_plan', 'foor_name_value', 'FLOOR NAME  '),
(958, 'typical_floor_plan', 'recid', 'RECORD ID '),
(959, 'typical_floor_plan', 'floor_wise_p_line_area_in_sqr_mtr', 'FLOOR-WISE P LINE AREA (SQ.M) '),
(960, 'typical_floor_plan', 'hight_in_mtr_from_ground', 'HEIGHT FROM GROUND (M) '),
(961, 'typical_floor_plan', 'date', 'DATE '),
(962, 'typical_floor_plan', 'user_id', 'USER ID '),
(963, 'typical_floor_plan', 'db_name', 'DATABASE NAME '),
(964, 'typical_floor_plan', 'locked', 'LOCKED '),
(965, 'typical_floor_plan', 'refuge_area', 'REFUGE AREA '),
(966, 'typical_floor_plan', 'hight_of_refuge_area_from_ground_in_mtr', 'HEIGHT OF REFUGE AREA FROM GROUND (M) '),
(967, 'typical_floor_plan', 'provided_refuge_area_in_sqr_mtr', 'PROVIDED REFUGE AREA (SQ.M) '),
(968, 'typical_floor_plan', 'floor_type', 'FLOOR TYPE '),
(969, 'typical_floor_plan', 'typical_floor_plan', 'TYPICAL FLOOR PLAN '),
(970, 'user_info', 'id', 'ID '),
(971, 'user_info', 'username', 'USERNAME '),
(972, 'user_info', 'password', 'PASSWORD '),
(973, 'user_info', 'email', 'EMAIL '),
(974, 'user_info', 'login_session_key', 'LOGIN SESSION KEY '),
(975, 'user_info', 'email_status', 'EMAIL STATUS '),
(976, 'user_info', 'password_expire_date', 'PASSWORD EXPIRY DATE '),
(977, 'user_info', 'password_reset_key', 'PASSWORD RESET KEY '),
(978, 'user_info', 'user_role_id', 'USER ROLE ID '),
(979, 'user_info', 'zone', 'ZONE '),
(980, 'wings_info', 'id', 'ID '),
(981, 'wings_info', 'rec_id', 'RECORD ID '),
(982, 'wings_info', 'wingno', 'WING NUMBER '),
(983, 'wings_info', 'wing_name', 'WING NAME '),
(984, 'wings_info', 'floor_count', 'FLOOR COUNT '),
(985, 'wings_info', 'locked', 'LOCKED '),
(986, 'wings_info', 'floor_count_did', 'FLOOR COUNT DID ');

-- --------------------------------------------------------

--
-- Table structure for table `lift_details`
--

CREATE TABLE `lift_details` (
  `id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `lift_no` varchar(255) NOT NULL,
  `lift_type` varchar(255) NOT NULL,
  `lift_from_floor` varchar(255) NOT NULL,
  `lift_to_floor` varchar(255) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mall_cinema_inspection_form`
--

CREATE TABLE `mall_cinema_inspection_form` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `owners_name` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `owners_mobile_number` int(11) NOT NULL,
  `type_of_application_id` int(11) NOT NULL,
  `type_of_application_value` varchar(255) NOT NULL,
  `old_noc_number` varchar(255) NOT NULL,
  `old_noc_date` date NOT NULL,
  `building_type` varchar(255) NOT NULL,
  `building_height` int(11) NOT NULL,
  `building_floor` int(11) NOT NULL,
  `no_of_staircase_in_building_and_width` varchar(255) NOT NULL,
  `no_of_commercial_spaces` int(11) NOT NULL,
  `structural_audit_report_year_of_construction` int(11) NOT NULL,
  `structural_audit_report_date` date NOT NULL,
  `structural_audit_agency_name` varchar(255) NOT NULL,
  `structural_audit_agency_address` varchar(255) NOT NULL,
  `structural_audit_agency_mobile_no` int(11) NOT NULL,
  `permissions_obtained_for_the_business` text NOT NULL,
  `female_employees_count` int(11) NOT NULL,
  `male_employees_count` int(11) NOT NULL,
  `total_employees_count` int(11) NOT NULL,
  `working_hours_at_business_premises` varchar(255) NOT NULL,
  `natural_ventilation_total_windows` int(11) NOT NULL,
  `natural_ventilation_total_doors` int(11) NOT NULL,
  `area_of_business_premises` varchar(255) NOT NULL,
  `entrance_route_premises` varchar(255) NOT NULL,
  `exit_route_premises` varchar(255) NOT NULL,
  `record_room` varchar(255) NOT NULL,
  `water_storage_capacity_terrace` int(11) NOT NULL,
  `water_storage_capacity_groundfloor` int(11) NOT NULL,
  `no_lifts_in_the_building` int(11) NOT NULL,
  `capacity_lifts_in_the_building` varchar(255) NOT NULL,
  `electrical_connection_capacity` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `electrical_audit_agency_name` varchar(255) NOT NULL,
  `electrical_audit_agency_address` varchar(255) NOT NULL,
  `electrical_audit_agency_mobile_no` int(11) NOT NULL,
  `generator_system` varchar(255) NOT NULL,
  `raw_material_name` varchar(255) NOT NULL,
  `raw_material_storage_capacity` varchar(255) NOT NULL,
  `no_of_lpg_gas_cylinders` int(11) NOT NULL,
  `name_of_final_product` varchar(255) NOT NULL,
  `storage_capacity_of_final_product` varchar(255) NOT NULL,
  `fire_extinguishing_permanent` varchar(255) NOT NULL,
  `fire_extinguishing_temporary` varchar(255) NOT NULL,
  `extinguishing_license_agency_name` varchar(255) NOT NULL,
  `extinguishing_license_agency_lno` varchar(255) NOT NULL,
  `extinguishing_license_agency_lvalidity` date NOT NULL,
  `extinguishing_licen_agency_cert_no` varchar(255) NOT NULL,
  `mpcb_certificate_date` date NOT NULL,
  `mpcb_certificate_validity_date` date NOT NULL,
  `ac_amc_date` date NOT NULL,
  `ac_amc_validity_date` date NOT NULL,
  `ac_amc_agency_name` varchar(255) NOT NULL,
  `ac_amc_agency_address` varchar(255) NOT NULL,
  `ac_amc_agency_contact` varchar(255) NOT NULL,
  `direction_board` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_establishment_type`
--

CREATE TABLE `master_establishment_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_establishment_type`
--

INSERT INTO `master_establishment_type` (`id`, `type_name`) VALUES
(1, 'Hotels / Lodging Boarding / Rest House'),
(2, 'Industrial / Industrial Offices'),
(3, 'Private Hospital'),
(4, 'Government Hospital and UPHC'),
(5, 'Schools or colleges or coaching institutes'),
(6, 'Mall or Cinema Hall  '),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `master_yes_no`
--

CREATE TABLE `master_yes_no` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_yes_no`
--

INSERT INTO `master_yes_no` (`id`, `type`) VALUES
(1, 'YES'),
(2, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `master_zone_ward`
--

CREATE TABLE `master_zone_ward` (
  `id` int(11) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_zone_ward`
--

INSERT INTO `master_zone_ward` (`id`, `zone`, `ward`) VALUES
(1, 'A', 'A'),
(2, 'B', 'B'),
(3, 'C', 'C'),
(4, 'D', 'D'),
(5, 'E', 'E'),
(6, 'F', 'F'),
(7, 'G', 'G'),
(8, 'H', 'H'),
(9, 'I', 'I'),
(10, 'J', 'J');

-- --------------------------------------------------------

--
-- Table structure for table `m_application_type`
--

CREATE TABLE `m_application_type` (
  `id` int(11) NOT NULL,
  `application_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `m_application_type`
--

INSERT INTO `m_application_type` (`id`, `application_type`) VALUES
(1, 'NEW'),
(2, 'RENEWAL');

-- --------------------------------------------------------

--
-- Table structure for table `m_building_type`
--

CREATE TABLE `m_building_type` (
  `id` int(11) NOT NULL,
  `building_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_building_type`
--

INSERT INTO `m_building_type` (`id`, `building_type`) VALUES
(1, 'Residential Building'),
(2, 'Educational Building'),
(3, 'Institutional Building'),
(4, 'Assembly Building'),
(5, 'Business Building '),
(6, 'Office / Premises Building'),
(7, 'Mercantile Building ( Commercial )'),
(8, 'Public / Semi-Public Building'),
(9, 'Wholesale Establishment Building'),
(10, 'Industrial Building'),
(11, 'Storage Building'),
(12, 'Hazardous Building'),
(13, 'Information Technology Building / Establishment'),
(14, 'Special Building'),
(15, 'Yatri Niwas '),
(16, 'Residential + Shop Line ');

-- --------------------------------------------------------

--
-- Table structure for table `m_floor`
--

CREATE TABLE `m_floor` (
  `id` int(11) NOT NULL,
  `floor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `m_floor`
--

INSERT INTO `m_floor` (`id`, `floor`) VALUES
(1, 'Floor 1 '),
(2, 'Basement 1'),
(3, 'Ground Floor'),
(4, 'Podium 1'),
(5, 'Floor 2 / Refuge Area'),
(6, 'Floor 2'),
(7, 'Floor 3'),
(8, 'Floor 4'),
(9, 'Floor 5'),
(10, 'Floor 6'),
(11, 'Floor 7'),
(12, 'Floor 8'),
(13, 'Floor 9'),
(14, 'Floor 10'),
(15, 'Floor 11'),
(16, 'Floor 12'),
(17, 'Floor 13'),
(18, 'Floor 14'),
(19, 'Floor 15'),
(20, 'Floor 16'),
(21, 'Floor 17'),
(22, 'Floor 18'),
(23, 'Floor 19'),
(24, 'Floor 20'),
(25, 'Floor 21'),
(26, 'Floor 22'),
(27, 'Floor 23'),
(28, 'Floor 24'),
(29, 'Floor 25'),
(30, 'Floor 26'),
(31, 'Floor 27'),
(32, 'Floor 28'),
(33, 'Floor 29'),
(34, 'Floor 30'),
(35, 'Basement 2'),
(36, 'Basement 3'),
(37, 'Podium 2'),
(38, 'Podium 3'),
(39, 'Podium 4'),
(40, 'Podium 5'),
(41, 'Terrace'),
(42, 'Plinth');

-- --------------------------------------------------------

--
-- Table structure for table `m_floor_type`
--

CREATE TABLE `m_floor_type` (
  `id` int(11) NOT NULL,
  `floor_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_floor_type`
--

INSERT INTO `m_floor_type` (`id`, `floor_type`) VALUES
(1, 'Stilt'),
(2, 'Basement'),
(3, 'Shop line'),
(4, 'Commercial'),
(5, 'Residential'),
(6, 'Industrial'),
(7, 'Parking'),
(8, 'Hospital '),
(9, 'Refuge Area + Residential'),
(10, 'Mezzanine '),
(11, 'Commercial + Residential'),
(12, 'Shop Line + Residential '),
(13, 'Mercantile + Residential '),
(14, 'Amenity Floor '),
(15, 'Stilt + Residential'),
(16, 'residential with shopline'),
(17, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `m_lift`
--

CREATE TABLE `m_lift` (
  `id` int(11) NOT NULL,
  `lift_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `m_lift`
--

INSERT INTO `m_lift` (`id`, `lift_type`) VALUES
(1, 'Fire lift'),
(2, 'Without fire lift'),
(3, 'Stretcher lift'),
(4, 'Goods Lift');

-- --------------------------------------------------------

--
-- Table structure for table `m_staircase`
--

CREATE TABLE `m_staircase` (
  `id` int(11) NOT NULL,
  `staircase_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `m_staircase`
--

INSERT INTO `m_staircase` (`id`, `staircase_type`) VALUES
(1, 'Enclosed'),
(2, 'Opened'),
(3, 'Internal');

-- --------------------------------------------------------

--
-- Table structure for table `other_establishment_inspection_form`
--

CREATE TABLE `other_establishment_inspection_form` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `owners_name` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `owners_mobile_number` int(11) NOT NULL,
  `type_of_application_id` int(11) NOT NULL,
  `type_of_application_value` varchar(255) NOT NULL,
  `old_noc_number` varchar(255) NOT NULL,
  `old_noc_date` date NOT NULL,
  `building_type` varchar(255) NOT NULL,
  `building_height` int(11) NOT NULL,
  `building_floor` int(11) NOT NULL,
  `no_of_staircase_in_building_and_width` varchar(255) NOT NULL,
  `no_of_commercial_spaces` int(11) NOT NULL,
  `structural_audit_report_year_of_construction` int(11) NOT NULL,
  `structural_audit_report_date` date NOT NULL,
  `structural_audit_agency_name` varchar(255) NOT NULL,
  `structural_audit_agency_address` varchar(255) NOT NULL,
  `structural_audit_agency_mobile_no` int(11) NOT NULL,
  `permissions_obtained_for_the_business` text NOT NULL,
  `female_employees_count` int(11) NOT NULL,
  `male_employees_count` int(11) NOT NULL,
  `total_employees_count` int(11) NOT NULL,
  `working_hours_at_business_premises` varchar(255) NOT NULL,
  `natural_ventilation_total_windows` int(11) NOT NULL,
  `natural_ventilation_total_doors` int(11) NOT NULL,
  `area_of_business_premises` varchar(255) NOT NULL,
  `entrance_route_premises` varchar(255) NOT NULL,
  `exit_route_premises` varchar(255) NOT NULL,
  `record_room` varchar(255) NOT NULL,
  `water_storage_capacity_terrace` int(11) NOT NULL,
  `water_storage_capacity_groundfloor` int(11) NOT NULL,
  `no_lifts_in_the_building` int(11) NOT NULL,
  `capacity_lifts_in_the_building` varchar(255) NOT NULL,
  `electrical_connection_capacity` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `electrical_audit_agency_name` varchar(255) NOT NULL,
  `electrical_audit_agency_address` varchar(255) NOT NULL,
  `electrical_audit_agency_mobile_no` int(11) NOT NULL,
  `generator_system` varchar(255) NOT NULL,
  `raw_material_name` varchar(255) NOT NULL,
  `raw_material_storage_capacity` varchar(255) NOT NULL,
  `no_of_lpg_gas_cylinders` int(11) NOT NULL,
  `name_of_final_product` varchar(255) NOT NULL,
  `storage_capacity_of_final_product` varchar(255) NOT NULL,
  `fire_extinguishing_permanent` varchar(255) NOT NULL,
  `fire_extinguishing_temporary` varchar(255) NOT NULL,
  `extinguishing_license_agency_name` varchar(255) NOT NULL,
  `extinguishing_license_agency_lno` varchar(255) NOT NULL,
  `extinguishing_license_agency_lvalidity` date NOT NULL,
  `extinguishing_licen_agency_cert_no` varchar(255) NOT NULL,
  `mpcb_certificate_date` date NOT NULL,
  `mpcb_certificate_validity_date` date NOT NULL,
  `ac_amc_date` date NOT NULL,
  `ac_amc_validity_date` date NOT NULL,
  `ac_amc_agency_name` varchar(255) NOT NULL,
  `ac_amc_agency_address` varchar(255) NOT NULL,
  `ac_amc_agency_contact` varchar(255) NOT NULL,
  `direction_board` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `userid_added` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `rec_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `txn_no` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `remark` varchar(255) DEFAULT NULL,
  `citizen_userid` varchar(255) NOT NULL,
  `int_no` int(11) NOT NULL,
  `yr` varchar(255) NOT NULL,
  `rec_no` varchar(255) NOT NULL,
  `payment_person` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_chq_no` varchar(255) NOT NULL,
  `payment_chq_date` varchar(255) NOT NULL,
  `payment_bankname` varchar(255) NOT NULL,
  `payment_cash_collection_center` varchar(255) NOT NULL,
  `payment_counter` varchar(255) NOT NULL,
  `paid_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_hospital_inspection_form`
--

CREATE TABLE `private_hospital_inspection_form` (
  `id` int(11) NOT NULL,
  `hospital_or_health_center_name` varchar(255) NOT NULL,
  `hospital_or_health_center_address` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_mobile_no` varchar(255) NOT NULL,
  `building_height` varchar(255) NOT NULL,
  `lifts_company_name` varchar(255) NOT NULL,
  `no_lifts_in_building` int(11) NOT NULL,
  `capacity_of_lifts` varchar(255) NOT NULL,
  `elevators_amc_done_by_org_name` varchar(255) NOT NULL,
  `elevators_amc_period` varchar(255) NOT NULL,
  `number_of_staircase_in_bulding` int(11) NOT NULL,
  `width_of_staircase_in_bulding` varchar(255) NOT NULL,
  `entrance_routes_count` int(11) NOT NULL,
  `exit_routes_count` int(11) NOT NULL,
  `is_record_room_available` varchar(255) NOT NULL,
  `hospital_area` varchar(255) NOT NULL,
  `doctors_count` int(11) NOT NULL,
  `nurses_count` int(11) NOT NULL,
  `ward_boy_count` int(11) NOT NULL,
  `aunts_count` int(11) NOT NULL,
  `clerk_count` int(11) NOT NULL,
  `other_employees_count` int(11) NOT NULL,
  `floor_number_of_hospital_id` int(11) NOT NULL,
  `floor_number_of_hospital_value` varchar(255) NOT NULL,
  `is_ot_dept` varchar(255) NOT NULL,
  `is_xray_dept` varchar(255) NOT NULL,
  `is_opd_dept` varchar(255) NOT NULL,
  `is_emergency_opd_dept` varchar(255) NOT NULL,
  `is_patholoty_dept` varchar(255) NOT NULL,
  `is_post_nutal_care_dept` varchar(255) NOT NULL,
  `is_icu_dept` varchar(255) NOT NULL,
  `is_gw_men_dept` varchar(255) NOT NULL,
  `is_gw_women_dept` varchar(255) NOT NULL,
  `is_special_ward_dept` varchar(255) NOT NULL,
  `is_ante_nutal_care_dept` varchar(255) NOT NULL,
  `is_nicu_dept` varchar(255) NOT NULL,
  `directional_board` varchar(255) NOT NULL,
  `total_no_beds_hospital` int(11) NOT NULL,
  `generator_system_capacity` varchar(255) NOT NULL,
  `generator_system_amc_org_name` varchar(255) NOT NULL,
  `generator_system_amc_period` varchar(255) NOT NULL,
  `electrical_audit_report_org_name` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `emergency_power_system` varchar(255) NOT NULL,
  `info_about_fire_prevention_measures` varchar(255) NOT NULL,
  `mock_drill_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_emp_present_for_mock_drill` int(11) NOT NULL,
  `upload_photo_of_employee_present_for_mock_drill` text DEFAULT NULL,
  `upload_fire_marshal_names_with_mobile_no` text DEFAULT NULL,
  `water_storage_capacity_terrace` varchar(255) NOT NULL,
  `water_storage_capacity_groundfloor` varchar(255) NOT NULL,
  `fire_noc_details` varchar(255) NOT NULL,
  `fire_noc_date` date NOT NULL,
  `other_info_about_hospital` varchar(255) NOT NULL,
  `oxygen_system` varchar(255) NOT NULL,
  `maintenance_of_emergency_routes` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_header_footer`
--

CREATE TABLE `report_header_footer` (
  `id` int(11) NOT NULL,
  `header` longtext NOT NULL,
  `footer` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(3, 'citizen'),
(4, 'Superadmin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `action_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`permission_id`, `role_id`, `page_name`, `action_name`) VALUES
(10316, 1, 'fire_noc_provisional_new', 'list'),
(10317, 1, 'fire_noc_provisional_new', 'view'),
(10318, 1, 'fire_noc_provisional_new', 'add'),
(10319, 1, 'fire_noc_provisional_new', 'edit'),
(10320, 1, 'fire_noc_provisional_new', 'editfield'),
(10321, 1, 'fire_noc_provisional_new', 'delete'),
(10322, 1, 'fire_noc_provisional_new', 'import_data'),
(10323, 1, 'm_building_type', 'import_data'),
(10324, 1, 'm_floor', 'list'),
(10325, 1, 'm_floor', 'view'),
(10326, 1, 'm_floor', 'add'),
(10327, 1, 'm_floor', 'edit'),
(10328, 1, 'm_floor', 'editfield'),
(10329, 1, 'm_floor', 'delete'),
(10330, 1, 'm_floor', 'import_data'),
(10331, 1, 'm_lift', 'list'),
(10332, 1, 'm_lift', 'view'),
(10333, 1, 'm_lift', 'add'),
(10334, 1, 'm_lift', 'edit'),
(10335, 1, 'm_lift', 'editfield'),
(10336, 1, 'm_lift', 'delete'),
(10337, 1, 'm_lift', 'import_data'),
(10338, 1, 'm_staircase', 'list'),
(10339, 1, 'm_staircase', 'view'),
(10340, 1, 'm_staircase', 'add'),
(10341, 1, 'm_staircase', 'edit'),
(10342, 1, 'm_staircase', 'editfield'),
(10343, 1, 'm_staircase', 'delete'),
(10344, 1, 'm_staircase', 'import_data'),
(10345, 1, 'user_info', 'view'),
(10346, 1, 'user_info', 'add'),
(10347, 1, 'user_info', 'edit'),
(10348, 1, 'user_info', 'editfield'),
(10349, 1, 'user_info', 'delete'),
(10350, 1, 'user_info', 'import_data'),
(10351, 1, 'user_info', 'userregister'),
(10352, 1, 'user_info', 'accountedit'),
(10353, 1, 'user_info', 'accountview'),
(10354, 1, 'role_permissions', 'view'),
(10355, 1, 'role_permissions', 'add'),
(10356, 1, 'role_permissions', 'edit'),
(10357, 1, 'role_permissions', 'editfield'),
(10358, 1, 'role_permissions', 'delete'),
(10359, 1, 'roles', 'view'),
(10360, 1, 'roles', 'add'),
(10361, 1, 'roles', 'edit'),
(10362, 1, 'roles', 'editfield'),
(10363, 1, 'roles', 'delete'),
(10364, 1, 'floor_details', 'view'),
(10365, 1, 'floor_details', 'add'),
(10366, 1, 'floor_details', 'edit'),
(10367, 1, 'floor_details', 'editfield'),
(10368, 1, 'floor_details', 'delete'),
(10369, 1, 'fire_noc_establishment', 'list'),
(10370, 1, 'fire_noc_establishment', 'view'),
(10371, 1, 'fire_noc_establishment', 'add'),
(10372, 1, 'fire_noc_establishment', 'edit'),
(10373, 1, 'fire_noc_establishment', 'editfield'),
(10374, 1, 'fire_noc_establishment', 'delete'),
(10375, 1, 'hotel_inspection_form', 'list'),
(10376, 1, 'hotel_inspection_form', 'view'),
(10377, 1, 'hotel_inspection_form', 'add'),
(10378, 1, 'hotel_inspection_form', 'edit'),
(10379, 1, 'hotel_inspection_form', 'editfield'),
(10380, 1, 'hotel_inspection_form', 'delete'),
(10381, 1, 'industrial_factory_inspection_form', 'list'),
(10382, 1, 'industrial_factory_inspection_form', 'view'),
(10383, 1, 'industrial_factory_inspection_form', 'add'),
(10384, 1, 'industrial_factory_inspection_form', 'edit'),
(10385, 1, 'industrial_factory_inspection_form', 'editfield'),
(10386, 1, 'industrial_factory_inspection_form', 'delete'),
(10387, 1, 'master_establishment_type', 'list'),
(10388, 1, 'master_establishment_type', 'view'),
(10389, 1, 'master_establishment_type', 'add'),
(10390, 1, 'master_establishment_type', 'edit'),
(10391, 1, 'master_establishment_type', 'editfield'),
(10392, 1, 'master_establishment_type', 'delete'),
(10393, 1, 'school_college_coaching_inspection_form', 'list'),
(10394, 1, 'school_college_coaching_inspection_form', 'view'),
(10395, 1, 'school_college_coaching_inspection_form', 'add'),
(10396, 1, 'school_college_coaching_inspection_form', 'edit'),
(10397, 1, 'school_college_coaching_inspection_form', 'editfield'),
(10398, 1, 'school_college_coaching_inspection_form', 'delete'),
(10399, 1, 'mall_cinema_inspection_form', 'list'),
(10400, 1, 'mall_cinema_inspection_form', 'view'),
(10401, 1, 'mall_cinema_inspection_form', 'add'),
(10402, 1, 'mall_cinema_inspection_form', 'edit'),
(10403, 1, 'mall_cinema_inspection_form', 'editfield'),
(10404, 1, 'mall_cinema_inspection_form', 'delete'),
(10405, 1, 'other_establishment_inspection_form', 'list'),
(10406, 1, 'other_establishment_inspection_form', 'view'),
(10407, 1, 'other_establishment_inspection_form', 'add'),
(10408, 1, 'other_establishment_inspection_form', 'edit'),
(10409, 1, 'other_establishment_inspection_form', 'editfield'),
(10410, 1, 'other_establishment_inspection_form', 'delete'),
(10411, 1, 'fire_final_noc', 'list'),
(10412, 1, 'fire_final_noc', 'view'),
(10413, 1, 'fire_final_noc', 'add'),
(10414, 1, 'fire_final_noc', 'edit'),
(10415, 1, 'fire_final_noc', 'editfield'),
(10416, 1, 'fire_final_noc', 'delete'),
(10417, 1, 'fire_final_noc_renewal', 'list'),
(10418, 1, 'fire_final_noc_renewal', 'view'),
(10419, 1, 'fire_final_noc_renewal', 'add'),
(10420, 1, 'fire_final_noc_renewal', 'edit'),
(10421, 1, 'fire_final_noc_renewal', 'editfield'),
(10422, 1, 'fire_final_noc_renewal', 'delete'),
(10423, 1, 'fire_final_part_noc', 'list'),
(10424, 1, 'fire_final_part_noc', 'view'),
(10425, 1, 'fire_final_part_noc', 'add'),
(10426, 1, 'fire_final_part_noc', 'edit'),
(10427, 1, 'fire_final_part_noc', 'editfield'),
(10428, 1, 'fire_final_part_noc', 'delete'),
(10429, 1, 'fire_noc_revised_provisional', 'list'),
(10430, 1, 'fire_noc_revised_provisional', 'view'),
(10431, 1, 'fire_noc_revised_provisional', 'add'),
(10432, 1, 'fire_noc_revised_provisional', 'edit'),
(10433, 1, 'fire_noc_revised_provisional', 'editfield'),
(10434, 1, 'fire_noc_revised_provisional', 'delete'),
(10435, 1, 'master_yes_no', 'list'),
(10436, 1, 'master_yes_no', 'view'),
(10437, 1, 'master_yes_no', 'add'),
(10438, 1, 'master_yes_no', 'edit'),
(10439, 1, 'master_yes_no', 'editfield'),
(10440, 1, 'master_yes_no', 'delete'),
(10441, 1, 'master_zone_ward', 'list'),
(10442, 1, 'master_zone_ward', 'view'),
(10443, 1, 'master_zone_ward', 'add'),
(10444, 1, 'master_zone_ward', 'edit'),
(10445, 1, 'master_zone_ward', 'editfield'),
(10446, 1, 'master_zone_ward', 'delete'),
(10447, 1, 'm_application_type', 'list'),
(10448, 1, 'm_application_type', 'view'),
(10449, 1, 'm_application_type', 'add'),
(10450, 1, 'm_application_type', 'edit'),
(10451, 1, 'm_application_type', 'editfield'),
(10452, 1, 'm_application_type', 'delete'),
(10453, 1, 'govt_hospital_inspection_form', 'list'),
(10454, 1, 'govt_hospital_inspection_form', 'view'),
(10455, 1, 'govt_hospital_inspection_form', 'add'),
(10456, 1, 'govt_hospital_inspection_form', 'edit'),
(10457, 1, 'govt_hospital_inspection_form', 'editfield'),
(10458, 1, 'govt_hospital_inspection_form', 'delete'),
(10459, 1, 'private_hospital_inspection_form', 'list'),
(10460, 1, 'private_hospital_inspection_form', 'view'),
(10461, 1, 'private_hospital_inspection_form', 'add'),
(10462, 1, 'private_hospital_inspection_form', 'edit'),
(10463, 1, 'private_hospital_inspection_form', 'editfield'),
(10464, 1, 'private_hospital_inspection_form', 'delete'),
(10465, 1, 'application_prefix', 'view'),
(10466, 1, 'application_prefix', 'add'),
(10467, 1, 'application_prefix', 'edit'),
(10468, 1, 'application_prefix', 'editfield'),
(10469, 1, 'application_prefix', 'delete'),
(10470, 1, 'expiry_services', 'view'),
(10471, 1, 'expiry_services', 'add'),
(10472, 1, 'expiry_services', 'edit'),
(10473, 1, 'expiry_services', 'editfield'),
(10474, 1, 'expiry_services', 'delete'),
(10475, 1, 'corresponding_values', 'view'),
(10476, 1, 'corresponding_values', 'add'),
(10477, 1, 'corresponding_values', 'edit'),
(10478, 1, 'corresponding_values', 'editfield'),
(10479, 1, 'corresponding_values', 'delete'),
(10480, 1, 'demand', 'view'),
(10481, 1, 'demand', 'add'),
(10482, 1, 'demand', 'edit'),
(10483, 1, 'demand', 'editfield'),
(10484, 1, 'demand', 'delete'),
(10485, 1, 'payments', 'view'),
(10486, 1, 'payments', 'add'),
(10487, 1, 'payments', 'edit'),
(10488, 1, 'payments', 'editfield'),
(10489, 1, 'payments', 'delete'),
(10490, 1, 'bhuilding_details_for_fire_noc', 'view'),
(10491, 1, 'bhuilding_details_for_fire_noc', 'add'),
(10492, 1, 'bhuilding_details_for_fire_noc', 'edit'),
(10493, 1, 'bhuilding_details_for_fire_noc', 'editfield'),
(10494, 1, 'bhuilding_details_for_fire_noc', 'delete'),
(10495, 1, 'accept_reject', 'view'),
(10496, 1, 'accept_reject', 'add'),
(10497, 1, 'accept_reject', 'edit'),
(10498, 1, 'accept_reject', 'editfield'),
(10499, 1, 'accept_reject', 'delete'),
(10500, 1, 'authorization_sequence', 'view'),
(10501, 1, 'authorization_sequence', 'add'),
(10502, 1, 'authorization_sequence', 'edit'),
(10503, 1, 'authorization_sequence', 'editfield'),
(10504, 1, 'authorization_sequence', 'delete'),
(10505, 1, 'certificate_upload', 'view'),
(10506, 1, 'certificate_upload', 'add'),
(10507, 1, 'certificate_upload', 'edit'),
(10508, 1, 'certificate_upload', 'editfield'),
(10509, 1, 'certificate_upload', 'delete'),
(10510, 1, 'survey_visit', 'view'),
(10511, 1, 'survey_visit', 'add'),
(10512, 1, 'survey_visit', 'edit'),
(10513, 1, 'survey_visit', 'editfield'),
(10514, 1, 'survey_visit', 'delete'),
(10515, 1, 'certificate_upload2', 'view'),
(10516, 1, 'certificate_upload2', 'add'),
(10517, 1, 'certificate_upload2', 'edit'),
(10518, 1, 'certificate_upload2', 'editfield'),
(10519, 1, 'certificate_upload2', 'delete'),
(10520, 1, 'fire_noc_establishment', 'edit_zone'),
(10521, 1, 'fire_noc_provisional_new', 'edit_zone'),
(10522, 1, 'fire_final_noc', 'edit_zone'),
(10523, 1, 'fire_final_noc_renewal', 'edit_zone'),
(10524, 1, 'fire_final_part_noc', 'edit_zone'),
(10525, 1, 'fire_noc_revised_provisional', 'edit_zone'),
(10526, 1, 'm_building_type', 'view'),
(10527, 1, 'm_building_type', 'add'),
(10528, 1, 'm_building_type', 'edit'),
(10529, 1, 'm_building_type', 'editfield'),
(10530, 1, 'm_building_type', 'delete'),
(10531, 1, 'report_header_footer', 'view'),
(10532, 1, 'report_header_footer', 'add'),
(10533, 1, 'report_header_footer', 'edit'),
(10534, 1, 'report_header_footer', 'editfield'),
(10535, 1, 'report_header_footer', 'delete'),
(10536, 1, 'wings_info', 'view'),
(10537, 1, 'wings_info', 'add'),
(10538, 1, 'wings_info', 'edit'),
(10539, 1, 'wings_info', 'editfield'),
(10540, 1, 'wings_info', 'delete'),
(10541, 1, 'm_floor_type', 'view'),
(10542, 1, 'm_floor_type', 'add'),
(10543, 1, 'm_floor_type', 'edit'),
(10544, 1, 'm_floor_type', 'editfield'),
(10545, 1, 'm_floor_type', 'delete'),
(10546, 1, 'typical_floor_plan', 'view'),
(10547, 1, 'typical_floor_plan', 'add'),
(10548, 1, 'typical_floor_plan', 'edit'),
(10549, 1, 'typical_floor_plan', 'editfield'),
(10550, 1, 'typical_floor_plan', 'delete'),
(10551, 1, 'lift_details', 'view'),
(10552, 1, 'lift_details', 'add'),
(10553, 1, 'lift_details', 'edit'),
(10554, 1, 'lift_details', 'editfield'),
(10555, 1, 'lift_details', 'delete'),
(10556, 1, 'staircase_details', 'view'),
(10557, 1, 'staircase_details', 'add'),
(10558, 1, 'staircase_details', 'edit'),
(10559, 1, 'staircase_details', 'editfield'),
(10560, 1, 'staircase_details', 'delete'),
(10561, 1, 'fire_noc_establishment_subentry', 'list'),
(10562, 1, 'fire_noc_establishment_subentry', 'view'),
(10563, 1, 'fire_noc_establishment_subentry', 'add'),
(10564, 1, 'fire_noc_establishment_subentry', 'edit'),
(10565, 1, 'fire_noc_establishment_subentry', 'editfield'),
(10566, 1, 'fire_noc_establishment_subentry', 'delete'),
(10567, 1, 'fire_noc_establishment', 'confirm_application'),
(10568, 1, 'fire_noc_establishment', 'revert'),
(10569, 1, 'fire_noc_provisional_new', 'mis_report'),
(10570, 1, 'fire_noc_establishment', 'mis_report'),
(10571, 1, 'fire_final_noc', 'mis_report'),
(10572, 1, 'fire_final_noc_renewal', 'mis_report'),
(10573, 1, 'fire_final_part_noc', 'mis_report'),
(10574, 1, 'fire_noc_revised_provisional', 'mis_report'),
(10575, 1, 'fire_noc_revised_provisional', 'revert'),
(10576, 1, 'fire_noc_provisional_new', 'revert'),
(10577, 1, 'fire_final_noc', 'revert'),
(10578, 1, 'fire_final_noc_renewal', 'revert'),
(10579, 1, 'fire_final_part_noc', 'revert'),
(10580, 2, 'fire_noc_provisional_new', 'list'),
(10581, 2, 'fire_noc_provisional_new', 'view'),
(10582, 2, 'fire_noc_provisional_new', 'add'),
(10583, 2, 'fire_noc_provisional_new', 'edit'),
(10584, 2, 'fire_noc_provisional_new', 'editfield'),
(10585, 2, 'fire_noc_provisional_new', 'delete'),
(10586, 2, 'user_info', 'userregister'),
(10587, 2, 'user_info', 'accountedit'),
(10588, 2, 'user_info', 'accountview'),
(10589, 2, 'floor_details', 'list'),
(10590, 2, 'fire_noc_establishment', 'list'),
(10591, 2, 'fire_noc_establishment', 'view'),
(10592, 2, 'fire_noc_establishment', 'add'),
(10593, 2, 'fire_noc_establishment', 'edit'),
(10594, 2, 'fire_noc_establishment', 'editfield'),
(10595, 2, 'hotel_inspection_form', 'list'),
(10596, 2, 'hotel_inspection_form', 'view'),
(10597, 2, 'hotel_inspection_form', 'add'),
(10598, 2, 'hotel_inspection_form', 'edit'),
(10599, 2, 'hotel_inspection_form', 'editfield'),
(10600, 2, 'industrial_factory_inspection_form', 'list'),
(10601, 2, 'industrial_factory_inspection_form', 'view'),
(10602, 2, 'industrial_factory_inspection_form', 'add'),
(10603, 2, 'industrial_factory_inspection_form', 'edit'),
(10604, 2, 'industrial_factory_inspection_form', 'editfield'),
(10605, 2, 'master_establishment_type', 'add'),
(10606, 2, 'school_college_coaching_inspection_form', 'list'),
(10607, 2, 'school_college_coaching_inspection_form', 'view'),
(10608, 2, 'school_college_coaching_inspection_form', 'add'),
(10609, 2, 'school_college_coaching_inspection_form', 'edit'),
(10610, 2, 'school_college_coaching_inspection_form', 'editfield'),
(10611, 2, 'mall_cinema_inspection_form', 'list'),
(10612, 2, 'mall_cinema_inspection_form', 'view'),
(10613, 2, 'mall_cinema_inspection_form', 'add'),
(10614, 2, 'mall_cinema_inspection_form', 'edit'),
(10615, 2, 'mall_cinema_inspection_form', 'editfield'),
(10616, 2, 'other_establishment_inspection_form', 'list'),
(10617, 2, 'other_establishment_inspection_form', 'view'),
(10618, 2, 'other_establishment_inspection_form', 'add'),
(10619, 2, 'other_establishment_inspection_form', 'edit'),
(10620, 2, 'other_establishment_inspection_form', 'editfield'),
(10621, 2, 'fire_final_noc', 'list'),
(10622, 2, 'fire_final_noc', 'view'),
(10623, 2, 'fire_final_noc', 'add'),
(10624, 2, 'fire_final_noc', 'edit'),
(10625, 2, 'fire_final_noc', 'editfield'),
(10626, 2, 'fire_final_noc', 'delete'),
(10627, 2, 'fire_final_noc_renewal', 'list'),
(10628, 2, 'fire_final_noc_renewal', 'view'),
(10629, 2, 'fire_final_noc_renewal', 'add'),
(10630, 2, 'fire_final_noc_renewal', 'edit'),
(10631, 2, 'fire_final_noc_renewal', 'editfield'),
(10632, 2, 'fire_final_noc_renewal', 'delete'),
(10633, 2, 'fire_final_part_noc', 'list'),
(10634, 2, 'fire_final_part_noc', 'view'),
(10635, 2, 'fire_final_part_noc', 'add'),
(10636, 2, 'fire_final_part_noc', 'edit'),
(10637, 2, 'fire_final_part_noc', 'editfield'),
(10638, 2, 'fire_final_part_noc', 'delete'),
(10639, 2, 'fire_noc_revised_provisional', 'list'),
(10640, 2, 'fire_noc_revised_provisional', 'view'),
(10641, 2, 'fire_noc_revised_provisional', 'add'),
(10642, 2, 'fire_noc_revised_provisional', 'edit'),
(10643, 2, 'fire_noc_revised_provisional', 'editfield'),
(10644, 2, 'fire_noc_revised_provisional', 'delete'),
(10645, 2, 'govt_hospital_inspection_form', 'list'),
(10646, 2, 'govt_hospital_inspection_form', 'view'),
(10647, 2, 'govt_hospital_inspection_form', 'add'),
(10648, 2, 'govt_hospital_inspection_form', 'edit'),
(10649, 2, 'govt_hospital_inspection_form', 'editfield'),
(10650, 2, 'private_hospital_inspection_form', 'list'),
(10651, 2, 'private_hospital_inspection_form', 'view'),
(10652, 2, 'private_hospital_inspection_form', 'add'),
(10653, 2, 'private_hospital_inspection_form', 'edit'),
(10654, 2, 'private_hospital_inspection_form', 'editfield'),
(10655, 2, 'demand', 'list'),
(10656, 2, 'demand', 'view'),
(10657, 2, 'demand', 'add'),
(10658, 2, 'demand', 'edit'),
(10659, 2, 'demand', 'editfield'),
(10660, 2, 'payments', 'list'),
(10661, 2, 'payments', 'view'),
(10662, 2, 'payments', 'add'),
(10663, 2, 'payments', 'edit'),
(10664, 2, 'payments', 'editfield'),
(10665, 2, 'bhuilding_details_for_fire_noc', 'list'),
(10666, 2, 'bhuilding_details_for_fire_noc', 'add'),
(10667, 2, 'bhuilding_details_for_fire_noc', 'edit'),
(10668, 2, 'bhuilding_details_for_fire_noc', 'editfield'),
(10669, 2, 'accept_reject', 'add'),
(10670, 2, 'certificate_upload', 'list'),
(10671, 2, 'certificate_upload', 'view'),
(10672, 2, 'certificate_upload', 'add'),
(10673, 2, 'certificate_upload', 'edit'),
(10674, 2, 'certificate_upload', 'editfield'),
(10675, 2, 'survey_visit', 'list'),
(10676, 2, 'survey_visit', 'view'),
(10677, 2, 'survey_visit', 'add'),
(10678, 2, 'survey_visit', 'edit'),
(10679, 2, 'survey_visit', 'editfield'),
(10680, 2, 'certificate_upload2', 'list'),
(10681, 2, 'certificate_upload2', 'view'),
(10682, 2, 'certificate_upload2', 'add'),
(10683, 2, 'certificate_upload2', 'edit'),
(10684, 2, 'certificate_upload2', 'editfield'),
(10685, 2, 'fire_noc_establishment', 'edit_zone'),
(10686, 2, 'fire_noc_provisional_new', 'edit_zone'),
(10687, 2, 'fire_final_noc', 'edit_zone'),
(10688, 2, 'fire_final_noc_renewal', 'edit_zone'),
(10689, 2, 'fire_final_part_noc', 'edit_zone'),
(10690, 2, 'fire_noc_revised_provisional', 'edit_zone'),
(10691, 2, 'wings_info', 'list'),
(10692, 2, 'typical_floor_plan', 'list'),
(10693, 2, 'lift_details', 'list'),
(10694, 2, 'lift_details', 'add'),
(10695, 2, 'lift_details', 'edit'),
(10696, 2, 'lift_details', 'editfield'),
(10697, 2, 'staircase_details', 'list'),
(10698, 2, 'staircase_details', 'add'),
(10699, 2, 'staircase_details', 'edit'),
(10700, 2, 'staircase_details', 'editfield'),
(10701, 2, 'fire_noc_establishment_subentry', 'list'),
(10702, 2, 'fire_noc_establishment_subentry', 'view'),
(10703, 2, 'fire_noc_establishment_subentry', 'add'),
(10704, 2, 'fire_noc_establishment_subentry', 'edit'),
(10705, 2, 'fire_noc_establishment_subentry', 'editfield'),
(10706, 2, 'fire_noc_establishment_subentry', 'delete'),
(10707, 2, 'fire_noc_establishment', 'confirm_application'),
(10708, 2, 'fire_noc_establishment', 'revert'),
(10709, 2, 'fire_noc_provisional_new', 'mis_report'),
(10710, 2, 'fire_noc_establishment', 'mis_report'),
(10711, 2, 'fire_final_noc', 'mis_report'),
(10712, 2, 'fire_final_noc_renewal', 'mis_report'),
(10713, 2, 'fire_final_part_noc', 'mis_report'),
(10714, 2, 'fire_noc_revised_provisional', 'mis_report'),
(10715, 2, 'fire_noc_revised_provisional', 'revert'),
(10716, 2, 'fire_noc_provisional_new', 'revert'),
(10717, 2, 'fire_final_noc', 'revert'),
(10718, 2, 'fire_final_noc_renewal', 'revert'),
(10719, 2, 'fire_final_part_noc', 'revert'),
(10720, 3, 'fire_noc_provisional_new', 'list'),
(10721, 3, 'fire_noc_provisional_new', 'view'),
(10722, 3, 'fire_noc_provisional_new', 'add'),
(10723, 3, 'fire_noc_provisional_new', 'edit'),
(10724, 3, 'fire_noc_provisional_new', 'editfield'),
(10725, 3, 'fire_noc_provisional_new', 'delete'),
(10726, 3, 'floor_details', 'list'),
(10727, 3, 'floor_details', 'add'),
(10728, 3, 'floor_details', 'edit'),
(10729, 3, 'floor_details', 'editfield'),
(10730, 3, 'floor_details', 'delete'),
(10731, 3, 'floor_details', 'import_data'),
(10732, 3, 'fire_noc_establishment', 'list'),
(10733, 3, 'fire_noc_establishment', 'view'),
(10734, 3, 'fire_noc_establishment', 'add'),
(10735, 3, 'fire_noc_establishment', 'edit'),
(10736, 3, 'fire_noc_establishment', 'editfield'),
(10737, 3, 'fire_noc_establishment', 'delete'),
(10738, 3, 'fire_noc_establishment', 'import_data'),
(10739, 3, 'fire_final_noc', 'list'),
(10740, 3, 'fire_final_noc', 'view'),
(10741, 3, 'fire_final_noc', 'add'),
(10742, 3, 'fire_final_noc', 'edit'),
(10743, 3, 'fire_final_noc', 'editfield'),
(10744, 3, 'fire_final_noc', 'delete'),
(10745, 3, 'fire_final_noc_renewal', 'list'),
(10746, 3, 'fire_final_noc_renewal', 'view'),
(10747, 3, 'fire_final_noc_renewal', 'add'),
(10748, 3, 'fire_final_noc_renewal', 'edit'),
(10749, 3, 'fire_final_noc_renewal', 'editfield'),
(10750, 3, 'fire_final_noc_renewal', 'delete'),
(10751, 3, 'fire_final_part_noc', 'list'),
(10752, 3, 'fire_final_part_noc', 'view'),
(10753, 3, 'fire_final_part_noc', 'add'),
(10754, 3, 'fire_final_part_noc', 'edit'),
(10755, 3, 'fire_final_part_noc', 'editfield'),
(10756, 3, 'fire_final_part_noc', 'delete'),
(10757, 3, 'fire_noc_revised_provisional', 'list'),
(10758, 3, 'fire_noc_revised_provisional', 'view'),
(10759, 3, 'fire_noc_revised_provisional', 'add'),
(10760, 3, 'fire_noc_revised_provisional', 'edit'),
(10761, 3, 'fire_noc_revised_provisional', 'editfield'),
(10762, 3, 'fire_noc_revised_provisional', 'delete'),
(10763, 3, 'demand', 'view'),
(10764, 3, 'bhuilding_details_for_fire_noc', 'list'),
(10765, 3, 'bhuilding_details_for_fire_noc', 'add'),
(10766, 3, 'bhuilding_details_for_fire_noc', 'edit'),
(10767, 3, 'bhuilding_details_for_fire_noc', 'editfield'),
(10768, 3, 'bhuilding_details_for_fire_noc', 'delete'),
(10769, 3, 'fire_noc_establishment', 'edit_zone'),
(10770, 3, 'fire_noc_provisional_new', 'edit_zone'),
(10771, 3, 'fire_final_noc', 'edit_zone'),
(10772, 3, 'fire_final_noc_renewal', 'edit_zone'),
(10773, 3, 'fire_final_part_noc', 'edit_zone'),
(10774, 3, 'fire_noc_revised_provisional', 'edit_zone'),
(10775, 3, 'wings_info', 'list'),
(10776, 3, 'wings_info', 'view'),
(10777, 3, 'wings_info', 'add'),
(10778, 3, 'wings_info', 'edit'),
(10779, 3, 'wings_info', 'editfield'),
(10780, 3, 'wings_info', 'delete'),
(10781, 3, 'typical_floor_plan', 'list'),
(10782, 3, 'typical_floor_plan', 'add'),
(10783, 3, 'typical_floor_plan', 'edit'),
(10784, 3, 'typical_floor_plan', 'editfield'),
(10785, 3, 'typical_floor_plan', 'delete'),
(10786, 3, 'lift_details', 'list'),
(10787, 3, 'lift_details', 'add'),
(10788, 3, 'lift_details', 'edit'),
(10789, 3, 'lift_details', 'editfield'),
(10790, 3, 'staircase_details', 'list'),
(10791, 3, 'staircase_details', 'add'),
(10792, 3, 'staircase_details', 'edit'),
(10793, 3, 'staircase_details', 'editfield'),
(10794, 3, 'fire_noc_establishment_subentry', 'list'),
(10795, 3, 'fire_noc_establishment_subentry', 'view'),
(10796, 3, 'fire_noc_establishment_subentry', 'add'),
(10797, 3, 'fire_noc_establishment_subentry', 'edit'),
(10798, 3, 'fire_noc_establishment_subentry', 'editfield'),
(10799, 3, 'fire_noc_establishment_subentry', 'delete'),
(10800, 3, 'fire_noc_establishment', 'confirm_application'),
(10801, 3, 'fire_noc_establishment', 'revert'),
(10802, 3, 'fire_noc_provisional_new', 'mis_report'),
(10803, 3, 'fire_noc_establishment', 'mis_report'),
(10804, 3, 'fire_final_noc', 'mis_report'),
(10805, 3, 'fire_final_noc_renewal', 'mis_report'),
(10806, 3, 'fire_final_part_noc', 'mis_report'),
(10807, 3, 'fire_noc_revised_provisional', 'mis_report'),
(10808, 3, 'fire_noc_revised_provisional', 'revert'),
(10809, 3, 'fire_noc_provisional_new', 'revert'),
(10810, 3, 'fire_final_noc', 'revert'),
(10811, 3, 'fire_final_noc_renewal', 'revert'),
(10812, 3, 'fire_final_part_noc', 'revert'),
(10813, 4, 'fire_noc_provisional_new', 'list'),
(10814, 4, 'fire_noc_provisional_new', 'view'),
(10815, 4, 'fire_noc_provisional_new', 'add'),
(10816, 4, 'fire_noc_provisional_new', 'edit'),
(10817, 4, 'fire_noc_provisional_new', 'editfield'),
(10818, 4, 'fire_noc_provisional_new', 'delete'),
(10819, 4, 'fire_noc_provisional_new', 'edit_zone'),
(10820, 4, 'fire_noc_provisional_new', 'import_data'),
(10821, 4, 'm_floor', 'list'),
(10822, 4, 'm_floor', 'view'),
(10823, 4, 'm_floor', 'add'),
(10824, 4, 'm_floor', 'edit'),
(10825, 4, 'm_floor', 'editfield'),
(10826, 4, 'm_floor', 'delete'),
(10827, 4, 'm_floor', 'import_data'),
(10828, 4, 'm_lift', 'list'),
(10829, 4, 'm_lift', 'view'),
(10830, 4, 'm_lift', 'add'),
(10831, 4, 'm_lift', 'edit'),
(10832, 4, 'm_lift', 'editfield'),
(10833, 4, 'm_lift', 'delete'),
(10834, 4, 'm_lift', 'import_data'),
(10835, 4, 'm_staircase', 'list'),
(10836, 4, 'm_staircase', 'view'),
(10837, 4, 'm_staircase', 'add'),
(10838, 4, 'm_staircase', 'edit'),
(10839, 4, 'm_staircase', 'editfield'),
(10840, 4, 'm_staircase', 'delete'),
(10841, 4, 'm_staircase', 'import_data'),
(10842, 4, 'user_info', 'list'),
(10843, 4, 'user_info', 'view'),
(10844, 4, 'user_info', 'userregister'),
(10845, 4, 'user_info', 'accountedit'),
(10846, 4, 'user_info', 'accountview'),
(10847, 4, 'user_info', 'add'),
(10848, 4, 'user_info', 'edit'),
(10849, 4, 'user_info', 'editfield'),
(10850, 4, 'user_info', 'delete'),
(10851, 4, 'user_info', 'import_data'),
(10852, 4, 'role_permissions', 'list'),
(10853, 4, 'role_permissions', 'view'),
(10854, 4, 'role_permissions', 'add'),
(10855, 4, 'role_permissions', 'edit'),
(10856, 4, 'role_permissions', 'editfield'),
(10857, 4, 'role_permissions', 'delete'),
(10858, 4, 'role_permissions', 'import_data'),
(10859, 4, 'roles', 'list'),
(10860, 4, 'roles', 'view'),
(10861, 4, 'roles', 'add'),
(10862, 4, 'roles', 'edit'),
(10863, 4, 'roles', 'editfield'),
(10864, 4, 'roles', 'delete'),
(10865, 4, 'roles', 'import_data'),
(10866, 4, 'floor_details', 'list'),
(10867, 4, 'floor_details', 'view'),
(10868, 4, 'floor_details', 'add'),
(10869, 4, 'floor_details', 'edit'),
(10870, 4, 'floor_details', 'editfield'),
(10871, 4, 'floor_details', 'delete'),
(10872, 4, 'floor_details', 'import_data'),
(10873, 4, 'fire_noc_establishment', 'list'),
(10874, 4, 'fire_noc_establishment', 'view'),
(10875, 4, 'fire_noc_establishment', 'add'),
(10876, 4, 'fire_noc_establishment', 'edit'),
(10877, 4, 'fire_noc_establishment', 'editfield'),
(10878, 4, 'fire_noc_establishment', 'delete'),
(10879, 4, 'fire_noc_establishment', 'edit_zone'),
(10880, 4, 'fire_noc_establishment', 'import_data'),
(10881, 4, 'hotel_inspection_form', 'list'),
(10882, 4, 'hotel_inspection_form', 'view'),
(10883, 4, 'hotel_inspection_form', 'add'),
(10884, 4, 'hotel_inspection_form', 'edit'),
(10885, 4, 'hotel_inspection_form', 'editfield'),
(10886, 4, 'hotel_inspection_form', 'delete'),
(10887, 4, 'hotel_inspection_form', 'import_data'),
(10888, 4, 'industrial_factory_inspection_form', 'list'),
(10889, 4, 'industrial_factory_inspection_form', 'view'),
(10890, 4, 'industrial_factory_inspection_form', 'add'),
(10891, 4, 'industrial_factory_inspection_form', 'edit'),
(10892, 4, 'industrial_factory_inspection_form', 'editfield'),
(10893, 4, 'industrial_factory_inspection_form', 'delete'),
(10894, 4, 'industrial_factory_inspection_form', 'import_data'),
(10895, 4, 'master_establishment_type', 'list'),
(10896, 4, 'master_establishment_type', 'view'),
(10897, 4, 'master_establishment_type', 'add'),
(10898, 4, 'master_establishment_type', 'edit'),
(10899, 4, 'master_establishment_type', 'editfield'),
(10900, 4, 'master_establishment_type', 'delete'),
(10901, 4, 'master_establishment_type', 'import_data'),
(10902, 4, 'school_college_coaching_inspection_form', 'list'),
(10903, 4, 'school_college_coaching_inspection_form', 'view'),
(10904, 4, 'school_college_coaching_inspection_form', 'add'),
(10905, 4, 'school_college_coaching_inspection_form', 'edit'),
(10906, 4, 'school_college_coaching_inspection_form', 'editfield'),
(10907, 4, 'school_college_coaching_inspection_form', 'delete'),
(10908, 4, 'school_college_coaching_inspection_form', 'import_data'),
(10909, 4, 'mall_cinema_inspection_form', 'list'),
(10910, 4, 'mall_cinema_inspection_form', 'view'),
(10911, 4, 'mall_cinema_inspection_form', 'add'),
(10912, 4, 'mall_cinema_inspection_form', 'edit'),
(10913, 4, 'mall_cinema_inspection_form', 'editfield'),
(10914, 4, 'mall_cinema_inspection_form', 'delete'),
(10915, 4, 'mall_cinema_inspection_form', 'import_data'),
(10916, 4, 'other_establishment_inspection_form', 'list'),
(10917, 4, 'other_establishment_inspection_form', 'view'),
(10918, 4, 'other_establishment_inspection_form', 'add'),
(10919, 4, 'other_establishment_inspection_form', 'edit'),
(10920, 4, 'other_establishment_inspection_form', 'editfield'),
(10921, 4, 'other_establishment_inspection_form', 'delete'),
(10922, 4, 'other_establishment_inspection_form', 'import_data'),
(10923, 4, 'fire_final_noc', 'list'),
(10924, 4, 'fire_final_noc', 'view'),
(10925, 4, 'fire_final_noc', 'add'),
(10926, 4, 'fire_final_noc', 'edit'),
(10927, 4, 'fire_final_noc', 'editfield'),
(10928, 4, 'fire_final_noc', 'delete'),
(10929, 4, 'fire_final_noc', 'edit_zone'),
(10930, 4, 'fire_final_noc', 'import_data'),
(10931, 4, 'fire_final_noc_renewal', 'list'),
(10932, 4, 'fire_final_noc_renewal', 'view'),
(10933, 4, 'fire_final_noc_renewal', 'add'),
(10934, 4, 'fire_final_noc_renewal', 'edit'),
(10935, 4, 'fire_final_noc_renewal', 'editfield'),
(10936, 4, 'fire_final_noc_renewal', 'delete'),
(10937, 4, 'fire_final_noc_renewal', 'edit_zone'),
(10938, 4, 'fire_final_noc_renewal', 'import_data'),
(10939, 4, 'fire_final_part_noc', 'list'),
(10940, 4, 'fire_final_part_noc', 'view'),
(10941, 4, 'fire_final_part_noc', 'add'),
(10942, 4, 'fire_final_part_noc', 'edit'),
(10943, 4, 'fire_final_part_noc', 'editfield'),
(10944, 4, 'fire_final_part_noc', 'delete'),
(10945, 4, 'fire_final_part_noc', 'edit_zone'),
(10946, 4, 'fire_final_part_noc', 'import_data'),
(10947, 4, 'fire_noc_revised_provisional', 'list'),
(10948, 4, 'fire_noc_revised_provisional', 'view'),
(10949, 4, 'fire_noc_revised_provisional', 'add'),
(10950, 4, 'fire_noc_revised_provisional', 'edit'),
(10951, 4, 'fire_noc_revised_provisional', 'editfield'),
(10952, 4, 'fire_noc_revised_provisional', 'delete'),
(10953, 4, 'fire_noc_revised_provisional', 'edit_zone'),
(10954, 4, 'fire_noc_revised_provisional', 'import_data'),
(10955, 4, 'master_yes_no', 'list'),
(10956, 4, 'master_yes_no', 'view'),
(10957, 4, 'master_yes_no', 'add'),
(10958, 4, 'master_yes_no', 'edit'),
(10959, 4, 'master_yes_no', 'editfield'),
(10960, 4, 'master_yes_no', 'delete'),
(10961, 4, 'master_yes_no', 'import_data'),
(10962, 4, 'master_zone_ward', 'list'),
(10963, 4, 'master_zone_ward', 'view'),
(10964, 4, 'master_zone_ward', 'add'),
(10965, 4, 'master_zone_ward', 'edit'),
(10966, 4, 'master_zone_ward', 'editfield'),
(10967, 4, 'master_zone_ward', 'delete'),
(10968, 4, 'master_zone_ward', 'import_data'),
(10969, 4, 'm_application_type', 'list'),
(10970, 4, 'm_application_type', 'view'),
(10971, 4, 'm_application_type', 'add'),
(10972, 4, 'm_application_type', 'edit'),
(10973, 4, 'm_application_type', 'editfield'),
(10974, 4, 'm_application_type', 'delete'),
(10975, 4, 'm_application_type', 'import_data'),
(10976, 4, 'govt_hospital_inspection_form', 'list'),
(10977, 4, 'govt_hospital_inspection_form', 'view'),
(10978, 4, 'govt_hospital_inspection_form', 'add'),
(10979, 4, 'govt_hospital_inspection_form', 'edit'),
(10980, 4, 'govt_hospital_inspection_form', 'editfield'),
(10981, 4, 'govt_hospital_inspection_form', 'delete'),
(10982, 4, 'govt_hospital_inspection_form', 'import_data'),
(10983, 4, 'private_hospital_inspection_form', 'list'),
(10984, 4, 'private_hospital_inspection_form', 'view'),
(10985, 4, 'private_hospital_inspection_form', 'add'),
(10986, 4, 'private_hospital_inspection_form', 'edit'),
(10987, 4, 'private_hospital_inspection_form', 'editfield'),
(10988, 4, 'private_hospital_inspection_form', 'delete'),
(10989, 4, 'private_hospital_inspection_form', 'import_data'),
(10990, 4, 'application_prefix', 'list'),
(10991, 4, 'application_prefix', 'view'),
(10992, 4, 'application_prefix', 'add'),
(10993, 4, 'application_prefix', 'edit'),
(10994, 4, 'application_prefix', 'editfield'),
(10995, 4, 'application_prefix', 'delete'),
(10996, 4, 'application_prefix', 'import_data'),
(10997, 4, 'expiry_services', 'list'),
(10998, 4, 'expiry_services', 'view'),
(10999, 4, 'expiry_services', 'add'),
(11000, 4, 'expiry_services', 'edit'),
(11001, 4, 'expiry_services', 'editfield'),
(11002, 4, 'expiry_services', 'delete'),
(11003, 4, 'expiry_services', 'import_data'),
(11004, 4, 'corresponding_values', 'list'),
(11005, 4, 'corresponding_values', 'view'),
(11006, 4, 'corresponding_values', 'add'),
(11007, 4, 'corresponding_values', 'edit'),
(11008, 4, 'corresponding_values', 'editfield'),
(11009, 4, 'corresponding_values', 'delete'),
(11010, 4, 'corresponding_values', 'import_data'),
(11011, 4, 'demand', 'list'),
(11012, 4, 'demand', 'view'),
(11013, 4, 'demand', 'add'),
(11014, 4, 'demand', 'edit'),
(11015, 4, 'demand', 'editfield'),
(11016, 4, 'demand', 'delete'),
(11017, 4, 'demand', 'import_data'),
(11018, 4, 'payments', 'list'),
(11019, 4, 'payments', 'view'),
(11020, 4, 'payments', 'add'),
(11021, 4, 'payments', 'edit'),
(11022, 4, 'payments', 'editfield'),
(11023, 4, 'payments', 'delete'),
(11024, 4, 'payments', 'import_data'),
(11025, 4, 'bhuilding_details_for_fire_noc', 'list'),
(11026, 4, 'bhuilding_details_for_fire_noc', 'view'),
(11027, 4, 'bhuilding_details_for_fire_noc', 'add'),
(11028, 4, 'bhuilding_details_for_fire_noc', 'edit'),
(11029, 4, 'bhuilding_details_for_fire_noc', 'editfield'),
(11030, 4, 'bhuilding_details_for_fire_noc', 'delete'),
(11031, 4, 'bhuilding_details_for_fire_noc', 'import_data'),
(11032, 4, 'accept_reject', 'list'),
(11033, 4, 'accept_reject', 'view'),
(11034, 4, 'accept_reject', 'add'),
(11035, 4, 'accept_reject', 'edit'),
(11036, 4, 'accept_reject', 'editfield'),
(11037, 4, 'accept_reject', 'delete'),
(11038, 4, 'accept_reject', 'import_data'),
(11039, 4, 'authorization_sequence', 'list'),
(11040, 4, 'authorization_sequence', 'view'),
(11041, 4, 'authorization_sequence', 'add'),
(11042, 4, 'authorization_sequence', 'edit'),
(11043, 4, 'authorization_sequence', 'editfield'),
(11044, 4, 'authorization_sequence', 'delete'),
(11045, 4, 'authorization_sequence', 'import_data'),
(11046, 4, 'certificate_upload', 'list'),
(11047, 4, 'certificate_upload', 'view'),
(11048, 4, 'certificate_upload', 'add'),
(11049, 4, 'certificate_upload', 'edit'),
(11050, 4, 'certificate_upload', 'editfield'),
(11051, 4, 'certificate_upload', 'delete'),
(11052, 4, 'certificate_upload', 'import_data'),
(11053, 4, 'survey_visit', 'list'),
(11054, 4, 'survey_visit', 'view'),
(11055, 4, 'survey_visit', 'add'),
(11056, 4, 'survey_visit', 'edit'),
(11057, 4, 'survey_visit', 'editfield'),
(11058, 4, 'survey_visit', 'delete'),
(11059, 4, 'survey_visit', 'import_data'),
(11060, 4, 'certificate_upload2', 'list'),
(11061, 4, 'certificate_upload2', 'view'),
(11062, 4, 'certificate_upload2', 'add'),
(11063, 4, 'certificate_upload2', 'edit'),
(11064, 4, 'certificate_upload2', 'editfield'),
(11065, 4, 'certificate_upload2', 'delete'),
(11066, 4, 'certificate_upload2', 'import_data'),
(11067, 4, 'm_building_type', 'list'),
(11068, 4, 'm_building_type', 'view'),
(11069, 4, 'm_building_type', 'add'),
(11070, 4, 'm_building_type', 'edit'),
(11071, 4, 'm_building_type', 'editfield'),
(11072, 4, 'm_building_type', 'delete'),
(11073, 4, 'm_building_type', 'import_data'),
(11074, 4, 'report_header_footer', 'list'),
(11075, 4, 'report_header_footer', 'view'),
(11076, 4, 'report_header_footer', 'add'),
(11077, 4, 'report_header_footer', 'edit'),
(11078, 4, 'report_header_footer', 'editfield'),
(11079, 4, 'report_header_footer', 'delete'),
(11080, 4, 'report_header_footer', 'import_data'),
(11081, 4, 'wings_info', 'list'),
(11082, 4, 'wings_info', 'view'),
(11083, 4, 'wings_info', 'add'),
(11084, 4, 'wings_info', 'edit'),
(11085, 4, 'wings_info', 'editfield'),
(11086, 4, 'wings_info', 'delete'),
(11087, 4, 'wings_info', 'import_data'),
(11088, 4, 'm_floor_type', 'list'),
(11089, 4, 'm_floor_type', 'view'),
(11090, 4, 'm_floor_type', 'add'),
(11091, 4, 'm_floor_type', 'edit'),
(11092, 4, 'm_floor_type', 'editfield'),
(11093, 4, 'm_floor_type', 'delete'),
(11094, 4, 'm_floor_type', 'import_data'),
(11095, 4, 'typical_floor_plan', 'list'),
(11096, 4, 'typical_floor_plan', 'view'),
(11097, 4, 'typical_floor_plan', 'add'),
(11098, 4, 'typical_floor_plan', 'edit'),
(11099, 4, 'typical_floor_plan', 'editfield'),
(11100, 4, 'typical_floor_plan', 'delete'),
(11101, 4, 'typical_floor_plan', 'import_data'),
(11102, 4, 'lift_details', 'list'),
(11103, 4, 'lift_details', 'view'),
(11104, 4, 'lift_details', 'add'),
(11105, 4, 'lift_details', 'edit'),
(11106, 4, 'lift_details', 'editfield'),
(11107, 4, 'lift_details', 'delete'),
(11108, 4, 'lift_details', 'import_data'),
(11109, 4, 'staircase_details', 'list'),
(11110, 4, 'staircase_details', 'view'),
(11111, 4, 'staircase_details', 'add'),
(11112, 4, 'staircase_details', 'edit'),
(11113, 4, 'staircase_details', 'editfield'),
(11114, 4, 'staircase_details', 'delete'),
(11115, 4, 'staircase_details', 'import_data'),
(11116, 4, 'fire_noc_establishment_subentry', 'list'),
(11117, 4, 'fire_noc_establishment_subentry', 'view'),
(11118, 4, 'fire_noc_establishment_subentry', 'add'),
(11119, 4, 'fire_noc_establishment_subentry', 'edit'),
(11120, 4, 'fire_noc_establishment_subentry', 'editfield'),
(11121, 4, 'fire_noc_establishment_subentry', 'delete'),
(11122, 4, 'fire_noc_establishment', 'confirm_application'),
(11123, 4, 'fire_noc_establishment', 'revert'),
(11124, 4, 'fire_noc_provisional_new', 'mis_report'),
(11125, 4, 'fire_noc_establishment', 'mis_report'),
(11126, 4, 'fire_final_noc', 'mis_report'),
(11127, 4, 'fire_final_noc_renewal', 'mis_report'),
(11128, 4, 'fire_final_part_noc', 'mis_report'),
(11129, 4, 'fire_noc_revised_provisional', 'mis_report'),
(11130, 4, 'fire_noc_revised_provisional', 'revert'),
(11131, 4, 'fire_noc_provisional_new', 'revert'),
(11132, 4, 'fire_final_noc', 'revert'),
(11133, 4, 'fire_final_noc_renewal', 'revert'),
(11134, 4, 'fire_final_part_noc', 'revert'),
(11135, 5, 'fire_noc_provisional_new', 'list'),
(11136, 5, 'fire_noc_provisional_new', 'view'),
(11137, 5, 'fire_noc_provisional_new', 'add'),
(11138, 5, 'fire_noc_provisional_new', 'edit'),
(11139, 5, 'fire_noc_provisional_new', 'editfield'),
(11140, 5, 'fire_noc_provisional_new', 'delete'),
(11141, 5, 'fire_noc_provisional_new', 'edit_zone'),
(11142, 5, 'fire_noc_provisional_new', 'mis_report'),
(11143, 5, 'fire_noc_provisional_new', 'revert'),
(11144, 5, 'fire_noc_provisional_new', 'import_data'),
(11145, 5, 'm_floor', 'list'),
(11146, 5, 'm_floor', 'view'),
(11147, 5, 'm_floor', 'add'),
(11148, 5, 'm_floor', 'edit'),
(11149, 5, 'm_floor', 'editfield'),
(11150, 5, 'm_floor', 'delete'),
(11151, 5, 'm_floor', 'import_data'),
(11152, 5, 'm_lift', 'list'),
(11153, 5, 'm_lift', 'view'),
(11154, 5, 'm_lift', 'add'),
(11155, 5, 'm_lift', 'edit'),
(11156, 5, 'm_lift', 'editfield'),
(11157, 5, 'm_lift', 'delete'),
(11158, 5, 'm_lift', 'import_data'),
(11159, 5, 'm_staircase', 'list'),
(11160, 5, 'm_staircase', 'view'),
(11161, 5, 'm_staircase', 'add'),
(11162, 5, 'm_staircase', 'edit'),
(11163, 5, 'm_staircase', 'editfield'),
(11164, 5, 'm_staircase', 'delete'),
(11165, 5, 'm_staircase', 'import_data'),
(11166, 5, 'user_info', 'list'),
(11167, 5, 'user_info', 'view'),
(11168, 5, 'user_info', 'userregister'),
(11169, 5, 'user_info', 'accountedit'),
(11170, 5, 'user_info', 'accountview'),
(11171, 5, 'user_info', 'add'),
(11172, 5, 'user_info', 'edit'),
(11173, 5, 'user_info', 'editfield'),
(11174, 5, 'user_info', 'delete'),
(11175, 5, 'user_info', 'import_data'),
(11176, 5, 'role_permissions', 'list'),
(11177, 5, 'role_permissions', 'view'),
(11178, 5, 'role_permissions', 'add'),
(11179, 5, 'role_permissions', 'edit'),
(11180, 5, 'role_permissions', 'editfield'),
(11181, 5, 'role_permissions', 'delete'),
(11182, 5, 'role_permissions', 'import_data'),
(11183, 5, 'roles', 'list'),
(11184, 5, 'roles', 'view'),
(11185, 5, 'roles', 'add'),
(11186, 5, 'roles', 'edit'),
(11187, 5, 'roles', 'editfield'),
(11188, 5, 'roles', 'delete'),
(11189, 5, 'roles', 'import_data'),
(11190, 5, 'floor_details', 'list'),
(11191, 5, 'floor_details', 'view'),
(11192, 5, 'floor_details', 'add'),
(11193, 5, 'floor_details', 'edit'),
(11194, 5, 'floor_details', 'editfield'),
(11195, 5, 'floor_details', 'delete'),
(11196, 5, 'floor_details', 'import_data'),
(11197, 5, 'fire_noc_establishment', 'list'),
(11198, 5, 'fire_noc_establishment', 'view'),
(11199, 5, 'fire_noc_establishment', 'add'),
(11200, 5, 'fire_noc_establishment', 'edit'),
(11201, 5, 'fire_noc_establishment', 'editfield'),
(11202, 5, 'fire_noc_establishment', 'delete'),
(11203, 5, 'fire_noc_establishment', 'edit_zone'),
(11204, 5, 'fire_noc_establishment', 'confirm_application'),
(11205, 5, 'fire_noc_establishment', 'revert'),
(11206, 5, 'fire_noc_establishment', 'mis_report'),
(11207, 5, 'fire_noc_establishment', 'import_data'),
(11208, 5, 'hotel_inspection_form', 'list'),
(11209, 5, 'hotel_inspection_form', 'view'),
(11210, 5, 'hotel_inspection_form', 'add'),
(11211, 5, 'hotel_inspection_form', 'edit'),
(11212, 5, 'hotel_inspection_form', 'editfield'),
(11213, 5, 'hotel_inspection_form', 'delete'),
(11214, 5, 'hotel_inspection_form', 'import_data'),
(11215, 5, 'industrial_factory_inspection_form', 'list'),
(11216, 5, 'industrial_factory_inspection_form', 'view'),
(11217, 5, 'industrial_factory_inspection_form', 'add'),
(11218, 5, 'industrial_factory_inspection_form', 'edit'),
(11219, 5, 'industrial_factory_inspection_form', 'editfield'),
(11220, 5, 'industrial_factory_inspection_form', 'delete'),
(11221, 5, 'industrial_factory_inspection_form', 'import_data'),
(11222, 5, 'master_establishment_type', 'list'),
(11223, 5, 'master_establishment_type', 'view'),
(11224, 5, 'master_establishment_type', 'add'),
(11225, 5, 'master_establishment_type', 'edit'),
(11226, 5, 'master_establishment_type', 'editfield'),
(11227, 5, 'master_establishment_type', 'delete'),
(11228, 5, 'master_establishment_type', 'import_data'),
(11229, 5, 'school_college_coaching_inspection_form', 'list'),
(11230, 5, 'school_college_coaching_inspection_form', 'view'),
(11231, 5, 'school_college_coaching_inspection_form', 'add'),
(11232, 5, 'school_college_coaching_inspection_form', 'edit'),
(11233, 5, 'school_college_coaching_inspection_form', 'editfield'),
(11234, 5, 'school_college_coaching_inspection_form', 'delete'),
(11235, 5, 'school_college_coaching_inspection_form', 'import_data'),
(11236, 5, 'mall_cinema_inspection_form', 'list'),
(11237, 5, 'mall_cinema_inspection_form', 'view'),
(11238, 5, 'mall_cinema_inspection_form', 'add'),
(11239, 5, 'mall_cinema_inspection_form', 'edit'),
(11240, 5, 'mall_cinema_inspection_form', 'editfield'),
(11241, 5, 'mall_cinema_inspection_form', 'delete'),
(11242, 5, 'mall_cinema_inspection_form', 'import_data'),
(11243, 5, 'other_establishment_inspection_form', 'list'),
(11244, 5, 'other_establishment_inspection_form', 'view'),
(11245, 5, 'other_establishment_inspection_form', 'add'),
(11246, 5, 'other_establishment_inspection_form', 'edit'),
(11247, 5, 'other_establishment_inspection_form', 'editfield'),
(11248, 5, 'other_establishment_inspection_form', 'delete'),
(11249, 5, 'other_establishment_inspection_form', 'import_data'),
(11250, 5, 'fire_final_noc', 'list'),
(11251, 5, 'fire_final_noc', 'view'),
(11252, 5, 'fire_final_noc', 'add'),
(11253, 5, 'fire_final_noc', 'edit'),
(11254, 5, 'fire_final_noc', 'editfield'),
(11255, 5, 'fire_final_noc', 'delete'),
(11256, 5, 'fire_final_noc', 'edit_zone'),
(11257, 5, 'fire_final_noc', 'mis_report'),
(11258, 5, 'fire_final_noc', 'revert'),
(11259, 5, 'fire_final_noc', 'import_data'),
(11260, 5, 'fire_final_noc_renewal', 'list'),
(11261, 5, 'fire_final_noc_renewal', 'view'),
(11262, 5, 'fire_final_noc_renewal', 'add'),
(11263, 5, 'fire_final_noc_renewal', 'edit'),
(11264, 5, 'fire_final_noc_renewal', 'editfield'),
(11265, 5, 'fire_final_noc_renewal', 'delete'),
(11266, 5, 'fire_final_noc_renewal', 'edit_zone'),
(11267, 5, 'fire_final_noc_renewal', 'mis_report'),
(11268, 5, 'fire_final_noc_renewal', 'revert'),
(11269, 5, 'fire_final_noc_renewal', 'import_data'),
(11270, 5, 'fire_final_part_noc', 'list'),
(11271, 5, 'fire_final_part_noc', 'view'),
(11272, 5, 'fire_final_part_noc', 'add'),
(11273, 5, 'fire_final_part_noc', 'edit'),
(11274, 5, 'fire_final_part_noc', 'editfield'),
(11275, 5, 'fire_final_part_noc', 'delete'),
(11276, 5, 'fire_final_part_noc', 'edit_zone'),
(11277, 5, 'fire_final_part_noc', 'mis_report'),
(11278, 5, 'fire_final_part_noc', 'revert'),
(11279, 5, 'fire_final_part_noc', 'import_data'),
(11280, 5, 'fire_noc_revised_provisional', 'list'),
(11281, 5, 'fire_noc_revised_provisional', 'view'),
(11282, 5, 'fire_noc_revised_provisional', 'add'),
(11283, 5, 'fire_noc_revised_provisional', 'edit'),
(11284, 5, 'fire_noc_revised_provisional', 'editfield'),
(11285, 5, 'fire_noc_revised_provisional', 'delete'),
(11286, 5, 'fire_noc_revised_provisional', 'edit_zone'),
(11287, 5, 'fire_noc_revised_provisional', 'mis_report'),
(11288, 5, 'fire_noc_revised_provisional', 'revert'),
(11289, 5, 'fire_noc_revised_provisional', 'import_data'),
(11290, 5, 'master_yes_no', 'list'),
(11291, 5, 'master_yes_no', 'view'),
(11292, 5, 'master_yes_no', 'add'),
(11293, 5, 'master_yes_no', 'edit'),
(11294, 5, 'master_yes_no', 'editfield'),
(11295, 5, 'master_yes_no', 'delete'),
(11296, 5, 'master_yes_no', 'import_data'),
(11297, 5, 'master_zone_ward', 'list'),
(11298, 5, 'master_zone_ward', 'view'),
(11299, 5, 'master_zone_ward', 'add'),
(11300, 5, 'master_zone_ward', 'edit'),
(11301, 5, 'master_zone_ward', 'editfield'),
(11302, 5, 'master_zone_ward', 'delete'),
(11303, 5, 'master_zone_ward', 'import_data'),
(11304, 5, 'm_application_type', 'list'),
(11305, 5, 'm_application_type', 'view'),
(11306, 5, 'm_application_type', 'add'),
(11307, 5, 'm_application_type', 'edit'),
(11308, 5, 'm_application_type', 'editfield'),
(11309, 5, 'm_application_type', 'delete'),
(11310, 5, 'm_application_type', 'import_data'),
(11311, 5, 'govt_hospital_inspection_form', 'list'),
(11312, 5, 'govt_hospital_inspection_form', 'view'),
(11313, 5, 'govt_hospital_inspection_form', 'add'),
(11314, 5, 'govt_hospital_inspection_form', 'edit'),
(11315, 5, 'govt_hospital_inspection_form', 'editfield'),
(11316, 5, 'govt_hospital_inspection_form', 'delete'),
(11317, 5, 'govt_hospital_inspection_form', 'import_data'),
(11318, 5, 'private_hospital_inspection_form', 'list'),
(11319, 5, 'private_hospital_inspection_form', 'view'),
(11320, 5, 'private_hospital_inspection_form', 'add'),
(11321, 5, 'private_hospital_inspection_form', 'edit'),
(11322, 5, 'private_hospital_inspection_form', 'editfield'),
(11323, 5, 'private_hospital_inspection_form', 'delete'),
(11324, 5, 'private_hospital_inspection_form', 'import_data'),
(11325, 5, 'application_prefix', 'list'),
(11326, 5, 'application_prefix', 'view'),
(11327, 5, 'application_prefix', 'add'),
(11328, 5, 'application_prefix', 'edit'),
(11329, 5, 'application_prefix', 'editfield'),
(11330, 5, 'application_prefix', 'delete'),
(11331, 5, 'application_prefix', 'import_data'),
(11332, 5, 'expiry_services', 'list'),
(11333, 5, 'expiry_services', 'view'),
(11334, 5, 'expiry_services', 'add'),
(11335, 5, 'expiry_services', 'edit'),
(11336, 5, 'expiry_services', 'editfield'),
(11337, 5, 'expiry_services', 'delete'),
(11338, 5, 'expiry_services', 'import_data'),
(11339, 5, 'corresponding_values', 'list'),
(11340, 5, 'corresponding_values', 'view'),
(11341, 5, 'corresponding_values', 'add'),
(11342, 5, 'corresponding_values', 'edit'),
(11343, 5, 'corresponding_values', 'editfield'),
(11344, 5, 'corresponding_values', 'delete'),
(11345, 5, 'corresponding_values', 'import_data'),
(11346, 5, 'demand', 'list'),
(11347, 5, 'demand', 'view'),
(11348, 5, 'demand', 'add'),
(11349, 5, 'demand', 'edit'),
(11350, 5, 'demand', 'editfield'),
(11351, 5, 'demand', 'delete'),
(11352, 5, 'demand', 'import_data'),
(11353, 5, 'payments', 'list'),
(11354, 5, 'payments', 'view'),
(11355, 5, 'payments', 'add'),
(11356, 5, 'payments', 'edit'),
(11357, 5, 'payments', 'editfield'),
(11358, 5, 'payments', 'delete'),
(11359, 5, 'payments', 'import_data'),
(11360, 5, 'bhuilding_details_for_fire_noc', 'list'),
(11361, 5, 'bhuilding_details_for_fire_noc', 'view'),
(11362, 5, 'bhuilding_details_for_fire_noc', 'add'),
(11363, 5, 'bhuilding_details_for_fire_noc', 'edit'),
(11364, 5, 'bhuilding_details_for_fire_noc', 'editfield'),
(11365, 5, 'bhuilding_details_for_fire_noc', 'delete'),
(11366, 5, 'bhuilding_details_for_fire_noc', 'import_data'),
(11367, 5, 'accept_reject', 'list'),
(11368, 5, 'accept_reject', 'view'),
(11369, 5, 'accept_reject', 'add'),
(11370, 5, 'accept_reject', 'edit'),
(11371, 5, 'accept_reject', 'editfield'),
(11372, 5, 'accept_reject', 'delete'),
(11373, 5, 'accept_reject', 'import_data'),
(11374, 5, 'authorization_sequence', 'list'),
(11375, 5, 'authorization_sequence', 'view'),
(11376, 5, 'authorization_sequence', 'add'),
(11377, 5, 'authorization_sequence', 'edit'),
(11378, 5, 'authorization_sequence', 'editfield'),
(11379, 5, 'authorization_sequence', 'delete'),
(11380, 5, 'authorization_sequence', 'import_data'),
(11381, 5, 'certificate_upload', 'list'),
(11382, 5, 'certificate_upload', 'view'),
(11383, 5, 'certificate_upload', 'add'),
(11384, 5, 'certificate_upload', 'edit'),
(11385, 5, 'certificate_upload', 'editfield'),
(11386, 5, 'certificate_upload', 'delete'),
(11387, 5, 'certificate_upload', 'import_data'),
(11388, 5, 'survey_visit', 'list'),
(11389, 5, 'survey_visit', 'view'),
(11390, 5, 'survey_visit', 'add'),
(11391, 5, 'survey_visit', 'edit'),
(11392, 5, 'survey_visit', 'editfield'),
(11393, 5, 'survey_visit', 'delete'),
(11394, 5, 'survey_visit', 'import_data'),
(11395, 5, 'certificate_upload2', 'list'),
(11396, 5, 'certificate_upload2', 'view'),
(11397, 5, 'certificate_upload2', 'add'),
(11398, 5, 'certificate_upload2', 'edit'),
(11399, 5, 'certificate_upload2', 'editfield'),
(11400, 5, 'certificate_upload2', 'delete'),
(11401, 5, 'certificate_upload2', 'import_data'),
(11402, 5, 'm_building_type', 'list'),
(11403, 5, 'm_building_type', 'view'),
(11404, 5, 'm_building_type', 'add'),
(11405, 5, 'm_building_type', 'edit'),
(11406, 5, 'm_building_type', 'editfield'),
(11407, 5, 'm_building_type', 'delete'),
(11408, 5, 'm_building_type', 'import_data'),
(11409, 5, 'report_header_footer', 'list'),
(11410, 5, 'report_header_footer', 'view'),
(11411, 5, 'report_header_footer', 'add'),
(11412, 5, 'report_header_footer', 'edit'),
(11413, 5, 'report_header_footer', 'editfield'),
(11414, 5, 'report_header_footer', 'delete'),
(11415, 5, 'report_header_footer', 'import_data'),
(11416, 5, 'wings_info', 'list'),
(11417, 5, 'wings_info', 'view'),
(11418, 5, 'wings_info', 'add'),
(11419, 5, 'wings_info', 'edit'),
(11420, 5, 'wings_info', 'editfield'),
(11421, 5, 'wings_info', 'delete'),
(11422, 5, 'wings_info', 'import_data'),
(11423, 5, 'm_floor_type', 'list'),
(11424, 5, 'm_floor_type', 'view'),
(11425, 5, 'm_floor_type', 'add'),
(11426, 5, 'm_floor_type', 'edit'),
(11427, 5, 'm_floor_type', 'editfield'),
(11428, 5, 'm_floor_type', 'delete'),
(11429, 5, 'm_floor_type', 'import_data'),
(11430, 5, 'typical_floor_plan', 'list'),
(11431, 5, 'typical_floor_plan', 'view'),
(11432, 5, 'typical_floor_plan', 'add'),
(11433, 5, 'typical_floor_plan', 'edit'),
(11434, 5, 'typical_floor_plan', 'editfield'),
(11435, 5, 'typical_floor_plan', 'delete'),
(11436, 5, 'typical_floor_plan', 'import_data'),
(11437, 5, 'lift_details', 'list'),
(11438, 5, 'lift_details', 'view'),
(11439, 5, 'lift_details', 'add'),
(11440, 5, 'lift_details', 'edit'),
(11441, 5, 'lift_details', 'editfield'),
(11442, 5, 'lift_details', 'delete'),
(11443, 5, 'lift_details', 'import_data'),
(11444, 5, 'staircase_details', 'list'),
(11445, 5, 'staircase_details', 'view'),
(11446, 5, 'staircase_details', 'add'),
(11447, 5, 'staircase_details', 'edit'),
(11448, 5, 'staircase_details', 'editfield'),
(11449, 5, 'staircase_details', 'delete'),
(11450, 5, 'staircase_details', 'import_data'),
(11451, 5, 'fire_noc_establishment_subentry', 'list'),
(11452, 5, 'fire_noc_establishment_subentry', 'view'),
(11453, 5, 'fire_noc_establishment_subentry', 'add'),
(11454, 5, 'fire_noc_establishment_subentry', 'edit'),
(11455, 5, 'fire_noc_establishment_subentry', 'editfield'),
(11456, 5, 'fire_noc_establishment_subentry', 'delete'),
(11457, 5, 'fire_noc_establishment_subentry', 'import_data'),
(11458, 6, 'fire_noc_provisional_new', 'list'),
(11459, 6, 'fire_noc_provisional_new', 'view'),
(11460, 6, 'fire_noc_provisional_new', 'add'),
(11461, 6, 'fire_noc_provisional_new', 'edit'),
(11462, 6, 'fire_noc_provisional_new', 'editfield'),
(11463, 6, 'fire_noc_provisional_new', 'delete'),
(11464, 6, 'fire_noc_provisional_new', 'edit_zone'),
(11465, 6, 'fire_noc_provisional_new', 'mis_report'),
(11466, 6, 'fire_noc_provisional_new', 'revert'),
(11467, 6, 'fire_noc_provisional_new', 'import_data'),
(11468, 6, 'm_floor', 'list'),
(11469, 6, 'm_floor', 'view'),
(11470, 6, 'm_floor', 'add'),
(11471, 6, 'm_floor', 'edit');
INSERT INTO `role_permissions` (`permission_id`, `role_id`, `page_name`, `action_name`) VALUES
(11472, 6, 'm_floor', 'editfield'),
(11473, 6, 'm_floor', 'delete'),
(11474, 6, 'm_floor', 'import_data'),
(11475, 6, 'm_lift', 'list'),
(11476, 6, 'm_lift', 'view'),
(11477, 6, 'm_lift', 'add'),
(11478, 6, 'm_lift', 'edit'),
(11479, 6, 'm_lift', 'editfield'),
(11480, 6, 'm_lift', 'delete'),
(11481, 6, 'm_lift', 'import_data'),
(11482, 6, 'm_staircase', 'list'),
(11483, 6, 'm_staircase', 'view'),
(11484, 6, 'm_staircase', 'add'),
(11485, 6, 'm_staircase', 'edit'),
(11486, 6, 'm_staircase', 'editfield'),
(11487, 6, 'm_staircase', 'delete'),
(11488, 6, 'm_staircase', 'import_data'),
(11489, 6, 'user_info', 'list'),
(11490, 6, 'user_info', 'view'),
(11491, 6, 'user_info', 'userregister'),
(11492, 6, 'user_info', 'accountedit'),
(11493, 6, 'user_info', 'accountview'),
(11494, 6, 'user_info', 'add'),
(11495, 6, 'user_info', 'edit'),
(11496, 6, 'user_info', 'editfield'),
(11497, 6, 'user_info', 'delete'),
(11498, 6, 'user_info', 'import_data'),
(11499, 6, 'role_permissions', 'list'),
(11500, 6, 'role_permissions', 'view'),
(11501, 6, 'role_permissions', 'add'),
(11502, 6, 'role_permissions', 'edit'),
(11503, 6, 'role_permissions', 'editfield'),
(11504, 6, 'role_permissions', 'delete'),
(11505, 6, 'role_permissions', 'import_data'),
(11506, 6, 'roles', 'list'),
(11507, 6, 'roles', 'view'),
(11508, 6, 'roles', 'add'),
(11509, 6, 'roles', 'edit'),
(11510, 6, 'roles', 'editfield'),
(11511, 6, 'roles', 'delete'),
(11512, 6, 'roles', 'import_data'),
(11513, 6, 'floor_details', 'list'),
(11514, 6, 'floor_details', 'view'),
(11515, 6, 'floor_details', 'add'),
(11516, 6, 'floor_details', 'edit'),
(11517, 6, 'floor_details', 'editfield'),
(11518, 6, 'floor_details', 'delete'),
(11519, 6, 'floor_details', 'import_data'),
(11520, 6, 'fire_noc_establishment', 'list'),
(11521, 6, 'fire_noc_establishment', 'view'),
(11522, 6, 'fire_noc_establishment', 'add'),
(11523, 6, 'fire_noc_establishment', 'edit'),
(11524, 6, 'fire_noc_establishment', 'editfield'),
(11525, 6, 'fire_noc_establishment', 'delete'),
(11526, 6, 'fire_noc_establishment', 'edit_zone'),
(11527, 6, 'fire_noc_establishment', 'confirm_application'),
(11528, 6, 'fire_noc_establishment', 'revert'),
(11529, 6, 'fire_noc_establishment', 'mis_report'),
(11530, 6, 'fire_noc_establishment', 'import_data'),
(11531, 6, 'hotel_inspection_form', 'list'),
(11532, 6, 'hotel_inspection_form', 'view'),
(11533, 6, 'hotel_inspection_form', 'add'),
(11534, 6, 'hotel_inspection_form', 'edit'),
(11535, 6, 'hotel_inspection_form', 'editfield'),
(11536, 6, 'hotel_inspection_form', 'delete'),
(11537, 6, 'hotel_inspection_form', 'import_data'),
(11538, 6, 'industrial_factory_inspection_form', 'list'),
(11539, 6, 'industrial_factory_inspection_form', 'view'),
(11540, 6, 'industrial_factory_inspection_form', 'add'),
(11541, 6, 'industrial_factory_inspection_form', 'edit'),
(11542, 6, 'industrial_factory_inspection_form', 'editfield'),
(11543, 6, 'industrial_factory_inspection_form', 'delete'),
(11544, 6, 'industrial_factory_inspection_form', 'import_data'),
(11545, 6, 'master_establishment_type', 'list'),
(11546, 6, 'master_establishment_type', 'view'),
(11547, 6, 'master_establishment_type', 'add'),
(11548, 6, 'master_establishment_type', 'edit'),
(11549, 6, 'master_establishment_type', 'editfield'),
(11550, 6, 'master_establishment_type', 'delete'),
(11551, 6, 'master_establishment_type', 'import_data'),
(11552, 6, 'school_college_coaching_inspection_form', 'list'),
(11553, 6, 'school_college_coaching_inspection_form', 'view'),
(11554, 6, 'school_college_coaching_inspection_form', 'add'),
(11555, 6, 'school_college_coaching_inspection_form', 'edit'),
(11556, 6, 'school_college_coaching_inspection_form', 'editfield'),
(11557, 6, 'school_college_coaching_inspection_form', 'delete'),
(11558, 6, 'school_college_coaching_inspection_form', 'import_data'),
(11559, 6, 'mall_cinema_inspection_form', 'list'),
(11560, 6, 'mall_cinema_inspection_form', 'view'),
(11561, 6, 'mall_cinema_inspection_form', 'add'),
(11562, 6, 'mall_cinema_inspection_form', 'edit'),
(11563, 6, 'mall_cinema_inspection_form', 'editfield'),
(11564, 6, 'mall_cinema_inspection_form', 'delete'),
(11565, 6, 'mall_cinema_inspection_form', 'import_data'),
(11566, 6, 'other_establishment_inspection_form', 'list'),
(11567, 6, 'other_establishment_inspection_form', 'view'),
(11568, 6, 'other_establishment_inspection_form', 'add'),
(11569, 6, 'other_establishment_inspection_form', 'edit'),
(11570, 6, 'other_establishment_inspection_form', 'editfield'),
(11571, 6, 'other_establishment_inspection_form', 'delete'),
(11572, 6, 'other_establishment_inspection_form', 'import_data'),
(11573, 6, 'fire_final_noc', 'list'),
(11574, 6, 'fire_final_noc', 'view'),
(11575, 6, 'fire_final_noc', 'add'),
(11576, 6, 'fire_final_noc', 'edit'),
(11577, 6, 'fire_final_noc', 'editfield'),
(11578, 6, 'fire_final_noc', 'delete'),
(11579, 6, 'fire_final_noc', 'edit_zone'),
(11580, 6, 'fire_final_noc', 'mis_report'),
(11581, 6, 'fire_final_noc', 'revert'),
(11582, 6, 'fire_final_noc', 'import_data'),
(11583, 6, 'fire_final_noc_renewal', 'list'),
(11584, 6, 'fire_final_noc_renewal', 'view'),
(11585, 6, 'fire_final_noc_renewal', 'add'),
(11586, 6, 'fire_final_noc_renewal', 'edit'),
(11587, 6, 'fire_final_noc_renewal', 'editfield'),
(11588, 6, 'fire_final_noc_renewal', 'delete'),
(11589, 6, 'fire_final_noc_renewal', 'edit_zone'),
(11590, 6, 'fire_final_noc_renewal', 'mis_report'),
(11591, 6, 'fire_final_noc_renewal', 'revert'),
(11592, 6, 'fire_final_noc_renewal', 'import_data'),
(11593, 6, 'fire_final_part_noc', 'list'),
(11594, 6, 'fire_final_part_noc', 'view'),
(11595, 6, 'fire_final_part_noc', 'add'),
(11596, 6, 'fire_final_part_noc', 'edit'),
(11597, 6, 'fire_final_part_noc', 'editfield'),
(11598, 6, 'fire_final_part_noc', 'delete'),
(11599, 6, 'fire_final_part_noc', 'edit_zone'),
(11600, 6, 'fire_final_part_noc', 'mis_report'),
(11601, 6, 'fire_final_part_noc', 'revert'),
(11602, 6, 'fire_final_part_noc', 'import_data'),
(11603, 6, 'fire_noc_revised_provisional', 'list'),
(11604, 6, 'fire_noc_revised_provisional', 'view'),
(11605, 6, 'fire_noc_revised_provisional', 'add'),
(11606, 6, 'fire_noc_revised_provisional', 'edit'),
(11607, 6, 'fire_noc_revised_provisional', 'editfield'),
(11608, 6, 'fire_noc_revised_provisional', 'delete'),
(11609, 6, 'fire_noc_revised_provisional', 'edit_zone'),
(11610, 6, 'fire_noc_revised_provisional', 'mis_report'),
(11611, 6, 'fire_noc_revised_provisional', 'revert'),
(11612, 6, 'fire_noc_revised_provisional', 'import_data'),
(11613, 6, 'master_yes_no', 'list'),
(11614, 6, 'master_yes_no', 'view'),
(11615, 6, 'master_yes_no', 'add'),
(11616, 6, 'master_yes_no', 'edit'),
(11617, 6, 'master_yes_no', 'editfield'),
(11618, 6, 'master_yes_no', 'delete'),
(11619, 6, 'master_yes_no', 'import_data'),
(11620, 6, 'master_zone_ward', 'list'),
(11621, 6, 'master_zone_ward', 'view'),
(11622, 6, 'master_zone_ward', 'add'),
(11623, 6, 'master_zone_ward', 'edit'),
(11624, 6, 'master_zone_ward', 'editfield'),
(11625, 6, 'master_zone_ward', 'delete'),
(11626, 6, 'master_zone_ward', 'import_data'),
(11627, 6, 'm_application_type', 'list'),
(11628, 6, 'm_application_type', 'view'),
(11629, 6, 'm_application_type', 'add'),
(11630, 6, 'm_application_type', 'edit'),
(11631, 6, 'm_application_type', 'editfield'),
(11632, 6, 'm_application_type', 'delete'),
(11633, 6, 'm_application_type', 'import_data'),
(11634, 6, 'govt_hospital_inspection_form', 'list'),
(11635, 6, 'govt_hospital_inspection_form', 'view'),
(11636, 6, 'govt_hospital_inspection_form', 'add'),
(11637, 6, 'govt_hospital_inspection_form', 'edit'),
(11638, 6, 'govt_hospital_inspection_form', 'editfield'),
(11639, 6, 'govt_hospital_inspection_form', 'delete'),
(11640, 6, 'govt_hospital_inspection_form', 'import_data'),
(11641, 6, 'private_hospital_inspection_form', 'list'),
(11642, 6, 'private_hospital_inspection_form', 'view'),
(11643, 6, 'private_hospital_inspection_form', 'add'),
(11644, 6, 'private_hospital_inspection_form', 'edit'),
(11645, 6, 'private_hospital_inspection_form', 'editfield'),
(11646, 6, 'private_hospital_inspection_form', 'delete'),
(11647, 6, 'private_hospital_inspection_form', 'import_data'),
(11648, 6, 'application_prefix', 'list'),
(11649, 6, 'application_prefix', 'view'),
(11650, 6, 'application_prefix', 'add'),
(11651, 6, 'application_prefix', 'edit'),
(11652, 6, 'application_prefix', 'editfield'),
(11653, 6, 'application_prefix', 'delete'),
(11654, 6, 'application_prefix', 'import_data'),
(11655, 6, 'expiry_services', 'list'),
(11656, 6, 'expiry_services', 'view'),
(11657, 6, 'expiry_services', 'add'),
(11658, 6, 'expiry_services', 'edit'),
(11659, 6, 'expiry_services', 'editfield'),
(11660, 6, 'expiry_services', 'delete'),
(11661, 6, 'expiry_services', 'import_data'),
(11662, 6, 'corresponding_values', 'list'),
(11663, 6, 'corresponding_values', 'view'),
(11664, 6, 'corresponding_values', 'add'),
(11665, 6, 'corresponding_values', 'edit'),
(11666, 6, 'corresponding_values', 'editfield'),
(11667, 6, 'corresponding_values', 'delete'),
(11668, 6, 'corresponding_values', 'import_data'),
(11669, 6, 'demand', 'list'),
(11670, 6, 'demand', 'view'),
(11671, 6, 'demand', 'add'),
(11672, 6, 'demand', 'edit'),
(11673, 6, 'demand', 'editfield'),
(11674, 6, 'demand', 'delete'),
(11675, 6, 'demand', 'import_data'),
(11676, 6, 'payments', 'list'),
(11677, 6, 'payments', 'view'),
(11678, 6, 'payments', 'add'),
(11679, 6, 'payments', 'edit'),
(11680, 6, 'payments', 'editfield'),
(11681, 6, 'payments', 'delete'),
(11682, 6, 'payments', 'import_data'),
(11683, 6, 'bhuilding_details_for_fire_noc', 'list'),
(11684, 6, 'bhuilding_details_for_fire_noc', 'view'),
(11685, 6, 'bhuilding_details_for_fire_noc', 'add'),
(11686, 6, 'bhuilding_details_for_fire_noc', 'edit'),
(11687, 6, 'bhuilding_details_for_fire_noc', 'editfield'),
(11688, 6, 'bhuilding_details_for_fire_noc', 'delete'),
(11689, 6, 'bhuilding_details_for_fire_noc', 'import_data'),
(11690, 6, 'accept_reject', 'list'),
(11691, 6, 'accept_reject', 'view'),
(11692, 6, 'accept_reject', 'add'),
(11693, 6, 'accept_reject', 'edit'),
(11694, 6, 'accept_reject', 'editfield'),
(11695, 6, 'accept_reject', 'delete'),
(11696, 6, 'accept_reject', 'import_data'),
(11697, 6, 'authorization_sequence', 'list'),
(11698, 6, 'authorization_sequence', 'view'),
(11699, 6, 'authorization_sequence', 'add'),
(11700, 6, 'authorization_sequence', 'edit'),
(11701, 6, 'authorization_sequence', 'editfield'),
(11702, 6, 'authorization_sequence', 'delete'),
(11703, 6, 'authorization_sequence', 'import_data'),
(11704, 6, 'certificate_upload', 'list'),
(11705, 6, 'certificate_upload', 'view'),
(11706, 6, 'certificate_upload', 'add'),
(11707, 6, 'certificate_upload', 'edit'),
(11708, 6, 'certificate_upload', 'editfield'),
(11709, 6, 'certificate_upload', 'delete'),
(11710, 6, 'certificate_upload', 'import_data'),
(11711, 6, 'survey_visit', 'list'),
(11712, 6, 'survey_visit', 'view'),
(11713, 6, 'survey_visit', 'add'),
(11714, 6, 'survey_visit', 'edit'),
(11715, 6, 'survey_visit', 'editfield'),
(11716, 6, 'survey_visit', 'delete'),
(11717, 6, 'survey_visit', 'import_data'),
(11718, 6, 'certificate_upload2', 'list'),
(11719, 6, 'certificate_upload2', 'view'),
(11720, 6, 'certificate_upload2', 'add'),
(11721, 6, 'certificate_upload2', 'edit'),
(11722, 6, 'certificate_upload2', 'editfield'),
(11723, 6, 'certificate_upload2', 'delete'),
(11724, 6, 'certificate_upload2', 'import_data'),
(11725, 6, 'm_building_type', 'list'),
(11726, 6, 'm_building_type', 'view'),
(11727, 6, 'm_building_type', 'add'),
(11728, 6, 'm_building_type', 'edit'),
(11729, 6, 'm_building_type', 'editfield'),
(11730, 6, 'm_building_type', 'delete'),
(11731, 6, 'm_building_type', 'import_data'),
(11732, 6, 'report_header_footer', 'list'),
(11733, 6, 'report_header_footer', 'view'),
(11734, 6, 'report_header_footer', 'add'),
(11735, 6, 'report_header_footer', 'edit'),
(11736, 6, 'report_header_footer', 'editfield'),
(11737, 6, 'report_header_footer', 'delete'),
(11738, 6, 'report_header_footer', 'import_data'),
(11739, 6, 'wings_info', 'list'),
(11740, 6, 'wings_info', 'view'),
(11741, 6, 'wings_info', 'add'),
(11742, 6, 'wings_info', 'edit'),
(11743, 6, 'wings_info', 'editfield'),
(11744, 6, 'wings_info', 'delete'),
(11745, 6, 'wings_info', 'import_data'),
(11746, 6, 'm_floor_type', 'list'),
(11747, 6, 'm_floor_type', 'view'),
(11748, 6, 'm_floor_type', 'add'),
(11749, 6, 'm_floor_type', 'edit'),
(11750, 6, 'm_floor_type', 'editfield'),
(11751, 6, 'm_floor_type', 'delete'),
(11752, 6, 'm_floor_type', 'import_data'),
(11753, 6, 'typical_floor_plan', 'list'),
(11754, 6, 'typical_floor_plan', 'view'),
(11755, 6, 'typical_floor_plan', 'add'),
(11756, 6, 'typical_floor_plan', 'edit'),
(11757, 6, 'typical_floor_plan', 'editfield'),
(11758, 6, 'typical_floor_plan', 'delete'),
(11759, 6, 'typical_floor_plan', 'import_data'),
(11760, 6, 'lift_details', 'list'),
(11761, 6, 'lift_details', 'view'),
(11762, 6, 'lift_details', 'add'),
(11763, 6, 'lift_details', 'edit'),
(11764, 6, 'lift_details', 'editfield'),
(11765, 6, 'lift_details', 'delete'),
(11766, 6, 'lift_details', 'import_data'),
(11767, 6, 'staircase_details', 'list'),
(11768, 6, 'staircase_details', 'view'),
(11769, 6, 'staircase_details', 'add'),
(11770, 6, 'staircase_details', 'edit'),
(11771, 6, 'staircase_details', 'editfield'),
(11772, 6, 'staircase_details', 'delete'),
(11773, 6, 'staircase_details', 'import_data'),
(11774, 6, 'fire_noc_establishment_subentry', 'list'),
(11775, 6, 'fire_noc_establishment_subentry', 'view'),
(11776, 6, 'fire_noc_establishment_subentry', 'add'),
(11777, 6, 'fire_noc_establishment_subentry', 'edit'),
(11778, 6, 'fire_noc_establishment_subentry', 'editfield'),
(11779, 6, 'fire_noc_establishment_subentry', 'delete'),
(11780, 6, 'fire_noc_establishment_subentry', 'import_data'),
(11781, 7, 'fire_noc_provisional_new', 'list'),
(11782, 7, 'fire_noc_provisional_new', 'view'),
(11783, 7, 'fire_noc_provisional_new', 'add'),
(11784, 7, 'fire_noc_provisional_new', 'edit'),
(11785, 7, 'fire_noc_provisional_new', 'editfield'),
(11786, 7, 'fire_noc_provisional_new', 'delete'),
(11787, 7, 'fire_noc_provisional_new', 'edit_zone'),
(11788, 7, 'fire_noc_provisional_new', 'mis_report'),
(11789, 7, 'fire_noc_provisional_new', 'revert'),
(11790, 7, 'fire_noc_provisional_new', 'import_data'),
(11791, 7, 'm_floor', 'list'),
(11792, 7, 'm_floor', 'view'),
(11793, 7, 'm_floor', 'add'),
(11794, 7, 'm_floor', 'edit'),
(11795, 7, 'm_floor', 'editfield'),
(11796, 7, 'm_floor', 'delete'),
(11797, 7, 'm_floor', 'import_data'),
(11798, 7, 'm_lift', 'list'),
(11799, 7, 'm_lift', 'view'),
(11800, 7, 'm_lift', 'add'),
(11801, 7, 'm_lift', 'edit'),
(11802, 7, 'm_lift', 'editfield'),
(11803, 7, 'm_lift', 'delete'),
(11804, 7, 'm_lift', 'import_data'),
(11805, 7, 'm_staircase', 'list'),
(11806, 7, 'm_staircase', 'view'),
(11807, 7, 'm_staircase', 'add'),
(11808, 7, 'm_staircase', 'edit'),
(11809, 7, 'm_staircase', 'editfield'),
(11810, 7, 'm_staircase', 'delete'),
(11811, 7, 'm_staircase', 'import_data'),
(11812, 7, 'user_info', 'list'),
(11813, 7, 'user_info', 'view'),
(11814, 7, 'user_info', 'userregister'),
(11815, 7, 'user_info', 'accountedit'),
(11816, 7, 'user_info', 'accountview'),
(11817, 7, 'user_info', 'add'),
(11818, 7, 'user_info', 'edit'),
(11819, 7, 'user_info', 'editfield'),
(11820, 7, 'user_info', 'delete'),
(11821, 7, 'user_info', 'import_data'),
(11822, 7, 'role_permissions', 'list'),
(11823, 7, 'role_permissions', 'view'),
(11824, 7, 'role_permissions', 'add'),
(11825, 7, 'role_permissions', 'edit'),
(11826, 7, 'role_permissions', 'editfield'),
(11827, 7, 'role_permissions', 'delete'),
(11828, 7, 'role_permissions', 'import_data'),
(11829, 7, 'roles', 'list'),
(11830, 7, 'roles', 'view'),
(11831, 7, 'roles', 'add'),
(11832, 7, 'roles', 'edit'),
(11833, 7, 'roles', 'editfield'),
(11834, 7, 'roles', 'delete'),
(11835, 7, 'roles', 'import_data'),
(11836, 7, 'floor_details', 'list'),
(11837, 7, 'floor_details', 'view'),
(11838, 7, 'floor_details', 'add'),
(11839, 7, 'floor_details', 'edit'),
(11840, 7, 'floor_details', 'editfield'),
(11841, 7, 'floor_details', 'delete'),
(11842, 7, 'floor_details', 'import_data'),
(11843, 7, 'fire_noc_establishment', 'list'),
(11844, 7, 'fire_noc_establishment', 'view'),
(11845, 7, 'fire_noc_establishment', 'add'),
(11846, 7, 'fire_noc_establishment', 'edit'),
(11847, 7, 'fire_noc_establishment', 'editfield'),
(11848, 7, 'fire_noc_establishment', 'delete'),
(11849, 7, 'fire_noc_establishment', 'edit_zone'),
(11850, 7, 'fire_noc_establishment', 'confirm_application'),
(11851, 7, 'fire_noc_establishment', 'revert'),
(11852, 7, 'fire_noc_establishment', 'mis_report'),
(11853, 7, 'fire_noc_establishment', 'import_data'),
(11854, 7, 'hotel_inspection_form', 'list'),
(11855, 7, 'hotel_inspection_form', 'view'),
(11856, 7, 'hotel_inspection_form', 'add'),
(11857, 7, 'hotel_inspection_form', 'edit'),
(11858, 7, 'hotel_inspection_form', 'editfield'),
(11859, 7, 'hotel_inspection_form', 'delete'),
(11860, 7, 'hotel_inspection_form', 'import_data'),
(11861, 7, 'industrial_factory_inspection_form', 'list'),
(11862, 7, 'industrial_factory_inspection_form', 'view'),
(11863, 7, 'industrial_factory_inspection_form', 'add'),
(11864, 7, 'industrial_factory_inspection_form', 'edit'),
(11865, 7, 'industrial_factory_inspection_form', 'editfield'),
(11866, 7, 'industrial_factory_inspection_form', 'delete'),
(11867, 7, 'industrial_factory_inspection_form', 'import_data'),
(11868, 7, 'master_establishment_type', 'list'),
(11869, 7, 'master_establishment_type', 'view'),
(11870, 7, 'master_establishment_type', 'add'),
(11871, 7, 'master_establishment_type', 'edit'),
(11872, 7, 'master_establishment_type', 'editfield'),
(11873, 7, 'master_establishment_type', 'delete'),
(11874, 7, 'master_establishment_type', 'import_data'),
(11875, 7, 'school_college_coaching_inspection_form', 'list'),
(11876, 7, 'school_college_coaching_inspection_form', 'view'),
(11877, 7, 'school_college_coaching_inspection_form', 'add'),
(11878, 7, 'school_college_coaching_inspection_form', 'edit'),
(11879, 7, 'school_college_coaching_inspection_form', 'editfield'),
(11880, 7, 'school_college_coaching_inspection_form', 'delete'),
(11881, 7, 'school_college_coaching_inspection_form', 'import_data'),
(11882, 7, 'mall_cinema_inspection_form', 'list'),
(11883, 7, 'mall_cinema_inspection_form', 'view'),
(11884, 7, 'mall_cinema_inspection_form', 'add'),
(11885, 7, 'mall_cinema_inspection_form', 'edit'),
(11886, 7, 'mall_cinema_inspection_form', 'editfield'),
(11887, 7, 'mall_cinema_inspection_form', 'delete'),
(11888, 7, 'mall_cinema_inspection_form', 'import_data'),
(11889, 7, 'other_establishment_inspection_form', 'list'),
(11890, 7, 'other_establishment_inspection_form', 'view'),
(11891, 7, 'other_establishment_inspection_form', 'add'),
(11892, 7, 'other_establishment_inspection_form', 'edit'),
(11893, 7, 'other_establishment_inspection_form', 'editfield'),
(11894, 7, 'other_establishment_inspection_form', 'delete'),
(11895, 7, 'other_establishment_inspection_form', 'import_data'),
(11896, 7, 'fire_final_noc', 'list'),
(11897, 7, 'fire_final_noc', 'view'),
(11898, 7, 'fire_final_noc', 'add'),
(11899, 7, 'fire_final_noc', 'edit'),
(11900, 7, 'fire_final_noc', 'editfield'),
(11901, 7, 'fire_final_noc', 'delete'),
(11902, 7, 'fire_final_noc', 'edit_zone'),
(11903, 7, 'fire_final_noc', 'mis_report'),
(11904, 7, 'fire_final_noc', 'revert'),
(11905, 7, 'fire_final_noc', 'import_data'),
(11906, 7, 'fire_final_noc_renewal', 'list'),
(11907, 7, 'fire_final_noc_renewal', 'view'),
(11908, 7, 'fire_final_noc_renewal', 'add'),
(11909, 7, 'fire_final_noc_renewal', 'edit'),
(11910, 7, 'fire_final_noc_renewal', 'editfield'),
(11911, 7, 'fire_final_noc_renewal', 'delete'),
(11912, 7, 'fire_final_noc_renewal', 'edit_zone'),
(11913, 7, 'fire_final_noc_renewal', 'mis_report'),
(11914, 7, 'fire_final_noc_renewal', 'revert'),
(11915, 7, 'fire_final_noc_renewal', 'import_data'),
(11916, 7, 'fire_final_part_noc', 'list'),
(11917, 7, 'fire_final_part_noc', 'view'),
(11918, 7, 'fire_final_part_noc', 'add'),
(11919, 7, 'fire_final_part_noc', 'edit'),
(11920, 7, 'fire_final_part_noc', 'editfield'),
(11921, 7, 'fire_final_part_noc', 'delete'),
(11922, 7, 'fire_final_part_noc', 'edit_zone'),
(11923, 7, 'fire_final_part_noc', 'mis_report'),
(11924, 7, 'fire_final_part_noc', 'revert'),
(11925, 7, 'fire_final_part_noc', 'import_data'),
(11926, 7, 'fire_noc_revised_provisional', 'list'),
(11927, 7, 'fire_noc_revised_provisional', 'view'),
(11928, 7, 'fire_noc_revised_provisional', 'add'),
(11929, 7, 'fire_noc_revised_provisional', 'edit'),
(11930, 7, 'fire_noc_revised_provisional', 'editfield'),
(11931, 7, 'fire_noc_revised_provisional', 'delete'),
(11932, 7, 'fire_noc_revised_provisional', 'edit_zone'),
(11933, 7, 'fire_noc_revised_provisional', 'mis_report'),
(11934, 7, 'fire_noc_revised_provisional', 'revert'),
(11935, 7, 'fire_noc_revised_provisional', 'import_data'),
(11936, 7, 'master_yes_no', 'list'),
(11937, 7, 'master_yes_no', 'view'),
(11938, 7, 'master_yes_no', 'add'),
(11939, 7, 'master_yes_no', 'edit'),
(11940, 7, 'master_yes_no', 'editfield'),
(11941, 7, 'master_yes_no', 'delete'),
(11942, 7, 'master_yes_no', 'import_data'),
(11943, 7, 'master_zone_ward', 'list'),
(11944, 7, 'master_zone_ward', 'view'),
(11945, 7, 'master_zone_ward', 'add'),
(11946, 7, 'master_zone_ward', 'edit'),
(11947, 7, 'master_zone_ward', 'editfield'),
(11948, 7, 'master_zone_ward', 'delete'),
(11949, 7, 'master_zone_ward', 'import_data'),
(11950, 7, 'm_application_type', 'list'),
(11951, 7, 'm_application_type', 'view'),
(11952, 7, 'm_application_type', 'add'),
(11953, 7, 'm_application_type', 'edit'),
(11954, 7, 'm_application_type', 'editfield'),
(11955, 7, 'm_application_type', 'delete'),
(11956, 7, 'm_application_type', 'import_data'),
(11957, 7, 'govt_hospital_inspection_form', 'list'),
(11958, 7, 'govt_hospital_inspection_form', 'view'),
(11959, 7, 'govt_hospital_inspection_form', 'add'),
(11960, 7, 'govt_hospital_inspection_form', 'edit'),
(11961, 7, 'govt_hospital_inspection_form', 'editfield'),
(11962, 7, 'govt_hospital_inspection_form', 'delete'),
(11963, 7, 'govt_hospital_inspection_form', 'import_data'),
(11964, 7, 'private_hospital_inspection_form', 'list'),
(11965, 7, 'private_hospital_inspection_form', 'view'),
(11966, 7, 'private_hospital_inspection_form', 'add'),
(11967, 7, 'private_hospital_inspection_form', 'edit'),
(11968, 7, 'private_hospital_inspection_form', 'editfield'),
(11969, 7, 'private_hospital_inspection_form', 'delete'),
(11970, 7, 'private_hospital_inspection_form', 'import_data'),
(11971, 7, 'application_prefix', 'list'),
(11972, 7, 'application_prefix', 'view'),
(11973, 7, 'application_prefix', 'add'),
(11974, 7, 'application_prefix', 'edit'),
(11975, 7, 'application_prefix', 'editfield'),
(11976, 7, 'application_prefix', 'delete'),
(11977, 7, 'application_prefix', 'import_data'),
(11978, 7, 'expiry_services', 'list'),
(11979, 7, 'expiry_services', 'view'),
(11980, 7, 'expiry_services', 'add'),
(11981, 7, 'expiry_services', 'edit'),
(11982, 7, 'expiry_services', 'editfield'),
(11983, 7, 'expiry_services', 'delete'),
(11984, 7, 'expiry_services', 'import_data'),
(11985, 7, 'corresponding_values', 'list'),
(11986, 7, 'corresponding_values', 'view'),
(11987, 7, 'corresponding_values', 'add'),
(11988, 7, 'corresponding_values', 'edit'),
(11989, 7, 'corresponding_values', 'editfield'),
(11990, 7, 'corresponding_values', 'delete'),
(11991, 7, 'corresponding_values', 'import_data'),
(11992, 7, 'demand', 'list'),
(11993, 7, 'demand', 'view'),
(11994, 7, 'demand', 'add'),
(11995, 7, 'demand', 'edit'),
(11996, 7, 'demand', 'editfield'),
(11997, 7, 'demand', 'delete'),
(11998, 7, 'demand', 'import_data'),
(11999, 7, 'payments', 'list'),
(12000, 7, 'payments', 'view'),
(12001, 7, 'payments', 'add'),
(12002, 7, 'payments', 'edit'),
(12003, 7, 'payments', 'editfield'),
(12004, 7, 'payments', 'delete'),
(12005, 7, 'payments', 'import_data'),
(12006, 7, 'bhuilding_details_for_fire_noc', 'list'),
(12007, 7, 'bhuilding_details_for_fire_noc', 'view'),
(12008, 7, 'bhuilding_details_for_fire_noc', 'add'),
(12009, 7, 'bhuilding_details_for_fire_noc', 'edit'),
(12010, 7, 'bhuilding_details_for_fire_noc', 'editfield'),
(12011, 7, 'bhuilding_details_for_fire_noc', 'delete'),
(12012, 7, 'bhuilding_details_for_fire_noc', 'import_data'),
(12013, 7, 'accept_reject', 'list'),
(12014, 7, 'accept_reject', 'view'),
(12015, 7, 'accept_reject', 'add'),
(12016, 7, 'accept_reject', 'edit'),
(12017, 7, 'accept_reject', 'editfield'),
(12018, 7, 'accept_reject', 'delete'),
(12019, 7, 'accept_reject', 'import_data'),
(12020, 7, 'authorization_sequence', 'list'),
(12021, 7, 'authorization_sequence', 'view'),
(12022, 7, 'authorization_sequence', 'add'),
(12023, 7, 'authorization_sequence', 'edit'),
(12024, 7, 'authorization_sequence', 'editfield'),
(12025, 7, 'authorization_sequence', 'delete'),
(12026, 7, 'authorization_sequence', 'import_data'),
(12027, 7, 'certificate_upload', 'list'),
(12028, 7, 'certificate_upload', 'view'),
(12029, 7, 'certificate_upload', 'add'),
(12030, 7, 'certificate_upload', 'edit'),
(12031, 7, 'certificate_upload', 'editfield'),
(12032, 7, 'certificate_upload', 'delete'),
(12033, 7, 'certificate_upload', 'import_data'),
(12034, 7, 'survey_visit', 'list'),
(12035, 7, 'survey_visit', 'view'),
(12036, 7, 'survey_visit', 'add'),
(12037, 7, 'survey_visit', 'edit'),
(12038, 7, 'survey_visit', 'editfield'),
(12039, 7, 'survey_visit', 'delete'),
(12040, 7, 'survey_visit', 'import_data'),
(12041, 7, 'certificate_upload2', 'list'),
(12042, 7, 'certificate_upload2', 'view'),
(12043, 7, 'certificate_upload2', 'add'),
(12044, 7, 'certificate_upload2', 'edit'),
(12045, 7, 'certificate_upload2', 'editfield'),
(12046, 7, 'certificate_upload2', 'delete'),
(12047, 7, 'certificate_upload2', 'import_data'),
(12048, 7, 'm_building_type', 'list'),
(12049, 7, 'm_building_type', 'view'),
(12050, 7, 'm_building_type', 'add'),
(12051, 7, 'm_building_type', 'edit'),
(12052, 7, 'm_building_type', 'editfield'),
(12053, 7, 'm_building_type', 'delete'),
(12054, 7, 'm_building_type', 'import_data'),
(12055, 7, 'report_header_footer', 'list'),
(12056, 7, 'report_header_footer', 'view'),
(12057, 7, 'report_header_footer', 'add'),
(12058, 7, 'report_header_footer', 'edit'),
(12059, 7, 'report_header_footer', 'editfield'),
(12060, 7, 'report_header_footer', 'delete'),
(12061, 7, 'report_header_footer', 'import_data'),
(12062, 7, 'wings_info', 'list'),
(12063, 7, 'wings_info', 'view'),
(12064, 7, 'wings_info', 'add'),
(12065, 7, 'wings_info', 'edit'),
(12066, 7, 'wings_info', 'editfield'),
(12067, 7, 'wings_info', 'delete'),
(12068, 7, 'wings_info', 'import_data'),
(12069, 7, 'm_floor_type', 'list'),
(12070, 7, 'm_floor_type', 'view'),
(12071, 7, 'm_floor_type', 'add'),
(12072, 7, 'm_floor_type', 'edit'),
(12073, 7, 'm_floor_type', 'editfield'),
(12074, 7, 'm_floor_type', 'delete'),
(12075, 7, 'm_floor_type', 'import_data'),
(12076, 7, 'typical_floor_plan', 'list'),
(12077, 7, 'typical_floor_plan', 'view'),
(12078, 7, 'typical_floor_plan', 'add'),
(12079, 7, 'typical_floor_plan', 'edit'),
(12080, 7, 'typical_floor_plan', 'editfield'),
(12081, 7, 'typical_floor_plan', 'delete'),
(12082, 7, 'typical_floor_plan', 'import_data'),
(12083, 7, 'lift_details', 'list'),
(12084, 7, 'lift_details', 'view'),
(12085, 7, 'lift_details', 'add'),
(12086, 7, 'lift_details', 'edit'),
(12087, 7, 'lift_details', 'editfield'),
(12088, 7, 'lift_details', 'delete'),
(12089, 7, 'lift_details', 'import_data'),
(12090, 7, 'staircase_details', 'list'),
(12091, 7, 'staircase_details', 'view'),
(12092, 7, 'staircase_details', 'add'),
(12093, 7, 'staircase_details', 'edit'),
(12094, 7, 'staircase_details', 'editfield'),
(12095, 7, 'staircase_details', 'delete'),
(12096, 7, 'staircase_details', 'import_data'),
(12097, 7, 'fire_noc_establishment_subentry', 'list'),
(12098, 7, 'fire_noc_establishment_subentry', 'view'),
(12099, 7, 'fire_noc_establishment_subentry', 'add'),
(12100, 7, 'fire_noc_establishment_subentry', 'edit'),
(12101, 7, 'fire_noc_establishment_subentry', 'editfield'),
(12102, 7, 'fire_noc_establishment_subentry', 'delete'),
(12103, 7, 'fire_noc_establishment_subentry', 'import_data'),
(12104, 2, 'api', 'offlineredirect'),
(12105, 1, 'demand', 'challan'),
(12106, 2, 'demand', 'challan'),
(12107, 4, 'demand', 'challan'),
(12108, 2, 'fire_rcc_form', 'edit'),
(12109, 2, 'fire_rcc_form', 'list'),
(12110, 3, 'fire_rcc_form', 'add'),
(12111, 3, 'fire_rcc_form', 'list'),
(12112, 1, 'demand', 'detailed_challan'),
(12113, 2, 'demand', 'detailed_challan'),
(12114, 4, 'demand', 'detailed_challan');

-- --------------------------------------------------------

--
-- Table structure for table `school_college_coaching_inspection_form`
--

CREATE TABLE `school_college_coaching_inspection_form` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `institute_address` varchar(255) NOT NULL,
  `building_floors` varchar(255) NOT NULL,
  `institute_owners_name` varchar(255) NOT NULL,
  `owners_mobile_no` varchar(255) NOT NULL,
  `principals_name` varchar(255) NOT NULL,
  `principals_mobile_no` varchar(255) NOT NULL,
  `grade_n_class_from` varchar(255) NOT NULL,
  `grade_n_class_to` varchar(255) NOT NULL,
  `entrance_and_exit_routes_details` varchar(255) NOT NULL,
  `stairecase_count` int(11) NOT NULL,
  `water_storage_capacity_terrace` varchar(255) NOT NULL,
  `water_storage_capacity_groundfloor` varchar(255) NOT NULL,
  `institute_total_area` varchar(255) NOT NULL,
  `number_of_classrooms` int(11) NOT NULL,
  `is_laboratory_in_good_condition` varchar(255) NOT NULL,
  `is_reading_room_in_good_condition` varchar(255) NOT NULL,
  `no_table_reading_room` int(11) NOT NULL,
  `no_chair_reading_room` varchar(255) NOT NULL,
  `is_record_room_in_good_condition` varchar(255) NOT NULL,
  `is_computer_n_server_room_in_good_condition` varchar(255) NOT NULL,
  `computer_n_server_room_count` int(11) NOT NULL,
  `is_lifts_in_the_good_condition` varchar(255) NOT NULL,
  `no_lifts_in_the_building` int(11) NOT NULL,
  `status_lifts_in_the_building` varchar(255) NOT NULL,
  `generator_system_capacity` varchar(255) NOT NULL,
  `is_generator_system_in_good_condition` varchar(255) NOT NULL,
  `is_electrical_conection_in_good_condition` varchar(255) NOT NULL,
  `is_electrical_audit_report` varchar(255) NOT NULL,
  `is_electric_audit_report_value` varchar(255) NOT NULL,
  `electrical_audit_report_date` date NOT NULL,
  `air_conditioning_system_cert` varchar(255) NOT NULL,
  `fire_fighting_system_abc_type` varchar(255) NOT NULL,
  `fire_fighting_system_co2_type` varchar(255) NOT NULL,
  `fire_fighting_noc` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `int_no` int(11) DEFAULT NULL,
  `yr` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `payment_done` varchar(255) DEFAULT NULL,
  `certificate_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staircase_details`
--

CREATE TABLE `staircase_details` (
  `id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `staircase_no` varchar(255) NOT NULL,
  `staircase_width` varchar(255) NOT NULL,
  `staircase_from_floor` varchar(255) NOT NULL,
  `staircase_to_floor` varchar(255) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_visit`
--

CREATE TABLE `survey_visit` (
  `id` int(11) NOT NULL,
  `date_of_visit` date NOT NULL,
  `upload_survey_report` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `rec_id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `survey_photos` longtext NOT NULL,
  `payment_report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_data`
--

CREATE TABLE `temp_data` (
  `id` int(11) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `typical_floor_plan`
--

CREATE TABLE `typical_floor_plan` (
  `id` int(11) NOT NULL,
  `foor_name_id` int(11) NOT NULL,
  `foor_name_value` varchar(255) NOT NULL,
  `recid` int(11) NOT NULL,
  `floor_wise_p_line_area_in_sqr_mtr` float NOT NULL,
  `hight_in_mtr_from_ground` float NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `db_name` varchar(255) NOT NULL,
  `locked` int(11) NOT NULL,
  `refuge_area` varchar(255) NOT NULL,
  `hight_of_refuge_area_from_ground_in_mtr` double NOT NULL,
  `provided_refuge_area_in_sqr_mtr` double NOT NULL,
  `floor_type` varchar(255) NOT NULL,
  `typical_floor_plan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2025-06-03 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `user_role_id` int(11) DEFAULT 3,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `email`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `user_role_id`, `zone`) VALUES
(2, 'admin', '$2y$10$XrxQ8KOA3C7ZR0r4OwU0Ku1m0dXiYY6FKvYrZRgqCwUfYyXzWjejS', 'admin@1.com', '9658ce3460518a64d45bfa34775fd013', NULL, '2025-06-03 00:00:00', NULL, 1, ''),
(4, 'auth1', '$2y$10$XrxQ8KOA3C7ZR0r4OwU0Ku1m0dXiYY6FKvYrZRgqCwUfYyXzWjejS', 'auth1@gmail.com', 'ad07dde4f08e95b9e16fcf8343971b51', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(5, 'auth2a', '$2y$10$XrxQ8KOA3C7ZR0r4OwU0Ku1m0dXiYY6FKvYrZRgqCwUfYyXzWjejS', 'auth2@gmail.com', '2db090b1a406df28f34e97e181a0800a', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(6, 'auth3', '$2y$10$XrxQ8KOA3C7ZR0r4OwU0Ku1m0dXiYY6FKvYrZRgqCwUfYyXzWjejS', 'auth3@gmail.com', '1746123856eqvcmrtnaohkfz62s5pd', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(7, 'auth4', '$2y$10$XrxQ8KOA3C7ZR0r4OwU0Ku1m0dXiYY6FKvYrZRgqCwUfYyXzWjejS', 'auth4@gmail.com', '1746124006cdga9byslmvko0rutf3x', NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(9, 'VvcmcWardB', '$2y$10$qh71s8h3dn6TXhH4wQv6R.wFawyxsvK8drD7RqVZac2tXunUhGmMu', 'auth2@gmail.com', '1745389870l6q9apwebm13k0fhs48x', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(10, 'auth2c', '$2y$10$LOmn/btHBzfoNlWekME4Xev.iLIvXd0rIGu07eIVADEFCo9f4T31O', 'auth2@gmail.com', '17458445940c4rft98wikszxq5vbpj', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(11, 'auth2d', '$2y$10$hEUs6Z3JZSwE/R.utlY//OuyQLF9WxrF6KxbYhs9sBnluCv12Rnlu', 'auth2@gmail.com', '4d877486110621571caebb3db3116206', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(12, 'auth2e', '$2y$10$f.t/JivlIdyWTBtVTZkad.aRU7dOjAjsCCdskpH0.ga5EnsK..8yq', 'auth2@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(13, 'auth2f', '$2y$10$i9rbINoQefbANoqfCW0/3u3fD/.IYO5DlAV1D/j/8.3JWos53j6Ra', 'auth2@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(14, 'auth2g', '$2y$10$canqzaxpEmfEX/7jEcbUFu9oULhMln2sUkZ5ytEe4rLWvW8C78wgq', 'auth2@gmail.com', '45cc3363a9a7db05abb0354197af9e78', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(15, 'auth2h', '$2y$10$cFgttLryRXHMEcQ2WgfRt.Ay2t4sgfKlAxTV9hWnSIc4aThaZP1ky', 'auth2@gmail.com', '4c30e3c568ad099404d6d2b7b0574150', NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(16, 'auth2i', '$2y$10$/CxJTgZynaldEiyPog61gONn5G09VvLwnzhYmzNuh9vI85fKl29AW', 'auth2@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, ''),
(34, 'superadmin', '$2y$10$Bk0X9/sslffTmzmTGjdmEecW00XFqPtHJyBu9JvPCkZtW7hYxalkS', 'superadmin@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 4, ''),
(126, 'auth_1', '$2y$10$mAPUrODOxtJ4hsQ/vRP.qO.Nt.g8ttQIgXuS/qVFmwedpQCxgrCBe', 'auth11@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(127, 'auth_2a', '$2y$10$sLT4DgcDt/G.d.nCyn.sW.b/lXI1f/r8BwtaRxlWpRjNRJHfJfj96', 'auth2a@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, 'A'),
(128, 'auth_3', '$2y$10$Z7eXhEBB3aBlbzIo8HkZbeR65tLya5VUwQiWLBTRKHdBN5AAtS/gO', 'auth3a@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(129, 'auth_4', '$2y$10$0oTwuvAt/NabzecuddqtTes82ADFjmKP8.FfSY2GRV4yNsDLzOdOy', 'auth41@gmail.com', NULL, NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(162, 'Cfofire', '$2y$10$6I1OohQfYuVjDa6rjnuAgepZTC3rwJP4ZfAmKKHbg7KU9YI3ichlW', 'kdmcfire101@gmail.com', 'a4e7badd51b87a1b77b9b20f1e83af83', NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(163, 'Stofire1', '$2y$10$szxFR3exNmWk3otpJ3SEputwLcmSoKQ0EME9EXiaMg4PAe5/8ODo2', 'kdmcfire102@gmail.com', '4d25669a1071ca78a32a9a23e676e960', NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(164, 'Stofire2', '$2y$10$EnMAtO6l8FKBGj6oN8Mit.Y5COGN99eBmWHnIiAzgShLFsSwD3Zrm', 'kdmcfire103@gmail.com', 'b282c4d1eff0d41dc58c61dc957b067d', NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(165, 'ClrFire', '$2y$10$M/FknouCn2kP7JxRwLfOsOtsOa.U1yFjCsjpQVaKurAvJWfjT5X.6', 'kdmcfire104@gmail.com', '1fb425fc7427be55546e4f937b386928', NULL, '2025-06-03 00:00:00', NULL, 2, 'All'),
(217, 'KDMCC-25-120462_515105', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', '5e8e440fe598a1bbd530078e8075aa90', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(218, 'KDMCC-25-121047_515740', 'xyz_auto', 'emergearchitect@gmail.com', '5c7c174917a3a653b4f0897990571e62', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(219, 'KDMCC-25-ENTRY-129478_525100', 'xyz_auto', 'rkassociates0805@gmail.com', '9de80bd98fa70db6adf390611408bb55', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(220, 'KDMCC-25-127913_523365', 'xyz_auto', 'darshana.2104@gmail.com', '09e98de7f44af11ca68234f0fb5e0c3b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(221, 'KDMCC-25-104418_497518', 'xyz_auto', 'sandy.patil78@yahoo.com', 'c25c713c686937983de06014ade93fac', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(222, 'KDMCC-25-ENTRY-122216_517026', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', 'e08f2e417b35b73e81167e90c24074ad', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(223, 'KDMCC-25-ENTRY-121475_516206', 'xyz_auto', 'keshavchikodi@hotmail.com', '21cb985b76f7cefe5911df9bb86c0ce6', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(224, 'KDMCC-25-83339_474705', 'xyz_auto', 'rajeev@tayshete.com', 'd3083f4e1675e0852ff7ad79b3433197', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(225, 'KDMCC-25-26552_413569', 'xyz_auto', 'ar.nv.office@gmail.com', '24b178591f0340690fd5337fb69d4f21', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(226, 'KDMCC-25-129403_525013', 'xyz_auto', 'deconcon009@gmail.com', '2e2545772f9e7606a9edffe7a3ea3996', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(227, 'KDMCC-25-87444_479168', 'xyz_auto', 'anilnirgude99@gmail.com', '1eb51190a5b61361f4bd08377e872488', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(228, 'KDMCC-25-ENTRY-92934_485108', 'xyz_auto', 'deconcon009@gmail.com', '375d12d45e90e7d876febf7c1697dc13', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(229, 'KDMCC-25-123703_518654', 'xyz_auto', 'kiranterse0306@gmail.com', '69962e2c6b7d9cc09dd8f1b244189ce9', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(230, 'KDMCC-25-126416_521720', 'xyz_auto', 'saliljoshi18@yahoo.com', '78232c307c6cc51e594886889f6b0934', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(231, 'KDMCC-25-96066_488491', 'xyz_auto', 'ankurshetye@gmail.com', '9326de5f222cd14808c442fdb5864c1b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(232, 'KDMCC-25-ENTRY-102931_495901', 'xyz_auto', 'sthapathyanirmaan@gmail.com', 'cf1a11f3eda2d4f44e4b593dd5885ed3', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(233, 'KDMCC-25-ENTRY-131725_527577', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', '566e3d2678a252790e740d6650847920', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(234, 'KDMCC-25-111223_504942', 'xyz_auto', 'shirish_nachane@rediffmail.com', '925873955027c16cabcb16c35c6fa21e', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(235, 'KDMCC-25-ENTRY-119582_514156', '$2y$10$LRL5FobshgbNrgKBv/9gUuip/WaMJKXZ0T2VbiKQ4lMYDTL67ufD6', 'aj@jalalarchitects.com', 'b7b0dce698ab7adbbcaf4bfde957fc90', NULL, '2026-05-16 04:23:41', NULL, 3, ''),
(236, 'KDMCC-25-133119_529123', 'xyz_auto', 'tejasnirgude@gmail.com', 'db5618952b55f2f9df06050fb7aa9430', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(237, 'KDMCC-25-118937_513440', 'xyz_auto', 'aj@jalalarchitects.com', 'e36275b50ee5f983c7322c823fad1e8c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(238, 'KDMCC-25-133184_529194', 'xyz_auto', 'tejasnirgude@gmail.com', 'bb4b0aef013f35f732e313b7d6624758', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(239, 'KDMCC-25-137063_533463', 'xyz_auto', 'emergearchitect@gmail.com', '2bad36b33b4839df5fa46cf8e5883f9e', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(240, 'KDMCC-25-129210_524800', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', '1f0edc9b63ad43b5557d3f8789362802', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(241, 'KDMCC-25-131620_527462', 'xyz_auto', 'chandrakant.auti@yahoo.com', 'faab3433f8f1ad02b1ca5db2b9419f1b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(242, 'KDMCC-25-133966_530064', 'xyz_auto', 'damini5253@gmail.com', 'b203214c5c17d0d4a1df526f84d565b6', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(243, 'KDMCC-25-ENTRY-136924_533305', 'xyz_auto', 'rkassociates0805@gmail.com', '69db37334a6671f238de15be08571d06', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(244, 'KDMCC-25-91199_483251', 'xyz_auto', 'shraddha91188@gmail.com', '9cf216d9a151441c3a28b929dfb9b116', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(245, 'KDMCC-25-ENTRY-09321_395147', 'xyz_auto', 'ar.santoshmadan@gmail.com', '8ef9c3adecfdf94a87a124788effc30a', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(246, 'KDMCC-25-ENTRY-136203_532533', 'xyz_auto', 'tejasnirgude@gmail.com', '4caa31628d3fbd54e3fce4bd38f03d88', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(247, 'KDMCC-25-ENTRY-112959_506859', 'xyz_auto', 'arsandeep21@gmail.com', '051b5cc94dd5707b2da4b54024156454', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(248, 'KDMCC-25-135403_531645', 'xyz_auto', 'tejasnirgude@gmail.com', '2a7262534b72c4d9c2dbdcc583061213', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(249, 'KDMCC-25-133918_530011', 'xyz_auto', 'emergearchitect@gmail.com', 'd13770094bed6a4c36a9a14f239861c8', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(250, 'KDMCC-25-ENTRY-140948_537821', 'xyz_auto', 'ssvinayak7@rediffmail.com', '0807b3f5179d2dd3c1fe138875a04cd4', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(251, 'KDMCC-25-ENTRY-135785_532068', 'xyz_auto', 'tonsonthomas12345@gmail.com', 'ad6407d93cf85a6e344732a875aaf167', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(252, 'KDMCC-25-ENTRY-135338_531575', 'xyz_auto', 'anilnirgude99@gmail.com', 'f5a18487f254fdfc1b29c659b9da9a28', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(253, 'KDMCC-25-138842_535481', 'xyz_auto', 'boradenikhil36@gmail.com', '4af05e72dd7be38cc9ff9bca9c2fd9be', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(254, 'KDMCC-25-21280_407948', 'xyz_auto', 'ucassociates29@gmail.com', 'ca48d35ecaf3fdef16084cebf2e268c1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(255, 'KDMCC-25-ENTRY-141435_538357', 'xyz_auto', 'rajanmodak1955@gmail.com', '180475934b46cdea4fac2b95690010df', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(256, 'KDMCC-23-77350_209140', 'xyz_auto', 'ucassociates29@gmail.com', '7924ac49f7e62fac13b229f3092f80f8', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(257, 'KDMCC-25-138146_534691', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', 'a4e009e6351a7dae0badec1d64d5987b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(258, 'KDMCC-25-118587_513056', 'xyz_auto', 'emergearchitect@gmail.com', 'c7e54f71692c2aba35ffc967f36d4fe3', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(259, 'KDMCC-25-132834_528795', 'xyz_auto', 'ar.santoshmadan@gmail.com', '01ec813e7e7cd5063f4962b9102b015b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(260, 'KDMCC-25-ENTRY-141014_537892', 'xyz_auto', 'deconcon009@gmail.com', '23e9095552e8c46c10ec9c19625406fe', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(261, 'KDMCC-24-102443_356804', 'xyz_auto', 'rajeev@tayshete.com', 'ff9eb89968bffbca7c23a41bfd2d9df1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(262, 'KDMCC-25-138599_535204', 'xyz_auto', 'boradenikhil36@gmail.com', 'fc942f8b0c881f34777fea9f69aeae67', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(263, 'KDMCC-24-ENTRY-106117_360733', 'xyz_auto', 'archuday.satavalekar@gmail.com', '0cdfd88ad4f433390bfae362b24f8d98', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(264, 'KDMCC-25-136348_532687', 'xyz_auto', 'gopinath.gandhe@gmail.com', '4c39a46c1c93a3b6917c900da2ceaf40', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(265, 'KDMCC-25-ENTRY-131270_527080', 'xyz_auto', 'shirish_nachane@rediffmail.com', '1cdae9cfb698c35204bf31e5e366d01f', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(266, 'KDMCC-25-ENTRY-69737_459972', 'xyz_auto', 'vastushilp10@yahoo.com', '5974fa0dba6aa50d5fec6ef4dbf7bb91', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(267, 'KDMCC-25-51655_440490', 'xyz_auto', 'archdeshmukh@rediffmail.com', '9844134829f7834ca8e5a4877d02c2d9', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(268, 'KDMCC-25-142629_539647', 'xyz_auto', 'emergearchitect@gmail.com', 'e29d37752631acffe426a54f94d9110f', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(269, 'KDMCC-25-143213_540268', 'xyz_auto', 'rajanmodak1955@gmail.com', 'a2abdccf99a09feee3a3588a03d37151', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(270, 'KDMCC-25-132645_528586', 'xyz_auto', 'tejasnirgude@gmail.com', '96f66b4b3aef6f7bb9c96e519a41584e', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(271, 'KDMCC-25-138122_534665', 'xyz_auto', 'tejasnirgude@gmail.com', '4fdf900c65165d14aec9129bf59bb469', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(272, 'KDMCC-25-135542_531797', 'xyz_auto', 'sugatvivekarchitects@gmail.com', '138f79e13254c83aa34f35d5763dc15c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(273, 'KDMCC-25-141634_538571', 'xyz_auto', 'dmdarchitects@yahoo.com', '0365b3f8c370ba48600fa07c2ae743ed', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(274, 'KDMCC-25-137183_533604', 'xyz_auto', 'tejasnirgude@gmail.com', '69b0d0859b2e2d1e8cac8e9e97a363cf', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(275, 'KDMCC-25-ENTRY-145146_542350', 'xyz_auto', 'tejasnirgude@gmail.com', '73e0e940e21141412807757485d57bc9', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(276, 'KDMCC-25-145478_542696', 'xyz_auto', 'aditya.agte@gmail.com', 'a8550939d013d34208dd4cd2b8b0a10a', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(277, 'KDMCC-25-143994_541114', 'xyz_auto', 'boradenikhil36@gmail.com', '79ce7e7f31f71364b2faee407a9af744', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(278, 'KDMCC-24-ENTRY-44955_295261', 'xyz_auto', 'asdaa.98.17@gmail.com', '1dd186d704cc3b3c8b06f44fe8b553fe', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(279, 'KDMCC-26-00405_544823', 'xyz_auto', 'rkassociates0805@gmail.com', '32c60f4f788238616d80060448176f12', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(280, 'KDMCC-25-ENTRY-135547_531802', 'xyz_auto', 'madangadgil@rediffmail.com', '40adcd724e9bd3436207dfa515e7f692', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(281, 'KDMCC-25-142378_539377', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', 'a198bca69bcbb90882d6cc0fd7786aa1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(282, 'KDMCC-25-145598_542826', 'xyz_auto', 'sagarpalkar04@gmail.com', 'f6d0e2c6a016cd9dbde203ea9ab1d030', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(283, 'KDMCC-25-144406_541552', 'xyz_auto', 'sugatvivekarchitects@gmail.com', '6f05efb84f5d20cc486496e40a58870c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(284, 'KDMCC-26-ENTRY-00418_544839', 'xyz_auto', 'architects.incorporate@rediffmail.com', '222e28055c9a2972613c1f688b730aba', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(285, 'KDMCC-26-00098_544496', 'xyz_auto', 'emergearchitect@gmail.com', '6febbd8c1ea4444a1f58b879aee76b79', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(286, 'KDMCC-25-ENTRY-117519_511859', 'xyz_auto', 'rajanmodak1955@gmail.com', '45e0f486c90d26d881da43eb891b406c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(287, 'KDMCC-25-139410_536099', 'xyz_auto', 'paranjapemadh@gmail.com', '5e5a5730c88f10ddb4d5de74f9760710', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(288, 'KDMCC-25-116902_511168', 'xyz_auto', 'tushar_tendolkar@yahoo.co.in', 'e399368bd2516c8b72a055ef4a91de77', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(289, 'KDMCC-25-ENTRY-108836_502330', 'xyz_auto', 'nirmitee.arcint@gmail.com', 'd49b5d1f43fa5e1bc8acfb33af1c1626', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(290, 'KDMCC-25-138686_535305', 'xyz_auto', 'sandy.patil78@yahoo.com', '5427772488592d249036bfcbac637d83', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(291, 'KDMCC-26-01862_546412', 'xyz_auto', 'dmdarchitects@yahoo.com', 'f609c8b886fd15736c405f87a9170692', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(292, 'KDMCC-25-126060_521329', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', '5f78e0ebcfb3f43d356f23a02b0b4a7b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(293, 'KDMCC-26-ENTRY-01934_546493', 'xyz_auto', 'aone.architects1@gmail.com', 'e7ec8c877bc079ccbe45b75ed3c3a844', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(294, 'KDMCC-26-02858_547479', 'xyz_auto', 'emergearchitect@gmail.com', '2a1806d2890e580eb582c9804af5140b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(295, 'KDMCC-26-03381_548037', 'xyz_auto', 'deconcon009@gmail.com', '929d4282851f854c02fda55429065ee1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(296, 'KDMCC-26-01137_545617', 'xyz_auto', 'aone.architects1@gmail.com', 'd69640a1aec089072f821ff528669183', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(297, 'KDMCC-26-ENTRY-01617_546135', 'xyz_auto', 'tejasnirgude@gmail.com', '52c41072b914ae440fcf792e136067ca', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(298, 'KDMCC-25-136900_533281', 'xyz_auto', 'arkishan280493@gmail.com', '0b08c0274e482a4420b7523511a2a5ec', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(299, 'KDMCC-26-ENTRY-00360_544777', 'xyz_auto', 'designteam@creations.org.in', 'c2d3f465037a2e7695c3b4dc09c80ca2', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(300, 'KDMCC-26-06718_551637', 'xyz_auto', 'tejasnirgude@gmail.com', '87180905e8b679ab65af132c3734e4c0', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(301, 'KDMCC-25-122229_517042', 'xyz_auto', 'ankurshetye@gmail.com', '1ad9f3bb9a47f8776d4da9afc6c54fc7', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(302, 'KDMCC-26-07856_552869', 'xyz_auto', 'deconcon009@gmail.com', '30d51a6681c003ee8fdb2f32af15d58b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(303, 'KDMCC-26-01792_546334', 'xyz_auto', 'tejasnirgude@gmail.com', '036168db12c8f3f399714d45e89ab39c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(304, 'KDMCC-26-05472_550280', 'xyz_auto', 'tejasnirgude@gmail.com', 'b5149e1b126b0cb03a3583817e8ec9ed', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(305, 'KDMCC-26-01214_545700', 'xyz_auto', 'asdaa.98.17@gmail.com', '74963bb8ac49d11b790b2324a80c456d', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(306, 'KDMCC-24-90281_343820', 'xyz_auto', 'pgredekar@gmail.com', '212d95ccd0953a78ee033434d0c05f3b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(307, 'KDMCC-25-143431_540500', 'xyz_auto', 'dudhe.nikhil@gmail.com', 'cb415b7ba87332f2827212fa8492ba26', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(308, 'KDMCC-26-ENTRY-08151_553196', 'xyz_auto', 'rkassociates0805@gmail.com', '376690138af069600b00098eaf847869', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(309, 'KDMCC-25-139504_536202', 'xyz_auto', 'asdaa.98.17@gmail.com', 'ba659f355c9320dc8440c9aca18f054c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(310, 'KDMCC-25-145628_542856', 'xyz_auto', 'sagarpalkar04@gmail.com', 'ff8bd0c5777e616ff409feba9d9979ab', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(311, 'KDMCC-22-ENTRY-66944_91365', 'xyz_auto', 'anilnirgude99@gmail.com', '50976928ed574d0b8cb97ecd4edbc906', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(312, 'KDMCC-26-04586_549314', 'xyz_auto', 'aj@jalalarchitects.com', 'c91546edb962920f40dd14d7b6008c16', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(313, 'KDMCC-25-136618_532977', 'xyz_auto', 'tejasnirgude@gmail.com', '4a59613434f98f0601519d1ad1cb771a', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(314, 'KDMCC-26-ENTRY-09291_554450', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '8fddb1c199fb16ee8eeb4db3c3dce44a', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(315, 'KDMCC-26-07142_552085', 'xyz_auto', 'vrs.roshan@gmail.com', '342600db687bd254fc8ed29bb3e4dd72', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(316, 'KDMCC-26-ENTRY-12134_557541', 'xyz_auto', 'tejasnirgude@gmail.com', 'fbfa8482261b5c5c757a74a827c178ef', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(317, 'KDMCC-26-ENTRY-01069_545544', 'xyz_auto', 'tejasnirgude@gmail.com', '06e42986905fbde6bf08d3484fcdae2c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(318, 'KDMCC-26-06965_551901', 'xyz_auto', 'architectvp.mumbai@gmail.com', '7e540b1939371a6461fa82ae9d359e62', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(319, 'KDMCC-26-06911_551843', 'xyz_auto', 'designteam@creations.org.in', '24085b7c08aeec54d298db1eecb6b3a1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(320, 'KDMCC-26-11843_557226', 'xyz_auto', 'ivisiondesignstudio@gmail.com', '2fde7f9b07050781a53dae24d86d0700', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(321, 'KDMCC-24-117939_373433', 'xyz_auto', 'megha.bagrao@gmail.com', '60903ab94a0ca82f330f147c3e32bb5c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(322, 'KDMCC-26-15148_560784', 'xyz_auto', 'sumitalwagh@yahoo.com', '37874d1aa43857cbb1d8c59404cb079d', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(323, 'KDMCC-26-14385_559961', 'xyz_auto', 'deconcon009@gmail.com', '8e18a39d8e1a859d7993df1c86da46e4', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(324, 'KDMCC-26-ENTRY-16250_561981', 'xyz_auto', 'ucassociates29@gmail.com', 'e6ce0c331562765e0def1b62ced5b0fb', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(325, 'KDMCC-25-79616_470678', 'xyz_auto', 'priyadinodiya18@gmail.com', '018cd7eb96d8a8d125d1a03aad5ae3fa', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(326, 'KDMCC-26-ENTRY-16227_561954', 'xyz_auto', 'phonemail9898@gmail.com', '09dc6fd5bf82b6d29f493fe48d4c6ac7', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(327, 'KDMCC-26-16098_561815', 'xyz_auto', 'priyadinodiya18@gmail.com', 'ca576cde3798974e874516f5598e716e', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(328, 'KDMCC-26-13876_559415', 'xyz_auto', 'deconcon009@gmail.com', 'b0268e06652124cecbc6351eb69ba75f', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(329, 'KDMCC-25-ENTRY-134977_531173', 'xyz_auto', 'tejasnirgude@gmail.com', '425ffc957356b1459c53de061710da05', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(330, 'KDMCC-26-16465_562235', 'xyz_auto', 'boradenikhil36@gmail.com', '3b1627ed26c457e50f27403a5787ab84', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(331, 'KDMCC-22-ENTRY-84250_109824', 'xyz_auto', 'asdaa.98.17@gmail.com', '740a0f63170f462b430d84b8dd6885e4', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(332, 'KDMCC-22-ENTRY-08077_29692', 'xyz_auto', 'deconcon009@gmail.com', '8fe1ad2ded56cf09a24f81246bf4e97c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(333, 'KDMCC-22-23886_46085', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '094234033374174825e9db1b5deae19f', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(334, 'KDMCC-25-139933_536672', 'xyz_auto', 'tejasnirgude@gmail.com', '77f051b02f10a55015dc861842a0aa52', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(335, 'KDMCC-26-04691_549440', 'xyz_auto', 'pankajrp075@gmail.com', '9fd72479c958ffc5b32eb3a1475a5e2c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(336, 'KDMCC-26-ENTRY-16552_562335', 'xyz_auto', 'sthapathyanirmaan@gmail.com', 'b0a00d0f1e2b84c3c877fbf7b0243ad6', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(337, 'KDMCC-25-ENTRY-86868_478551', 'xyz_auto', 'gopinath.gandhe@gmail.com', '25e1bfcd5e1a78a5a2705d75ba809aea', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(338, 'KDMCC-26-21416_567743', 'xyz_auto', 'shirish_nachane@rediffmail.com', '85887de7313f82ad673b7858884e6b91', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(339, 'KDMCC-26-09658_554856', 'xyz_auto', 'aone.architects1@gmail.com', 'deb88d8bfcd4a2628976982e9fb79c14', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(340, 'KDMCC-26-ENTRY-02706_547316', 'xyz_auto', 'aayojanarchint@gmail.com', '45eed16b7d6130a0232fc3592ecb39de', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(341, 'KDMCC-25-ENTRY-11086_397035', 'xyz_auto', 'shirish_nachane@rediffmail.com', 'f667cc9f2b6a15cf944b26df5bac3b79', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(342, 'KDMCC-24-103526_357956', 'xyz_auto', 'arsandeep21@gmail.com', '28591e4a053f70333ca97063d1c5787e', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(343, 'KDMCC-26-21320_567627', 'xyz_auto', 'arsandeep21@gmail.com', '2d6db9367b026f63fddea6de4af4d588', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(344, 'KDMCC-25-143979_541097', 'xyz_auto', 'arsandeep21@gmail.com', 'a49d3bf2f8122917a0563984b53fd78d', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(345, 'KDMCC-26-ENTRY-00368_544785', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '70945ea92eb44716bc1d919e1fdfd784', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(346, 'KDMCC-25-ENTRY-67181_457211', 'xyz_auto', 'shindepramodr985@gmail.com', '442670d7cf64ef1fa74b8fa0e18157c9', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(347, 'KDMCC-26-19129_565173', 'xyz_auto', 'designteam@creations.org.in', 'b88021d7f1bf98c4531960c6664f13c5', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(348, 'KDMCC-26-ENTRY-09257_554409', 'xyz_auto', 'tejasnirgude@gmail.com', '9d9ec8ef3484a9cb2d808594045cad31', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(349, 'KDMCC-25-76835_467665', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', 'dd3ac63d7052cf1d9f8b8ef1d84f873f', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(350, 'KDMCC-26-12575_558022', 'xyz_auto', 'boradenikhil36@gmail.com', '9f895d2a6c9da3baa9d0ed84280ed067', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(351, 'KDMCC-26-19641_565718', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', 'd1b8c927df16f2b655ac171f356f74cc', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(352, 'KDMCC-26-ENTRY-07871_552886', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '6539246013a3909f1c82212f3d16dac0', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(353, 'KDMCC-25-140206_536975', 'xyz_auto', 'aj@jalalarchitects.com', '05dfbf975e37ae52f63257f4f7459412', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(354, 'KDMCC-23-ENTRY-61660_192361', 'xyz_auto', 'architects.incorporate@rediffmail.com', '6f7b234acce91ee91e4afa470033f601', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(355, 'KDMCC-26-24580_571324', 'xyz_auto', 'emergearchitect@gmail.com', '8f96389f58d3224b22372063378a202f', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(356, 'KDMCC-25-ENTRY-35838_423452', 'xyz_auto', 'tripathibinod1974@gmail.com', '60b8bea18cd23a9cbc8dc95724c55fd2', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(357, 'KDMCC-25-ENTRY-135347_531585', 'xyz_auto', 'deconcon009@gmail.com', '289393dc4364ae12bed31d33a29034f5', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(358, 'KDMCC-26-ENTRY-24631_571377', 'xyz_auto', 'tushar_tendolkar@yahoo.co.in', 'e6e5330a63a21098120838d76a7de115', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(359, 'KDMCC-26-20209_566332', 'xyz_auto', 'yash210995@gmail.com', 'c78d251739c3bce314d69c38c70a0bdf', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(360, 'KDMCC-26-08301_553356', 'xyz_auto', 'ar.prajaktalaxmanchavan@gmail.com', '2703d51a055cf20b6530b5d77369b014', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(361, 'KDMCC-26-ENTRY-21995_568430', 'xyz_auto', 'yashv.patil9997@gmail.com', 'c6832bfc7d7d178a3a711acd3717d980', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(362, 'KDMCC-25-90869_482900', 'xyz_auto', 'majorvinaysdegaonkar@gmail.com', '575d800a7831990d59044b9c93743a0b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(363, 'KDMCC-26-ENTRY-27251_574204', 'xyz_auto', 'architects.incorporate@rediffmail.com', '05ff8ea10825b54e5c347bbb30178fb5', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(364, 'KDMCC-24-ENTRY-113812_368981', 'xyz_auto', 'kkkamble@yahoo.com', '691bd39e380fb42dc65fe44cb2fd3b96', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(365, 'KDMCC-26-ENTRY-22833_569400', 'xyz_auto', 'deconcon009@gmail.com', 'becfc8cdf1c981aeba67b2607182924a', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(366, 'KDMCC-26-ENTRY-21892_568311', 'xyz_auto', 'deconcon009@gmail.com', '37e8d85b0dd9727508f94844005660c6', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(367, 'KDMCC-26-26667_573577', 'xyz_auto', 'emergearchitect@gmail.com', '63ec0ec471467d7934b155fc534d14c4', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(368, 'KDMCC-26-ENTRY-27556_574535', 'xyz_auto', 'deconcon009@gmail.com', '49983b89c64cd643e685e85838eff795', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(369, 'KDMCC-25-143881_540981', 'xyz_auto', 'shirish_nachane@rediffmail.com', 'cfb0409a7ed2a1fbcd2b9b2aff3ba293', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(370, 'KDMCC-26-28340_575377', 'xyz_auto', 'rajanmodak1955@gmail.com', '3b88217ae9bb27ff1b966f8fe791f2dc', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(371, 'KDMCC-24-ENTRY-82170_335109', 'xyz_auto', 'ankurshetye@gmail.com', '01d53fce9c0a27e1d8ed369b1734df51', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(372, 'KDMCC-26-00111_544510', 'xyz_auto', 'vijaypandeyandassociates@gmail.com', '5802a27c6cfad9bafa39f17e7092d722', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(373, 'KDMCC-26-25227_572028', 'xyz_auto', 'archdeshmukh@rediffmail.com', '9b914271d3e0608ff21b804836b37d27', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(374, 'DMC_FIRE', '$2y$10$v0zzjcHhnTT6XPdLILUheOD0oxcYDw3C4dSv.3gJiIe1mKOkHP48K', 'kanchan.gaikwad12@nic.in', '', NULL, '2025-06-03 00:00:00', NULL, 1, ''),
(375, 'KDMCC-26-ENTRY-28614_575681', 'xyz_auto', 'shirish_nachane@rediffmail.com', '36ab1d2e5c69214f21f4af07df9e398b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(376, 'DMC_USER', '$2y$10$mbWLzMgLxq.Rph0F2zJy9.2oh9WuUjIkYYNe0KofngNG66d69s0.e', 'dmc_user@1.com', '9658ce3460518a64d45bfa34775fd013', NULL, '2025-06-03 00:00:00', NULL, 1, ''),
(377, 'KDMCC-26-11883_557268', 'xyz_auto', 'tejasnirgude@gmail.com', '7b27d935f819e5ebbc9b0c1e5e3a6ac5', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(378, 'KDMCC-26-27894_574898', 'xyz_auto', 'ar.deeppatel2023@gmail.com', '5b9c699f50e35af49e1fc6bd4eeface1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(379, 'KDMCC-26-24905_571675', 'xyz_auto', 'asdaa.98.17@gmail.com', 'bf2a4d5939a70c55b753009015415911', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(380, 'KDMCC-26-ENTRY-21284_567582', 'xyz_auto', 'tejasnirgude@gmail.com', 'b77ab78b476e246822e5e8ac91424ad7', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(381, 'KDMCC-26-21076_567324', 'xyz_auto', 'akash94sonawane@gmail.com', '56c4c66ac96b9de59e110f01445a64cf', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(382, 'KDMCC-26-20974_567209', 'xyz_auto', 'boradenikhil36@gmail.com', 'd4a6b814d871014f767e1ae7e70e4de1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(383, 'KDMCC-26-ENTRY-28101_575120', 'xyz_auto', 'deconcon009@gmail.com', '38004144ebfb41f6030d1e10a01fcb98', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(384, 'KDMCC-26-ENTRY-30910_578201', 'xyz_auto', 'rkassociates0805@gmail.com', 'cb2bf3e507b7429eab3a2003f817d47a', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(385, 'KDMCC-26-14988_560613', 'xyz_auto', 'nehanakwe23@gmail.com', 'ed05f80164d90f44c8f7bd45d9240525', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(386, 'KDMCC-26-27453_574424', 'xyz_auto', 'akash94sonawane@gmail.com', 'a90b4c1e654d616972c67043d76588eb', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(387, 'KDMCC-26-23207_569819', 'xyz_auto', 'asdaa.98.17@gmail.com', '4d8348d14e923762560e871ad94fcbb6', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(388, 'KDMCC-26-21491_567831', 'xyz_auto', 'tejasnirgude@gmail.com', '391760177099694ec62eaf6627684769', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(389, 'KDMCC-25-102479_495415', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '6fd71409d2b81a4f9715f9c835033708', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(390, 'KDMCC-26-ENTRY-23215_569828', 'xyz_auto', 'tejasnirgude@gmail.com', '59243cc61c0222f0fbfbbebca0d63ed1', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(391, 'KDMCC-25-ENTRY-89005_480846', 'xyz_auto', 'dt.architect@rediffmail.com', '4df668b0e5666f393f9ec4666a2e83e5', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(392, 'KDMCC-26-12910_558381', 'xyz_auto', 'surajandhareassociates@gmail.com', 'ea48d11395bb42882161982cc540f78b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(393, 'KDMCC-26-30960_578251', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '900b48459abb956c204c969b4dcb7ffa', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(394, 'KDMCC-26-28828_575916', 'xyz_auto', 'kkkamble@yahoo.com', '9562be0dd22b4d5575d10012448b022e', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(395, 'KDMCC-25-ENTRY-21599_408288', 'xyz_auto', 'arsandeep21@gmail.com', '6c0b68b61cad1a30751d2bc1aad8ed44', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(396, 'KDMCC-25-ENTRY-81535_472766', 'xyz_auto', 'arsandeep21@gmail.com', '822d9820f502a3ef777aa1dc965c8695', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(397, 'KDMCC-26-ENTRY-10603_555881', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '1f3fc5e198e884009135dab62ed0a2c4', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(398, 'KDMCC-25-ENTRY-34689_422231', 'xyz_auto', 'tripathibinod1974@gmail.com', 'dfdf9bf1ea873c2e5397fbd59929f72c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(399, 'KDMCC-26-22055_568505', 'xyz_auto', 'akash94sonawane@gmail.com', '4fd88c18d9826f1f4583183d9cb37ea0', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(400, 'KDMCC-26-ENTRY-33141_580596', 'xyz_auto', 'tejasnirgude@gmail.com', 'ebd0ad2fb2d1d9e919e20b7c12003e7b', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(401, 'KDMCC-26-33051_580499', 'xyz_auto', 'ar.ujwaljamdare@gmail.com', '4726ff7c68a1b1af31e47813af005ad8', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(402, 'KDMCC-25-136359_532698', 'xyz_auto', 'ar.santoshmadan@gmail.com', '6a060777089927c2a14376dffc253866', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(403, 'KDMCC-25-ENTRY-140004_536750', 'xyz_auto', 'asdaa.98.17@gmail.com', '86b758c365f92a8394f040a984218e81', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(404, 'KDMCC-26-27901_574905', 'xyz_auto', 'ar.santoshmadan@gmail.com', '1e1503875a53b814930b69f2eaa980cd', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(405, 'KDMCC-26-13168_558654', 'xyz_auto', 'shirish_nachane@rediffmail.com', '0bc1221f829bf346fd72446d9b666320', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(406, 'KDMCC-26-19147_565191', 'xyz_auto', 'rajeshwn07@gmail.com', 'eaf0af0c1bbd349a98be07210a29b2d2', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(407, 'KDMCC-25-ENTRY-135156_531377', 'xyz_auto', 'deconcon009@gmail.com', 'd3883d576128a1e901b97739c542e0af', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(408, 'KDMCC-26-28797_575883', 'xyz_auto', 'rajanmodak1955@gmail.com', '25192e38446d6fb9981de0f481f32401', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(409, 'KDMCC-26-33504_580989', 'xyz_auto', 'adityapatilarchitects@gmail.com', 'f1df2073e269aa9b4b6ed259c56e14b2', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(410, 'KDMCC-26-ENTRY-11956_557348', 'xyz_auto', 'deconcon009@gmail.com', '7832e729d5f27d8b21a1c7506c334563', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(411, 'KDMCC-22-ENTRY-69883_94509', 'xyz_auto', 'asdaa.98.17@gmail.com', '083dda6bbfb9b9b69d6a0066676ca18c', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(412, 'KDMCC-26-28805_575891', 'xyz_auto', 'yash210995@gmail.com', 'b3ee3ef3029fcf04f2162fd4ddcad369', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(413, 'KDMCC-26-ENTRY-31646_579006', 'xyz_auto', 'emergearchitect@gmail.com', 'f5348e16d55b7ae886d5320237d0ec54', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(414, 'KDMCC-26-34952_582545', 'xyz_auto', 'h89patil@yahoo.com', '545b9b1d779aacd64c76bb974f22ca34', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(415, 'KDMCC-26-32219_579615', 'xyz_auto', 'phonemail9898@gmail.com', '9ad4faa8dd078a6dd00a4a9ecbd3c8d2', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(416, 'KDMCC-26-34485_582044', 'xyz_auto', 'gopinath.gandhe@gmail.com', 'c3d4bfb37b8cd1da423569aa6b67dc85', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(417, 'KDMCC-26-ENTRY-32463_579872', 'xyz_auto', 'kkkamble@yahoo.com', '5d7b80bf30a8a38ba67ed24338deb782', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(418, 'KDMCC-26-ENTRY-26833_573764', 'xyz_auto', 'sthapathyanirmaan@gmail.com', '6bb15939ec9b0aae78821dc3e40907ef', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(419, 'KDMCC-26-35423_583065', 'xyz_auto', 'vrs.roshan@gmail.com', 'ca174478f16da87cde7130f6873ed214', NULL, '2025-06-03 00:00:00', NULL, 3, ''),
(420, 'KDMCC-26-ENTRY-37745_585609', 'xyz_auto', 'designteam@creations.org.in', '3d9dd85c8018107e7360b8259ac2ebfd', NULL, '2025-06-03 00:00:00', NULL, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `wings_info`
--

CREATE TABLE `wings_info` (
  `id` int(11) NOT NULL,
  `rec_id` varchar(255) NOT NULL COMMENT 'building_id',
  `wingno` varchar(255) NOT NULL,
  `wing_name` varchar(255) NOT NULL,
  `floor_count` varchar(255) NOT NULL,
  `locked` int(11) NOT NULL,
  `floor_count_did` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_reject`
--
ALTER TABLE `accept_reject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_mapping`
--
ALTER TABLE `application_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_prefix`
--
ALTER TABLE `application_prefix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorization_sequence`
--
ALTER TABLE `authorization_sequence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhuilding_details_for_fire_noc`
--
ALTER TABLE `bhuilding_details_for_fire_noc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_upload`
--
ALTER TABLE `certificate_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_upload2`
--
ALTER TABLE `certificate_upload2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corresponding_values`
--
ALTER TABLE `corresponding_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expiry_services`
--
ALTER TABLE `expiry_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_final_noc`
--
ALTER TABLE `fire_final_noc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_final_noc_renewal`
--
ALTER TABLE `fire_final_noc_renewal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_final_part_noc`
--
ALTER TABLE `fire_final_part_noc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_noc_establishment`
--
ALTER TABLE `fire_noc_establishment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_noc_establishment_subentry`
--
ALTER TABLE `fire_noc_establishment_subentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_noc_provisional_new`
--
ALTER TABLE `fire_noc_provisional_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_noc_provisional_new_deleted`
--
ALTER TABLE `fire_noc_provisional_new_deleted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_noc_revised_provisional`
--
ALTER TABLE `fire_noc_revised_provisional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_rcc_form`
--
ALTER TABLE `fire_rcc_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_details`
--
ALTER TABLE `floor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govt_hospital_inspection_form`
--
ALTER TABLE `govt_hospital_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_inspection_form`
--
ALTER TABLE `hotel_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_factory_inspection_form`
--
ALTER TABLE `industrial_factory_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `label_names`
--
ALTER TABLE `label_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lift_details`
--
ALTER TABLE `lift_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_cinema_inspection_form`
--
ALTER TABLE `mall_cinema_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_establishment_type`
--
ALTER TABLE `master_establishment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_yes_no`
--
ALTER TABLE `master_yes_no`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_zone_ward`
--
ALTER TABLE `master_zone_ward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_application_type`
--
ALTER TABLE `m_application_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_building_type`
--
ALTER TABLE `m_building_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_floor`
--
ALTER TABLE `m_floor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_floor_type`
--
ALTER TABLE `m_floor_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_lift`
--
ALTER TABLE `m_lift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_staircase`
--
ALTER TABLE `m_staircase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_establishment_inspection_form`
--
ALTER TABLE `other_establishment_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_hospital_inspection_form`
--
ALTER TABLE `private_hospital_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_header_footer`
--
ALTER TABLE `report_header_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `school_college_coaching_inspection_form`
--
ALTER TABLE `school_college_coaching_inspection_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staircase_details`
--
ALTER TABLE `staircase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_visit`
--
ALTER TABLE `survey_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_data`
--
ALTER TABLE `temp_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tablename` (`tablename`),
  ADD KEY `field` (`field`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `typical_floor_plan`
--
ALTER TABLE `typical_floor_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wings_info`
--
ALTER TABLE `wings_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept_reject`
--
ALTER TABLE `accept_reject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_mapping`
--
ALTER TABLE `application_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_prefix`
--
ALTER TABLE `application_prefix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authorization_sequence`
--
ALTER TABLE `authorization_sequence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `bhuilding_details_for_fire_noc`
--
ALTER TABLE `bhuilding_details_for_fire_noc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_upload`
--
ALTER TABLE `certificate_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_upload2`
--
ALTER TABLE `certificate_upload2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corresponding_values`
--
ALTER TABLE `corresponding_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expiry_services`
--
ALTER TABLE `expiry_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_final_noc`
--
ALTER TABLE `fire_final_noc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_final_noc_renewal`
--
ALTER TABLE `fire_final_noc_renewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_final_part_noc`
--
ALTER TABLE `fire_final_part_noc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_noc_establishment`
--
ALTER TABLE `fire_noc_establishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_noc_establishment_subentry`
--
ALTER TABLE `fire_noc_establishment_subentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_noc_provisional_new`
--
ALTER TABLE `fire_noc_provisional_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_noc_provisional_new_deleted`
--
ALTER TABLE `fire_noc_provisional_new_deleted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_noc_revised_provisional`
--
ALTER TABLE `fire_noc_revised_provisional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_rcc_form`
--
ALTER TABLE `fire_rcc_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floor_details`
--
ALTER TABLE `floor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `govt_hospital_inspection_form`
--
ALTER TABLE `govt_hospital_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_inspection_form`
--
ALTER TABLE `hotel_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industrial_factory_inspection_form`
--
ALTER TABLE `industrial_factory_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `label_names`
--
ALTER TABLE `label_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987;

--
-- AUTO_INCREMENT for table `lift_details`
--
ALTER TABLE `lift_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mall_cinema_inspection_form`
--
ALTER TABLE `mall_cinema_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_establishment_type`
--
ALTER TABLE `master_establishment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_yes_no`
--
ALTER TABLE `master_yes_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_zone_ward`
--
ALTER TABLE `master_zone_ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `m_application_type`
--
ALTER TABLE `m_application_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_building_type`
--
ALTER TABLE `m_building_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `m_floor`
--
ALTER TABLE `m_floor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `m_floor_type`
--
ALTER TABLE `m_floor_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `m_lift`
--
ALTER TABLE `m_lift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_staircase`
--
ALTER TABLE `m_staircase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_establishment_inspection_form`
--
ALTER TABLE `other_establishment_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_hospital_inspection_form`
--
ALTER TABLE `private_hospital_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12115;

--
-- AUTO_INCREMENT for table `school_college_coaching_inspection_form`
--
ALTER TABLE `school_college_coaching_inspection_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staircase_details`
--
ALTER TABLE `staircase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_visit`
--
ALTER TABLE `survey_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_data`
--
ALTER TABLE `temp_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typical_floor_plan`
--
ALTER TABLE `typical_floor_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `wings_info`
--
ALTER TABLE `wings_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
