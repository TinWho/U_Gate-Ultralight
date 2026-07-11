
/**
 * ==========================================================================
 * PROJECT:            Ultralight U_Gate
 * DESCRIPTION:        A high-dexterity, zero-bloat Dynamic Content Gate & 
 *                     Telemetry Routing Engine for high-traffic forum networks.
 * FILE LOCATION:      WordPress/bbPress Child Theme functions.php snippet
 * VERSION:            1.0.0-alpha
 * AUTHOR:             Tin Who (https://tinfoilwho.com)
 * LICENSE:            GPL-2.0-or-later (https://gnu.org)
 * ==========================================================================
 * DESIGN ARCHITECTURE: LEAD PRODUCT DIRECTOR & SYSTEM SPEC: TIN WHO
 * AI-generated / AI-assisted template code execution provided AS-IS.
 * User assumes all risks and environmental responsibility for use.
 * ==========================================================================
 */



/*
============================================================================
ULTRALIGHT U_GATE — CORE SPECIFICATION ALPHA BUILD (GPLv2+)
============================================================================
The Ultralight U_Gate is a dynamic architectural translation layer.
It bridges your backend database with your front-end presentation layer, 
translating raw values inside the highly indexed `wp_usermeta` table into 
instant conditional layout tracks [INDEX, INDEX].

THE 8 STRUCTURAL CORE CLASSIFICATIONS MATRIX:
----------------------------------------------------------------------------
 1. USER            -> Authenticates core profile login state [INDEX].
 2. GROUP           -> Tracks clearing arrays and roles ( l="vip, !banned" ) [INDEX].
 3. p (Posts Index) -> Mapped shorthand indicator for '_bbp_reply_count' [INDEX].
 4. t (Topics)      -> Mapped shorthand indicator for '_bbp_topic_count' [INDEX].
 5. k (Kudos)       -> Mapped shorthand indicator for '_bbp_received_likes_count' [INDEX].
 6. v (View Mode)   -> Controls fallback layout template tracks ( h / p / r ) [INDEX].
 7. DATE TIME       -> Manages clock schedules via global container [u_date] [INDEX].
 8. VARIABLE NAMES  -> Pass-through engine: processes ANY user meta row value [INDEX].

CORE PARAMETER OPERATOR MODIFIERS:
----------------------------------------------------------------------------
 - Raw Integer (e.g. p="10")     : Checked as a minimum floor threshold limit (Score >= 10) [INDEX].
 - Less-Than Prefix (e.g. p="<10"): Checked as a maximum ceiling threshold limit (Score < 10) [INDEX].
 - Exact Match Prefix (e.g. your_database_table_name="=10"): Checked as an exact value match (= 10) [INDEX].

INLINE STRUCTURAL EXACT MATCHING SPECIFICATION RECIPE:
----------------------------------------------------------------------------
Lock a presentation layout block straight to a singular status integer code:

[u_gate your_database_table_name="=10"]
   <div style="background:#ffffff; padding:25px; border-radius:6px; font-family:sans-serif;">
      <h4>🎯 Precision Checkpoint Layer Active (Value == 10)</h4>
      <p>This layout renders exclusively for profiles matching exact data logs.</p>
      [wp_poll id="roadmap-v2"] [other_shortcode]
   </div>
[/u_gate]
============================================================================
*/
/**
 * ============================================================================
 * ULTRALIGHT U_GATE (PART 1 OF 5) — BACKEND INTERFACE & GLOBAL MASTER WORKSPACE
 * ============================================================================
 * Handles the expanding shortcode workspace terminals inside individual boards
 * and registers the master fallback dashboard loop within Settings > Forums.
 * This file uses custom frontend form submit interceptors to safely protect
 * your mathematical equations from getting corrupted by WordPress filter hooks.
 */

// Hook administration interfaces cleanly down standard operational pathways
add_action( 'edit_form_after_title', 'ultralight_inject_shortcode_field_below_permalink' );
add_action( 'save_post', 'ultralight_save_unrestricted_shortcode_pipeline', 10, 2 );
add_action( 'admin_init', 'ultralight_register_global_settings_field' );

/**
 * Injects the dynamic, expanding rule meta box and local telemetry toggle switches
 * directly under individual subforum permalinks.
 */
function ultralight_inject_shortcode_field_below_permalink( $post ) {
    if ( ! class_exists( 'bbPress' ) || ! function_exists( 'bbp_get_forum_post_type' ) ) return;
    if ( $post->post_type !== bbp_get_forum_post_type() ) return;

    $saved = get_post_meta( $post->ID, '_ultralight_custom_forum_shortcode', true );
    $debug_active = get_post_meta( $post->ID, '_ultralight_local_debug_active', true );
    
    // VISUAL DECODER: Swap compact placeholder token back to clean "<" character for admin display
    $saved = str_replace( 'lessthan_', '<', $saved );

    $guide = "MASTER CORE VARIABLE ATTS:\n l=\"guest\" | l=\"role,group,!banned_group\" (Matrix Checks)\n v=\"h|p|r\" (View Mode Fallbacks)\n t=\"10\" | p=\"50\" | k=\"25\" (Shorthand Core DB Keys)\n your_database_table_name=\"<10\" (Pass ANY dynamic user meta field)\n [u_date after=\"\" before=\"\"] (Timeline scheduler)\n\nEXACT LOCK CHECKPOINT RECIPE:\n [u_gate l=\"guest\" v=\"h\"]\n   <p>This text block displays exclusively for unregistered visitors.</p>\n [/u_gate]";
    ?>
    <div class="ultralight-wrap" style="margin-top:25px; margin-bottom:20px; background:#fff; padding:16px; border:1px solid #ccd0d4; border-radius:4px; clear:both;">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
            <label for="ultralight_custom_forum_shortcode" style="font-weight:600; font-size:14px;">Custom Rule Flow Sheet Box</label>
            <a href="#" id="ultralight_toggle_trigger" style="font-size:13px; color:#2271b1; text-decoration:none;">[+ Expand Workspace]</a>
        </div>
        <?php wp_nonce_field( 'ultralight_shortcode_save_action', 'ultralight_shortcode_nonce' ); ?>
        <textarea name="ultralight_custom_forum_shortcode" id="ultralight_custom_forum_shortcode" placeholder="<?php echo esc_attr( $guide ); ?>" style="width:100%; padding:8px; font-size:13px; font-family:monospace; height:38px; min-height:38px; display:block; box-sizing:border-box; transition:background-color 0.2s ease; margin-bottom:10px;"><?php echo esc_textarea( $saved ); ?></textarea>
        
        <!-- Local Context Diagnostics Toggle Box Panel Layout Frame -->
        <div style="background:#f6f7f7; padding:10px; border:1px solid #dcdcde; border-radius:4px; display:flex; align-items:center; gap:8px;">
            <input type="checkbox" name="ultralight_local_debug_active" id="ultralight_local_debug_active" value="1" <?php checked( $debug_active, '1' ); ?>>
            <label for="ultralight_local_debug_active" style="font-size:12px; font-weight:600; color:#1d2327; cursor:pointer;">🛠️ Enable Live Data Audit Terminal for this board</label>
        </div>

        <script>
        jQuery(document).ready(function($) {
            var a = document.getElementById('ultralight_custom_forum_shortcode'), $a = $(a), exp = false;
            $('#ultralight_toggle_trigger').on('click', function(e) {
                e.preventDefault(); exp = !exp;
                $(this).text(exp ? '[- Collapse Workspace]' : '[+ Expand Workspace]');
                $a.css('background-color', exp ? '#fbfbfc' : '#ffffff');
                a.style.height = exp ? Math.min(a.scrollHeight, 500) + 'px' : '38px';
                a.style.overflowY = (exp && a.scrollHeight > 500) ? 'scroll' : 'hidden';
            });
            
            // Individual Form Meta Box Form Submit Interceptor:
            // Swaps < to lessthan_ the exact millisecond the user clicks save
            $a.closest('form').on('submit', function() {
                var val = $a.val();
                val = val.replace(/([a-zA-Z0-9_-]+)\s*=\s*(["']|&quot;|&#34;)?\s*</gi, '$1=$2lessthan_');
                $a.val(val);
            });
        });
        </script>
    </div>
    <?php
}

/**
 * Securely saves individual forum metadata rules and local telemetry check statuses.
 */
function ultralight_save_unrestricted_shortcode_pipeline( $post_id, $post ) {
    if ( ! isset( $_POST['ultralight_shortcode_nonce'] ) || ! wp_verify_nonce( $_POST['ultralight_shortcode_nonce'], 'ultralight_shortcode_save_action' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! class_exists( 'bbPress' ) || ! function_exists( 'bbp_get_forum_post_type' ) ) return;
    if ( $post->post_type !== bbp_get_forum_post_type() ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    
    if ( isset( $_POST['ultralight_custom_forum_shortcode'] ) ) { 
        update_post_meta( $post_id, '_ultralight_custom_forum_shortcode', wp_kses_post( $_POST['ultralight_custom_forum_shortcode'] ) ); 
    }
    
    $debug_val = isset( $_POST['ultralight_local_debug_active'] ) ? '1' : '0';
    update_post_meta( $post_id, '_ultralight_local_debug_active', $debug_val );
}

/**
 * Registers the global settings field framework inside the main bbPress settings menu.
 */
function ultralight_register_global_settings_field() {
    add_settings_section( 'ultralight_global_section', 'Ultralight Global Engine Pipeline', '__return_false', 'bbpress' );
    
    register_setting( 'bbpress', 'ultralight_global_master_shortcode', 'wp_kses_post' );
    register_setting( 'bbpress', 'ultralight_global_debug_active', 'sanitize_text_field' );
    
    add_settings_field( 'ultralight_global_master_shortcode', 'Global Master Flow Sheet Box', 'ultralight_render_global_settings_textarea', 'bbpress', 'ultralight_global_section' );
}

/**
 * Renders the primary terminal field alongside the global toggle options framework.
 */
function ultralight_render_global_settings_textarea() {
    $saved = get_option( 'ultralight_global_master_shortcode', '' );
    $global_debug = get_option( 'ultralight_global_debug_active', '0' );
    
    // Clean any accidental historical entity tags left behind in older options data
    $saved = str_replace( array('&lt;', '&#60;'), '<', $saved );
    $saved = str_replace( 'lessthan_', '<', $saved );
    
    $guide = "GLOBAL MASTER OVERRIDE:\nRules entered here cascade across ALL forums automatically unless overridden inside a specific board canvas.";
    ?>
    <div class="ultralight-wrap" style="background:#fff; padding:16px; border:1px solid #ccd0d4; border-radius:4px; max-width:800px;">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
            <span style="font-weight:600; font-size:13px; color:#1d2327;">Global Site-Wide Configuration</span>
            <a href="#" id="ultralight_global_toggle" style="font-size:12px; color:#2271b1; text-decoration:none;">[+ Expand Workspace]</a>
        </div>
        <textarea name="ultralight_global_master_shortcode" id="ultralight_global_master_shortcode" placeholder="<?php echo esc_attr( $guide ); ?>" style="width:100%; padding:8px; font-size:13px; font-family:monospace; height:38px; min-height:38px; display:block; box-sizing:border-box; transition:background-color 0.2s ease; margin-bottom:10px;"><?php echo esc_textarea( $saved ); ?></textarea>
        
        <!-- Global Context Diagnostics Toggle Box Panel Layout Frame -->
        <div style="background:#f6f7f7; padding:10px; border:1px solid #dcdcde; border-radius:4px; display:flex; align-items:center; gap:8px;">
            <input type="checkbox" name="ultralight_global_debug_active" id="ultralight_global_debug_active" value="1" <?php checked( $global_debug, '1' ); ?>>
            <label for="ultralight_global_debug_active" style="font-size:12px; font-weight:600; color:#1d2327; cursor:pointer;">🛠️ Enable Live Data Audit Terminal site-wide (Global Fallback)</label>
        </div>

        <script>
        jQuery(document).ready(function($) {
            var b = document.getElementById('ultralight_global_master_shortcode'), $b = $(b), exp = false;
            $('#text_placeholder').text(''); // Dummy placeholder clear
            $('#ultralight_global_toggle').on('click', function(e) {
                e.preventDefault(); exp = !exp;
                $(this).text(exp ? '[- Collapse Workspace]' : '[+ Expand Workspace]');
                $b.css('background-color', exp ? '#fbfbfc' : '#ffffff');
                b.style.height = exp ? Math.min(b.scrollHeight, 300) + 'px' : '38px';
                b.style.overflowY = (exp && b.scrollHeight > 300) ? 'scroll' : 'hidden';
            });

            // GLOBAL SUBMIT INTERCEPTOR: Prevents Settings API from converting operators to &lt;
            $b.closest('form').on('submit', function() {
                var val = $b.val();
                val = val.replace(/([a-zA-Z0-9_-]+)\s*=\s*(["']|&quot;|&#34;)?\s*</gi, '$1=$2lessthan_');
                $b.val(val);
            });
        });
        </script>
    </div>
    <?php
}
/**
 * ============================================================================
 * ULTRALIGHT U_GATE (PART 2 OF 5) — THREE-TIER CACHED CASCADING INTERCEPTOR
 * ============================================================================
 * Intercepts bbPress templates to automatically inject your active rule sets.
 * It searches down 3 levels (Local Meta -> Parent Tree -> Global Option)
 * and locks the calculated string into a microsecond-fast 12-hour transient cache.
 */

// Hook actions cleanly into BOTH the main board layouts AND individual topic discussion streams
add_action( 'bbp_template_before_single_forum', 'ultralight_frontend_render_under_title_shortcode' );
add_action( 'bbp_template_before_single_topic', 'ultralight_frontend_render_under_title_shortcode' );
add_action( 'bbp_template_before_forums_loop', 'ultralight_frontend_render_under_title_shortcode' );

add_action( 'save_post', 'ultralight_flush_cascade_transients', 10, 2 );
add_action( 'update_option_ultralight_global_master_shortcode', 'ultralight_flush_all_forum_transients_on_global_save' );

/**
 * Handles hierarchical traversal logic down 3 levels and automatically handles debugging flags.
 */
function ultralight_frontend_render_under_title_shortcode( $content = '' ) {
    if ( ! class_exists( 'bbPress' ) ) return $content;

    $current_id = 0;
    $is_forum_archive = false;

    // Switchboard layout classification matrix
    if ( function_exists( 'bbp_is_single_forum' ) && bbp_is_single_forum() ) {
        $current_id = bbp_get_forum_id();
    } 
    elseif ( function_exists( 'bbp_is_single_topic' ) && bbp_is_single_topic() ) {
        $current_id = bbp_get_topic_forum_id(); 
    } 
    elseif ( function_exists( 'bbp_is_forum_archive' ) && bbp_is_forum_archive() ) {
        $is_forum_archive = true;
    }

    if ( ! $current_id && ! $is_forum_archive ) return $content;

    // Pull configurations out of high-scale object transient caching frames
    $transient_key = 'ultralight_forum_cache_' . ( $is_forum_archive ? 'global_archive' : $current_id );
    $target        = get_transient( $transient_key );

    if ( false === $target ) {
        $target = '';
        
        if ( ! $is_forum_archive && $current_id ) {
            // Tier 1: Pull straight from the active subforum meta canvas
            $target = get_post_meta( $current_id, '_ultralight_custom_forum_shortcode', true );

            // Tier 2: Climb parent tree tracking directories
            if ( empty( $target ) && function_exists( 'bbp_get_forum_ancestors' ) ) {
                foreach ( bbp_get_forum_ancestors( $current_id ) as $parent_id ) {
                    $parent_code = get_post_meta( $parent_id, '_ultralight_custom_forum_shortcode', true );
                    if ( ! empty( $parent_code ) ) { $target = $parent_code; break; }
                }
            }
        }

        // Tier 3: Global fallback rule allocation row mapping
        if ( empty( $target ) ) {
            $target = get_option( 'ultralight_global_master_shortcode', '' );
        }

        set_transient( $transient_key, $target, 12 * HOUR_IN_SECONDS );
    }

    // TELEMETRY EVALUATOR MATRIX NODE: Intercept backend database switches and append debug boxes if checked
    $show_debug_console = false;
    if ( ! $is_forum_archive && $current_id ) {
        $local_toggle = get_post_meta( $current_id, '_ultralight_local_debug_active', true );
        if ( $local_toggle === '1' ) {
            $show_debug_console = true;
        }
    }
    
    // If local board hasn't forced an explicit toggle, check the global backup setting
    if ( ! $show_debug_console ) {
        $global_toggle = get_option( 'ultralight_global_debug_active', '0' );
        if ( $global_toggle === '1' ) {
            $show_debug_console = true;
        }
    }

    // Render the active layouts configuration frame
    if ( ! empty( $target ) ) {
        echo '<div class="ultralight-forum-container" style="margin-top:20px; margin-bottom:10px; clear:both;">' . apply_shortcodes( $target ) . '</div>';
    }

    // If a diagnostic switch checkbox is active on this view, safely force execution of our debug terminal row
    if ( $show_debug_console && function_exists( 'ultralight_render_user_profile_debug_stats' ) ) {
        echo ultralight_render_user_profile_debug_stats();
    }

    return $content;
}

/**
 * Instantly evacuates localized transient cache allocations when individual items update.
 */
function ultralight_flush_cascade_transients( $post_id, $post ) {
    if ( ! class_exists( 'bbPress' ) || ! function_exists( 'bbp_get_forum_post_type' ) ) return;
    
    if ( $post->post_type === bbp_get_forum_post_type() ) {
        delete_transient( 'ultralight_forum_cache_' . $post_id );
        if ( function_exists( 'bbp_get_forum_ancestors' ) ) {
            foreach ( bbp_get_forum_ancestors( $post_id ) as $parent_id ) {
                delete_transient( 'ultralight_forum_cache_' . $parent_id );
            }
        }
    } 
    elseif ( function_exists( 'bbp_get_topic_post_type' ) && $post->post_type === bbp_get_topic_post_type() ) {
        $forum_id = get_post_meta( $post_id, '_bbp_forum_id', true );
        if ( $forum_id ) {
            delete_transient( 'ultralight_forum_cache_' . $forum_id );
        }
    }
    delete_transient( 'ultralight_forum_cache_global_archive' );
}

/**
 * Wipes out transient configurations site-wide the instant an admin adjusts the Global Box rules.
 */
function ultralight_flush_all_forum_transients_on_global_save() {
    global $wpdb;
    $wpdb->query( "DELETE FROM {$wpdb->options} WHERE option_name LIKE '_transient_ultralight_forum_cache_%'" );
}
/**
 * ============================================================================
 * ULTRALIGHT U_GATE (PART 3 OF 5) — UNIVERSAL GATEWAY ROUTER
 * ============================================================================
 * Acts as the centralized switchboard traffic router for the [u_gate] shortcode.
 * It manages nesting depth safety checks, flattens profile access groups,
 * and handles native, unauthenticated public visitor ("guest") tracking matrices
 * cleanly without requiring messy double-negative syntax constraints.
 */

/**
 * Universal layout visibility node handling complex group matching and timeline queries.
 */
function ultralight_universal_brevity_gate($atts, $content = null) {
    global $ultralight_gate_depth;
    if ( ! isset( $ultralight_gate_depth ) ) {
        $ultralight_gate_depth = 0;
    }
    
    // NESTING SHIELD: Terminate execution loop thread safely if complex shortcode tags exceed a 5-tier depth ceiling
    if ( $ultralight_gate_depth > 5 ) {
        return '<!--Max Nesting Depth Exceeded-->';
    }
    
    $ultralight_gate_depth++;

    $r = is_array($atts) ? $atts : [];
    $l = $r['l'] ?? ''; 
    $v = $r['v'] ?? 'p'; 
    unset($r['l'], $r['v']);
    
    $uid = get_current_user_id(); 
    $ok  = true;
    $g   = [];

    // NATIVE GUEST ASSIGNMENT: Inject virtual "guest" token cleanly for public sessions
    if ( ! is_user_logged_in() ) { 
        $ok = true;            
        $g  = array( 'guest' ); 
    } else {
        // Authenticated Session: Pull account roles and dynamic custom meta security groups
        $u = wp_get_current_user(); 
        $g = array_map('strtolower', (array)$u->roles);
        
        $meta_keys = array('_ultralight_network_groups');
        if ( class_exists('bbPress') ) { 
            $meta_keys[] = '_bbp_private_groups'; 
        }
        
        foreach ($meta_keys as $k) {
            $m = get_user_meta($uid, $k, true);
            if ( $m ) {
                $g = array_merge($g, array_map('strtolower', (array)$m));
            }
        }
    }
    
    // Normalize user identity permissions vector matrix array data structures
    $g = array_unique(array_filter($g));
    
    // Process comma-separated constraint array matching loops
    if ( ! empty($l) ) {
        $req = array_map('trim', explode(',', $l)); 
        $inc = false; 
        $has_inc = false;
        
        foreach ( $req as $t ) {
            $t = trim($t); 
            if ( $t === '' ) continue;

            $ex = (strpos($t, '!') === 0); 
            $tk = strtolower(sanitize_key($ex ? substr($t, 1) : $t));
            
            if ($ex) { 
                // Hard Lockout: Fail match instantly if explicit exclusion is met
                if (in_array($tk, $g, true)) { 
                    $ok = false; 
                    break; 
                } 
            } else { 
                $has_inc = true; 
                if (in_array($tk, $g, true)) {
                    $inc = true;
                }
            }
        }
        if ($ok && $has_inc && !$inc) {
            $ok = false;
        }
    }
    
    // Handover parameter vectors smoothly down to the Part 4 mathematical loop engine
    if ( function_exists( 'ultralight_process_unlocked_meta_vectors' ) ) {
        $out = ultralight_process_unlocked_meta_vectors($ok, $r, $g, $v, $content, $uid);
    } else {
        $out = $ok ? apply_shortcodes($content) : '';
    }
    
    $ultralight_gate_depth--;
    return $out;
}
add_shortcode('u_gate', 'ultralight_universal_brevity_gate');
/**
 * ============================================================================
 * UULTRALIGHT U_GATE (PART 4A OF 5) — TRANSACTION EVALUATOR ENGINE
 * ============================================================================
 * Handles the shorthand attribute tokens and evaluates algebraic database equations.
 * This segment type-casts user metrics dynamically out of raw core components
 * and handles the safe back-door pass configurations for system administrators.
 */

/**
 * Maps shorthand attribute tokens to their target meta columns cleanly within scope.
 */
function ultralight_get_part4_mapping_registry() {
    return array(
        't' => '_bbp_topic_count',          
        'p' => '_bbp_reply_count',          
        'k' => '_bbp_received_likes_count'  
    );
}

/**
 * Intercepts user parameters and evaluates algebraic and conditional database equations.
 */
function ultralight_process_unlocked_meta_vectors($ok, $r, $g, $v, $content, $uid) {
    if ( ! $ok ) return ultralight_render_gateway_fallback_ui( $v, $content );
    
    // FAILSAFE ARRAY CONVERSION STEP: Ensure $r is a safe loopable matrix array
    if ( empty( $r ) || ! is_array( $r ) ) {
        $r = array();
    }

    // Evaluate if any target mathematics operators are actively requested inside the attributes
    $contains_math_checks = false;
    foreach ( $r as $key_check => $val_check ) {
        if ( in_array( strtolower( trim( $key_check ) ), array( 't', 'p', 'k' ), true ) ) {
            $contains_math_checks = true;
        }
    }

    $is_admin = current_user_can( 'manage_options' );
    if ( $is_admin && ! $contains_math_checks ) {
        return apply_shortcodes( $content ); 
    }

    $dyn = true;

    if ( ! empty( $r ) ) {
        if ( ! $uid ) return ultralight_render_gateway_fallback_ui( $v, $content );
        $map = ultralight_get_part4_mapping_registry();

        foreach ( $r as $k => $val ) {
            $val = (string)$val; if ( $val === '' ) continue;
            $k   = strtolower( trim( $k ) ); 
            
            // OPERATOR TRANSPORT DECODER: Reverse placeholder token back to pure mathematical symbol
            $val = str_replace( 'lessthan_', '<', $val );
            $val = trim( $val );
            
            $is_eq = ( strpos( $val, '=' ) === 0 );
            $lt    = ( ! $is_eq && strpos( $val, '<' ) === 0 );
            
            if ( $is_eq || $lt ) { 
                $tgt = intval( substr( $val, 1 ) ); 
            } else { 
                $tgt = intval( $val ); 
            }

            $is_g = in_array( $k, $g, true );
            $act  = 0;

            if ( ! $is_g ) {
                // CORE RESOLVER OVERHAUL: Query raw live bbPress activity counters directly from DB hooks
                if ( $k === 'p' && function_exists( 'bbp_get_user_reply_count_raw' ) ) {
                    $act = intval( bbp_get_user_reply_count_raw( $uid ) );
                } 
                elseif ( $k === 't' && function_exists( 'bbp_get_user_topic_count_raw' ) ) {
                    $act = intval( bbp_get_user_topic_count_raw( $uid ) );
                } 
                elseif ( $k === 'k' ) {
                    $act = intval( get_user_meta( $uid, '_bbp_received_likes_count', true ) );
                } 
                else {
                    $db_k = $map[$k] ?? $k;
                    $scr  = get_user_meta( $uid, $db_k, true );
                    if ( $scr === '' ) $scr = get_user_meta( $uid, '_' . $db_k, true );
                    $act  = ($scr === '') ? 0 : intval( $scr );
                }
            }

            if ( $is_g ) {
                $passed = true;
            } elseif ( $is_eq ) { 
                $passed = ( $act === $tgt ); 
            } elseif ( $lt ) { 
                $passed = ( $act < $tgt ); 
            } else { 
                $passed = ( $act >= $tgt ); 
            }
            
            if ( ! $passed ) { $dyn = false; break; }
        }
    }

    // PRODUCTION SECURITY ENFORCEMENT LOOP: If validation checks fail, enforce fallback restriction layouts
    if ( ! $dyn ) {
        if ( $is_admin ) {
            // Admin Feedback Tracker: Lock the container box down securely, but render trace logs for validation
            return ultralight_render_gateway_fallback_ui( $v, $content ) . '<div class="admin-only-alert" style="background:#fff3cd; padding:8px; border-left:4px solid #ffc107; font-family:sans-serif; font-size:11px; color:#856404; clear:both; text-align:left; margin-top:5px;">⚠️ Admin Telemetry: Milestone Math Evaluation Failed (act: ' . $act . ' tgt: ' . $tgt . '). Content container locked securely.</div>';
        }
        return ultralight_render_gateway_fallback_ui( $v, $content );
    }

    if ( $is_admin && ! empty( $r ) ) {
        return apply_shortcodes( $content ) . '<div class="admin-only-alert" style="background:#d4edda; padding:8px; border-left:4px solid #28a745; font-family:sans-serif; font-size:11px; color:#155724; clear:both; text-align:left; margin-top:5px;">✅ Admin Telemetry: Milestone Math Passed (act: ' . $act . ' tgt: ' . $tgt . '). Content view unlocked.</div>';
    }

    return apply_shortcodes( $content );
}
/**
 * ============================================================================
 * ULTRALIGHT U_GATE (PART 4B OF 5) — FALLBACK INTERFACES & TELEMETRY TERMINAL
 * ============================================================================
 * Renders user interface fallbacks on layout validation failure states and
 * processes the live interactive telemetry box on your active frontend layout templates.
 * It sweeps user metadata, email details, and topographical origins on load.
 */

/**
 * Standard visual interface fallbacks rendering on layout validation failure states.
 */
function ultralight_render_gateway_fallback_ui( $v, $content ) {
    if ( $v === 'h' ) return '<!--Hidden-->';
    if ( $v === 'r' ) {
        $scrubbed = preg_replace( '/<a[^>]*class="[^"]*button[^"]*"[^>]*>.*?<\/a>/is', '', apply_shortcodes( $content ) );
        return $scrubbed . '<div class="teaser-notice" style="background:#fff3cd;padding:10px;margin:10px 0;font-size:13px;color:#856404;border-left:4px solid #ffc107;">🛡️ Teaser Mode: Restriction Active</div>';
    }
    return '<div class="private-notice" style="background:#fdfdfd;border-left:4px solid #ba2121;padding:12px;margin:12px 0;font-size:13px;color:#1d2327;">🔒 Private Content: Profile requirements not met.</div>';
}

/**
 * TELEMETRY AUDIT LOG CONSOLE FIELD ASSET LAYER
 * Reads the direct database rows out of your tables and prints telemetry values.
 */
function ultralight_render_user_profile_debug_stats() {
    if ( ! is_user_logged_in() ) {
        return '<div style="background:#fff3cd; padding:15px; border-left:4px solid #ffc107; font-family:monospace; font-size:13px; color:#856404;">🔍 DEBUG: Session is an Unregistered Guest (ID: 0)</div>';
    }
    
    $uid = get_current_user_id();
    
    // FETCH DIRECT FROM THE WP_USERS TABLE: Pull core account row columns
    $user_data = wp_get_current_user();
    $user_login_name = $user_data->user_login;
    $user_email_addr = $user_data->user_email;
    $user_registered = $user_data->user_registered;

    // ENVIRONMENT CONTEXT ENGINE: Calculate active template parameters dynamically
    $active_forum_id = 0;
    $active_topic_id = 0;

    if ( function_exists( 'bbp_get_forum_id' ) && bbp_get_forum_id() ) {
        $active_forum_id = bbp_get_forum_id();
    } 
    elseif ( function_exists( 'bbp_get_topic_forum_id' ) && bbp_get_topic_forum_id() ) {
        $active_forum_id = bbp_get_topic_forum_id();
    }

    if ( function_exists( 'bbp_get_topic_id' ) && bbp_get_topic_id() ) {
        $active_topic_id = bbp_get_topic_id();
    }

    // CASCADE SOURCE SCANNER: Climbs the topography tree to discover the exact layout file source node
    $rule_source_name = 'Global Master Fallback Terminal';
    $rule_source_id   = 'System Option Row';
    
    if ( $active_forum_id ) {
        // Tier 1 Local meta scan
        $local_check = get_post_meta( $active_forum_id, '_ultralight_custom_forum_shortcode', true );
        if ( ! empty( $local_check ) ) {
            $fetched_title    = get_post_field( 'post_title', $active_forum_id );
            $rule_source_name = ! empty( $fetched_title ) ? $fetched_title : 'Unnamed Board';
            $rule_source_id   = intval( $active_forum_id ) . ' [Local Board Editor Canvas]';
        } 
        // Tier 2 Directory branch climb
        elseif ( function_exists( 'bbp_get_forum_ancestors' ) ) {
            foreach ( bbp_get_forum_ancestors( $active_forum_id ) as $parent_id ) {
                $parent_check = get_post_meta( $parent_id, '_ultralight_custom_forum_shortcode', true );
                if ( ! empty( $parent_check ) ) {
                    $fetched_parent_title = get_post_field( 'post_title', $parent_id );
                    $rule_source_name     = ! empty( $fetched_parent_title ) ? $fetched_parent_title : 'Unnamed Parent Board';
                    $rule_source_id       = intval( $parent_id ) . ' [Inherited Ancestor Node]';
                    break; 
                }
            }
        }
    }

    // Fetch live bbPress counts out of functional parameters
    $replies = function_exists( 'bbp_get_user_reply_count_raw' ) ? bbp_get_user_reply_count_raw( $uid ) : 'missing';
    $topics  = function_exists( 'bbp_get_user_topic_count_raw' ) ? bbp_get_user_topic_count_raw( $uid ) : 'missing';
    $kudos   = get_user_meta( $uid, '_bbp_received_likes_count', true );
    
    $raw_replies_meta = get_user_meta( $uid, '_bbp_reply_count', true );
    $raw_topics_meta  = get_user_meta( $uid, '_bbp_topic_count', true );
    
    ob_start();
    ?>
    <div style="background:#222; color:#00ff00; padding:20px; font-family:monospace; font-size:13px; border-radius:4px; margin:20px 0; border:2px solid #00ff00; line-height:1.6; clear:both; text-align:left;">
        <strong style="color:#fff; display:block; border-bottom:1px dashed #00ff00; padding-bottom:5px; margin-bottom:10px;">🛡️ ULTRALIGHT DATA MATRIX AUDIT TERMINAL</strong>
        
        <strong style="color:#ffc107; display:block; margin-bottom:5px;">🌲 RULE SOURCE INHERITANCE CASCADE:</strong>
        <strong>Active Rule Origin Name:</strong> <span style="color:#fff; font-weight:bold; background:#111; padding:2px 6px; border:1px solid #444; border-radius:3px;"><?php echo esc_html( $rule_source_name ); ?></span><br>
        <strong>Active Rule Origin ID:</strong> <span style="color:#fff; font-weight:bold;"><?php echo esc_html( $rule_source_id ); ?></span><br>

        <strong style="color:#00bc8c; display:block; margin-top:10px; border-top:1px dashed #444; padding-top:5px; margin-bottom:5px;">📍 CURRENT ENVIRONMENT IDS:</strong>
        <strong>Contextual Forum ID:</strong> <span style="color:#fff; font-weight:bold;"><?php echo $active_forum_id ? intval( $active_forum_id ) : '0 (Global Index / Core Wrapper)'; ?></span><br>
        <strong>Contextual Topic ID:</strong> <span style="color:#fff; font-weight:bold;"><?php echo $active_topic_id ? intval( $active_topic_id ) : '0 (Viewing Forum Directory Index View)'; ?></span><br>

        <strong style="color:#17a2b8; display:block; margin-top:10px; border-top:1px dashed #444; padding-top:5px; margin-bottom:5px;">🗂️ CORE WP_USERS TABLE ROWS:</strong>
        <strong>Active User ID (ID column):</strong> <span style="color:#fff;"><?php echo intval( $uid ); ?></span><br>
        <strong>Account Username (user_login column):</strong> <span style="color:#fff;"><?php echo esc_html( $user_login_name ); ?></span><br>
        <strong>Profile Email (user_email column):</strong> <span style="color:#fff;"><?php echo esc_html( $user_email_addr ); ?></span><br>
        <strong>Join Timestamp (user_registered column):</strong> <span style="color:#fff;"><?php echo esc_html( $user_registered ); ?></span><br>
        
        <strong style="color:#aaa; display:block; margin-top:10px; border-top:1px dashed #444; padding-top:5px; margin-bottom:5px;">📊 bbPRESS LIVE USER METRICS:</strong>
        <strong>Mapped 'p' Value (bbp_get_user_reply_count_raw):</strong> <span style="color:#fff; font-weight:bold;"><?php echo esc_html( $replies ); ?></span><br>
        <strong>Mapped 't' Value (bbp_get_user_topic_count_raw):</strong> <span style="color:#fff; font-weight:bold;"><?php echo esc_html( $topics ); ?></span><br>
        <strong>Mapped 'k' Value (get_user_meta received likes):</strong> <span style="color:#fff; font-weight:bold;"><?php echo $kudos === '' ? '0 (Empty Row)' : esc_html( $kudos ); ?></span><br>
    </div>
    <?php
    return ob_get_clean();
}
/**
 * ============================================================================
 * ULTRALIGHT U_GATE (PART 5A OF 5) — SETTINGS RADAR WORKSPACE INJECTOR
 * ============================================================================
 * Registers the diagnostics tracking row onto the native bbPress options grid.
 * It processes form field submissions safely without disrupting the master save
 * handlers, preventing data loss inside the core global options rows.
 */

add_action( 'admin_init', 'ultralight_register_integrated_diagnostics_field' );

/**
 * Registers the diagnostics block directly onto the core bbPress settings row.
 */
function ultralight_register_integrated_diagnostics_field() {
    add_settings_field( 
        'ultralight_integrated_diagnostics_tracker', 
        'Architecture Dependency Radar', 
        'ultralight_render_integrated_diagnostics_workspace', 
        'bbpress', 
        'ultralight_global_section'
    );
}

/**
 * Renders the interactive topographical search utility inside the main Forum Settings page.
 */
function ultralight_render_integrated_diagnostics_workspace() {
    if ( ! current_user_can( 'manage_options' ) ) return;

    $search_query = isset( $_POST['ultralight_radar_search'] ) ? sanitize_text_field( $_POST['ultralight_radar_search'] ) : '';
    $selected_forum_id = 0;
    $search_results = array();

    if ( ! empty( $search_query ) && class_exists( 'bbPress' ) ) {
        if ( is_numeric( $search_query ) ) {
            $selected_forum_id = intval( $search_query );
        } else {
            global $wpdb;
            $search_results = $wpdb->get_results( $wpdb->prepare(
                "SELECT ID, post_title FROM {$wpdb->posts} 
                 WHERE post_type = %s AND post_title LIKE %s AND post_status = 'publish' 
                 LIMIT 5",
                bbp_get_forum_post_type(),
                '%' . $wpdb->esc_like( $search_query ) . '%'
            ) );
        }
    }

    if ( isset( $_POST['ultralight_radar_explicit_id'] ) ) {
        $selected_forum_id = intval( $_POST['ultralight_radar_explicit_id'] );
    }
    ?>
    <div class="ultralight-radar-wrap" style="background:#fff; padding:16px; border:1px solid #ccd0d4; border-radius:4px; max-width:800px; box-sizing:border-box;">
        <span style="font-weight:600; font-size:13px; color:#1d2327; display:block; margin-bottom:4px;">Topographical Dependency Cascade Tracker</span>
        <span class="description" style="display:block; margin-bottom:12px; font-size:11px; color:#646970;">Scan a specific forum node to trace its active permission rule maps down through the parent hierarchy trees.</span>
        
        <div style="display:flex; gap:8px; margin-bottom:12px;">
            <input type="text" name="ultralight_radar_search" id="ultralight_radar_search" value="<?php echo esc_attr( $search_query ); ?>" style="flex-grow:1; height:30px; font-size:13px;" placeholder="Type Forum Title or Board ID Number...">
            <button type="button" id="ultralight_trigger_radar_scan" class="button button-secondary" style="height:30px; font-size:12px;">🔍 Scan Node</button>
        </div>

        <?php if ( ! empty( $search_results ) ) : ?>
            <div style="background:#f6f7f7; padding:10px; border:1px solid #dcdcde; border-radius:4px; margin-bottom:12px; display:flex; align-items:center; justify-content:space-between; gap:10px;">
                <label for="ultralight_radar_explicit_id" style="font-size:11px; font-weight:600; color:#1d2327;">Multiple matches found:</label>
                <select name="ultralight_radar_explicit_id" id="ultralight_radar_explicit_id" style="font-size:12px; height:28px;">
                    <?php foreach ( $search_results as $res ) : ?>
                        <option value="<?php echo intval( $res->ID ); ?>" <?php selected($selected_forum_id, $res->ID); ?>><?php echo esc_html( $res->post_title ); ?> (ID: <?php echo intval( $res->ID ); ?>)</option>
                    <?php endforeach; ?>
                </select>
                <button type="button" id="ultralight_trigger_explicit_radar_scan" class="button button-secondary" style="height:28px; font-size:11px;">Analyze Target</button>
            </div>
        <?php endif; ?>

        <div id="ultralight_radar_terminal_output">
            <?php 
            if ( $selected_forum_id && function_exists( 'ultralight_execute_topographical_radar_trace' ) ) {
                ultralight_execute_topographical_radar_trace( $selected_forum_id );
            }
            ?>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        $('#ultralight_trigger_radar_scan, #ultralight_trigger_explicit_radar_scan').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            form.attr('action', window.location.href);
            form.attr('method', 'post');
            form.off('submit').submit();
        });
    });
    </script>
    <?php
}
/**
 * ============================================================================
 * ULTRALIGHT U_GATE (PART 5B OF 5) — CASCADING VISUAL RADAR TREE RENDERER
 * ============================================================================
 * Computes topographical data pathways across 3 separate tiers in real-time.
 * It tracks parent ancestral links, maps syntax vectors, highlights the current
 * effector ruleset, and displays output metrics using monospace log nodes.
 */

/**
 * Sweeps the database, traces ancestors, and outputs the live monospace dependency matrix logs.
 */
function ultralight_execute_topographical_radar_trace( $selected_forum_id ) {
    $forum_post = get_post( $selected_forum_id );
    if ( ! $forum_post || $forum_post->post_type !== bbp_get_forum_post_type() ) {
        echo '<div class="notice notice-error" style="margin:0;"><p>❌ Error: Target ID ' . intval( $selected_forum_id ) . ' is not an active bbPress Forum board instance.</p></div>';
        return;
    }
    ?>
    <h4 style="font-size: 13px; font-weight: 600; margin-top: 15px; margin-bottom: 10px;">Topographical Dependency Cascade Trace for: <span style="color:#2271b1;"><?php echo esc_html( $forum_post->post_title ); ?> (ID: <?php echo intval( $selected_forum_id ); ?>)</span></h4>
    
    <div style="display: flex; flex-direction: column; gap: 12px; background: #222; color: #fff; padding: 20px; font-family: monospace; border-radius: 4px; box-shadow: inset 0 2px 4px rgba(0,0,0,0.2); box-sizing:border-box;">
        <div style="color: #666; font-size: 11px; border-bottom: 1px solid #333; padding-bottom: 5px; margin-bottom: 5px;">⚡ LIVE ASCENDING TREE ANALYSIS RADAR SWEEP</div>

        <?php
        $step = 1;
        $active_override_found = false;
        
        // Tier 1 Check
        $local_code = get_post_meta( $selected_forum_id, '_ultralight_custom_forum_shortcode', true );
        $local_code = str_replace( 'lessthan_', '<', $local_code );
        $has_local = ! empty( $local_code );
        if ( $has_local ) { $active_override_found = true; }
        
        ultralight_print_diagnostics_node_row( $step++, 'TIER 1: TARGET SUBFORUM Meta Canvas', $forum_post->post_title, $selected_forum_id, $local_code, $has_local, $has_local );

        // Tier 2 Check
        if ( function_exists( 'bbp_get_forum_ancestors' ) ) {
            $ancestors = bbp_get_forum_ancestors( $selected_forum_id );
            if ( ! empty( $ancestors ) ) {
                foreach ( $ancestors as $parent_id ) {
                    $parent_post = get_post( $parent_id );
                    $parent_code = get_post_meta( $parent_id, '_ultralight_custom_forum_shortcode', true );
                    $parent_code = str_replace( 'lessthan_', '<', $parent_code );
                    $has_parent = ! empty( $parent_code );
                    
                    $is_active_effector = ( ! $active_override_found && $has_parent );
                    if ( $has_parent ) { $active_override_found = true; }

                    ultralight_print_diagnostics_node_row( $step++, 'TIER 2: ANCESTOR TREE Hierarchy Branch', $parent_post->post_title, $parent_id, $parent_code, $has_parent, $is_active_effector );
                }
            } else {
                echo '<div style="color:#666; padding-left: 20px; font-size:12px; margin-bottom:5px;">└─ 🌲 No higher parent forum elements registered in directory tree.</div>';
            }
        }

        // Tier 3 Check
        $global_code = get_option( 'ultralight_global_master_shortcode', '' );
        $global_code = str_replace( 'lessthan_', '<', $global_code );
        $has_global = ! empty( $global_code );
        $is_global_active = ( ! $active_override_found );
        
        ultralight_print_diagnostics_node_row( $step++, 'TIER 3: CENTRAL GLOBAL MASTER Fallback Anchor', 'Site-Wide Options Table', 'System Option', $global_code, $has_global, $is_global_active );
        ?>

        <div style="margin-top: 15px; border-top: 1px solid #333; padding-top: 15px; display: flex; align-items: center; justify-content: space-between; flex-wrap:wrap; gap:10px;">
            <strong>🚀 ACTIVE RUNTIME EFFECTOR GATE RULE:</strong>
            <?php
            $final_rule = get_transient( 'ultralight_forum_cache_' . $selected_forum_id );
            $final_rule = str_replace( 'lessthan_', '<', $final_rule );
            
            if ( empty( $final_rule ) ) {
                echo '<span style="color:#ff4444; font-weight:bold;">[🔓 UNPROTECTED ENVIRONMENT LOOP — OPEN BOARD]</span>';
            } else {
                echo '<span style="color:#00ff00; font-weight:bold; background:#111; padding:4px 8px; border:1px solid #00ff00; border-radius:2px;">' . esc_html( $final_rule ) . '</span>';
            }
            ?>
        </div>
    </div>
    <?php
}

/**
 * Monospace data block node row layout formatter.
 */
function ultralight_print_diagnostics_node_row( $step, $layer_label, $name, $id, $code, $has_contents, $is_active_effector ) {
    $color = $has_contents ? ($is_active_effector ? '#00ff00' : '#ffc107') : '#555';
    $status_text = $has_contents ? ($is_active_effector ? '⭐ ACTIVE EFFECTOR' : '⚠️ INHERITED OVERRIDE BLOCKED') : '⚪ EMPTY/PASS THROUGH';
    ?>
    <div style="border-left: 2px dashed <?php echo $is_active_effector ? '#00ff00' : '#444'; ?>; padding-left: 20px; margin-bottom: 5px; text-align:left;">
        <span style="color: #888;">[Node #<?php echo intval($step); ?>]</span> 
        <strong style="color: #fff;"><?php echo esc_html( $layer_label ); ?>:</strong> 
        <span style="color: #2271b1;"><?php echo esc_html( $name ); ?></span> 
        <span style="color: #666;">(Ref: <?php echo esc_html($id); ?>)</span>
        
        <div style="background: #151515; padding: 10px; margin-top: 5px; border-radius: 3px; border: 1px solid <?php echo $is_active_effector ? '#333' : '#222'; ?>;">
            <div style="display: flex; justify-content: space-between; font-size: 11px; margin-bottom: 5px;">
                <span style="color: <?php echo $color; ?>; font-weight: bold;"><?php echo $status_text; ?></span>
                <span style="color: #444;">Syntax Schema Vector Matrix</span>
            </div>
            <code style="color: <?php echo $has_contents ? '#fff' : '#444'; ?>; font-size: 12px; display: block; word-break: break-all;">
                <?php echo $has_contents ? esc_html( $code ) : '[No parameters assigned to this node layer]'; ?>
            </code>
        </div>
    </div>
    <?php
}


//end
