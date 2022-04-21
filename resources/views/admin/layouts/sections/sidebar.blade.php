<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('img/admin/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ $user->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Поиск" aria-label="Поиск">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{ route('admin.agreements.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Договора
                    </p>
                </a>
            </li>



            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Недвижимость
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p style="font-weight: bold;">
                                Объекты
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.index') }}" class="nav-link">
                                    <p>Все объекты недвижимости</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.create') }}" class="nav-link">
                                    <p>Добавить объект недвижимости</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Парковка
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.parking.index') }}" class="nav-link">
                                    <p>Все варианты парковки</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.parking.create') }}" class="nav-link">
                                    <p>Добавить вариант парковки</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Санузел
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.bathrooms.index') }}" class="nav-link">
                                    <p>Все варианты санузлов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.bathrooms.create') }}" class="nav-link">
                                    <p>Добавить вариант санузла</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Покрытие пола
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.floor-coverings.index') }}" class="nav-link">
                                    <p>Все варианты покрытия полов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.floor-coverings.create') }}" class="nav-link">
                                    <p>Добавить вариант покрытия пола</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Продажа
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.sell-variants.index') }}" class="nav-link">
                                    <p>Все варианты продажи</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.sell-variants.create') }}" class="nav-link">
                                    <p>Добавить вариант продажи</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Ремонт
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.conditions.index') }}" class="nav-link">
                                    <p>Все варианты ремонта</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.conditions.create') }}" class="nav-link">
                                    <p>Добавить вариант ремонта</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Мебель
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.furniture.index') }}" class="nav-link">
                                    <p>Все варианты мебели</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.furniture.create') }}" class="nav-link">
                                    <p>Добавить вариант мебели</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Материал стен
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.wall-material.index') }}" class="nav-link">
                                    <p>Все материалы стен</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.wall-material.create') }}" class="nav-link">
                                    <p>Добавить материал стен</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Отопление
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.heating.index') }}" class="nav-link">
                                    <p>Все варианты отопления</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.heating.create') }}" class="nav-link">
                                    <p>Добавить вариант отопления</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Канализация
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.sewage.index') }}" class="nav-link">
                                    <p>Все варианты канализации</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.sewage.create') }}" class="nav-link">
                                    <p>Добавить вариант канализации</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Статус объекта
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.status.index') }}" class="nav-link">
                                    <p>Все статусы</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.status.create') }}" class="nav-link">
                                    <p>Добавить статус</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Расположение
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.locations.index') }}" class="nav-link">
                                    <p>Все варианты расположения</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.locations.create') }}" class="nav-link">
                                    <p>Добавить вариант расположения</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Цели
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.purposes.index') }}" class="nav-link">
                                    <p>Все цели объектов недвижимости</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.estates.purposes.create') }}" class="nav-link">
                                    <p>Добавить цель</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Районы
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.districts.index') }}" class="nav-link">
                            <p>Все районы</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.districts.create') }}" class="nav-link">
                            <p>Добавить район</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Города
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.cities.index') }}" class="nav-link">
                            <p>Все города</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.cities.create') }}" class="nav-link">
                            <p>Добавить город</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Пользователи
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <p>Все пользователи</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.create') }}" class="nav-link">
                            <p>Добавить пользователя</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">Выйти</a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
