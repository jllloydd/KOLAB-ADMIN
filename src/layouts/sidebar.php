<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="../assets/img/logo/kolab.avif" alt="" height="120">
            </span>
            <span class="logo-lg">
                <img src="../assets/img/logo/kolab.avif" alt="" height="120">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="../assets/img/logo/kolab.avif" alt="" height="120">
            </span>
            <span class="logo-lg">
                <img src="../assets/img/logo/kolab.avif" alt="" height="120">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span class="item-active"><?=$lang['t-dashboards']?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.php" class="nav-link"><?=$lang['t-analytics']?></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="dashboard-crm.php" class="nav-link"><?=$lang['t-crm']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link"><?=$lang['t-ecommerce']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto.php" class="nav-link"><?=$lang['t-crypto']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-projects.php" class="nav-link"><?=$lang['t-projects']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-nft.php" class="nav-link" data-key="t-nft"> <?=$lang['t-nft']?></a>
                            </li> -->
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span><?=$lang['t-apps']?></span>
                    </a>
                    <!-- <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar.php" class="nav-link"><?=$lang['t-calendar']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat.php" class="nav-link"><?=$lang['t-chat']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                    Email
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox.php" class="nav-link"><?=$lang['t-mailbox']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="sidebaremailTemplates" data-key="t-email-templates">
                                                <?=$lang['t-email-templates']?>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-email-basic.php" class="nav-link"
                                                            data-key="t-basic-action"> <?=$lang['t-basic-action']?> </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-email-ecommerce.php" class="nav-link"
                                                            data-key="t-ecommerce-action"> <?=$lang['t-ecommerce-action']?> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEcommerce"><?=$lang['t-ecommerce']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.php"
                                                class="nav-link"><?=$lang['t-products']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.php"
                                                class="nav-link"><?=$lang['t-product-Details']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.php"
                                                class="nav-link"><?=$lang['t-create-product']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-orders.php"
                                                class="nav-link"><?=$lang['t-orders']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-order-details.php"
                                                class="nav-link"><?=$lang['t-order-details']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-customers.php"
                                                class="nav-link"><?=$lang['t-customers']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-cart.php"
                                                class="nav-link"><?=$lang['t-shopping-cart']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-checkout.php"
                                                class="nav-link"><?=$lang['t-checkout']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-sellers.php"
                                                class="nav-link"><?=$lang['t-sellers']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-seller-details.php"
                                                class="nav-link"><?=$lang['t-sellers-details']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects"><?=$lang['t-projects']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-projects-list.php" class="nav-link"><?=$lang['t-list']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-overview.php"
                                                class="nav-link"><?=$lang['t-overview']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-create.php"
                                                class="nav-link"><?=$lang['t-create-project']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTasks"><?=$lang['t-tasks']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tasks-kanban.php"
                                                class="nav-link"><?=$lang['t-kanbanboard']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-list-view.php"
                                                class="nav-link"><?=$lang['t-list-view']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-details.php"
                                                class="nav-link"><?=$lang['t-task-details']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCRM"><?=$lang['t-crm']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCRM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crm-contacts.php"
                                                class="nav-link"><?=$lang['t-contacts']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-companies.php"
                                                class="nav-link"><?=$lang['t-companies']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-deals.php" class="nav-link"><?=$lang['t-deals']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-leads.php" class="nav-link"><?=$lang['t-leads']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto"><?=$lang['t-crypto']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCrypto">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crypto-transactions.php"
                                                class="nav-link"><?=$lang['t-transactions']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-buy-sell.php"
                                                class="nav-link"><?=$lang['t-buy-sell']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-orders.php" class="nav-link"><?=$lang['t-orders']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-wallet.php"
                                                class="nav-link"><?=$lang['t-my-wallet']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-ico.php" class="nav-link"><?=$lang['t-ico-list']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-kyc.php"
                                                class="nav-link"><?=$lang['t-kyc-application']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarInvoices"><?=$lang['t-invoices']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-invoices-list.php"
                                                class="nav-link"><?=$lang['t-list-view']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-details.php"
                                                class="nav-link"><?=$lang['t-details']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-create.php"
                                                class="nav-link"><?=$lang['t-create-invoice']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTickets"><?=$lang['t-supprt-tickets']?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTickets">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tickets-list.php"
                                                class="nav-link"><?=$lang['t-list-view']?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tickets-details.php"
                                                class="nav-link"><?=$lang['t-ticket-details']?></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace">
                                    <?=$lang['t-nft-marketplace']?> 
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarnft">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-nft-marketplace.php" class="nav-link"
                                                data-key="t-marketplace"> <?=$lang['t-marketplace']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-explore.php" class="nav-link" data-key="t-explore-now">
                                            <?=$lang['t-explore-now']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-auction.php" class="nav-link" data-key="t-live-auction">
                                            <?=$lang['t-live-auction']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-item-details.php" class="nav-link"
                                                data-key="t-item-details"> <?=$lang['t-item-details']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-collections.php" class="nav-link"
                                                data-key="t-collections"> <?=$lang['t-collections']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-creators.php" class="nav-link" data-key="t-creators">
                                            <?=$lang['t-creators']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-ranking.php" class="nav-link" data-key="t-ranking">
                                            <?=$lang['t-ranking']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-wallet.php" class="nav-link" data-key="t-wallet-connect">
                                            <?=$lang['t-wallet-connect']?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-create.php" class="nav-link" data-key="t-create-nft">
                                            <?=$lang['t-create-nft']?> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-file-manager.php" class="nav-link"> <span data-key="t-file-manager"><?=$lang['t-file-manager']?></span> <span class="badge badge-pill bg-danger" data-key="t-new"><?=$lang['t-new']?></span></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-todo.php" class="nav-link"> <span data-key="t-to-do"><?=$lang['t-to-do']?></span> <span class="badge badge-pill bg-danger" data-key="t-new"><?=$lang['t-new']?></span></a>
                            </li>
                        </ul>
                    </div> -->
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span><?=$lang['t-layouts']?></span>
                    </a>
                    <!-- <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.php" target="_blank"
                                    class="nav-link"><?=$lang['t-horizontal']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.php" target="_blank"
                                    class="nav-link"><?=$lang['t-detached']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.php" target="_blank"
                                    class="nav-link"><?=$lang['t-two-column']?></a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.php" target="_blank"
                                    class="nav-link"><?=$lang['t-hovered']?></a>
                            </li>
                        </ul>
                    </div> -->
                </li> <!-- end Dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>