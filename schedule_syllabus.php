<?php $thisPage="schedule_syllabus"; ?>


<? include ("header.php") ?>

<article>
	<div id="title">
		<p>Schedule and Readings</p>
		<ul>
			<li>The schedule and assignments are tentative and subject to change. Check back here often!</li>
			<li>We are using the Tepper calendar; note that the start and end dates for classes is quite different from the rest of the university.</li>
			<li>The readings are due on the date noted.</li>
			<li>Required text: (<a href="">see note about this text!</a>):</li>
		</ul>
	</div>

	<div id="today">
		<div id="today-button">
			<a href="#<?php $week = date('W'); echo "$week"; ?>">This week</a>
		</div>
		<div id="arrow" class="pointUp">
		</div>
	</div>
	
	<div id="schedule">
		<div id="days">
			<span>Monday</span>
			<span>Wednesday</span>
		</div>
		<div id="days-placeholder"></div>
		<div class="week first-week" id="44">
			<div class="day">
				<div class="date right-border">
					<h2>October 27</h2>
				</div><div class="readings">
					<p>Why is UI Design Important and Why Is It Difficult?</p>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 1</li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Brad A. Myers. "Challenges of HCI Design and Implementation," ACM Interactions. vol. 1, no. 1. January, 1994. pp. 73-83. <a href="http://www.cs.cmu.edu/~amulet/papers/whyhardinteractions.pdf" target="_blank">PDF</a></li>
						<li>CD Text, Chapter 1</li>
						<li>Nielsen Text: Chapters 1, 2</li>
					</ul>
				</div>
			</div><div class="day">
				<div class="date">
					<h2>October 29</h2>
				</div><div class="readings">
					<p>Discovering what people can't tell you: Contextual Inquiry and Design Methodology</p>

					<h4>Activities</h4>
					<ul>
						<li>Do <a>Homework 0</a> in class</li>
						<li>Start on <a>Homework 1</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 3</li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>CD Text, Chapters 5-7</li>
						<li>Karen Cross, Adrienne Warmack, and Brad Myers. "Lessons Learned: Using Contextual Inquiry Analysis to Improve PDA Control of Presentations". Unpublished. <a href="http://www.cs.cmu.edu/~pebbles/papers/pebblesslideshowci.pdf">PDF</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="week" id="45">
			<div class="day">
				<div class="date right-border">
					<h2>November 3</h2>
				</div><div class="readings">
					<p>Contextual Analysis/Design Methodology, cont.</p>

					<h4>Activities</h4>
					<ul>
						<li><a href="http://www.cs.cmu.edu/~bam/uicourse/EHCIcontexualinquiry.mpg">Movie (88.5 MB)</a> for in-class CI demonstration (mpeg file)</li>
						<li><a href="http://www.cs.cmu.edu/~bam/uicourse/EHCIcontexualinquiryScreens.ppt">Powerpoint slides</a> of main points in the video</li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 6</li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapters 4, 17</li>
						<li>CD Text, chapters 8-10</li>
					</ul>
				</div>
			</div><div class="day">
				<div class="date">
					<h2>November 5</h2>
				</div><div class="readings">
					<p>From Analysis to Design: Sketching and Prototyping</p>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 1</a></li>
						<li>Start on <a>Homework 2</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 7, 8, 11</li>
						<li>Bill Buxton, "What Sketches (and Prototypes) Are and Are Not", in CHI 2006 One-Day Workshop on "Sketching" Nurturing Creativity: Commonalities in Art, Design, Engineering and Research, Sunday, April 23, 2006, Montreal, Canada. 2 pages. <a href="http://www.cs.cmu.edu/~bam/uicourse/Buxton-SketchesPrototypes.pdf">Local PDF</a></li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 5, 15</li>
						<li>Norman book (all chapters)</li>
						<li>Nielsen's text, Chapter 4</li>
						<li>Marc Rettig, "Prototyping for tiny fingers", Communications of the ACM, Volume 37 , Issue 4 (April 1994), Pages: 21 - 27. Unpublished. <a href="http://www.cs.cmu.edu/~bam/uicourse/630spring04/rettigOnPrototyping.pdf">PDF</a></li>
						<li>Brad Myers, Sun Young Park, Yoko Nakano, Greg Mueller, Andrew Ko, "How Designers Design and Prototype Interactive Behaviors". 2008 IEEE Symposium on Visual Languages and Human-Centric Computing, VL/HCC'08. Sept 15-18, 2008, Herrsching am Ammersee, Germany. pp. 177-184. <a href="http://www.cs.cmu.edu/~NatProg/papers/vlhcc-survey-mm7_1_paper_26.pdf">Local PDF</a> (See also the <a href="http://www.surveymonkey.com/s.aspx?sm=JXMRCz7stE6a041U5fhhlw_3d_3d">original survey</a>.)</li>
						<li>Bill Buxton, Principal Researcher at Microsoft Research, videotape of his talk on "Sketching and Experience Design", June 1, 2007, for the Stanford University Human-Computer Interaction Seminar (CS 547). <a href="https://www.youtube.com/watch?v=xx1WveKV7aE">Video (1 hr, 30 min)</a></li>
						<li>Bill Buxton, Sketching User Experiences: Getting the Design Right and the Right Design. San Francisco, CA, Morgan Kaufmann. 2007. <a href="http://www.amazon.com/Sketching-User-Experiences-Interactive-Technologies/dp/0123740371">Amazon</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="week" id="46">
			<div class="day">
				<div class="date right-border">
					<h2>November 10</h2>
				</div><div class="readings">
					<p>How to Design a Good Usability Evaluation</p>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapters 12, 14</li>
						<li>James Hom, "The Usability Methods Toolbox". Online in <a href="http://usability.jameshom.com/" target="_blank">HTML</a>. In particular, sections: <a href="http://usability.jameshom.com/general.htm" target="_blank">General Concepts of Usability Testing</a> and <a href="http://usability.jameshom.com/thnkalod.htm" target="_blank">Thinking Aloud Protocol</a>.</li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapters 16, 18</li>
						<li>Nielsen's text: Chapters 6, 7</li>
						<li>CD Text: Chapters 17-20</li>
						<li>Kathleen Gomoll, "Some Techniques for Observing Users," From The Art of Human-Computer Interface Design, Brenda Laurel, ed. New York: Addison-Wesley Publishing Company, Inc., 1992. pp. 85- 90. <a href="http://www.cs.cmu.edu/~bam/uicourse/630spring04/gomoll.pdf" target="_blank">PDF</a></li>
					</ul>
				</div>
			</div><div class="day">
				<div class="date">
					<h2>November 12</h2>
				</div><div class="readings">
					<p>Graphic and Interaction Design for User Interfaces</p>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 2</a></li>
						<li>Start <a href="">Homework 3</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 17</li>
					</ul>

					<h4>Guest Lecture</h4>
					<ul>
						<li>By <a href="http://www.cs.cmu.edu/~spdow/">TBD</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="week" id="47">
			<div class="day">
				<div class="date right-border">
					<h2>November 17</h2>
				</div><div class="readings">
					<p>Implementing a Wireframe Prototype: Overview of Using PowerPoint, Adobe Illustrator, Adobe Fireworks, Balsamiq, OmniGraffle, html, etc.</p>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 3</a></li>
						<li>Start <a href="">Homework 4</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapters 9</li>
					</ul>

				</div>
			</div><div class="day">
				<div class="date">
					<h2>November 19</h2>
				</div><div class="readings">
					<p>Evaluation using Heuristic Analysis</p>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 10, 13, 22</li>
						<li>Jakob Nielsen, Heuristic Evaluation. On line in <a href="http://www.nngroup.com/topic/heuristic-evaluation/">HTML</a>. Includes <a href="http://www.nngroup.com/articles/ten-usability-heuristics/">List of 10 Heuristics</a>.</li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Nielsen Text: Chapter 5</li>
						<li>Jakob Nielsen, "Guerrilla HCI: Using Discount Usability Engineering to Penetrate the Intimidation Barrier", Cost-Justifying Usability, edited by Randolph G. Bias and Deborah J. Mayhew. On line in <a href="http://www.nngroup.com/articles/guerrilla-hci/">HTML</a></li>
						<li>Rolf Molich and Jakob Nielsen. "Improving a human-computer dialogue", Communications of the ACM, March 1990. Volume 33 Issue 3. pp. 338 - 348. <a href="http://portal.acm.org/citation.cfm?doid=77481.77486">ACM DL PDF</a></li>
						<li>John D. Gould and Clayton Lewis. "Designing for usability: key principles and what designers think," Communications of the ACM. Volume 28 , Issue 3 (March 1985), pp. 300 - 311. <a href="http://portal.acm.org/citation.cfm?doid=1520340.1520434">ACM DL PDF</a></li>
						<li>Jakob Nielsen and Rolf Molich. "Heuristic evaluation of user interfaces," Proceedings CHI'90, Human factors in computing systems, 1990. Seattle, Washington <a href="http://portal.acm.org/citation.cfm?doid=97243.97281">ACM DL PDF</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="week" id="48">
			<div class="day">
				<div class="date right-border">
					<h2>November 24</h2>
				</div><div class="readings">
					<p>Usability Engineering Process</p>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 4</a></li>
						<li>Start <a href="">Homework 5</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapter 19</li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Chapters 2, 21, 23, 24</li>
						<li>Nielsen's text: Chapters 6, 7</li>
						<li>CD Text: Chapters 2-4</li>
						<li>John D. Gould and Clayton Lewis. "Designing for usability: key principles and what designers think," Communications of the ACM. Volume 28 , Issue 3 (March 1985), pp. 300 - 311. <a href="http://dl.acm.org/citation.cfm?doid=1520340.1520434">ACM DL PDF</a></li>
						<li>Budwig, M., Jeong, S. and Kelkar, K. When user experience met agile: a case study. In Proceedings of CHI'2009: The 27th international conference extended abstracts on Human factors in computing systems (Boston, MA, USA, 2009). ACM, 3075-3084. <a href="http://dl.acm.org/citation.cfm?doid=1520340.1520434">ACM DL PDF</a></li>
					</ul>

				</div>
			</div><div class="day">
				<div class="date">
					<h2>November 26</h2>
				</div><div class="readings">
					<p>(No class - University Holiday: Thanksgiving)</p>
				</div>
			</div>
		</div>

		<div class="week" id="38">
			<div class="day">
				<div class="date right-border">
					<h2>December 1</h2>
				</div><div class="readings">
					<p>Designing for the Web</p>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 5</a></li>
						<li>Start <a href="">Homework 6</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Sidebar on pp. 51-53 in section 2.1.3</li>
						<li><a href="http://www.nngroup.com/articles/top-ten-guidelines-for-homepage-usability/" target="_blank">Top Ten Guidelines for Homepage Usability</a></li>
						<li><a href="http://www.nngroup.com/articles/top-10-mistakes-web-design/" target="_blank">Top Ten Mistakes in Web Design</a></li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Nielsen Text: Chapters 11-16</li>
					</ul>

				</div>
			</div><div class="day">
				<div class="date">
					<h2>December 3</h2>
				</div><div class="readings">
					<p>International and Handheld User Interfaces</p>

					<h4>Course Evaluation Day. Please fill out both:</h4>
					<ul>
						<li>The official CMU course evaluation: <a href="http://cmu.onlinecourseevaluations.com" target="_blank">http://cmu.onlinecourseevaluations.com</a> or <a href="https://student-4k.tepper.cmu.edu/student/" target="_blank">Tepper evaluation</a> (if you are in 46-863)</li>
						<li><a href="https://www.surveymonkey.com/s/DDG5LH9" target="_blank">The class-specific questionnaire</a></li>
					</ul>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 5</a></li>
						<li>Start <a href="">Homework 6</a></li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: Sidebar on pp. 104-106 in section 3.3.1, Sidebar on pp. 690-691 in section 22.1.1</li>
						<li><a href="http://www.nngroup.com/articles/international-sites-requirements/" target="_blank">International Sites: Minimum Requirements</a></li>
						<li><a href="http://www.nngroup.com/articles/mobile-usability-update/" target="_blank">Mobile Usability</a></li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Nielsen Text: Chapter 9</li>
					</ul>

				</div>
			</div>
		</div>

		<div class="week" id="50">
			<div class="day">
				<div class="date right-border">
					<h2>December 8</h2>
				</div><div class="readings">
					<p>Guest lecture: Interaction Design: Perspective from a local professional</p>

					<h4>Activities</h4>
					<ul>
						<li>Turn in <a href="">Homework 6</a></li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Heather L. McQuaid David Bishop, "An Integrated Method for Evaluating Interfaces", Published in the Usability Professionals’ Association 2001 Conference Proceedings. <a href="http://www.maya.com/file_download/10/maya_evaluating_interfaces.pdf">PDF</a>
(article including the discussion of the "Cost-Benefit Chart" with 4 quadrants)</li>
					</ul>

				</div>
			</div><div class="day">
				<div class="date">
					<h2>December 10</h2>
				</div><div class="readings">
					<p>Other HCI Methods: Cultural Probes, Diary Studies, Card Sorting, "Body Storming", Keystroke Model, "Speed Dating", Cognitive Walkthroughs, Cognitive Dimensions, etc.</p>

					<h4>Activities</h4>
					<ul>
						<li>Last day to turn in late homeworks</li>
					</ul>

					<h4>Required Readings</h4>
					<ul>
						<li>Hartson-Pyla text: 1.6.5, 6.6.4, 6.12, 7.5</li>
						<li>Scott Davidoff, Min Kyung Lee, Anind K. Dey, and John Zimmerman. 2007. Rapidly exploring application design through speed dating. In Proceedings of the 9th international conference on Ubiquitous computing (UbiComp '07), Springer-Verlag, Berlin, Heidelberg, 429-446. <a href="http://citeseer.uark.edu:8080/citeseerx/viewdoc/download;jsessionid=A7B05B80990F9DFE9DE6DD039A3A8773?doi=10.1.1.120.5908&rep=rep1&type=pdf" target="_blank">PDF</a></li>
					</ul>

					<h4>Recommended Readings</h4>
					<ul>
						<li>Nielsen Text: Chapter 7</li>
						<li>Bill Gaver, Tony Dunne, &amp; E Pacenti, Design: Cultural Probes, ACM Interactions. vol. 6, no. 1, 1999, pp. 21-29. <a href="http://dl.acm.org/citation.cfm?id=291235" target="_blank">ACM DL PDF</a></li>
						<li>John, B. E. (2003) "Information processing and skilled behavior." Chapter 4 In J. M. Carroll, (Ed.), Toward a multidisciplinary science of human computer interaction. Morgan Kaufman. pp. 55-101. <a href="http://www.cs.cmu.edu/~bam/uicourse/08763fall14/cmuonly/John_Chap4InfoProcWithCompleteFigures.pdf" target="_blank">Local CMU-only copy</a> (GOMS, KLM)</li>
						<li>Marion Buchenau and Jane Fulton Suri. 2000. "Experience prototyping." In Proceedings of the 3rd conference on Designing interactive systems: processes, practices, methods, and techniques (DIS '00), pp. 424-433. <a href="http://dl.acm.org/citation.cfm?doid=347642.347802" target="_blank">ACM DL PDF</a> (Bodystorming)</li>
						<li>Clayton Lewis and John Rieman, "4.1. Cognitive Walkthroughs", in Task-Centered User Interface Design; A Practical Introduction (on-line book), 1994. <a href="http://hcibib.org/tcuid/chap-4.html#4-1" target="_blank">HTML</a></li>
						<li>T. R. G. Green and M. Petre. Usability analysis of visual programming environments: A ‘cognitive dimensions’ framework. Journal of Visual Languages and Computing, 7:131-174, 1996. <a href="http://citeseerx.ist.psu.edu/viewdoc/download;jsessionid=369752648A1E3283515477649BFE53BD?doi=10.1.1.22.1477&rep=rep1&type=pdf">PDF</a></li>
					</ul>

				</div>
			</div>
		</div>

		<div class="week" id="51">
			<div class="date">
				<h2>Final Exam: Tentatively, Friday December 12 or Monday, December 15 </h2>
			</div><div class="readings">
				<p>This class will have a final exam. It will be given twice, to accommodate both the "normal" and the Tepper calendars. Anyone can go to either exam time, and you do not need to let me know which one you will attend. Note that the last two lectures are after the official end of classes for "normal" courses so you don't want to leave before the evening of Friday, Dec. 12, 2014.</p>
				<p>Distance students will take the exam sometime between Dec 12 - Dec 15, to be determined.</p>
			</div>
		</div>

	</div>

</article>


<? include ("footer.php") ?>