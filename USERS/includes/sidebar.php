<?php
// User-facing sidebar, modeled after the admin sidebar
$assetSidebar = '../ADMIN/sidebar/';
$current = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-brand">
            <div class="brand-logo">
                <img src="<?= $assetSidebar ?>images/logo.svg" alt="Logo" class="logo-img">
            </div>
        </div>
    </div>
    
    <div class="sidebar-content">
        <nav class="sidebar-nav">
            <div class="sidebar-section">
                <h3 class="sidebar-section-title">User</h3>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a href="home.php" class="sidebar-link <?= $current === 'home.php' ? 'active' : '' ?>">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="alerts.php" class="sidebar-link <?= $current === 'alerts.php' ? 'active' : '' ?>">
                            <i class="fas fa-bell"></i>
                            <span>Alerts</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="profile.php" class="sidebar-link <?= $current === 'profile.php' ? 'active' : '' ?>">
                            <i class="fas fa-user-cog"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="support.php" class="sidebar-link <?= $current === 'support.php' ? 'active' : '' ?>">
                            <i class="fas fa-life-ring"></i>
                            <span>Support</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-section">
                <h3 class="sidebar-section-title">Emergency</h3>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a href="emergency-call.php" class="sidebar-link <?= $current === 'emergency-call.php' ? 'active' : '' ?>">
                            <i class="fas fa-phone-alt"></i>
                            <span>Emergency Call</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
        sidebar.classList.toggle('sidebar-open');
        sidebarOverlay.classList.toggle('sidebar-overlay-open');
        document.body.classList.toggle('sidebar-open');
    }

    function closeSidebar() {
        sidebar.classList.remove('sidebar-open');
        sidebarOverlay.classList.remove('sidebar-overlay-open');
        document.body.classList.remove('sidebar-open');
    }

    window.sidebarToggle = toggleSidebar;
    window.sidebarClose = closeSidebar;

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sidebar.classList.contains('sidebar-open')) {
            closeSidebar();
        }
    });
});
</script>

