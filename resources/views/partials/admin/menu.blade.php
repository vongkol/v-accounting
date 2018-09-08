@stack('menu_start')

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ setting('general.company_logo') ? Storage::url(setting('general.company_logo')) : asset('public/img/company.png') }}" class="img-circle" alt="@setting('general.company_name')">
            </div>
            <div class="pull-left info">
                <p>{{ str_limit(setting('general.company_name'), 22) }}</p>
                @permission('read-common-companies')
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> &nbsp;{{ trans('general.switch') }}</a>
                <ul class="dropdown-menu">
                    @foreach($companies as $com)
                    <li><a href="{{ url('common/companies/'. $com->id .'/set') }}">{{ str_limit($com->company_name, 18) }}</a></li>
                    @endforeach
                    @permission('update-common-companies')
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('common/companies') }}">{{ trans('companies.manage') }}</a></li>
                    @endpermission
                </ul>
                @endpermission
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" id="form-search" class="sidebar-form">
            <div id="search" class="input-group">
                <input type="text" name="search" value="<?php //echo $search; ?>" id="input-search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu tree" data-widget="tree">
            <li id="menu_dashboard">
                <a href="{{url('/')}}"><i class="fa fa-dashboard text-primary"></i> {{trans('general.dashboard')}}</a>
            </li>
            <li id="menu_item">
                <a href="{{url('/common/items')}}"><i class="fa fa-cubes text-primary"></i>{{trans('general.items')}}</a>
            </li>
            <li class="treeview" id="menu_income">
                <a href="#">
                    <i class="fa fa-money text-primary"></i> Incomes
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_invoice">
                        <a href="{{url('/incomes/invoices')}}"><i class="fa fa-angle-double-right"></i> Invoices</a>
                    </li>
                    <li id="menu_revenue">
                        <a href="{{url('/incomes/revenues')}}"><i class="fa fa-angle-double-right"></i> Revenues</a>
                    </li>
                    <li id="menu_customer">
                        <a href="{{url('/incomes/customers')}}"><i class="fa fa-angle-double-right"></i> Customers</a>
                    </li>
            
                </ul>
            </li>
            <li class="treeview" id="menu_expense">
                <a href="#">
                    <i class="fa fa-shopping-cart text-primary"></i> Expenses
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_bill">
                        <a href="{{url('/expenses/bills')}}"><i class="fa fa-angle-double-right"></i> Bills</a>
                    </li>
                    <li id="menu_payment">
                        <a href="{{url('/expenses/payments')}}"><i class="fa fa-angle-double-right"></i> Payments</a>
                    </li>
                    <li id="menu_vendor">
                        <a href="{{url('/expenses/vendors')}}"><i class="fa fa-angle-double-right"></i> Vendors</a>
                    </li>
            
                </ul>
            </li>
            <li class="treeview" id="menu_banking">
                <a href="#">
                    <i class="fa fa-university text-primary"></i> Banking
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_account">
                        <a href="{{url('/banking/accounts')}}"><i class="fa fa-angle-double-right"></i> Accounts</a>
                    </li>
                    <li id="menu_transfer">
                        <a href="{{url('/banking/transfers')}}"><i class="fa fa-angle-double-right"></i> Transfers</a>
                    </li>
                    <li id="menu_transaction">
                        <a href="{{url('/banking/transactions')}}"><i class="fa fa-angle-double-right"></i> Transactions</a>
                    </li>
            
                </ul>
            </li>
            <li class="treeview" id="menu_report">
                <a href="#">
                    <i class="fa fa-bar-chart text-primary"></i> Reports
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_income_sum">
                        <a href="{{url('/reports/income-summary')}}"><i class="fa fa-angle-double-right"></i> Income Summary</a>
                    </li>
                    <li id="menu_expense_sum">
                        <a href="{{url('/reports/expense-summary')}}"><i class="fa fa-angle-double-right"></i> Expense Summary</a>
                    </li>
                    <li id="menu_income_vs_expense">
                        <a href="{{url('/reports/income-expense-summary')}}"><i class="fa fa-angle-double-right"></i> Income vs Expense</a>
                    </li>
                    <li id="menu_tax_sum">
                        <a href="{{url('/reports/tax-summary')}}"><i class="fa fa-angle-double-right"></i> Tax Summary</a>
                    </li>
                    <li id="menu_profit_loss">
                        <a href="{{url('/reports/profit-loss')}}"><i class="fa fa-angle-double-right"></i> Profit &amp; Loss</a>
                    </li>
            
                </ul>
            </li>
            <li class="treeview" id="menu_security">
                <a href="#">
                    <i class="fa fa-key text-primary"></i> Security
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_user">
                        <a href="{{url('/auth/users')}}"><i class="fa fa-angle-double-right"></i> Users</a>
                    </li>
                    <li id="menu_role">
                        <a href="{{url('/auth/roles')}}"><i class="fa fa-angle-double-right"></i> Roles</a>
                    </li>
                    <li id="menu_permission">
                        <a href="{{url('/auth/permissions')}}"><i class="fa fa-angle-double-right"></i> Permissions</a>
                    </li>
                </ul>
            </li>
            <li class="treeview" id="menu_setting">
                <a href="#">
                    <i class="fa fa-gears text-primary"></i> Settings
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="menu_general">
                        <a href="{{url('/settings/settings')}}"><i class="fa fa-angle-double-right"></i> General</a>
                    </li>
                    <li id="menu_category">
                        <a href="{{url('/settings/categories')}}"><i class="fa fa-angle-double-right"></i> Categories</a>
                    </li>
                    <li id="menu_currency">
                        <a href="{{url('/settings/currencies')}}"><i class="fa fa-angle-double-right"></i> Currencies</a>
                    </li>
                    <li id="menu_tax_rate">
                        <a href="{{url('/settings/taxes')}}"><i class="fa fa-angle-double-right"></i> Tax Rates</a>
                    </li>
                    <li id="menu_offline_payment">
                        <a href="{{url('/apps/offlinepayment/settings')}}"><i class="fa fa-angle-double-right"></i> Offline Payments</a>
                    </li>
                    <li id="menu_paypal_standard">
                        <a href="{{url('/settings/apps/paypalstandard')}}"><i class="fa fa-angle-double-right"></i> Paypal Standard</a>
                    </li>
            
                </ul>
            </li>
            
        </ul>
    </section>
</aside>

@stack('menu_end')