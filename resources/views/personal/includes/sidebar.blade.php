
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item mb-3">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                        Комментарии
                    </p>
                </a>
            </li>


        </ul>
    </div>
</aside>
