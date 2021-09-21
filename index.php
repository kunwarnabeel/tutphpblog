<?php
    $pageTitle="Home Page";
    include_once('header.php');
?>


        <nav class="navbar menuLeft p-0 navbar-expand-md">
            <div class="navbar-collapse collapse" id="navbarLeft">
                <div class="menuVerticalParent">
                    <ul class="menuVertical">
                        <li class="menu-title">
                            Node.js Tutorials
                        </li>
                        <li>
                            <a href="#">Node.JS - Get Started</a>

                        </li>
                        <li>
                            <a href="#">What is Node.js</a>

                        </li>
                        <li>
                            <a href="#">Node.js Process Model</a>

                        </li>
                        <li>
                            <a href="#">Setup Dev Environment</a>

                        </li>
                        <li>
                            <a href="#">Node.js Console</a>

                        </li>
                        <li>
                            <a href="#">Node.js Basics</a>

                        </li>
                        <li>
                            <a href="#">Node.js Modules</a>

                        </li>
                        <li>
                            <a href="#">Local Modules</a>

                        </li>
                        <li>
                            <a href="#">Export Module</a>

                        </li>
                        <li>
                            <a href="#">Node Package Manager</a>

                        </li>
                        <li>
                            <a href="#">Node.js Web Server</a>

                        </li>
                        <li>
                            <a href="#">Node.js File System</a>

                        </li>
                        <li>
                            <a href="#">Debugging Node.js</a>

                        </li>
                        <li>
                            <a href="#">Node Inspector</a>

                        </li>
                        <li>
                            <a href="#">Node.js EventEmitter</a>

                        </li>
                        <li>
                            <a href="#">Frameworks for Node.js</a>

                        </li>
                        <li>
                            <a href="#">Express.js</a>

                        </li>
                        <li>
                            <a href="#">Express.js Web App</a>

                        </li>
                        <li>
                            <a href="#">Serving Static Resources</a>

                        </li>
                        <li>
                            <a href="#">Node.js Data Access</a>

                        </li>
                        <li>
                            <ul>
                                <li>
                                    <a href="#">Access SQL Server</a>

                                </li>
                                <li>
                                    <a href="#">Access MongoDB</a>

                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Template Engine</a>

                        </li>
                        <li>
                            <ul>
                                <li>
                                    <a href="#">Jade</a>

                                </li>
                                <li>
                                    <a href="#">Vash</a>

                                </li>
                                <li>
                                    <a href="#">GruntJS</a>

                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Useful Resources</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Navbar-->
        <!--/.Navbar-->
        <section class="middleContent" id="middleContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pr-md-0 col-lg-12 col-xl-8">
                        <div class="lb-ad">


                            <div id='tt_leaderboard_atf_desk'></div>
                            <div id='tt_leaderboard_atf_flex_mob'></div>
                        </div>
                        <div class="navigation">
                            <div class="row">

                                <div class="col-6  text-left"><a id="btnPrev" class="btn  rounded-0" href='#'><i class="fa fa-angle-left mr-1"></i> Previous</a>
                                </div>

                                <div class="col-6 text-right float-right"><a id="btnNext" class="btn rounded-0" href='#'>Next <i
                                            class="fa fa-angle-right ml-1"></i></a></div>
                            </div>
                        </div>


                        <article class="article">
                            <h1>Node.js Local Module</h1>

                            <p>
                                Local modules are modules created locally in your Node.js application. These modules include different functionalities of your application in separate files and folders. You can also package it and distribute it via NPM, so that Node.js community can
                                use it. For example, if you need to connect to MongoDB and fetch data then you can create a module for it, which can be reused in your application.
                            </p>
                            <h2>Writing Simple Module</h2>
                            <p>Let's write simple logging module which logs the information, warning or error to the console. </p>
                            <p>In Node.js, module should be placed in a separate JavaScript file. So, create a Log.js file and write the following code in it.</p>

                            <div class="card code-panel ">
                                <div class="card-header example-header">
                                    <div class="example-caption">Log.js</div><button class="copy-btn pull-right" title="Copy example code"><i class="fa fa-copy"></i> Copy</button>
                                </div>


                                <div ss=" panel-body ">
                                    <pre class="csharpcode"><code><span class="kwrd ">var</span> log = {
            info: <span class="kwrd ">function</span> (info) { 
                console.log(<span class="str ">'Info: '</span> + info);
            },
            warning:<span class="kwrd ">function</span> (warning) { 
                console.log(<span class="str ">'Warning: '</span> + warning);
            },
            error:<span class="kwrd ">function</span> (error) { 
                console.log(<span class="str ">'Error: '</span> + error);
            }
    };

module.exports = log
</code></pre>
                                    <div class="card-footer example-footer "></div>
                                </div>

                            </div>
                            <p>In the above example of logging module, we have created an object with three functions - info(), warning() and error(). At the end, we have assigned this object to
                                <strong>module.exports</strong>. The module.exports in the above example exposes a log object as a module.
                            </p>
                            <p>
                                The <i>module.exports</i> is a special object which is included in every JS file in the Node.js application by default. Use <strong>module.exports</strong> or
                                <strong>exports</strong> to expose a function, object or variable as a module in Node.js.
                            </p>
                            <p>Now, let's see how to use the above logging module in our application.</p>

                            <h2>Loading Local Module</h2>
                            <p>To use local modules in your application, you need to load it using require() function in the same way as core module. However, you need to specify the path of JavaScript file of the module.</p>
                            <p>The following example demonstrates how to use the above logging module contained in Log.js.
                            </p>
                            <div class="card code-panel ">
                                <div class="card-header example-header ">
                                    <div class="example-caption ">app.js</div><button class="copy-btn pull-right " title="Copy example code "><i class="fa fa-copy "></i> Copy</button>
                                </div>
                                <div class="panel-body ">
                                    <pre class="csharpcode "><code><span class="kwrd ">var</span> myLogModule = require(<span class="str ">'./Log.js'</span>);

myLogModule.info(<span class="str ">'Node.js started'</span>);
</code></pre>
                                    <div class="card-footer example-footer "></div>
                                </div>
                            </div>
                            <p>In the above example, app.js is using log module. First, it loads the logging module using require() function and specified path where logging module is stored. Logging module is contained in Log.js file in the root folder.
                                So, we have specified the path './Log.js' in the require() function. The '.' denotes a root folder. </p>
                            <p>The require() function returns a log object because logging module exposes an object in Log.js using module.exports. So now you can use logging module as an object and call any of its function using dot notation e.g myLogModule.info()
                                or myLogModule.warning() or myLogModule.error()
                            </p>
                            <p>Run the above example using command prompt (in Windows) as shown below.</p>
                            <samp>
                                C:\> node app.js
                                <br />
                                Info: Node.js started
                            </samp>
                            <p>Thus, you can create a local module using module.exports and use it in your application.
                            </p>
                            <p>
                                Let's see how to expose different types as a node module using module.exports in the next section.
                            </p>

                        </article>




                        <div class="border border-secondary mt-3 mb-3 p-3 align-middle bg-light text-center ">
                            <span class="mr-3 text-dark " style="font-size:18px ">Want to check how much you know
                                Node.js? </span>
                            <div class="mt-3 "><a class="btn start-learning text-white " href="# " title="Test your Node.js knowledge ">Start Node.js Test</a></div>
                        </div>
                        <div id="social-platforms " class="mt-4 mb-4 ">
                            <ul class="row align-items-center ">
                                <li class="col-md-3 col-sm-6 pl-lg-0 ">
                                    <a class="btn btn-icon btn-facebook " id="fbshare "><i
                                            class="fa fa-facebook "></i><span>Share</span></a>
                                </li>
                                <li class="col-md-3 col-sm-6 pl-sm-0 "> <a class="btn btn-icon btn-twitter " href="# "><i class="fa fa-twitter "></i><span> Tweet</span></a></li>
                                <li class="col-md-3 col-sm-6 pl-sm-0 ">
                                    <a class="btn btn-icon btn-linkedin " href="# "><i class="fa fa-linkedin "></i><span>Share</span></a>
                                </li>
                                <li class="col-md-3 col-sm-6 pl-md-0 "> <a class="btn btn-icon btn-whatsapp " href="# "><i class="fa fa-whatsapp "></i><span>Whatsapp</span></a></li>
                            </ul>
                        </div>





                        <div class="navigation ">
                            <div class="row ">

                                <div class="col-6 text-left "><a id="btnPrev " class="btn rounded-0 " href='#'><i class="fa fa-angle-left mr-1 "></i> Previous</a>
                                </div>

                                <div class="col-6 text-right float-right "><a id="btnNext " class="btn rounded-0 " href='#'>Next <i
                                            class="fa fa-angle-right ml-1 "></i></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<?php
    include_once('footer.php');
?>


            
