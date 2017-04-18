<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<header>
    <div id="top_logo">
        <div>
            <img src="img/logo.png" alt="...">

            <p class="banben">
                <a href="">中文</a>|<a href="#">English</a>
            </p>

            <div class="search_box">
                <select name="quanbu">
                    <option value="all">全部</option>
                </select>
                <input type="text" placeholder="请输入关键字">
                <button><img src="img/search.png">搜索</button>
            </div>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><a href="index.html">首页</a>

            </li>
            <li><a href="information.html">关于长城信息</a>
                <dl class="box">
                    <dt><img src="img/c11.jpg" />          </dt>
                    <dd><a href="/html/cc/jtjj/index.html">公司简介</a></dd>
                    <dd><a href="/html/cc/fzlc/index.html">发展历程</a></dd>
                    <dd><a href="/html/cc/ggtd/index.html">公司治理</a></dd>
                    <dd><a href="/html/cc/ldgh/index.html">领导关怀</a></dd>
                    <dd><a href="/html/cc/ryzz/index.html">荣誉资质</a></dd>
                </dl>
            </li>
            <li><a href="products_solutions.html">产品和解决方案</a>
                <dl class="box">
                    <dt><img src="img/c77.jpg"  />          </dt>

                    <dd><a href="/html/cc/jrxxh/index.html">金融信息化</a></dd>
                    <dd><a href="/html/cc/ylxxh/index.html">医疗信息化</a></dd>
                    <dd><a href="/html/cc/gfxxh/index.html">国防信息化</a></dd>
                    <dd><a href="/html/cc/rjyqkf/index.html">软件园区开发</a></dd>
                    <dd><a href="/html/cc/dzcpzz/index.html">电子产品制造</a></dd>
                    <dd><a href="/html/cc/rjyxtjc/index.html">软件与系统集成 </a></dd>
                </dl>
            </li>
            <li><a href="service.html">技术支持与服务</a>
                <dl class="box">
                    <dt><img src="img/c22.jpg"  />          </dt>
                    <dd><a href="/html/cc/cffw/index.html">春风服务</a></dd>
                    <dd><a href="/html/cc/fwwl/index.html">售后服务网络</a></dd>
                    <dd><a href="/html/cc/fwzx/index.html">服务咨询</a></dd>
                    <dd><a href="/html/cc/zlxz/index.html">资料下载</a></dd>
                </dl>
            </li>
            <li><a href="news.html">新闻中心</a>
                <dl class="box1">
                    <dt><img src="img/c33.jpg"  />          </dt>
                    <dd><a href="/html/cc/qyxw/index.html">企业新闻</a></dd>
                    <dd><a href="/html/cc/sckx/index.html">市场快讯</a></dd>
                    <dd><a href="/html/cc/mtbd/index.html">媒体报道</a></dd>
                </dl>
            </li>
            <li><a href="resource.html">人力资源</a>
                <dl class="box1">
                    <dt><img src="img/c44.jpg"  />          </dt>
                    <dd><a href="/html/cc/rczc/index.html">人才政策</a></dd>
                    <dd><a href="/html/cc/shzp/index.html">社会招聘</a></dd>
                    <dd><a href="/html/cc/xyzp/index.html">校园招聘</a></dd>
                    <dd><a href="/html/cc/ygxs/index.html">培训动态</a></dd>
                </dl>
            </li>
            <li><a href="culture.html">企业文化</a>
                <dl class="box1">
                    <dt><img src="img/c55.jpg"  />          </dt>
                    <dd><a href="/html/cc/djzt/index.html">公司党建</a></dd>
                    <dd><a href="/html/cc/whln/index.html">文化理念</a></dd>
                    <dd><a href="/html/cc/ygfc/index.html">员工风采</a></dd>
                    <dd><a href="/html/cc/zcxxkw/index.html">长城信息刊物</a></dd>
                    <dd><a href="/html/cc/ztbd/index.html"><font color="red"><strong>专题报道</strong></font> </a></dd>

                </dl>
            </li>
            <li><a href="investor_relations.html">投资者关系</a>
                <dl class="box1">
                    <dt><img src="img/c66.jpg"  />          </dt>
                    <dd><a href="/html/cc/gbzk/index.html">股本状况</a></dd>
                    <dd><a href="/html/cc/sdgd/index.html">十大股东</a></dd>
                    <dd><a href="/html/cc/dqbg/index.html">定期报告</a></dd>
                    <dd><a href="/html/cc/gsgg/index.html">公司公告</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</header>
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<script>
		$(function(){
            $(".nav ul li:has(.box)").hover(function(){
                        $(this).children('.box').addClass('red').end().find('.box').slideDown("fast");},
                    function(){
                        $(this).children('.box').removeClass('red').end().find('box').slideUp("fast");
                    });
        });
        $(function(){
            $(".nav ul li:has(.box1)").hover(function(){
                        $(this).children('.box1').addClass('red').end().find('.box1').slideDown("fast");},
                    function(){
                        $(this).children('.box1').removeClass('red').end().find('.box1').slideUp("fast");
                    });
        });
</script>

 
