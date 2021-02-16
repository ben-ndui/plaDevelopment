<?php

    $app = App::getInstance();
    $usersTable = $app->getTable('User');
    $projectsTable = $app->getTable('Project')->all();
    $servicesTable = $app->getTable('Services')->all();

    $currentUser = $usersTable->findWithName($_SESSION['sname']);

    $totalProjects = count($projectsTable);
    $totalServices = count($servicesTable);
    $totalPage = $totalServices + $totalProjects;

    //var_dump($totalProjects);

?>

<?php include ROOT . '/pages/templates/partials/headers/dashboard-header.php'; ?>

<div class="grid">
    <header class="header">
        <i class="fas fa-bars header__menu"></i>
        <div class="header__search">
            <input class="header__input" placeholder="Search..." />
        </div>
        <div class="header__avatar" style="background-image: url(<?= $currentUser->imageURL; ?>);">
            <div class="dropdown">
                <ul class="dropdown__list">
                    <li class="dropdown__list-item">
                        <span class="dropdown__icon"><i class="far fa-user"></i></span>
                        <span class="dropdown__title">my profile</span>
                    </li>
                    <li class="dropdown__list-item">
                        <span class="dropdown__icon"><i class="fas fa-clipboard-list"></i></span>
                        <span class="dropdown__title">my account</span>
                    </li>
                    <li class="dropdown__list-item">
                        <span class="dropdown__icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="dropdown__title">log out</span>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <aside class="sidenav">
        <div class="sidenav__brand">
            <i class="fas fa-feather-alt sidenav__brand-icon"></i>
            <a class="sidenav__brand-link" href="/">PLA<span class="text-light"> Development</span></a>
            <i class="fas fa-times sidenav__brand-close"></i>
        </div>
        <div class="sidenav__profile">
            <div class="sidenav__profile-avatar" style="background-image: url(<?= $currentUser->imageURL; ?>);"></div>
            <div class="sidenav__profile-title text-light"><?= $currentUser->username; ?></div>
        </div>
        <div class="row row--align-v-center row--align-h-center">
            <ul class="navList">
                <li class="navList__heading">Apparances<i class="far fa-file-alt"></i></li>
                <li>
                    <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                        <span class="navList__subheading-title">Les Pages</span>
                    </div>
                    <ul class="subList subList--hidden">
                        <li class="subList__item">medical</li>
                        <li class="subList__item">vision</li>
                        <li class="subList__item">dental</li>
                    </ul>
                </li>
                <li>
                    <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-plane-departure"></i></span>
                        <span class="navList__subheading-title">travel</span>
                    </div>
                    <ul class="subList subList--hidden">
                        <li class="subList__item">domestic</li>
                        <li class="subList__item">foreign</li>
                        <li class="subList__item">misc</li>
                    </ul>
                </li>
                <li>
                    <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="far fa-angry"></i></span>
                        <span class="navList__subheading-title">taxes</span>
                    </div>
                    <ul class="subList subList--hidden">
                        <li class="subList__item">current</li>
                        <li class="subList__item">archives</li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main">
        <div class="main-header">
            <div class="main-header__intro-wrapper">
                <div class="main-header__welcome">
                    <div class="main-header__welcome-title text-light">Bonjour, <strong><?= $currentUser->username;?></strong></div>
                    <div class="main-header__welcome-subtitle text-light">Vous êtes dans la partie administration de votre site</div>
                </div>
                <div class="quickview">
                    <div class="quickview__item">
                        <div class="quickview__item-total"><?= $totalPage; ?></div>
                        <div class="quickview__item-description">
                            <i class="far fa-calendar-alt"></i>
                            <span class="text-light">Pages en tout</span>
                        </div>
                    </div>
                    <div class="quickview__item">
                        <div class="quickview__item-total"><?= $totalProjects; ?></div>
                        <div class="quickview__item-description">
                            <i class="far fa-comment"></i>
                            <span class="text-light">Projets en tout</span>
                        </div>
                    </div>
                    <div class="quickview__item">
                        <div class="quickview__item-total"><?= $totalServices; ?></div>
                        <div class="quickview__item-description">
                            <i class="far fa-comment"></i>
                            <span class="text-light">Services en tout</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="main-overview">
            <a href="?page=project.param">
                <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--document">
                        <i class="far fa-file-alt"></i>
                    </div>
                    <div class="overviewCard-description">
                        <h3 class="overviewCard-title text-light">Modifier / Céer une <strong>Page projet</strong></h3>
                    </div>
                </div>
            </a>

            <a href="?page=service.param">
                <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                        <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="overviewCard-description">
                        <h3 class="overviewCard-title text-light">Modifier / Créer une <strong>Page services</strong></h3>
                    </div>
                </div>
            </a>

            <a href="?page=home.param">
                <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                        <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="overviewCard-description">
                        <h3 class="overviewCard-title text-light">Modifier la <strong>Page d'accueil</strong></h3>
                    </div>
                </div>
            </a>

            <a href="?page=reference.param">
                <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                        <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="overviewCard-description">
                        <h3 class="overviewCard-title text-light">Modifier la <strong>Page Références</strong></h3>
                    </div>
                </div>
            </a>

            <a href="?page=realisation.param">
                <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                        <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="overviewCard-description">
                        <h3 class="overviewCard-title text-light">Modifier la <strong>Page Réalisations</strong></h3>
                    </div>
                </div>
            </a>

            <a href="?page=contact.param">
                <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                        <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="overviewCard-description">
                        <h3 class="overviewCard-title text-light">Modifier la <strong>Page Contacts</strong></h3>
                    </div>
                </div>
            </a>

        </div> <!-- /.main__overview -->
        <div class="main__cards">
            <div class="card">
                <div class="card__header">
                    <div class="card__header-title text-light">Vos <strong>Dernières modifications</strong>
                        <a href="#" class="card__header-link text-bold">(Tout voir)</a>
                    </div>
                    <div class="settings">
                        <div class="settings__block"><i class="fas fa-edit"></i></div>
                        <div class="settings__block"><i class="fas fa-cog"></i></div>
                    </div>
                </div>
                <div class="card__main">
                    <div class="card__row">
                        <div class="card__icon"><i class="fas fa-gift"></i></div>
                        <div class="card__time">
                            <div>today</div>
                        </div>
                        <div class="card__detail">
                            <div class="card__source text-bold">Jonathan G</div>
                            <div class="card__description">Going away party at 8:30pm. Bring a friend!</div>
                            <div class="card__note">1404 Gibson St</div>
                        </div>
                    </div>
                    <div class="card__row">
                        <div class="card__icon"><i class="fas fa-plane"></i></div>
                        <div class="card__time">
                            <div>Tuesday</div>
                        </div>
                        <div class="card__detail">
                            <div class="card__source text-bold">Matthew H</div>
                            <div class="card__description">Flying to Bora Bora at 4:30pm</div>
                            <div class="card__note">Delta, Gate 27B</div>
                        </div>
                    </div>
                    <div class="card__row">
                        <div class="card__icon"><i class="fas fa-book"></i></div>
                        <div class="card__time">
                            <div>Thursday</div>
                        </div>
                        <div class="card__detail">
                            <div class="card__source text-bold">National Institute of Science</div>
                            <div class="card__description">Join the institute for an in-depth look at Stephen Hawking</div>
                            <div class="card__note">7:30pm, Carnegie Center for Science</div>
                        </div>
                    </div>
                    <div class="card__row">
                        <div class="card__icon"><i class="fas fa-heart"></i></div>
                        <div class="card__time">
                            <div>Friday</div>
                        </div>
                        <div class="card__detail">
                            <div class="card__source text-bold">24th Annual Heart Ball</div>
                            <div class="card__description">Join us and contribute to your favorite local charity.</div>
                            <div class="card__note">6:45pm, Austin Convention Ctr</div>
                        </div>
                    </div>
                    <div class="card__row">
                        <div class="card__icon"><i class="fas fa-heart"></i></div>
                        <div class="card__time">
                            <div>Saturday</div>
                        </div>
                        <div class="card__detail">
                            <div class="card__source text-bold">Little Rock Air Show</div>
                            <div class="card__description">See the Blue Angels fly with roaring thunder</div>
                            <div class="card__note">11:00pm, Jacksonville Airforce Base</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <div class="card__header-title text-light">Vos <strong>Pages</strong>
                        <a href="#" class="card__header-link text-bold">(Tout voir - clique ici)</a>
                    </div>
                    <div class="settings">
                        <div class="settings__block"><i class="fas fa-edit"></i></div>
                        <div class="settings__block"><i class="fas fa-cog"></i></div>
                    </div>
                </div>
                <div class="card">
                    <div class="documents">
                        <?php foreach ($projectsTable as $project):?>
                            <div class="document">

                                <div class="document__img"></div>
                                <div class="document__title"><?= $project->title; ?></div>
                                <div class="document__date"><?= $project->date; ?></div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="card card--finance">
                <div class="card__header">
                    <div class="card__header-title text-light">Vos <strong>Services</strong>
                        <a href="#" class="card__header-link text-bold">(Tout voir)</a>
                    </div>
                    <div class="settings">
                        <div class="settings__block"><i class="fas fa-edit"></i></div>
                        <div class="settings__block"><i class="fas fa-cog"></i></div>
                    </div>
                </div>
                <div id="chartdiv"></div>
            </div>
        </div> <!-- /.main-cards -->
    </main>

    <footer class="footer">
        <p><span class="footer__copyright">&copy;</span> PLA Development 2021</p>
        <p><i class="fas fa-heart footer__icon"></i> by <a href="https://www.linkedin.com/in/matt-holland/" target="_blank" class="footer__signature">Smooth & Design</a></p>
    </footer>
</div>