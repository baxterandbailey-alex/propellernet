<?php
////---------- PLUGIN: ACF ----------////

// Add Options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// BB: Hide ACF settings from anyone but specific named admin
add_filter('acf/settings/show_admin', 'bbwp_hide_acf');
function bbwp_hide_acf()
{

    $user = wp_get_current_user();

    if ($user && isset($user->user_login) && 'bb-admin' !== $user->user_login) {
        return false;
    } else {
        return true;
    }
}

// ACF Admin styling
function bbwp_acf_admin_head()
{
?>
    <style type="text/css">
        .acf-postbox .postbox-header {
            background-color: #ddd;
        }

        .acf-flexible-content .layout .acf-fc-layout-handle {
            background-color: #444;
            color: #f2f2f2;
        }

        .acf-icon.-clear {
            border-color: #f2f2f2;
            color: #f2f2f2;
        }

        .acf-repeater.-row>table>tbody>tr>td,
        .acf-repeater.-block>table>tbody>tr>td {
            border-top: 2px solid #444;
        }

        .acf-repeater .acf-row-handle {
            vertical-align: top !important;
            padding-top: 16px;
        }

        .acf-repeater .acf-row-handle span {
            font-size: 20px;
            font-weight: bold;
            color: #444;
        }

        .imageUpload img {
            width: 75px;
        }

        .acf-repeater .acf-row-handle .acf-icon.-minus {
            top: 30px;
        }
    </style>
<?php
}

add_action('acf/input/admin_head', 'bbwp_acf_admin_head');

// ACF colour picker presets
function bbwp_acf_colour_picker()
{
?>
    <script type="text/javascript">
        acf.add_filter('color_picker_args', function(args, field) {
            // do something to args
            args.palettes = ['#8EDB22', '#53C930', '#3CC8A9']
            // return
            return args;
        });
    </script>
<?php
}
add_action('acf/input/admin_footer', 'bbwp_acf_colour_picker');
