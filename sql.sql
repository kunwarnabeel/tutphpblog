/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.21-MariaDB : Database - blog1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog1`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) DEFAULT NULL,
  `metaTitle` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `orderBy` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`title`,`metaTitle`,`slug`,`status`,`orderBy`) values (1,'Python','Python','python',1,1),(2,'ASP.NET Core','ASP.NET Core',NULL,0,NULL),(3,'MVC','MVC',NULL,0,NULL),(4,'Node.js','Node.js','nodejs',1,2),(5,'React.js','React.js',NULL,0,NULL);

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) DEFAULT NULL,
  `author_id` bigint(20) DEFAULT NULL,
  `pageName` varchar(75) DEFAULT NULL,
  `title` varchar(75) DEFAULT NULL,
  `metaTitle` varchar(75) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `publishedAt` datetime DEFAULT NULL,
  `content` text DEFAULT NULL,
  `orderBy` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`id`,`category_id`,`author_id`,`pageName`,`title`,`metaTitle`,`slug`,`status`,`createdAt`,`updatedAt`,`publishedAt`,`content`,`orderBy`) values (1,1,NULL,'Get Started','Python Tutorials','Python Tutorials','get-started',1,NULL,NULL,NULL,'Python is a general-purpose high-level programming language. It is an open source language, released under a GPL-compatible license.\r\n\r\nThese tutorials will help you learn Python 3 step by step. Tutorials are broken down into chapters, where each chapter contains several related topics packed with easy-to-understand explanations and real-world examples.\r\n\r\nThese tutorials are designed for beginners and professionals who want to learn Python programming language.\r\n\r\nLet\'s get started by clicking Next.',1),(2,1,NULL,'What is Python?','What is Python?','What is Python?','python-overview',1,NULL,NULL,NULL,'Python is a high-level, cross-platform, and open-sourced programming language released under a GPL-compatible license. Python Software Foundation (PSF), a non-profit organization, holds the copyright of Python.\r\n\r\nGuido Van Rossum conceived Python in the late 1980s. It was released in 1991 at Centrum Wiskunde & Informatica (CWI) in the Netherlands as a successor to the ABC language. He named this language after a popular comedy show called \'Monty Python\'s Flying Circus\' (and not after Python-the snake).\r\n\r\nIn the last few years, its popularity has increased immensely. According to stackoverflow.com\'s recent survey, Python is in the top three Most Loved Programming Language in 2020.\r\n\r\nOfficial Web Site: https://www.python.org\r\n\r\nPython Features:\r\nPython is an interpreter-based language, which allows the execution of one instruction at a time.\r\nExtensive basic data types are supported e.g., numbers (floating point, complex, and unlimited-length long integers), strings (both ASCII and Unicode), lists, and dictionaries.\r\nVariables can be strongly typed as well as dynamic typed.\r\nSupports object-oriented programming concepts such as class, inheritance, objects, module, namespace etc.\r\nCleaner exception handling support.\r\nSupports automatic memory management.\r\nVarious built-in and third-party modules, which can be imported and used independently in the Python application.\r\nPython Advantages\r\nPython provides enhanced readability. For that purpose, uniform indents are used to delimit blocks of statements instead of curly brackets, like in many languages such as C, C++, and Java.\r\nPython is free and distributed as open-source software. A large programming community is actively involved in the development and support of Python libraries for various applications such as web frameworks, mathematical computing, and data science.\r\nPython is a cross-platform language. It works equally on different OS platforms like Windows, Linux, Mac OSX, etc. Hence Python applications can be easily ported across OS platforms.\r\nPython supports multiple programming paradigms including imperative, procedural, object-oriented, and functional programming styles.\r\nPython is an extensible language. Additional functionality (other than what is provided in the core language) can be made available through modules and packages written in other languages (C, C++, Java, etc.)\r\nA standard DB-API for database connectivity has been defined in Python. It can be enabled using any data source (Oracle, MySQL, SQLite etc.) as a backend to the Python program for storage, retrieval, and processing of data.\r\nThe standard distribution of Python contains the Tkinter GUI toolkit, which is the implementation of a popular GUI library called Tcl/Tk. An attractive GUI can be constructed using Tkinter. Many other GUI libraries like Qt, GTK, WxWidgets, etc. are also ported to Python.\r\nPython can be integrated with other popular programming technologies like C, C++, Java, ActiveX, and CORBA.\r\nPython Tools and Frameworks\r\nThe following lists important tools and frameworks to develop different types of Python applications:\r\n\r\nWeb Development: Django, Pyramid, Bottle, Tornado, Flask, web2py\r\nGUI Development: tkInter, PyGObject, PyQt, PySide, Kivy, wxPython\r\nScientific and Numeric: SciPy, Pandas, IPython\r\nSoftware Development: Buildbot, Trac, Roundup\r\nSystem Administration: Ansible, Salt, OpenStack',2),(3,4,NULL,'Get Started','Node.js Tutorials','Node.js Tutorials','get-started',1,NULL,NULL,NULL,'Node.js is an open-source server side runtime environment built on Chrome\'s V8 JavaScript engine. It provides an event driven, non-blocking (asynchronous) I/O and cross-platform runtime environment for building highly scalable server-side applications using JavaScript.\r\n\r\nNode.js tutorials will help you learn the essentials of Node.js starting from the basics to an advanced level. These tutorials are broken down into sections, where each section contains a number of related topics that are packed with easy to understand explanations, real-world examples, useful tips, informative notes, and \"points to remember\" section.\r\n\r\nThese tutorials are designed for beginners and professionals who want to learn Node.js step by step.\r\n\r\nPrerequisites\r\nBasic knowledge of HTML, JavaScript and web application is recommended.\r\n\r\nSo let\'s get started by clicking Next.',1),(4,4,NULL,'Node.js Process Model','Node.js Process Model','Node.js Process Model','nodejs-process-model',1,NULL,NULL,NULL,'In this section, we will learn about the Node.js process model and understand why we should use Node.js.\r\n\r\nTraditional Web Server Model\r\nIn the traditional web server model, each request is handled by a dedicated thread from the thread pool. If no thread is available in the thread pool at any point of time then the request waits till the next available thread. Dedicated thread executes a particular request and does not return to thread pool until it completes the execution and returns a response.\r\n\r\ntraditional web server model\r\nTraditional Web Server Model\r\nNode.js Process Model\r\nNode.js processes user requests differently when compared to a traditional web server model. Node.js runs in a single process and the application code runs in a single thread and thereby needs less resources than other platforms. All the user requests to your web application will be handled by a single thread and all the I/O work or long running job is performed asynchronously for a particular request. So, this single thread doesn\'t have to wait for the request to complete and is free to handle the next request. When asynchronous I/O work completes then it processes the request further and sends the response.\r\n\r\nAn event loop is constantly watching for the events to be raised for an asynchronous job and executing callback function when the job completes. Internally, Node.js uses libev for the event loop which in turn uses internal C++ thread pool to provide asynchronous I/O.\r\n\r\nThe following figure illustrates asynchronous web server model using Node.js.\r\n\r\nnode.js process model\r\nNode.js Process Model\r\nNode.js process model increases the performance and scalability with a few caveats. Node.js is not fit for an application which performs CPU-intensive operations like image processing or other heavy computation work because it takes time to process a request and thereby blocks the single thread.',2),(6,4,NULL,'Setup Node.js Development Environment','Setup Node.js Development Environment','Setup Node.js Development Environment','setup-nodejs-development-environment',1,NULL,NULL,NULL,'In this section, you will learn about the tools required and steps to setup development environment to develop a Node.js application.\r\n\r\nNode.js development environment can be setup in Windows, Mac, Linux and Solaris. The following tools/SDK are required for developing a Node.js application on any platform.\r\n\r\nNode.js\r\nNode Package Manager (NPM)\r\nIDE (Integrated Development Environment) or TextEditor\r\nNPM (Node Package Manager) is included in Node.js installation since Node version 0.6.0., so there is no need to install it separately.\r\n\r\nInstall Node.js on Windows\r\nVisit Node.js official web site https://nodejs.org. It will automatically detect OS and display download link as per your Operating System. For example, it will display following download link for 64 bit Windows OS.\r\n\r\n\r\nDownload Node.JS Installer for Windows\r\nDownload node MSI for windows by clicking on 8.11.3 LTS or 10.5.0 Current button. We have used the latest version 10.5.0 for windows through out these tutorials.\r\n\r\nAfter you download the MSI, double-click on it to start the installation as shown below.\r\n\r\n\r\nNode.js Installation\r\nClick Next to read and accept the License Agreement and then click Install. It will install Node.js quickly on your computer. Finally, click finish to complete the installation.\r\n\r\nVerify Installation\r\nOnce you install Node.js on your computer, you can verify it by opening the command prompt and typing node -v. If Node.js is installed successfully then it will display the version of the Node.js installed on your machine, as shown below.\r\n\r\nVery Node.js Installation\r\nVerify Node.js Installation\r\nADVERTISEMENT\r\n\r\nInstall Node.js on Mac/Linux\r\nVisit Node.js official web site https://nodejs.org/en/download page. Click on the appropriate installer for Mac (.pkg or .tar.gz) or Linux to download the Node.js installer.\r\n\r\n\r\nNode Environment Setup\r\nOnce downloaded, click on the installer to start the Node.js installation wizard. Click on Continue and follow the steps. After successful installation, it will display summary of installation about the location where it installed Node.js and NPM.\r\n\r\n\r\nNode.js Installation on OS X\r\nAfter installation, verify the Node.js installation using terminal window and enter the following command. It will display the version number of Node.js installed on your Mac.\r\n\r\n$ node -v\r\nOptionally, for Mac or Linux users, you can directly install Node.js from the command line using Homebrew package manager for Mac OS or Linuxbrew package manager for Linux Operating System. For Linux, you will need to install additional dependencies, viz. Ruby version 1.8.6 or higher and GCC version 4.2 or higher before installing node.\r\n\r\n$ brew install node\r\nIDE\r\nNode.js application uses JavaScript to develop an application. So, you can use any IDE or texteditor tool that supports JavaScript syntax. However, an IDE that supports auto complete features for Node.js API is recommended e.g. Visual Studio, Sublime text, Eclipse, Aptana etc.\r\n\r\nLearn how to setup MS Visual Studio for Node.js development in the next section.',3);

/*Table structure for table `post_category` */

DROP TABLE IF EXISTS `post_category`;

CREATE TABLE `post_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `postId` bigint(20) DEFAULT NULL,
  `categoryId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post_category` */

/*Table structure for table `post_tag` */

DROP TABLE IF EXISTS `post_tag`;

CREATE TABLE `post_tag` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `postId` bigint(20) DEFAULT NULL,
  `tagId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post_tag` */

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) DEFAULT NULL,
  `metaTitle` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tag` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
