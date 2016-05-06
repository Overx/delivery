<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-header-controls">
            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar">
                <i class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30">
                <a href="{{ route('admin.home') }}" class="detailed">
                    <span class="title">Dashboard</span>
                    <!--<span class="details">Painel Administrativo</span>-->
                </a>
                <span class="{{ \LineXTI\Helpers\Core::Ativate("bg-success",['admin']) }} icon-thumbnail"><i class="pg-home"></i></span>
            </li>
            <li class="">
                <a href="{{ route('admin.orders') }}"><span class="title">Pedidos</span></a>
                <span class="{{ \LineXTI\Helpers\Core::Ativate("bg-success",['admin/orders', 'admin/orders/create']) || Request::is('admin/products/edit/*') ? 'bg-success' : '' }} icon-thumbnail"><i class="pg-shopping_cart"></i></span>
            </li>
            <li class="">
                <a href="{{ route('admin.products') }}"><span class="title">Produtos</span></a>
                <span class="{{ \LineXTI\Helpers\Core::Ativate("bg-success",['admin/products', 'admin/products/create']) || Request::is('admin/products/edit/*') ? 'bg-success' : '' }} icon-thumbnail"><i class="pg-ordered_list"></i></span>
            </li>
            <li class="">
                <a href="{{ route('admin.clients') }}"><span class="title">Clientes</span></a>
                <span class="{{ \LineXTI\Helpers\Core::Ativate("bg-success",['admin/clients', 'admin/clients/create']) || Request::is('admin/clients/edit/*') ? 'bg-success' : '' }} icon-thumbnail"><i class="fa fa-users"></i></span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>