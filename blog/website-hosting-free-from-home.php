<!doctype html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Bowlby%20One%20SC' rel='stylesheet'>
		<link rel="icon" href="/favicon-96x96.png" />
		<link rel="stylesheet" type="text/css" href="/css/default.css">

		<title>Website Hosting Free from Home</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Keywords" content="Dalton, James, Neely, Website Hosting, Free, Home, 4096, bytes">
		<meta name="Description" content="Have a free computer laying around and want to host a website
						for free? This article will answer those questions for you with
						a step by step tutorial.">
		
		<style>
            #blog-content {
                background-color: transparent;
                box-shadow: none;
            }
            #blog-content .link {
                border-color: transparent;
            }
            #blog-content .link:hover{
                border-color: #FF312E;
            }
            #blog-content > h1{
                margin-bottom: 35px;
                text-align: center;
            }
            .small-pic {
                width: 50%;
                height: auto;
            }
		</style>
	</head>

	<body>
		<div class="container">
			<?php include_once "../partials/header-nav.php" ?>
			<main>
				<article id="blog-content">
                    <h1>Website Hosting Free from Home</h1>
                    <ol>
                        <li id="step-one"><h3>Buy a Domain Name (Optional)</h3>
                        <p>The first thing you need to do is completely optional, and that is to buy
                            a domain name from a service like <a class="link" href="https://namecheap.com">NameCheap</a>.
                            The reason this is optional is that domain names are just <a class="link" href="https://en.wikipedia.org/wiki/Alias_(command)">aliases</a> to external IP
                            address and are not needed to reach your machine over the internet. If you choose
                            not to buy a domain name, then you can also skip <a class="link" href="#step-three">step 3</a>
                            of this tutorial.
                        </p>
                        <figure>
                            <img src="/img/namecheap-domain.png" alt="Image of a domain on NameCheap.com"/>
                            <figcaption>This is the domain registered for this website bought off <a class="link" href="https://namecheap.com">NameCheap</a>.
                             Most domain registration services will sell you a .com domain for about $10 USD.</figcaption>
                        </figure>
                        </li>
                        <li><h3 id="step-two">Find What Your External IP Address Is</h3>
                            <p>Your external IP address is the one your <a class="link" href="https://en.wikipedia.org/wiki/Internet_service_provider">internet service provider (ISP)</a> assigns to you
                            when you sign up for their services. All traffic that comes into your house is routed through
                            that IP address and is sent to your home modem/router. From there, your router deconstructs the
                            layered packets of the transmission and sends those packets to the right computer on your local
                            network. For instance, my external IP address is <a class="link" href="http://184.167.131.95">http://184.167.131.95</a> and if
                            you click on the link you will see that it sends you to the home page of this website. Additionally, if you add the relative
                            path to the end of the IP address it will reload the page like so <a class="link" href="http://184.167.131.95/blog/website-hosting-free-from-home.php#step-two">
                            http://184.167.131.95/blog/website-hosting-free-from-home.php</a>.
                            <p>The reason that I am not afraid to share my external IP address is that when you host a website
                            you run the risk of hackers getting into your network. Tools exist to <a class="link" href="http://domaintoipconverter.com/">reverse lookup a domain name</a>; meaning
                            if you have a domain name attached to a server anyone has access to that IP address attached to the domain.</p>
                            <p>To find your IP address just type it into Google or you can click on this 
                            <a class="link" href="https://www.google.com/search?q=what+is+my+ip&oq=what+is+my+ip">link</a> and I did the dirty work for you.</p>
                            <figure>
                                <img src="/img/what-is-my-ip.png" alt="Google search for what is my IP">
                                <figcaption>When I search "What is my IP" I get 184.167.131.95 as my external IP</figcaption>
                            </figure>
                        </li>
                        <li><h3 id="step-three">Create An A Record to Point to Your External IP Address (Optional)</h3>
                        <p>Only optional if you did not do <a class="link" href="#step-one">step 1</a><p>
                        <p>NOTE: A Records take up to 48 hours to propagate through <a class="link" href="https://www.lifewire.com/what-is-a-dns-server-2625854">DNS servers</a>!</p>
                        <p>The next step is to create an <a class="link" href="https://support.dnsimple.com/articles/a-record/">A Record</a> which just a makes your domain name an alias for your
                        external IP address. In the picture below the <a class="link" href="https://serverfault.com/questions/83874/whats-the-meaning-of-in-a-dns-zone-file#answer-83880">@</a> symbol just stands for the name of the current
                        domain you are managing. In my case, the @ would equal "4096bytes.com".</p>
                        <p>NOTE: Most domain managing services keep the A Records under a tab associated with DNS</p>
                        <figure>
                            <img src="/img/a-record.png" alt="An A Record on NameCheap"/>
                            <figcaption>This is the active A record that points the domain "4096bytes.com" to my
                            external IP address of "184.167.131.95."</figcaption>
                        </figure>
                        </li>
                        <li><h3>Assign a Static Local IP Address Using your MAC Address on your Router</h3>
                            <p>The easiest way to accomplish this task is to set up an <a class="link" href="https://lifehacker.com/5822605/how-to-set-up-dhcp-reservations-so-you-never-have-to-check-an-ip-address-again">address reservation table</a>
                            on your router. This is done by associating your servers <a class="link" href="https://en.wikipedia.org/wiki/MAC_address">MAC address</a> with a local
                            IP address. This will be found on the <a class="link" href="https://en.wikipedia.org/wiki/Local_area_network">Local Area Network (LAN)</a> setup in your router.
                            From there, you just add an entry into the address reservation table, and that's it!</p>
                            <figure>
                                <img src="/img/address-reservation.png" alt="Router setup and adding an address to the address reservation table"/>
                                <figcaption>This is the setup on my router, and as you can see the address "192.168.0.100" is the static
                                address of my server. My router knows this because when my server starts up it makes a request to the router 
                                with a packet that contains the MAC address of the server. The router then looks up that MAC address and 
                                gives it the IP address specified in the table. This is how to get around <a class="link" href="https://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol">DHCP</a> without turning it off on 
                                your server.
                                </figcaption>
                            </figure>
                        </li>
                        <li><h3>DMZ that Local IP Address</h3>
                            <p>At this point, you may be thinking that your whole home network may be compromised. However, as long as you
                            <a class="link" href="https://en.wikipedia.org/wiki/DMZ_(computing)">DMZ</a> your server, the only computer a hacker can reach is that server alone. Basically, a DMZ is a security bubble
                            around your computer that does not allow you to communicate with other computers on your network. This means that
                            if a hacker takes control of your computer, then he or she will not be able to take over your other computers as 
                            well. The term DMZ comes from the <a class="link" href="https://en.wikipedia.org/wiki/Korean_Demilitarized_Zone">Demillitarized Zone that separates North Korea and South Korea</a>. If you think about
                            it in terms of a neutral zone, like in the Korean conflict, then you will probably remember it better.</p>
                            <figure>
                                <img src="/img/dmz.png" alt="Setting up a DMZ on your home router"/>
                                <figcaption>This is how I setup my DMZ on my router at home</figcaption>
                            </figure>
                        </li>
                        <li><h3>Open up the Firewall</h3>
                            <p>Now you actually need to get onto your server and open up the firewall. This is quite easy on Linux machines 
                            because of the <a class="link" href="https://wiki.ubuntu.com/UncomplicatedFirewall">UFW</a> CLI.</p>
                            <figure>
                                <img class="small-pic" src="/img/http.png" alt="Using UFW to allow HTTP traffic"/>
                                <figcaption>This command allows traffic to enter the machine on port 80</figcaption>
                            </figure>
                            <figure>
                                <img class="small-pic" src="/img/https.png" alt="Using UFW to allow HTTPS traffic"/>
                                <figcaption>This command allows traffic to enter the machine on port 443</figcaption>
                            </figure>
                        </li>
                        <li><h3>Redirect Ports If Needed</h3>
                                <p>This step is only needed if you are running an application that does not naturally run 
                                on port 80 or port 443. These include applications made in <a class="link" href="https://reactjs.org/">React.js</a> and <a class="link" href="https://rubyonrails.org/">Ruby on Rails</a> which
                                use port 3000 by default.</p>
                                <p>To do this you need to mess with the firewall using <a class="link" href="https://linux.die.net/man/8/iptables">iptables</a> on Linux. Iptables can be a 
                                bit cumbersome to use but you only need to know this one command to redirect traffic to port
                                3000.</p>
                                <figure>
                                    <img src="/img/iptables.png" alt="Using iptables to redirect traffic from port 80 to port 3000"/>
                                    <figcaption>Using iptables to redirect traffic from port 80 to port 3000</figcaption>
                                </figure>
                        </li>
                        <li><h3>Start the Server</h3>
                            <p>For this website, I am using the <a class="link" href="https://httpd.apache.org/">Apache2</a> server to serve up web pages. It is a much different process for 
                            other server technologies</p>
                                <figure>
                                    <img class="small-pic" src="/img/server-start.png" alt="Starting an Apache2 server using the CLI"/>
                                    <figcaption>Starting an Apache2 server using the CLI</figcaption>
                                </figure>
                        </li>
                        <li><h3>Verify the Connection</h3>
                            <p>Now if everything is set up right then you will see you web application running under the domain name
                            you purchased!<p>
                            <figure>
                                <img src="/img/home-page.png" alt="A picture of the home page for 4096bytes.com"/>
                                <figcaption>This is my web server running under my domain as you can see in the navigation bar, 
                                or as you are reading this article on my site haha!</figcaption>
                            </figure>
                        </li>
                    </ol>
                </article>
			</main>

			<?php include_once "../partials/footer.php" ?>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		</div>
	</body>
</html>