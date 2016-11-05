<%-- 
    Document   : floorplan.jsp
    Created on : Jul 4, 2014, 6:26:00 PM
    Author     : Tharindu
--%>

<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@page contentType="text/html" pageEncoding="UTF-8" import="entity.User"%>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Floor Plan</title>
    <link rel="stylesheet" href="css/style.default.css" type="text/css" />
    <link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
    <link rel="stylesheet" href="css/my-style.css" type="text/css" />
    <link rel="stylesheet" href="css/grid.css" type="text/css" />
    <script type="text/javascript" src="prettify/prettify.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.flot.min.js"></script>
    <script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/custom1.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <!-- web site logo on the address bar -->
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <script src="dragable/jquery-1.10.2.js"></script>
    <script src="dragable/ui/jquery.ui.core.js"></script>
    <script src="dragable/ui/jquery.ui.widget.js"></script>
    <script src="dragable/ui/jquery.ui.mouse.js"></script>
    <script src="dragable/ui/jquery.ui.draggable.js"></script>
    <script src="js/floorplan.js"></script>
    <link rel="stylesheet" href="dragable/demos.css">
    <style>
        .draggable { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
        #draggable ul li { margin: 1em 0; padding: 0.5em 0; } * html #draggable ul li { height: 1%; }
        #draggable ul li span.ui-icon { float: left; }
        #draggable ul li span.count { font-weight: bold; }
        #frame {
            background-image:url(img/floorplan/grid.gif);
        }

    </style>
    <script>
        function valueSelect() {
            document.getElementById('select').value = "select";
        }
    </script>
</head>

<body>
    <div class="mainwrapper">
        <div class="headerpanel">
            <!-- START OF LEFT PANEL -->
            <div class="leftpanel">
                <div class="logopanel" align="center">
                    <h1><a href="dashboard.jsp"><span> <img alt="ATAE" src="img/ATAE Logo.png" width="90%" height="auto"></span></a></h1>
                </div>
            </div><!--leftpane-->

            <!-- START OF RIGHT PANEL -->
            <div class="headerright">
                <div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                        <% User currentUser = (User) (session.getAttribute("currentSessionUser"));%>
                        Hi, 
                        <%= currentUser.getUser()%> !
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="edit-profile.jsp"><span class="icon-edit"></span> Edit Profile</a></li>
                        <!--  <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                          <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                          <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                          <li class="divider"></li>-->
                        <li><a href="index.jsp"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->
            </div><!--headerright-->

        </div><!--headerpanel-->
        <div class="breadcrumbwidget">
            <ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
            <ul class="breadcrumb">
                <li> <span class="divider"></span></li>
                <li class="active"></li>
            </ul>
        </div><!--breadcrumbwidget-->
        <div class="pagetitle">            
            <a href="dashboard.jsp" class="btn btn-rounded"> <h4> Dashboard</h4></a> <span></span> 
            <a href="EventsAndBookings" class="btn btn-rounded" > <h4> Events </h4> </a> <span></span> 
            <a href="RertiveDelegates" class="btn btn-rounded" > <h4> Delegates </h4> </a> <span></span> 
            <a href="floor-planning.jsp" class="btn btn-rounded" > <h4> Floor  </h4></a> <span></span> 
            <a href="resources.jsp" class="btn btn-rounded" > <h4> Resources</h4> </a> <span></span> 
            <a href="Budgets" class="btn btn-rounded" > <h4> Budget  </h4></a> <span></span> 
            <a href="RetriveDocument" class="btn btn-rounded" > <h4> Documents</h4> </a> <span></span> 
            <a href="NewCheckList" class="btn btn-rounded" > <h4> Check List </h4></a> <span></span> 
            <a href="report-page.jsp" class="btn btn-rounded" > <h4> Reports </h4></a> <span></span> 
            <a href="RetriveClient" class="btn btn-rounded" > <h4> Clients </h4></a> <span></span>
        </div>
        <!--pagetitle-->

        <div class="maincontent" style="margin-top:auto;">
            <div class="contentinner content-editprofile"  id="mal">
                <h4 class="widgettitle nomargin"  >floorplan</h4>
                <div class="widgetcontent bordered">
                    <div class="row-fluid"><!--span3-->
                        <div class="span12">
                            <div class="span2">
                                <form action="floorplan.jsp" class="editprofileform" name="form1" id="form-password" method="post">
                                    <div class="span12">
                                        <hr/>
                                        <div class="span5">
                                            <label title="Table">
                                                <input type="radio" name="desing" id="round-table" value="round-table"/>
                                                Table <img src="img/floorplan/chairs.png" style="width:50px; margin-left:15px;"> </label>
                                            <label title="Stole" style="margin-top:10px;">
                                                <input type="radio" name="desing" id="stole" value="stole"/>
                                                Stole <img src="img/floorplan/stole.png" style="width:50px; margin-left:15px;"> </label>
                                            <label title="Podium" style="margin-top:10px;">
                                                <input type="radio" name="desing" id="podium" value="Podium"/>
                                                Podium <img src="img/floorplan/c2.png" style="width:50px; margin-left:15px;"> </label>
                                        </div>
                                        <div class="span6">
                                            <!-- <label title="plants">
                                                 <input type="radio" name="desing" id="plants" value="plants"/>
                                                 Flower Pots <img src="img/floorplan/c1.png" style="width:50px;margin-left:15px;"> </label>-->
                                            <label title="Table" style="margin-top:10px;">
                                                <input type="radio" name="desing" id="rectangle-table" value="rectangle-table"/>
                                                Table <img src="img/floorplan/table2.png" style="width:50px; margin-left:15px;"> </label>
                                            <!--<label style="margin-top:5px;" title="Tea Table"> 
                                            <input type="radio" name="desing" value="tea-table"/> Tea Table
                                            <img src="img/floorplan/tea-table.png" style="width:70px; margin-left: 25px;">
                                            </label>-->
                                            <label title="Bound" style="margin-top:6px;">
                                                <input type="radio" name="desing" id="bound" value="bound"/>
                                                Boundary <img src="img/floorplan/c3.png" style="width:50px; margin-left:15px;"> </label>
                                            <label title="Chairs" style="margin-top:10px;">
                                                <input type="radio" name="desing" id="chairs" value="chairs"/>
                                                Chairs <img src="img/floorplan/chairs.png" style="width:20px; margin-left:20px;"> </label>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <hr/>
                                        <p id="table-name">
                                            <label>Name:</label>
                                            <input type="text" name="name" id="name" value="table" class="span8" style="margin-left:-60px;"/>
                                        </p>
                                        <p id="pwidth">
                                            <label>Width:</label>
                                            <input type="text" name="width" id="width" class="span4" style="margin-left:-60px;"/>
                                            ft </p>
                                        <p id="pheight">
                                            <label>Height:</label>
                                            <input type="text" name="height" id="height" class="span4" style="margin-left:-60px;"/>
                                            ft </p>
                                        <p id="radiuspara">
                                            <label>Radius:</label>
                                            <select id="radius" name="radius" style=" width:auto;">
                                                <option value="">--Select--</option>
                                                <option value="48">48" Seats 5 People</option>
                                                <option value="54">54" Seats 6 People</option>
                                                <option value="60">60" Seats 8 People</option>
                                                <option value="72">72" Seats 10 People</option>
                                            </select>
                                        </p>
                                        <p id="table-area">
                                            <label>Size :</label>
                                            <select id="tbl-are" name="tbl-are" style=" width:auto;">
                                                <option value="">--Select--</option>
                                                <option value="48">30x48" Seats 4 People</option>
                                                <option value="72">30x72" Seats 6 People</option>
                                                <option value="96">30x96" Seats 8 or 10 People</option>
                                            </select>
                                        </p>
                                        <p style="margin-left:40px;">
                                            <input type="button" name="add_table" id="add_table" class="btn btn-primary" value="Add"/>
                                            <input type="button" name="remove1" class="btn btn-primary" id="remove1" onclick="removeMe();" value="Remove"/>
                                        </p>
                                    </div>
                                </form>
                                <div id="chirs-cnt" style="">  </div>
                                <div id="tbl-cnt" style="">  </div>
                                <div id="stol-cnt" style="">  </div>
                            </div>
                            <!--span2-->
                            <div class="span8">
                                <div id="frame" class="ui-droppable" >
                                </div>
                             </div>
                            <%
                                String eventDetails = (String) request.getAttribute("SELECT_LOCATION");%>                            
                            <input type="hidden" name="inputval" id="inputval" value="<%= eventDetails%>"/>
                            <!--span6-->
                            <div class="span2">
                                <hr style="border-color:#000000; "/>
                                <form action="EditLocation" class="editprofileform" name="form2"  method="post">  
                                    <h2>Open Location</h2>
                                    <p>
                                        <label>Location Name : </label>
                                        <input type="text" id="selectName" name="selectName" class="span8" />
                                    </p>

                                    <p>
                                        <input type="hidden" name="select" id="select" value=""/>
                                        <input type="submit" class="btn btn-primary" name="Open" id="Open" onclick="valueSelect();" value="Open"/>

                                    </p> 
                                </form>
                                <hr style="border-color:#000000; "/>
                                <form action="AddfloorData" class="editprofileform" name="form1" id="form-password" method="post">
                                    <h2>Save Location</h2>
                                    <p>
                                        <label>Plan Name : </label>
                                        <input type="text" id="planName" name="planName" class="span8"/>
                                    </p>
                                    <p>
                                        <label>Location Name : </label>
                                        <input type="text" id="locationName" name="locationName" class="span8" />
                                    </p>
                                    <p>
                                        <input type="hidden" name="positionname" id="positionname" value=""/>
                                        <!--  <input type="button" name="design_view" id="design_view"  value="Design View"/> -->
                                        <input type="submit" class="btn btn-primary" name="save" id="save" onclick="saveMe();" value="Save"/>

                                    </p>                                    
                                </form>
                                
                            </div>
                            <!--span2--> 
                        </div>
                        <!--span12--> 
                    </div>
                    <!--row-fluid--> 
                </div>
                <!--widgetcontent--> 
            </div>
            <!--contentinner--> 
        </div>
        <!--maincontent--> 

        <!--mainright--> 
        <!-- END OF RIGHT PANEL -->

        <div class="clearfix"></div>
        <div class="footer">
            <div class="footerleft">Tharindu </div>
            <div class="footerright">© Dineth</div>
        </div>
        <!--footer--> 

    </div>
    <!--mainwrapper-->

</body>
</html>