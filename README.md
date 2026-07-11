# Ultralight-U_Gate
Ultralight U_Gate: A microsecond-fast dynamic content gating engine for WordPress and bbPress forums. Renders nested html layouts or nested shortcodes on the fly based on live user parameters (replies, topics, kudos, database keys). Features 3-tier parent tree cache cascades. GPLv2+.

[![License: GPL v2+](https://shields.io)](https://gnu.org)
[![Version](https://shields.io)]()
[![Author](https://shields.io)](https://tinfoilwho.com)
[![Platform](https://shields.io)]()

A high-dexterity, zero-bloat Configuration-as-Code (CaC) content gating engine and database protector for high-traffic forums [u_gate].

Developed by **Tin Who** • [tinfoilwho.com](https://tinfoilwho.com)

---

## 🎲 The Design Philosophy: The High-Dexterity Rogue

Standard membership plugins act like a knight in heavy iron plate armor. They spawn clunky custom database tables, load massive background queries, and run slow calculations across millions of rows on every single page load—bleeding server memory and slowing down page speeds.

**Ultralight U_Gate operates like an elite D&D Rogue.** It strips off the heavy, resource-heavy armor and uses absolute **Systems Minimalism** [u_gate]. The architectural strategy is locked into three clear execution rules:

* **Rule 1: Native String Anchoring** — Attaches permission rules natively to individual forum nodes as light metadata text strings [u_gate].
* **Rule 2: Automated Upstream Climbs** — Runs an automated ascending cache loop that climbs category trees on demand [u_gate].
* **Rule 3: Heartbeat Sync** — Queries pre-calculated native core statistics directly from application memory registers to execute complex mathematical inequality loops in microseconds [u_gate].

By utilizing this lightweight profile, it completely bypasses slow database overhead, ensuring your forum scales seamlessly.

---
## ⚡ Architectural Efficiency Analysis

Comparing what happens to a server's CPU and RAM registers when a user requests a page reveals U_Gate's efficiency as a structural baseline:

### 🏋️‍♂️ Relational Membership Architecture (High I/O Overhead)
1. **Relational Database Table Bloat:** Issues complex SQL queries across separate custom tables to track user mappings, evaluate permission matrices, and scan configurations. As traffic scales, these heavy relational indexing steps add significant I/O disk latency.
2. **Server-Side Deserialization Loops:** Retrieves large multi-dimensional arrays or serialized string fields into memory, forcing PHP to constantly loop through data payloads and unpack properties to find restrictions mapping to the active board canvas.
3. **Redundant Processing Cycles:** Executes un-indexed background calculations or resource-heavy `COUNT(*)` database queries across historical rows simply to calculate core account milestones on every single page load.

### ⚡ Alphanumeric Transient Architecture (In-Memory Processing)
1. **Zero Database Table Bloat:** Completely rejects the creation of separate custom tables. The engine targets and interprets a localized, singular text string attached directly to the specific forum node or central site option field currently being rendered.
2. **The Transient Memory Bypass:** Resolves the hierarchy directory map exactly *once* instead of forcing MySQL to crawl up structural parent branches on every page request. It locks that string into a **12-hour WordPress Transient Cache (`get_transient`)**, pulling data straight out of memory registers on subsequent clicks.
3. **Pre-Calculated Ingestion:** The CPU completely skips resource-heavy data calculations. It references bbPress's pre-calculated tally integers (`bbp_get_user_reply_count_raw`) and evaluates them against firewall-safe `min:` or `max:` parameters. It supports pinpoint multi-ID list filtering (e.g., `forum="4104,4452"`) using lightweight in-memory array comparisons (`in_array()`).

---

## ⚡ The 4 Simple Core Features

### 1. Pure Alphanumeric Logic Gateway
Traditional mathematical symbols (like `<`) trigger strict website firewalls and security filters, resulting in frustrating "403 Forbidden" errors. Ultralight U_Gate completely eliminates raw symbols and fragile JavaScript workarounds by using pure alphanumeric keywords like `min:` and `max:`. This clean text layout passes natively through server-side security systems and utilizes strict WordPress sanitisation pipelines (`sanitize_textarea_field`) to seek to immunise your input fields against Cross-Site Scripting (XSS) vulnerabilities.

### 2. Three-Tier Parent Tree Cache Cascades
Instead of managing a giant, messy central global master list table, your engine checks rules down 3 quick steps:
* **Tier 1:** Local Subforum Editor Box
* **Tier 2:** Climbs upstream to check Parent Category Nodes
* **Tier 3:** Central Global Fallback Box
The engine calculates this inheritance tree **exactly once** and locks the result into a microsecond-fast **12-hour Transient Cache Window**, protecting server RAM. The cache is automatically evacuated and refreshed the exact millisecond an administrator updates any ruleset or global box option.

### 3. Native Core Statistic & Multi-ID Location Fencing
Standard database user tables do not write member post counts live. Your engine completely overrides static meta lookups to query bbPress's internal, pre-calculated raw live database counters (`bbp_get_user_reply_count_raw`) instantly on page load. Furthermore, it supports pinpoint context filtering for single or multiple comma-separated `forum` and `topic` ID strings, offering surgical bulk access and layout block controls with zero database bloat.

### 4. Monospace Frontend Telemetry Terminal
A beautiful, frontal neon dashboard that prints out live system tracking diagnostics directly on the page view—completely gated behind server-side administrator permission checks. It instantly displays contextual forum IDs, topic IDs, raw database stats, and flags the exact parent board providing the active ruleset. If an administrator is testing layout structures, it appends real-time evaluation logs showing precisely why a milestone validation check passed or failed.


---

## 🚀 Practical Copy-Paste Examples

Drop these shortcode blocks directly into individual board editor windows or use them inside the central **Global Master Flow Sheet Box** under `Settings > Forums`:

### Example A: The Public Guest Warning Box
Hides premium discussion loops entirely from unauthenticated public visitors and renders a safe login notice banner. The box vanishes cleanly the exact millisecond a user registers.
```text
[u_gate l="guest" v="h"]
   <div style="background:#f0f7ff; border-left:4px solid #007cba; padding:15px; border-radius:4px;">
      <h4>👋 Premium Discussion Locked</h4>
      <p>Please log in or create a community account to unlock this board's threads.</p>
   </div>
[/u_gate]
```

### Example B: The Nested Forum Milestone Gate
Hides or displays nested HTML structures or nested shortcodes on the fly based on live user parameters [u_gate]. This example restricts access to registered users (`!guest`), requires a minimum score of 10 forum replies (`p="10"`), hides content on failure (`v="h"`), and hard-locks out banned groups [u_gate].
```text
[u_gate l="!guest,!banned" p="10" v="h"]
   <div class="unlocked-tier">
      <h3>🏆 Veteran Member Lounge Unlocked</h3>
      <p>Welcome! This nested layout area displays exclusively for users with 10+ replies.</p>
      [bbp-single-forum id="4104"]
   </div>
[/u_gate]
```

### Example C: The Custom Meta Column Filter
Queries any specific raw column key inside your user meta database tables. This example checks a custom database parameter row for a score less than 50 (`your_custom_meta_key="<50"`) and falls back to a restricted teaser layout mode (`v="r"`).
```text
[u_gate your_custom_meta_key="max:50" v="r"]
   <p>This premium content downloads section is locked until your profile points balance matures.</p>
[/u_gate]
```

---

## 📊 Live Verification Telemetry Log Stream

When the administrative audit terminal switch is checked, the engine prints structured system records onto your front-end layouts:

```text
🛡️ ULTRALIGHT DATA MATRIX AUDIT TERMINAL
🌲 RULE SOURCE INHERITANCE CASCADE:
Active Rule Origin Name: Global Master Fallback Terminal
Active Rule Origin ID: System Option Row

📍 CURRENT ENVIRONMENT IDS:
Contextual Forum ID: 4104
Contextual Topic ID: 4545

🗂️ CORE WP_USERS TABLE ROWS:
Active User ID (ID column): 13
Account Username (user_login column): Tin Who
Profile Email (user_email column): tinwho@tinfoilwho.com
Join Timestamp (user_registered column): 2022-12-13 06:01:28

📊 bbPRESS LIVE USER METRICS:
Mapped 'p' Value (bbp_get_user_reply_count_raw): 0
Mapped 't' Value (bbp_get_user_topic_count_raw): 2
Mapped 'k' Value (get_user_meta received likes): 0 (Empty Row)

✅ Admin Telemetry: Milestone Math Passed (act: 2 tgt: 1). Content view unlocked.
```


## ☕ Voluntary Support
tinfoilwho.com
