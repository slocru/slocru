<?php
$links = array(
    'Cru Press Green' => array(
        'href' => 'http://www.crupressgreen.com',
        'desc' => 'Get resources for Bible studies, discipleship, new believers, and more.'
    ),
    'National Cru Resources' => array(
        'href' => 'http://www.cru.org/training-and-growth/index.htm',
        'desc' => 'Resources for training & growth from the main cru site.'
    ),
    'MeetTheProf' => array(
        'href' => 'http://meettheprof.com/university/california-polytechnic-state-university-san-luis-obispo/',
        'desc' => 'Find professors who are following Christ.'
    ),
    'Podcasts' => array(
        'href' => 'https://itunes.apple.com/us/podcast/slo-crusade/id337947386?mt=2',
        'desc' => 'Listen to recordings of past meetings.'
    ),
    'Livestream' => array(
        'href' => 'https://www.livestream.com/slocrusade',
        'desc' => 'Watch the weekly meeting live.'
    )
);

$pdf_path = '../assets/resources/pdf/';
$downloads = array(
    'Articles' => array(
        'Annotated Send Model' => $pdf_path . 'Annotated_Send_Model.pdf',
        'Biblical Career Principals' => $pdf_path . 'Biblical_Career_Principals_By_Navigator.pdf',
        'Discerning God\'s Will' => $pdf_path . 'Discerning_Gods_Will_by_Youth_Specialties.pdf',
        'Discipleship "How To"' => $pdf_path . 'Discipleship_Howto.pdf',
        'Keith Davy\'s Guidance Letter' => $pdf_path . 'Keith_Davy_Guidance_Letter.pdf',
        'Live Life on a Mission: The 5 Things' => $pdf_path . '5_Things_College.pdf',
        'Practical Steps to Guidance' => $pdf_path . 'Practical_Steps_to_Guidance.pdf'
    ),
    'Studies' => array(
        'Discerning God\'s Will' => $pdf_path . 'Discerning_Gods_Will_Bible_Study.pdf',
        'Prayer' => $pdf_path . 'Bible_Study_On_Prayer.pdf'
    )
);

$prayer = array(
    'Lectio Divina' => $pdf_path . 'Lectio_Divina.pdf',
    'Prayer of Examen' => $pdf_path . 'Prayer_of_Examen.pdf',
    '6 Vital Questions about Prayer' => 'http://www.cru.org/training-and-growth/devotional-life/7-steps-to-fasting/07-six-vital-questions-prayer.htm',
    'The Purpose of Prayer' => 'http://www.cru.org/training-and-growth/classics/10-basic-steps/4-prayer/index.htm'
);
$fasting = array(
    'Abiding Through Fasting' => $pdf_path . 'Abiding_Through_Fasting.pdf',
    'Prayer and Fasting' => $pdf_path . 'Prayer_and_Fasting.pdf',
    'Your Guide to Fasting and Prayer' => 'http://www.cru.org/training-and-growth/devotional-life/7-steps-to-fasting/01-personal-guide.htm',
    '7 Basic Steps to Fasting and Prayer' => 'http://www.cru.org/training-and-growth/devotional-life/personal-guide-to-fasting/01-message-from-bill-bright.htm',
    'What is the Purpose of Fasting?' => 'http://www.desiringgod.org/interviews/what-is-the-purpose-of-fasting',
    'Hunger for God' => 'http://www.desiringgod.org/seminars/hunger-for-god-session-3',
    'Book: Celebration of Discipline by Richard J Foster' => 'http://www.amazon.com/Celebration-Discipline-Path-Spiritual-Growth/dp/0060628391'
)
?>

<div class="container top">
    <div class="box">
        <div class="text" id="housing">
            <p class="housing" id="line1">LOOKING FOR A ROOMMATE?</p>
            <p class="housing" id="line2">You're not the only one.</p>
            <p class="housing" id="line3">Check out the <span class="housing">HOUSING BOARD</span></p>
        </div>
    </div>
    <img src="../../assets/img/computerguy.jpg" class="picture"/> 
</div>
<div class="container title">
    <p class="title-heading">RESOURCES FOR SPIRITUAL GROWTH</p>
</div>
<div class="container bottom">
    <div class="shift">
        <div class="column resources">
            <p class="headings">RECOMMENDED SITES</p>
            <div class="sites">
                <?php
                foreach ($links as $name => $parts) {
                    echo '<a href="' . $parts['href'] . '">' . $name . '</a>';
                    echo '<p>';
                    echo $parts['desc'];
                    echo '</p>';
                }
                ?>
            </div>
        </div>
        <div class="column resources">
            <p class="headings">GUIDES</p>
            <div class="guides">
                <p class="subheadings">Prayer</p>
                <p class="subheadings">Fasting</p>
            </div>
        </div>
        <div class="column resources">
            <p class="headings">DOWNLOAD NOW</p>
            <div class="downloads">
                <?php
                foreach ($downloads as $title => $files) {
                    echo '<p class="subheadings">' . $title . '</p>';
                    foreach ($files as $name => $path) {
                        echo '<a class="links" href="' . $path . '">' . $name . '</a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('javascript'); ?>