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
        add_filter( "dt_custom_fields_settings", [ $this, "dt_contact_fields" ], 1, 2 );
        add_filter( "dt_details_additional_section_ids", [ $this, "dt_declare_section_id" ], 999, 2 );
        add_action( "dt_details_additional_section", [ $this, "dt_add_section" ] );

    }

    public function dt_contact_fields( array $fields, string $post_type = ""){
        //check if we are dealing with a contact
        if ($post_type === "contacts"){
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['internet'] = [
                    "label" => __( "Internet", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['vpn'] = [
                    "label" => __( "VPN", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['enjilme_pdf'] = [
                    "label" => __( "Enjilme_PDF", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['sdcard'] = [
                    "label" => __( "SD Card", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['friend'] = [
                    "label" => __( "Friend", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['familyMember'] = [
                    "label" => __( "Family Member", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["sources"]["default"] )){
                $fields["sources"]["default"]['RS.com'] = [
                    "label" => __( "RS.com", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }


            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['friend'] = [
                    "label" => __( "Friend", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['seeker'] = [
                    "label" => __( "Seeker", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['newbeliever'] = [
                    "label" => __( "New Believer", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( isset( $fields["milestones"]["default"] )){
                $fields["milestones"]["default"]['believer'] = [
                    "label" => __( "Believer", "disciple_tools_language" ),
                    "description" => "from Rooze Sevom Import"
                ];
            }
            if ( !isset( $fields["martialStatus"] )){
                $fields["maritalStatus"] = [
                    "name" => __( "Marital Status", "disciple_tools_language" ),
                    "type" => "key_select",
                    "tile" => "rooze_sevom",
                    "customizable" => "all",
                    "default" => [
                        "" => __( "", "disciple_tools_language" ),
                        "married" => __( "Married", "disciple_tools_language" ),
                        "single" => __( "Single", "disciple_tools_language" ),
                        "divorced" => __( "Divorced", "disciple_tools_language" )
                    ]
                ];
            }
            if ( !isset( $fields["alias"] )){
                //define the language field
                $fields["alias"] = [
                    "name" => __( "Alias", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }
            if ( !isset( $fields["education"] )){
                //define the language field
                $fields["education"] = [
                    "name" => __( "Education", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["religion"] )){
                //define the language field
                $fields["religion"] = [
                    "name" => __( "Religion", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["religiousOrientation"] )){
                //define the language field
                $fields["religiousOrientation"] = [
                    "name" => __( "Religion Orientation", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["occupation"] )){
                //define the language field
                $fields["occupation"] = [
                    "name" => __( "Occupation", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["dateOfBirth"] )){
                //define the language field
                $fields["dateOfBirth"] = [
                    "name" => __( "Date of Birth", "disciple_tools_language" ),
                    "type" => "date",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["dateOfFaith"] )){
                //define the language field
                $fields["dateOfFaith"] = [
                    "name" => __( "Date of Faith", "disciple_tools_language" ),
                    "type" => "date",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["churchName"] )){
                //define the language field
                $fields["churchName"] = [
                    "name" => __( "Church Name", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["pastorName"] )){
                //define the language field
                $fields["pastorName"] = [
                    "name" => __( "Pastor's Name", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }

            if ( !isset( $fields["numberOfChildren"] )){
                //define the language field
                $fields["numberOfChildren"] = [
                    "name" => __( "Number of Children", "disciple_tools_language" ),
                    "type" => "text",
                    "default" => "",
                    "tile" => "rooze_sevom",
                    "customizable" => "all"
                ];
            }
        }
        //don't forget to return the update fields array
        return $fields;
    }

    public function dt_declare_section_id( $sections, $post_type = "" ){
        //check if we are on a contact
        if ($post_type === "contacts"){
            $contact_fields = Disciple_Tools_Contact_Post_Type::instance()->get_custom_fields_settings();
            //check if the language field is set
            if ( isset( $contact_fields["RoozeSevom"] ) ){
                $sections[] = "RoozeSevom";
            }
            //add more section ids here if you want...
        }
        return $sections;
    }

    public function dt_add_section( $section ) {
        if ( $section == "RoozeSevom" ) {
            $contact_id     = get_the_ID();
            $contact_fields = Disciple_Tools_Contact_Post_Type::instance()->get_custom_fields_settings();
            $contact        = Disciple_Tools_Contacts::get_contact( $contact_id, true );
            ?>
            <!-- need you own css? -->
            <style type="text/css">
                .required-style-example {
                    color: red
                }
            </style>

            <label class="section-header">
                <?php esc_html_e( 'Rooze Sevom', 'disciple_tools' ) ?>
            </label>
            <div class="section-subheader">
                <?php esc_html_e( 'Alias', 'disciple_tools' ) ?>
            </div>
            <input id="alias" type="text" class="text-input" value="<?php echo esc_html( isset($contact["alias"]) ? $contact["alias"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Education', 'disciple_tools' ) ?>
            </div>
            <input id="education" type="text" class="text-input" value="<?php echo esc_html( isset($contact["education"]) ? $contact["education"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Religion', 'disciple_tools' ) ?>
            </div>
            <input id="religion" type="text" class="text-input" value="<?php echo esc_html( isset($contact["religion"]) ? $contact["religion"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Religious Orientation', 'disciple_tools' ) ?>
            </div>
            <input id="religiousOrientation" type="text" class="text-input" value="<?php echo esc_html( isset($contact["religiousOrientation"]) ? $contact["religiousOrientation"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Occupation', 'disciple_tools' ) ?>
            </div>
            <input id="occupation" type="text" class="text-input" value="<?php echo esc_html( isset($contact["occupation"]) ? $contact["occupation"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Date of Birth', 'disciple_tools' ) ?>
            </div>
            <input type="text" class="date-picker dt_date_picker" id="dateOfBirth" autocomplete="off"  data-date-format='yy-mm-dd' value="<?php echo esc_html( isset($contact["dateOfBirth"]) ? $contact["dateOfBirth"]["formatted"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Date of Faith', 'disciple_tools' ) ?>
            </div>
            <input type="text" class="date-picker dt_date_picker" id="dateOfFaith" autocomplete="off"  data-date-format='yy-mm-dd' value="<?php echo esc_html( isset($contact["dateOfFaith"]) ? $contact["dateOfFaith"]["formatted"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Church Name', 'disciple_tools' ) ?>
            </div>
            <input id="churchName" type="text" class="text-input" value="<?php echo esc_html( isset($contact["churchName"]) ? $contact["churchName"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( "Pastor's Name", 'disciple_tools' ) ?>
            </div>
            <input id="pastorName" type="text" class="text-input" value="<?php echo esc_html( isset($contact["pastorName"]) ? $contact["pastorName"] : "" ) ?>">

            <div class="section-subheader">
                <?php esc_html_e( 'Marital Status', 'disciple_tools' ) ?>
            </div>
            <select class="select-field" id="maritalStatus" style="margin-bottom: 0px">
                <?php
                foreach ( $contact_fields["maritalStatus"]["default"] as $key => $value ) {
                    if ( $contact["maritalStatus"]["key"] === $key ) {
                        ?>
                        <option value="<?php echo esc_html( $key ) ?>"
                                selected><?php echo esc_html( $value["label"] ); ?></option>
                    <?php } else { ?>
                        <option value="<?php echo esc_html( $key ) ?>"><?php echo esc_html( $value["label"] ); ?></option>
                    <?php }
                }
                ?>
            </select>

            <div class="section-subheader">
                <?php esc_html_e( 'Number of Children', 'disciple_tools' ) ?>
            </div>
            <input id="numberOfChildren" type="text" class="text-input" value="<?php echo esc_html( isset($contact["numberOfChildren"]) ? $contact["numberOfChildren"] : "" ) ?>">

            <script type="application/javascript">
                //enter jquery here if you need it
                jQuery(($) => {
                })
            </script>
            <?php
        }

        //add more sections here if you want...
    }

}
