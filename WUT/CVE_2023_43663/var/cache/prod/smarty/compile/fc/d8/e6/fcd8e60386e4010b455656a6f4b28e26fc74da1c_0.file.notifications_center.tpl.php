<?php
/* Smarty version 4.3.1, created on 2025-05-13 08:27:19
  from '/var/www/html/admin589euclusrd3dvesrax/themes/new-theme/template/components/layout/notifications_center.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68233aa769d033_58384270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd8e60386e4010b455656a6f4b28e26fc74da1c' => 
    array (
      0 => '/var/www/html/admin589euclusrd3dvesrax/themes/new-theme/template/components/layout/notifications_center.tpl',
      1 => 1689842302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68233aa769d033_58384270 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="notif" class="notification-center dropdown dropdown-clickable">
  <button class="btn notification js-notification dropdown-toggle" data-toggle="dropdown">
    <i class="material-icons">notifications_none</i>
    <span id="notifications-total" class="count hide">0</span>
  </button>
  <div class="dropdown-menu dropdown-menu-right js-notifs_dropdown">
    <div class="notifications">
      <ul class="nav nav-tabs" role="tablist">
        <?php $_smarty_tpl->_assignInScope('active', "active");?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value) {?>
          <li class="nav-item">
            <a
              class="nav-link <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"
              id="orders-tab"
              data-toggle="tab"
              data-type="order"
              href="#orders-notifications"
              role="tab"
            >
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders[1][/1]','html'=>true,'sprintf'=>array('[1]'=>'<span id="_nb_new_orders_">','[/1]'=>'</span>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>

            </a>
          </li>
          <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_customers']->value) {?>
          <li class="nav-item">
            <a
              class="nav-link <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"
              id="customers-tab"
              data-toggle="tab"
              data-type="customer"
              href="#customers-notifications"
              role="tab"
            >
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers[1][/1]','html'=>true,'sprintf'=>array('[1]'=>'<span id="_nb_new_customers_">','[/1]'=>'</span>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>

            </a>
          </li>
          <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
          <li class="nav-item">
            <a
              class="nav-link <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"
              id="messages-tab"
              data-toggle="tab"
              data-type="customer_message"
              href="#messages-notifications"
              role="tab"
            >
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages[1][/1]','html'=>true,'sprintf'=>array('[1]'=>'<span id="_nb_new_messages_">','[/1]'=>'</span>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>

            </a>
          </li>
          <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php }?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php $_smarty_tpl->_assignInScope('active', "active");?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value) {?>
          <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 empty" id="orders-notifications" role="tabpanel">
            <p class="no-notification">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new order for now :(','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['no_order_tip']->value;?>

            </p>
            <div class="notification-elements"></div>
          </div>
          <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_customers']->value) {?>
          <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 empty" id="customers-notifications" role="tabpanel">
            <p class="no-notification">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new customer for now :(','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['no_customer_tip']->value;?>

            </p>
            <div class="notification-elements"></div>
          </div>
          <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
          <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 empty" id="messages-notifications" role="tabpanel">
            <p class="no-notification">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new message for now.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['no_customer_message_tip']->value;?>

            </p>
            <div class="notification-elements"></div>
          </div>
          <?php $_smarty_tpl->_assignInScope('active', '');?>
        <?php }?>
      </div>
    </div>
  </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value) {?>
  <?php echo '<script'; ?>
 type="text/html" id="order-notification-template">
    <a class="notif" href='order_url'>
      #_id_order_ -
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>
 <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class="float-sm-right">_total_paid_</strong>
    </a>
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_new_customers']->value) {?>
  <?php echo '<script'; ?>
 type="text/html" id="customer-notification-template">
    <a class="notif" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'registered','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>
 <strong>_date_add_</strong>
    </a>
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
  <?php echo '<script'; ?>
 type="text/html" id="message-notification-template">
    <a class="notif" href='message_url'>
    <span class="message-notification-status _status_">
      <i class="material-icons">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class="material-icons">access_time</i> _date_add_
    </a>
  <?php echo '</script'; ?>
>
<?php }
}
}
