<?php
/**
 * Functions class
 */

//@todo rename Starter_Plugin
class RSDT_Functions
{
    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()

    public function __construct() {
        add_filter( "dt_custom_fields_settings", array( $this, "dt_contact_fields" ), 1, 2 );
    }

    public function dt_contact_fields( array $fields, string $post_type = ""){
        //check if we are dealing with a contact
        if ($post_type === "contacts"){
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['internet'] = array(
                    "label" => __( "Internet", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['vpn'] = array(
                    "label" => __( "VPN", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['enjilme_pdf'] = array(
                    "label" => __( "Enjilme_PDF", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['sdcard'] = array(
                    "label" => __( "SD Card", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['friend'] = array(
                    "label" => __( "Friend", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['familyMember'] = array(
                    "label" => __( "Family Member", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['RS.com'] = array(
                    "label" => __( "RS.com", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }


            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['friend'] = array(
                    "label" => __( "Friend", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['seeker'] = array(
                    "label" => __( "Seeker", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['newbeliever'] = array(
                    "label" => __( "New Believer", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['believer'] = array(
                    "label" => __( "Believer", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['needs_counseling'] = array(
                    "label" => __( "Needs Counseling", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['is_counseling'] = array(
                    "label" => __( "Is Counseling", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['counseling_complete'] = array(
                    "label" => __( "Counseling Complete", "RSDT" ),
                    "description" => "from Rooze Sevom Import"
                );
            }
            if ( !isset( $fields["alias"] )){
                //define the language field
                $fields["alias"] = array(
                    "name" => __( "Alias", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all",
                );
            }
            if ( !isset( $fields["education"] )){
                //define the language field
                $fields["education"] = array(
                    "name" => __( "Education", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }

            if ( !isset( $fields["religion"] )){
                //define the language field
                $fields["religion"] = array(
                    "name" => __( "Religion", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }

            if ( !isset( $fields["religiousOrientation"] )){
                //define the language field
                $fields["religiousOrientation"] = array(
                    "name" => __( "Religious Orientation", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }

            if ( !isset( $fields["occupation"] )){
                //define the language field
                $fields["occupation"] = array(
                    "name" => __( "Occupation", "RSDT" ),
                    "type" => "textarea",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all",
                );
            }

            if ( !isset( $fields["dateOfBirth"] )){
                //define the language field
                $fields["dateOfBirth"] = array(
                    "name" => __( "Date of Birth", "RSDT" ),
                    "type" => "date",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all",
                );
            }

            if ( !isset( $fields["dateOfFaith"] )){
                //define the language field
                $fields["dateOfFaith"] = array(
                    "name" => __( "Date of Faith", "RSDT" ),
                    "type" => "date",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }

            if ( !isset( $fields["churchName"] )){
                //define the language field
                $fields["churchName"] = array(
                    "name" => __( "Church Name", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }

            if ( !isset( $fields["pastorName"] )){
                //define the language field
                $fields["pastorName"] = array(
                    "name" => __( "Pastor's Name", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }
            if ( !isset( $fields["martialStatus"] )){
                $fields["maritalStatus"] = array(
                    "name" => __( "Marital Status", "RSDT" ),
                    "type" => "key_select",
                    "tile" => "rooze_sevom",
                    "customizable" => "all",
                    "default" => array(
                        "" => "",
                        "married" => __( "Married", "RSDT" ),
                        "single" => __( "Single", "RSDT" ),
                        "widowed" => __( "Widowed", "RSDT" ),
                        "divorced" => __( "Divorced", "RSDT" )
                    ),
                );
            }
            if ( !isset( $fields["dateOfmarriage"] )){
                //define the language field
                $fields["dateOfmarriage"] = array(
                    "name" => __( "Date of Marriage", "RSDT" ),
                    "type" => "date",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }
            if ( !isset( $fields["children"] )){
                $fields["children"] = array(
                    "name" => __( "Children", "RSDT" ),
                    "type" => "key_select",
                    "tile" => "rooze_sevom",
                    "customizable" => "all",
                    "default" => array(
                        "" => "",
                        "single" => __( "Yes", "RSDT" ),
                        "widowed" => __( "No", "RSDT" ),
                    )
                );
            }
            if ( !isset( $fields["numberOfChildren"] )){
                //define the language field
                $fields["numberOfChildren"] = array(
                    "name" => __( "Number of Children", "RSDT" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                );
            }
        }
        //don't forget to return the update fields array
        return $fields;
    }

}
