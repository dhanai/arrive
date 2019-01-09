<?php
/* Template Name: Carriers Page */
 get_header();
?>
<section class="section-mrg"></section>
<section class="section-mrg">
    <div class="m-wrapper about-intro">
        <div class="technology-intro-text">
            <h2 class="section-headline"><?php the_field('apsb_headline'); ?></h2>
            <?php the_field('apsb_text'); ?>
        </div><!--technology intro text-->
        <div class="technology-services">
        	<?php if( have_rows('apsb_images') ):  while ( have_rows('apsb_images') ) : the_row(); ?>
            	<img src="<?php the_sub_field('image'); ?>" alt="" />
            <?php endwhile;endif;wp_reset_postdata(); ?> 
        </div><!--technology services-->
        <div class="clear"></div>
    </div><!--m wrapper-->
</section>
<section class="section-mrg">
    <div class="about-slider owl-carousel owl-theme">   
    <?php if( have_rows('yr_block') ):  while ( have_rows('yr_block') ) : the_row(); ?>
    	<div class="item">
           <div class="slider-image" style="background-image: url(<?php the_sub_field('yrb_bg_image'); ?>)">
               <div class="about-slide">
                   <p class="slide-title"><?php the_sub_field('yrb_content'); ?>
                   <span class="slider-subtext">- <?php echo the_sub_field('sub_text'); ?></span>
                   </p>
               </div>
           </div>
       </div>
    <?php endwhile;endif;wp_reset_postdata(); ?>
</div>
</section>
<section>
        <div class="wrapper">
           
         <div class="shipper-page-animation-svg">
             
         
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="941px" height="142px" viewBox="0 0 941 142">
    <title>Group 2</title>
    <desc>Created with Sketch.</desc>
    <path id="Path-7" d="M8.43973,133.043C60.7247,64.3477,135.185,30,231.82,30C328.456,30,408.062,64.3477,470.641,133.043" stroke="#2aaae2" stroke-width="1" stroke-dasharray="525 525" fill="none" fill-rule="evenodd" stroke-dashoffset="525" transform="translate(0,1)" style="stroke-dashoffset: 0px;"></path>
    <path id="Path-2" d="M8.43973,133.043C44.3837,59.5777,118.757,3.79824,234.514,3.79824C331.15,3.79824,432.441,66.1753,470.641,133.043" stroke="#2aaae2" stroke-width="1" stroke-dasharray="555 555" fill="none" fill-rule="evenodd" stroke-dashoffset="555" transform="translate(462.43,1)" style="stroke-dashoffset: 0px;"></path>
    <ellipse id="Oval" fill="#2aaae2" rx="7.5" ry="7.5" stroke="none" stroke-width="1" fill-rule="evenodd" opacity="0" transform="translate(0,1) translate(7.5,133.5)" style="opacity: 1;"></ellipse>
    <ellipse id="Oval-Copy" fill="#2aaae2" rx="7.5" ry="7.5" stroke="none" stroke-width="1" fill-rule="evenodd" opacity="0" transform="translate(0,1) translate(470.5,133.5)" style="opacity: 1;"></ellipse>
    <ellipse id="Oval-Copy-2" fill="#2aaae2" rx="7.5" ry="7.5" stroke="none" stroke-width="1" fill-rule="evenodd" opacity="0" transform="translate(0,1) translate(933.5,133.5)" style="opacity: 1;"></ellipse>
    <script>window.ks=function(){function z(a){return"undefined"!==typeof a}function v(a,b){return a&amp;&amp;0==a.indexOf(b)}function N(a){if(!isFinite(a))throw"non-finite value";}function O(a){if(14&gt;=a)return 16;(a=X[a])||(a=0);return a}function D(a){return 0&lt;=a?Math.pow(a,1/3):-Math.pow(-a,1/3)}function Y(a,b,c,d){if(0==a)return 0==b?b=-d/c:(a=Math.sqrt(c*c-4*b*d),d=(-c+a)/(2*b),0&lt;=d&amp;&amp;1&gt;=d?b=d:(d=(-c-a)/(2*b),b=0&lt;=d&amp;&amp;1&gt;=d?d:0)),b;var e=c/a-b*b/(a*a)/3;c=b*b*b/(a*a*a)/13.5-b*c/(a*a)/3+d/a;var k=c*c/4+e*e*e/27;b=-b/
(3*a);if(0&gt;=k){if(0==e&amp;&amp;0==c)return-D(d/a);a=Math.sqrt(c*c/4-k);d=Math.acos(-c/2/a);c=Math.cos(d/3);d=Math.sqrt(3)*Math.sin(d/3);a=D(a);e=2*a*c+b;if(0&lt;=e&amp;&amp;1&gt;=e)return e;e=-a*(c+d)+b;if(0&lt;=e&amp;&amp;1&gt;=e)return e;e=a*(d-c)+b;if(0&lt;=e&amp;&amp;1&gt;=e)return e}else{a=D(-c/2+Math.sqrt(k));c=D(-c/2-Math.sqrt(k));d=a+c+b;if(0&lt;=d&amp;&amp;1&gt;=d)return d;d=-(a+c)/2+b;if(0&lt;=d&amp;&amp;1&gt;=d)return d}return 0}function Z(a,b){if(48==a&amp;&amp;"number"===typeof b)return"#"+("000000"+b.toString(16)).substr(-6);if(64==a)return b=b.map(function(a){return a+
"px"}),b.join(",");if(96==a){a="";for(var c=b.length,d=0;d&lt;c;d+=2)a+=b[d],a+=b[d+1].join(",");return a}if(80==a){if(0==b[0])return"none";a="";c=b.length;for(d=0;d&lt;c;)a+=R[b[d]],1==b[d]?a+="("+b[d+1]+") ":5==b[d]?(a+="("+b[d+1]+"px "+b[d+2]+"px "+b[d+3]+"px rgba("+(b[d+4]&gt;&gt;&gt;24)+","+(b[d+4]&gt;&gt;16&amp;255)+","+(b[d+4]&gt;&gt;8&amp;255)+","+(b[d+4]&amp;255)/255+")) ",d+=3):a=2==b[d]?a+("("+b[d+1]+"px) "):7==b[d]?a+("("+b[d+1]+"deg) "):a+("("+(0&gt;b[d+1]?0:b[d+1])+") "),d+=2;return a}return 32==a?b+"px":b}function w(a){return 0&gt;=
a?0:255&lt;=a?255:a}function aa(a,b,c,d){if(16==a||32==a)return(c-b)*d+b;if(0==a)return.5&gt;d?b:c;if(48==a){if("number"===typeof b&amp;&amp;"number"===typeof c){var e=1-d;return w(e*(b&gt;&gt;16)+d*(c&gt;&gt;16))&lt;&lt;16|w(e*(b&gt;&gt;8&amp;255)+d*(c&gt;&gt;8&amp;255))&lt;&lt;8|w(e*(b&amp;255)+d*(c&amp;255))}return.5&gt;d?b:c}if(64==a){0==b.length&amp;&amp;(b=[0]);0==c.length&amp;&amp;(c=[0]);var k=b.length;b.length!=c.length&amp;&amp;(k=b.length*c.length);var h=[];for(a=0;a&lt;k;++a){var f=b[a%b.length];var g=(c[a%c.length]-f)*d+f;0&gt;g&amp;&amp;(g=0);h.push(g)}return h}if(96==a){if(b.length!=c.length)return.5&gt;
d?b:c;k=b.length;h=[];for(a=0;a&lt;k;a+=2){if(b[a]!==c[a])return.5&gt;d?b:c;h[a]=b[a];h[a+1]=[];for(f=0;f&lt;b[a+1].length;++f)h[a+1].push((c[a+1][f]-b[a+1][f])*d+b[a+1][f])}return h}if(80==a){k=b.length;if(k!=c.length)return.5&gt;d?b:c;h=[];for(a=0;a&lt;k;){if(b[a]!=c[a]||1==b[a])return.5&gt;d?b:c;h[a]=b[a];h[a+1]=(c[a+1]-b[a+1])*d+b[a+1];if(5==b[a]){h[a+2]=(c[a+2]-b[a+2])*d+b[a+2];h[a+3]=(c[a+3]-b[a+3])*d+b[a+3];e=1-d;var l=b[a+4],q=c[a+4];g=e*(l&gt;&gt;&gt;24)+d*(q&gt;&gt;&gt;24);var n=e*(l&gt;&gt;16&amp;255)+d*(q&gt;&gt;16&amp;255);f=e*(l&gt;&gt;8&amp;255)+
d*(q&gt;&gt;8&amp;255);h[a+4]=(w(n)&lt;&lt;16|w(f)&lt;&lt;8|w(e*(l&amp;255)+d*(q&amp;255)))+16777216*(w(g)|0);a+=3}a+=2}return h}return 0}function S(a,b){a:{var c=a+b[2];var d=b[4].length;for(var e=0;e&lt;d;++e)if(c&lt;b[4][e]){c=e;break a}c=d-1}d=b[2];e=b[4][c-1]-d;a=(a-e)/(b[4][c]-d-e);if(b[6]&amp;&amp;b[6].length&gt;c-1)if(d=b[6][c-1],1==d[0])if(0&gt;=a)a=0;else if(1&lt;=a)a=1;else{e=d[1];var k=d[3];a=Y(3*e-3*k+1,-6*e+3*k,3*e,-a);a=3*a*(1-a)*(1-a)*d[2]+3*a*a*(1-a)*d[4]+a*a*a}else 2==d[0]?(d=d[1],a=Math.ceil(a*d)/d):3==d[0]&amp;&amp;(d=d[1],a=Math.floor(a*
d)/d);return aa(b[1]&amp;240,b[5][c-1],b[5][c],a)}function P(){A=(new Date).getTime()}function J(a){for(var b=!1,c=0;c&lt;x.length;++c)x[c].F(a)&amp;&amp;(b=!0);a&amp;&amp;x.forEach(function(a){a.l&amp;&amp;(a.l=!1,a.onfinish&amp;&amp;(a.onfinish(),b=!0))});return b}function T(){P();J(!0)?(K=!0,L(T)):K=!1}function Q(){K||(K=!0,L(T))}function U(a,b){var c=[];a.split(b).forEach(function(a){c.push(parseFloat(a))});return c}function t(a){-1==a.indexOf(",")&amp;&amp;(a=a.replace(" ",","));return U(a,",")}function V(a){a._ks||(a._ks={H:M},++M);if(!a._ks.transform){for(var b=
a._ks.transform=[],c=0;14&gt;=c;++c)b[c]=0;b[10]=1;b[11]=1;if(c=a.getAttribute("transform")){for(c=c.trim().split(") ");0&lt;a._ks.w;)c.shift(),--a._ks.w;a=c.shift();v(a,"translate(")&amp;&amp;(a=t(a.substring(10)),b[1]=a[0],b[2]=z(a[1])?a[1]:0,a=c.shift());v(a,"rotate(")&amp;&amp;(a=t(a.substring(7)),b[6]=a[0],a=c.shift());v(a,"skewX(")&amp;&amp;(a=t(a.substring(6)),b[7]=a[0],a=c.shift());v(a,"skewY(")&amp;&amp;(a=t(a.substring(6)),b[8]=a[0],a=c.shift());v(a,"scale(")&amp;&amp;(a=t(a.substring(6)),b[10]=a[0],b[11]=z(a[1])?a[1]:0,a=c.shift());
v(a,"translate(")&amp;&amp;(a=t(a.substring(10)),b[13]=a[0],b[14]=z(a[1])?a[1]:0)}}}function W(a){this.C=a;this.v=[];this.o=[];this.g=0;this.i=this.a=this.b=null;this.f=this.A=this.l=this.h=!1}function G(a,b,c){b=a[b];void 0===b&amp;&amp;(b=a[c]);return b}function ba(a){return Array.isArray(a)?a:v(a,"cubic-bezier(")?(a=a.substring(13,a.length-1).split(","),[1,parseFloat(a[0]),parseFloat(a[1]),parseFloat(a[2]),parseFloat(a[3])]):v(a,"steps(")?(a=a.substring(6,a.length-1).split(","),[a[1]&amp;&amp;"start"==a[1].trim()?2:3,
parseFloat(a[0])]):[0]}function ca(a){a=a.trim();return v(a,"#")?(parseInt(a.substring(1),16)&lt;&lt;8)+255:v(a,"rgba(")?(a=a.substring(5,a.length-1),a=a.split(","),(parseInt(a[0],10)&lt;&lt;24)+(parseInt(a[1],10)&lt;&lt;16)+(parseInt(a[2],10)&lt;&lt;8)+255*parseFloat(a[3])&lt;&lt;0):a}var da=" translate translate    rotate skewX skewY  scale scale  translate translate".split(" "),R="none url blur brightness contrast drop-shadow grayscale hue-rotate invert opacity saturate sepia".split(" "),L=window.requestAnimationFrame||window.webkitRequestAnimationFrame||
window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||null;L||(L=function(a){window.setTimeout(a,16)});var M=0,X={d:97,fill:48,fillOpacity:16,filter:80,height:33,opacity:16,stroke:48,strokeDasharray:64,strokeDashoffset:32,strokeOpacity:16,strokeWidth:32,transform:1,width:33},K=!1,A=(new Date).getTime(),x=[];W.prototype={j:function(a){var b=!1;if(null!==this.b){var c=this.c();null!==c&amp;&amp;c&gt;=this.g?(b=!0,a?this.a=c:this.a=this.i?Math.max(this.i,this.g):this.g):
null!==c&amp;&amp;(a&amp;&amp;null!==this.a&amp;&amp;(this.b=A-this.a/1),this.a=null)}this.i=this.c();return b},F:function(a){a&amp;&amp;(this.h&amp;&amp;(this.h=!1,null===this.b&amp;&amp;(null!==this.a?(this.b=A-this.a/1,this.a=null):this.b=A)),null===this.a&amp;&amp;null!==this.b&amp;&amp;this.j(!1)&amp;&amp;(this.l=!0));a=this.c();if(null===a)return!1;for(var b=this.v,c=this.o,d=0;d&lt;b.length;++d){for(var e=b[d],k=!1,h=0;h&lt;c[d].length;++h){var f=c[d][h],g=f[0];if(null!==g){var l=f[2];var q=f[4].length,n=f[4][q-1]-l;l=0==n?f[5][q-1]:a&lt;=l?f[5][0]:a&gt;=l+f[3]?0==f[3]%n?
f[5][q-1]:S(f[3]%n,f):S((a-l)%n,f);0==g?(e._ks.mpath=f[8],e._ks.transform[g]=l,k=!0):14&gt;=g?(e._ks.transform[g]=l,k=!0):(l=Z(f[1]&amp;240,l),f[1]&amp;1?e.setAttribute(g,l):e.style[g]=l)}}if(k){V(e);k=e._ks.transform;h="";if(f=e._ks.mpath)l=k[0]*f[2]/100,g=f[1].getPointAtLength(l),h="translate("+g.x+","+g.y+") ",f[0]&amp;&amp;(.5&gt;l?(l=g,g=f[1].getPointAtLength(.5)):l=f[1].getPointAtLength(l-.5),h+="rotate("+180*Math.atan2(g.y-l.y,g.x-l.x)/Math.PI+") ");for(f=1;f&lt;k.length;++f)g=k[f],g!=(10==f||11==f?1:0)&amp;&amp;(h+=" "+da[f]+
"(",h=2&gt;=f?h+(1==f?g+",0":"0,"+g):13&lt;=f?h+(13==f?g+",0":"0,"+g):10&lt;=f?h+(10==f?g+",1":"1,"+g):h+g,h+=")");e.setAttribute("transform",h)}}return"running"==this.B()},s:function(){if(!this.A){this.A=!0;for(var a=this.v,b=this.o,c=0;c&lt;a.length;++c)for(var d=a[c],e=!1,k=0;k&lt;b[c].length;++k){var h=b[c][k][0];14&gt;=h?d._ks.G||(V(d),d._ks.G=d._ks.transform.slice()):(d._ks.m||(d._ks.m={}),z(d._ks.m[h])||(e||(e=getComputedStyle(d)),d._ks.m[h]=O(h)&amp;1?d.getAttribute(h):e[h]))}}},play:function(a){z(a)&amp;&amp;this.u(a,
!0);if(!this.f)return this;a=this.c();if(null===a||0&gt;a||a&gt;=this.g)this.a=0;if(null===this.a)return this;this.b=null;this.h=!0;this.s();Q();return this},pause:function(a){z(a)&amp;&amp;this.u(a,!0);if(!this.f||"paused"==this.B())return this;z(a)||P();a=this.c();null===a&amp;&amp;(this.a=0);null!==this.b&amp;&amp;null===this.a&amp;&amp;(this.a=a);this.b=null;this.h=!1;this.j(!1);this.s();J(!1);return this},c:function(){return null!==this.a?this.a:null===this.b?null:1*(A-this.b)},u:function(a,b){N(a);b&amp;&amp;P();null!==a&amp;&amp;(this.s(),null!==
this.a||null===this.b?(this.a=a,J(!1)):this.b=A-a/1,this.f||(this.b=null),this.i=null,this.j(!0),Q())},I:function(){return this.c()},time:function(a){return z(a)?(this.f&amp;&amp;this.u(a,!0),this):this.I()},startTime:function(a){if(z(a)){N(a);if(!this.f)return this;this.i=this.c();this.b=a;null!==a?this.a=null:this.a=this.i;this.h=!1;this.j(!0);J(!1);Q();return this}return this.D?this.D[0].startTime:this.b},B:function(){var a=this.c();return this.h?"running":null===a?"idle":null===this.b?"paused":a&gt;=this.g?
"finished":"running"}};return{setmptr:function(a){for(var b in a){var c=document.getElementById(b);c._ks||(c._ks={});c._ks.w=a[b]}},animate:function(){if(0&lt;x.length)throw"data already set";var a={};if(1==arguments.length%2){a=arguments[arguments.length-1];var b={};for(c in a)b[c]=a[c];a=b}var c=new W(a);a=arguments;for(var d=b=0;d&lt;a.length-1;d+=2){var e=a[d];var k=e instanceof Element?e:document.getElementById(e.substring(1));if(!k)throw"invalid target: "+e;e=k;k=a[d+1];e._ks||(e._ks={H:M},++M);for(var h=
[],f=0;f&lt;k.length;++f){var g=k[f],l=G(g,"p","property");14&gt;=l||-1==l.indexOf("-")||(l=null);var q=O(l);q||(q=0);var n=G(g,"t","times");if(!n||2&gt;n.length)throw"not enough times";n=n.slice();if(!isFinite(n[0])||0&gt;n[0])throw"bad time: "+n[0];for(var y=1;y&lt;n.length;++y)if(!isFinite(n[y])||0&gt;n[y]||n[y]&lt;n[y-1])throw"bad time: "+n[y];y=n[0];var w=n[n.length-1]-y,A=g.iterations||0;1&gt;A&amp;&amp;(A=1);w*=A;b&lt;w+y&amp;&amp;(b=w+y);var t=G(g,"v","values");if(!t||t.length!=n.length)throw"values don't match times";t=t.slice();
for(var B=l,m=t,H=O(B)&amp;240,p=0;p&lt;m.length;++p)if(96==H){for(var F=m[p].substring(6,m[p].length-2).match(/[A-DF-Za-df-z][-+0-9eE., ]*/ig),I=[],r=0;r&lt;F.length;++r){I.push(F[r][0]);for(var u=1&lt;F[r].trim().length?F[r].substring(1).split(","):[],E=0;E&lt;u.length;++E)u[E]=parseFloat(u[E]);I.push(u)}m[p]=I}else if(48==H)v(m[p],"#")?m[p]=parseInt(m[p].substring(1),16):v(m[p],"url(")||"none"==m[p]||(console.warn("unsupported color: "+m[p]),m[p]=0);else if(80==H){F=m;I=p;r=m[p];if("none"==r)r=[0];else{u=[];for(var C=
r.indexOf("(");0&lt;C;)if(E=R.indexOf(r.substring(0,C)),0&lt;=E){u.push(E);var D=r.indexOf(") ");0&gt;D&amp;&amp;(D=r.length-1);C=r.substring(C+1,D).split(" ");5==E?(u.push(parseFloat(C[0])),u.push(parseFloat(C[1])),u.push(parseFloat(C[2])),u.push(ca(C[3]))):1==E?u.push(C[0]):u.push(parseFloat(C[0]));r=r.substring(D+1).trim();C=r.indexOf("(")}else break;r=u}F[I]=r}else 64==H?"none"!=m[p]?/^[0-9 .]*$/.test(m[p])?m[p]=U(m[p]," "):(console.warn("unsupported value: "+m[p]),m[p]=[0]):m[p]=[0]:32==H?(N(m[p]),m[p]=parseFloat(m[p])):
0===B&amp;&amp;(m[p]=parseFloat(m[p]));B=G(g,"e","easing");m=n.length;for(B||(B=[]);B.length&lt;m;)B.push([1,0,0,.58,1]);for(m=0;m&lt;B.length;++m)B[m]=ba(B[m]);q=[l,q,y,w,n,t,B,A];n=G(g,"m","motionPath");z(n)&amp;&amp;0===l&amp;&amp;(q[8]=[],q[8][0]=g.motionRotate,g=document.createElementNS("http://www.w3.org/2000/svg","path"),n||(n="M0,0"),g.setAttribute("d",n),q[8][1]=g,q[8][2]=g.getTotalLength());h.push(q)}0&lt;h.length&amp;&amp;(c.v.push(e),c.o.push(h))}c.g=b;!1===c.f&amp;&amp;(x.push(c),c.f=!0,!1!==c.C.autoplay&amp;&amp;c.play());return c},_priv_list:function(){return x.slice()},
play:function(){return x[0]?x[0].play():this},pause:function(){return x[0]?x[0].pause():this},time:function(a){return x[0]?x[0].time(a):z(a)?this:null}}}();
document.ks=ks;(function(ks){
ks.animate("#Path-7",[{p:'strokeDashoffset',t:[0,1500,3500,6000],v:[525,525,0,0],e:[[0],[0],[0],[0]]}],
"#Path-2",[{p:'strokeDashoffset',t:[0,3500,5500,6000],v:[555,555,0,0],e:[[0],[0],[0],[0]]}],
"#Oval",[{p:'opacity',t:[0,500,6000],v:[0,1,1],e:[[0],[0],[0]]}],
"#Oval-Copy",[{p:'opacity',t:[0,500,1000,6000],v:[0,0,1,1],e:[[0],[0],[0],[0]]}],
"#Oval-Copy-2",[{p:'opacity',t:[0,1000,1500,6000],v:[0,0,1,1],e:[[0],[0],[0],[0]]}],
{autoplay:document.location.search.substr(1).split('&amp;').indexOf('autoplay=false')&lt;0})
})(ks);
</script>
</svg>
          
          </div>
         <!-- /.shipper-page-animation-svg -->
            <div class="benefit-container">
                <h2 class="section-headline"><?php the_field('bb_headline'); ?></h2>
                <?php if( have_rows('bb_text_block') ):  while ( have_rows('bb_text_block') ) : the_row(); ?>
                <div class="benefit-cloumn">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <?php the_sub_field('text'); ?>
                </div><!--benefit cloumn-->
                <?php endwhile;endif;wp_reset_postdata(); ?> 
                <div class="clear"></div>
                <div class="benefit-icon-container">
                <?php if( have_rows('bb_bullet_block') ):  while ( have_rows('bb_bullet_block') ) : the_row(); ?>
                	<div class="icon-cloumn">
                        <div class="benefit-icon"><img src="<?php the_sub_field('icon'); ?>" alt="Collaboration"></div>
                        <div class="icon-title"><?php the_sub_field('title'); ?></div>
                        <div class="clear"></div>
                    </div><!--icon-cloumn-->
                <?php endwhile;endif;wp_reset_postdata(); ?> 
                    <div class="clear"></div>
                </div><!--benefit-icon-container-->
            </div><!--benefit-container-->
        </div><!--wrapper-->
    </section>
<section>
    <div class="map-container">
        <div class="big-wrapper">
            <h2 class="map-heading"><?php the_field('tpb_headline'); ?></h2>
        </div><!--big wrapper-->
        <div class="map-area">
            <!-- <img src="<?php the_field('tpb_bg'); ?>" alt=""> -->
            <!-- <iframe src="<?php echo get_template_directory_uri().'/assets/map/map.html' ?>" width="100%" height="400"></iframe> -->
        </div>
        <div class="clear"></div>
    </div><!--map container-->
</section>
<?php get_footer(); ?>