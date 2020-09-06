<div class="navbar-default sidebar " role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="<?php echo base_url('index.php');?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                         </li>
                      
                         <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>  Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/cliente');?>"><i class="fa fa-user fa-fw"></i>  Clientes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/funcionario');?>"><i class="fa fa-user fa-fw"></i>  Funcionários</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/produto');?>"><i class="fa fa-user fa-fw"></i>  Produtos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/usuario');?>"><i class="fa fa-user fa-fw"></i>  Usuários</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-wrench fa-fw"></i>  Vendas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/pedido');?>"><i class="fa fa-user fa-edit"></i>  Pedidos</a>
                                    <a href="<?php echo base_url('index.php/pedido/visualiza-pedido');?>"><i class="fa fa-user fa-eye"></i>  Pedidos</a>
                                </li>
                               
                                
                            </ul>  
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-wrench fa-fw"></i>  Relatórios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/relatorio/');?>"><i class="fa fa-user fa-eye"></i>  Relatórios</a>
                                    
                                </li>
                               
                                
                            </ul>  
                        </li>
                       
                        <li>
                           <a href="#"><i class="fa fa-wrench fa-fw"></i>  Movimentação<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              
                               <li>
                                    <a href="<?php echo base_url('index.php/caixa/');?>"><i class="fa fa-user fa-money"></i>  Caixa</a>
                                    
                                </li>
                                
                            </ul>  
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
