<?php

use App\Course;
use App\Lesson;
use App\Test;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');

		$this->command->info('User table seeded!');

		$this->call('CourseTableSeeder');

		$this->command->info('Course table seeded!');

		$this->call('LessonTableSeeder');

		$this->command->info('Lesson table seeded! :)');

		$this->call('TestTableSeeder');

		$this->command->info('Test table seeded!');

	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'email'     => 'rolands.zeltins@gmail.com',
			'password'  => '123123',
			'name'      => 'Rolands',
			'surename'  => 'Zeltiņš',
			'phone'     => '+37127831183',
			'country'   => 'Latvija',
			'city'      => 'Ogre'
		]);

		User::create([
			'email'     => 'rolands.zeltins@gmail.lv',
			'password'  => '123123',
			'name'      => 'Rolands',
			'surename'  => 'Zeltiņš',
			'phone'     => '+37127831181',
			'country'   => 'Latvija',
			'city'      => 'Lielvārde'
		]);
		User::create([
			'email'     => 'janis.celherts@gmail.com',
			'password'  => '123123',
			'name'      => 'Jānis',
			'surename'  => 'Celherts',
			'phone'     => '+37127831185',
			'country'   => 'Latvija',
			'city'      => 'Liepāja'
		]);
		User::create([
			'email'     => 'toms.tidemanis@gmail.com',
			'password'  => '123123',
			'name'      => 'Toms',
			'surename'  => 'Tīdemanis',
			'phone'     => '+37127831113',
			'country'   => 'Latvija',
			'city'      => 'Rīga'
		]);
		User::create([
			'email'     => 'zane.zelta@gmail.com',
			'password'  => '123123',
			'name'      => 'Zane',
			'surename'  => 'Zeltiņa',
			'phone'     => '+3712721183',
			'country'   => 'Latvija',
			'city'      => 'Ogre'
		]);

	}

}

class CourseTableSeeder extends Seeder {

	public function run()
	{
		DB::table('courses')->delete();

		Course::create([
			'course_title'     => 'New borns',
			'course_body'      => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid Zeno? Quis hoc dicit? Sint ista Graecorum; Bonum valitudo: miser morbus. </p>

",
			'course_excerpt'   => 'Lessons for newborns'
		]);

		Course::create([
			'course_title'     => 'Prayer & Fasting',
			'course_body'      => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur deinde Metrodori liberos commendas? Graece donan, Latine voluptatem vocant. At certe gravius. Haec dicuntur fortasse ieiunius; <b>Sit enim idem caecus, debilis.</b> Istam voluptatem, inquit, Epicurus ignorat? </p>

",
			'course_excerpt'   => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Et quidem, inquit, vehementer errat;</b> Ego vero isti, inquam, permitto. Duo Reges: constructio interrete. </p>

"
		]);
		Course::create([
			'course_title'     => 'Managing Gods finances',
			'course_body'      => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Cur post Tarentum ad Archytam?</i> Quid ait Aristoteles reliquique Platonis alumni? </p>

",
			'course_excerpt'   => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid iudicant sensus? Urgent tamen et nihil remittunt. </p>

"
		]);
		Course::create([
			'course_title'     => 'Loving marriage',
			'course_body'      => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Poterat autem inpune; Ratio enim nostra consentit, pugnat oratio. Quo modo? <mark>Pugnant Stoici cum Peripateticis.</mark> </p>

",
			'course_excerpt'   => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At hoc in eo M. <i>Duo Reges: constructio interrete.</i> </p>

"
		]);
		Course::create([
			'course_title'     => 'Discipleship',
			'course_body'      => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Cur post Tarentum ad Archytam?</i> Quid ait Aristoteles reliquique Platonis alumni? </p>

",
			'course_excerpt'   => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At hoc in eo M. <i>Duo Reges: constructio interrete.</i> </p>

"
		]);

	}

}


class LessonTableSeeder extends Seeder {

	public function run()
	{
		DB::table('lessons')->delete();

		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson One',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Sint modo partes vitae beatae.</b> De bona autem fama-quam enim appellant eÈdoj¤an, aptius est bonam famam hoc loco appellare quam gloriam-Chrysippus quidem et Diogenes detracta utilitate ne digitum quidem eius causa porrigendum esse dicebant; Vidit Homerus probari fabulam non posse, si cantiunculis tantus irretitus vir teneretur; Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret. Scio enim esse quosdam, qui quavis lingua philosophari possint; Quamquam id quidem licebit iis existimare, qui legerint. Duo Reges: constructio interrete. Quibus rebus vita consentiens virtutibusque respondens recta et honesta et constans et naturae congruens existimari potest. </p>

<dl>
	<dt><dfn>Stoici scilicet.</dfn></dt>
	<dd>Deinde disputat, quod cuiusque generis animantium statui deceat extremum.</dd>
	<dt><dfn>Sed nimis multa.</dfn></dt>
	<dd>Est, ut dicis, inquam.</dd>
</dl>


<p><b>At certe gravius.</b> Itaque idem natura victus, cui obsisti non potest, dicit alio loco id, quod a te etiam paulo ante dictum est, non posse iucunde vivi nisi etiam honeste. <i>Nemo igitur esse beatus potest.</i> <b>Quare attende, quaeso.</b> <a href='http://loripsum.net/' target='_blank'>Quae sequuntur igitur?</a> Quae cum ita sint, effectum est nihil esse malum, quod turpe non sit. Tuo vero id quidem, inquam, arbitratu. </p>

<ol>
	<li>Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus?</li>
	<li>Quid, quod homines infima fortuna, nulla spe rerum gerendarum, opifices denique delectantur historia?</li>
	<li>Et nunc quidem quod eam tuetur, ut de vite potissimum loquar, est id extrinsecus;</li>
</ol>


<p>Quoniamque non dubium est quin in iis, quae media dicimus, sit aliud sumendum, aliud reiciendum, quicquid ita fit aut dicitur, omne officio continetur. <mark>Suo genere perveniant ad extremum;</mark> <i>Sedulo, inquam, faciam.</i> Obsequar igitur voluntati tuae dicamque, si potero, rhetorice, sed hac rhetorica philosophorum, non nostra illa forensi, quam necesse est, cum populariter loquatur, esse interdum paulo hebetiorem. Alteri negant quicquam esse bonum, nisi quod honestum sit, alteri plurimum se et longe longeque plurimum tribuere honestati, sed tamen et in corpore et extra esse quaedam bona. <a href='http://loripsum.net/' target='_blank'>Vide, quaeso, rectumne sit.</a> Quis est enim, qui hoc cadere in sapientem dicere audeat, ut, si fieri possit, virtutem in perpetuum abiciat, ut dolore omni liberetur? Quoniam igitur, ut medicina valitudinis, navigationis gubernatio, sic vivendi ars est prudente, necesse est eam quoque ab aliqua re esse constitutam et profectam. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. </p>

<p>At habetur! Et ego id scilicet nesciebam! Sed ut sit, etiamne post mortem coletur? Illa autem, morbum, egestatem, dolorem, non appello m a l a, sed, si libet, r e i e c t a n e a. Quod si ita est, ut neque quisquam nisi bonus vir et omnes boni beati sint, quid philosophia magis colendum aut quid est virtute divinius? <code>Obsecro, inquit, Torquate, haec dicit Epicurus?</code> Sic igitur in homine perfectio ista in eo potissimum, quod est optimum, id est in virtute, laudatur. Est enim aliquid in his rebus probabile, et quidem ita, ut eius ratio reddi possit, ergo ut etiam probabiliter acti ratio reddi possit. </p>

<ul>
	<li>In primo enim ortu inest teneritas ac mollitia quaedam, ut nec res videre optimas nec agere possint.</li>
	<li>Cur deinde Metrodori liberos commendas?</li>
	<li>Naturales divitias dixit parabiles esse, quod parvo esset natura contenta.</li>
	<li>Si enim, ut mihi quidem videtur, non explet bona naturae voluptas, iure praetermissa est;</li>
	<li>Itaque ad tempus ad Pisonem omnes.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Quod quoniam in quo sit magna dissensio est, Carneadea nobis adhibenda divisio est, qua noster Antiochus libenter uti solet.
</blockquote>


<pre>
Ut enim, inquit, gubernator aeque peccat, si palearum navem
evertit et si auri, item aeque peccat, qui parentem et qui
servum iniuria verberat.

Isto modo ne improbos quidem, si essent boni viri.
</pre>


<p>Et quis a Stoicis et quem ad modum diceretur, tamen ego quoque exponam, ut perspiciamus, si potuerimus, quidnam a Zenone novi sit allatum. Quamvis enim depravatae non sint, pravae tamen esse possunt. Idem fecisset Epicurus, si sententiam hanc, quae nunc Hieronymi est, coniunxisset cum Aristippi vetere sententia. Sic est igitur locutus: Quantus ornatus in Peripateticorum disciplina sit satis est a me, ut brevissime potuit, paulo ante dictum. Quaeque de virtutibus dicta sunt, quem ad modum eae semper voluptatibus inhaererent, eadem de amicitia dicenda sunt. Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. </p>

",
			'lesson_excerpt'       => 'This lesson is about first part',
			'lesson_order'         => '1'
		]);

		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Two',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <code>Sed fortuna fortis;</code> <i>Quae sequuntur igitur?</i> Iudicia rerum in sensibus ponit, quibus si semel aliquid falsi pro vero probatum sit, sublatum esse omne iudicium veri et falsi putat. Atque ut reliqui fures earum rerum, quas ceperunt, signa commutant, sic illi, ut sententiis nostris pro suis uterentur, nomina tamquam rerum notas mutaverunt. Itaque <i>[redacted]</i> in primis ingenuus et gravis, dignus illa familiaritate Scipionis et Laelii, Panaetius, cum ad Q. <a href='http://loripsum.net/' target='_blank'>Duo Reges: constructio interrete.</a> Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. <mark>Quam si explicavisset, non tam haesitaret.</mark> <b>Hoc tu nunc in illo probas.</b> Nam cui proposito sit conservatio sui, necesse est huic partes quoque sui caras suo genere laudabiles. Qui autem diffidet perpetuitati bonorum suorum, timeat necesse est, ne aliquando amissis illis sit miser. Ne tum quidem te respicies et cogitabis sibi quemque natum esse et suis voluptatibus? </p>

<dl>
	<dt><dfn>ALIO MODO.</dfn></dt>
	<dd>Ut scias me intellegere, primum idem esse dico voluptatem, quod ille don.</dd>
	<dt><dfn>Utram tandem linguam nescio?</dfn></dt>
	<dd>Utinam quidem dicerent alium alio beatiorem! Iam ruinas videres.</dd>
</dl>


<p><mark>Haec dicuntur inconstantissime.</mark> <i>Tenent mordicus.</i> Suis cuiusque sensibus sic, ut, contra si quis dicere velit, non audiatur -, tamen, ne quid praetermittamus, rationes quoque, cur hoc ita sit, afferendas puto. Atque ut a corpore ordiar, videsne ut, si quae in membris prava aut debilitata aut inminuta sint, occultent homines? Omnium autem eorum commodorum, quibus non illi plus tribuunt, qui illa bona esse dicunt, quam Zeno, qui negat, longe praestantissimum esse, quod honestum esset atque laudabile. Ea, quae dialectici nunc tradunt et docent, nonne ab illis instituta sunt aut inventa sunt? </p>

<p>Concede nihil esse bonum, nisi quod bonestum sit: concedendum est in virtute esse positam beatam vitam vide rursus retro: dato hoc dandum erit illud. <a href='http://loripsum.net/' target='_blank'>Conferam avum tuum Drusum cum C.</a> Quos quidem dies quem ad modum agatis et in quantam hominum facetorum urbanitatem incurratis, non diconihil opus est litibus-; Me quidem ad altiorem memoriam Oedipodis huc venientis et illo mollissimo carmine quaenam essent ipsa haec loca requirentis species quaedam commovit, inaniter scilicet, sed commovit tamen. Qui autem diffidet perpetuitati bonorum suorum, timeat necesse est, ne aliquando amissis illis sit miser. <i>Hunc vos beatum;</i> Tenuit permagnam <i>[redacted]</i>tilius hereditatem, unde, si secutus esset eorum sententiam, qui honesta et recta emolumentis omnibus et commodis anteponerent, nummum nullum attigisset. Roges enim Aristonem, bonane ei videantur haec: vacuitas doloris, divitiae, valitudo; </p>

<ol>
	<li>Hanc se tuus Epicurus omnino ignorare dicit quam aut qualem esse velint qui honestate summum bonum metiantur.</li>
	<li>Consequentia exquirere, quoad sit id, quod volumus, effectum.</li>
</ol>


<pre>
At enim iam dicitis virtutem non posse constitui, si ea,
quae extra virtutem sint, ad beate vivendum pertineant.

An est aliquid, quod te sua sponte delectet?
</pre>


<ul>
	<li>Nunc haec primum fortasse audientis servire debemus.</li>
	<li>Recte dicis;</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Quae etsi mihi nullo modo probantur, tamen Democritum laudatum a ceteris ab hoc, qui eum unum secutus esset, nollem vituperatum.
</blockquote>


<p><code>Est, ut dicis, inquam.</code> Non potes ergo ista tueri, Torquate, mihi crede, si te ipse et tuas cogitationes et studia perspexeris; Idque quo magis quidam ita faciunt, ut iure etiam reprehendantur, hoc magis intellegendum est haec ipsa nimia in quibusdam futura non fuisse, nisi quaedam essent modica natura. <code>Non igitur bene.</code> Possumusne ergo in vita summum bonum dicere, cum id ne in cena quidem posse videamur? <a href='http://loripsum.net/' target='_blank'>Quid iudicant sensus?</a> Quarum cum una sit, qua mores conformari putantur, differo eam partem, quae quasi stirps ets huius quaestionis. -, sed ut hoc iudicaremus, non esse in iis partem maximam positam beate aut secus vivendi. Sensus enim cuiusque et natura rerum atque ipsa veritas clamabat quodam modo non posse adduci, ut inter eas res, quas Zeno exaequaret, nihil interesset. Nemo enim est, qui aliter dixerit quin omnium naturarum simile esset id, ad quod omnia referrentur, quod est ultimum rerum appetendarum. Quae quidem res efficit, ne necesse sit isdem de rebus semper quasi dictata decantare neque a commentariolis suis discedere. Quibus ex omnibus iudicari potest non modo non impediri rationem amicitiae, si summum bonum in voluptate ponatur, sed sine hoc institutionem omnino amicitiae non posse reperiri. </p>

<p><mark>Recte, inquit, intellegis.</mark> Possumusne hic scire qualis sit, nisi contulerimus inter nos, cum finem bonorum dixerimus, quid finis, quid etiam sit ipsum bonum? Hoc unum Aristo tenuit: praeter vitia atque virtutes negavit rem esse ullam aut fugiendam aut expetendam. Dat enim id nobis solitudo, quod si qui deus diceret, numquam putarem me in Academia tamquam philosophum disputaturum. </p>

",
			'lesson_excerpt'       => 'This lesson is about second part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Three',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href='http://loripsum.net/' target='_blank'>Cur post Tarentum ad Archytam?</a> Tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua distinguantur ostendit; <i>Quid me istud rogas?</i> Ex ea quae sint apta, ea bonesta, ea pulchra, ea laudabilia, illa autem superiora naturale nominantur, quae coniuncta cum honestis vitam beatam perficiunt et absolvunt. <code>Quo igitur, inquit, modo?</code> Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum. </p>

<pre>
Egone quaeris, inquit, quid sentiam?

Ius autem, quod ita dici appellarique possit, id esse
natura, alienumque esse a sapiente non modo iniuriam cui
facere, verum etiam nocere.
</pre>


<ul>
	<li>Nihil est enim, de quo aliter tu sentias atque ego, modo commutatis verbis ipsas res conferamus.</li>
	<li>Bestiarum vero nullum iudicium puto.</li>
</ul>


<p>Ratio ista, quam defendis, praecepta, quae didicisti, quae probas, funditus evertunt amicitiam, quamvis eam Epicurus, ut facit, in caelum efferat laudibus. <a href='http://loripsum.net/' target='_blank'>Non est igitur voluptas bonum.</a> Quos quidem dies quem ad modum agatis et in quantam hominum facetorum urbanitatem incurratis, non diconihil opus est litibus-; Is cum arderet podagrae doloribus visitassetque hominem Charmides Epicureus perfamiliaris et tristis exiret, Mane, quaeso, inquit, Charmide noster; At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. Cuius oratio attende, quaeso, Brute, satisne videatur Antiochi complexa esse sententiam, quam tibi, qui fratrem eius Aristum frequenter audieris, maxime probatam existimo. In motu et in statu corporis nihil inest, quod animadvertendum esse ipsa natura iudicet? Quod autem patrocinium aut quae ista causa est voluptatis, quae nec testes ullos e claris viris nec laudatores poterit adhibere? Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus; </p>

<dl>
	<dt><dfn>Falli igitur possumus.</dfn></dt>
	<dd>Hoc uno captus Erillus scientiam summum bonum esse defendit nec rem ullam aliam per se expetendam.</dd>
	<dt><dfn>Explanetur igitur.</dfn></dt>
	<dd>Iam id ipsum absurdum, maximum malum neglegi.</dd>
	<dt><dfn>Quibusnam praeteritis?</dfn></dt>
	<dd>At ego quem huic anteponam non audeo dicere;</dd>
	<dt><dfn>Quo tandem modo?</dfn></dt>
	<dd>Bona autem corporis huic sunt, quod posterius posui, similiora.</dd>
	<dt><dfn>Nihil sane.</dfn></dt>
	<dd>Quis Pullum Numitorium Fregellanum, proditorem, quamquam rei publicae nostrae profuit, non odit?</dd>
</dl>


<p>Quoniam, inquiunt, omne peccatum inbecillitatis et inconstantiae est, haec autem vitia in omnibus stultis aeque magna sunt, necesse est paria esse peccata. Neque enim vocum suavitate videntur aut novitate quadam et varietate cantandi revocare eos solitae, qui praetervehebantur, sed quia multa se scire profitebantur, ut homines ad earum saxa discendi cupiditate adhaerescerent. Tum ille: Finem, inquit, interrogandi, si videtur, quod quidem ego a principio ita me malle dixeram hoc ipsum providens, dialecticas captiones. Quibus expositis facilis est coniectura ea maxime esse expetenda ex nostris, quae plurimum habent dignitatis, ut optimae cuiusque partis, quae per se expetatur, virtus sit expetenda maxime. Quem quidem vos, cum improbis poenam proponitis, inpetibilem facitis, cum sapientem semper boni plus habere vultis, tolerabilem. Hic si Peripateticus fuisset, permansisset, credo, in sententia, qui dolorem malum dicunt esse, de asperitate autem eius fortiter ferenda praecipiunt eadem, quae Stoici. Sive hoc difficile est, tamen nec modus est ullus investigandi veri, nisi inveneris, et quaerendi defatigatio turpis est, cum id, quod quaeritur, sit pulcherrimum. <a href='http://loripsum.net/' target='_blank'>Tria genera bonorum;</a> Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt. Etsi dedit talem mentem, quae omnem virtutem accipere posset, ingenuitque sine doctrina notitias parvas rerum maximarum et quasi instituit docere et induxit in ea, quae inerant, tamquam elementa virtutis. Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas. Hic Speusippus, hic Xenocrates, hic eius auditor Polemo, cuius illa ipsa sessio fuit, quam videmus. Et ille ridens: Age, age, inquit,-satis enim scite me nostri sermonis principium esse voluisti-exponamus adolescenti,. Vos ex his tam dissimilibus rebus non modo nomen unum -nam id facilius paterer-, sed etiam rem unam ex duabus facere conamini, quod fieri nullo modo potest. <a href='http://loripsum.net/' target='_blank'>At, si voluptas esset bonum, desideraret.</a> </p>

<p>Duo Reges: constructio interrete. Nec vero id satis est, neminem esse, qui ipse se oderit, sed illud quoque intellegendum est, neminem esse, qui,quo modo se habeat, nihil sua censeat inte resse. <mark>Maximus dolor, inquit, brevis est.</mark> <i>Equidem e Cn.</i> Quodsi Graeci leguntur a Graecis isdem de rebus alia ratione compositis, quid est, cur nostri a nostris non legantur? Cum autem hominem in eo genere posuisset, ut ei tribueret animi excellentiam, summum bonum id constituit, non ut excelleret animus, sed ut nihil esse praeter animum videretur. <a href='http://loripsum.net/' target='_blank'>Vide, quaeso, rectumne sit.</a> Atque ut reliqui fures earum rerum, quas ceperunt, signa commutant, sic illi, ut sententiis nostris pro suis uterentur, nomina tamquam rerum notas mutaverunt. Tum ille: Finem, inquit, interrogandi, si videtur, quod quidem ego a principio ita me malle dixeram hoc ipsum providens, dialecticas captiones. Unum, cum in voluptate sumus, alterum, cum in dolore, tertium hoc, in quo nunc equidem sum, credo item vos, nec in dolore nec in voluptate; Quis enim confidit semper sibi illud stabile et firmum permansurum, quod fragile et caducum sit? <i>Recte, inquit, intellegis.</i> Quodsi vultum tibi, si incessum fingeres, quo gravior viderere, non esses tui similis; Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? Quo posito et omnium adsensu adprobato illud adsumitur, eum, qui magno sit animo atque forti, omnia, quae cadere in hominem possint, despicere ac pro nihilo putare. Quid est igitur, cur ita semper deum appellet Epicurus beatum et aeternum? <i>Sed residamus, inquit, si placet.</i> </p>

<p><a href='http://loripsum.net/' target='_blank'>Quo igitur, inquit, modo?</a> <a href='http://loripsum.net/' target='_blank'>Videsne, ut haec concinant?</a> <i>At enim sequor utilitatem.</i> Quid autem sit, quod ita moveat itaque a natura in primo ortu appetatur, non constat deque eo est inter philosophos, cum summum bonum exquiritur, omnis dissensio. Restant Stoici, qui cum a Peripateticis et Academicis omnia transtulissent, nominibus aliis easdem res secuti sunt. <b>At hoc in eo M.</b> Atque his de rebus et splendida est eorum et illustris oratio. Utrum igitur tibi litteram videor an totas paginas commovere? Tum enim eam ipsam vis, quam modo ego dixi, et nomen inponis, in motu ut sit et faciat aliquam varietatem, tum aliam quandam summam voluptatem, quo addi nihil possit; <b>Sedulo, inquam, faciam.</b> Sin autem reliqua appetenda sunt, cur, quod est ultimum rerum appetendarum, id non aut ex omnium earum aut ex plurimarum et maximarum appetitione concluditur? Quid, cum volumus nomina eorum, qui quid gesserint, nota nobis esse, parentes, patriam, multa praeterea minime necessaria? Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus; </p>

<ol>
	<li>Huius ego nunc auctoritatem sequens idem faciam.</li>
	<li>Omnes enim iucundum motum, quo sensus hilaretur.</li>
	<li>Quamquam tu hanc copiosiorem etiam soles dicere.</li>
	<li>Introduci enim virtus nullo modo potest, nisi omnia, quae leget quaeque reiciet, unam referentur ad summam.</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Tantaque est vis talibus in studiis, ut eos etiam, qui sibi alios proposuerunt fines bonorum, quos utilitate aut voluptate dirigunt, tamen in rebus quaerendis explicandisque naturis aetates contenere videamus.
</blockquote>


",
			'lesson_excerpt'       => 'This lesson is about third part',
			'lesson_order'         => '3'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Fourth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Istud quidem, inquam, optime dicis, sed quaero nonne tibi faciendum idem sit nihil dicenti bonum, quod non rectum honestumque sit, reliquarum rerum discrimen omne tollenti. <a href='http://loripsum.net/' target='_blank'>Istam voluptatem, inquit, Epicurus ignorat?</a> Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest. Duo Reges: constructio interrete. Nam quod ait sensibus ipsis iudicari voluptatem bonum esse, dolorem malum, plus tribuit sensibus, quam nobis leges permittunt, cum privatarum litium iudices sumus. <a href='http://loripsum.net/' target='_blank'>Sed plane dicit quod intellegit.</a> Nam Metrodorum non puto ipsum professum, sed, cum appellaretur ab Epicuro, repudiare tantum beneficium noluisse; Est enim effectrix multarum et magnarum voluptatum. <code>Istic sum, inquit.</code> Quamquam scripsit artem rhetoricam Cleanthes, Chrysippus etiam, sed sic, ut, si quis obmutescere concupierit, nihil aliud legere debeat. Sed haec ab Antiocho, familiari nostro, dicuntur multo melius et fortius, quam a Stasea dicebantur. Si vero id etiam explanare velles apertiusque diceres nihil eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? <b>Haeret in salebra.</b> <code>Nihil ad rem! Ne sit sane;</code> </p>

<p><a href='http://loripsum.net/' target='_blank'>Memini vero, inquam;</a> <i>Bonum incolumis acies: misera caecitas.</i> Vos ex his tam dissimilibus rebus non modo nomen unum -nam id facilius paterer-, sed etiam rem unam ex duabus facere conamini, quod fieri nullo modo potest. <a href='http://loripsum.net/' target='_blank'>Stoici scilicet.</a> <i>Cur id non ita fit?</i> <a href='http://loripsum.net/' target='_blank'>Et ille ridens: Video, inquit, quid agas;</a> Neque enim disputari sine reprehensione nec cum iracundia aut pertinacia recte disputari potest. <i>Quod iam a me expectare noli.</i> Cur, nisi quod turpis oratio est? Sed isti ipsi, qui voluptate et dolore omnia metiuntur, nonne clamant sapienti plus semper adesse quod velit quam quod nolit? <b>Quare ad ea primum, si videtur;</b> <b>Quo modo autem philosophus loquitur?</b> </p>

<pre>
Quod nisi ita efficitur, quae Theophrastus de fortuna, de
dolore, de cruciatu corporis dixit, cum quibus coniungi
vitam beatam nullo modo posse putavit, vereor, ne vera sint.

An hoc usque quaque, aliter in vita?
</pre>


<ol>
	<li>Utram tandem linguam nescio?</li>
	<li>Hoc ne statuam quidem dicturam pater aiebat, si loqui posset.</li>
	<li>Ergo id est convenienter naturae vivere, a natura discedere.</li>
	<li>Quod idem cum vestri faciant, non satis magnam tribuunt inventoribus gratiam.</li>
</ol>


<ul>
	<li>Quod cum ille dixisset et satis disputatum videretur, in oppidum ad Pomponium perreximus omnes.</li>
	<li>Effluit igitur voluptas corporis et prima quaeque avolat saepiusque relinquit causam paenitendi quam recordandi.</li>
	<li>Videmus igitur ut conquiescere ne infantes quidem possint.</li>
	<li>An vero, inquit, quisquam potest probare, quod perceptfum, quod.</li>
	<li>Res enim fortasse verae, certe graves, non ita tractantur, ut debent, sed aliquanto minutius.</li>
	<li>Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est.</li>
</ul>


<p>Unum nescio, quo modo possit, si luxuriosus sit, finitas cupiditates habere. <mark>Et nemo nimium beatus est;</mark> Hic cum uterque me intueretur seseque ad audiendum significarent paratos, Primum, inquam, deprecor, ne me tamquam philosophum putetis scholam vobis aliquam explicaturum, quod ne in ipsis quidem philosophis magnopere umquam probavi. Omnis sermo elegans sumi potest, tum varietas est tanta artium, ut nemo sine eo instrumento ad ullam rem illustriorem satis ornatus possit accedere. Ita fit, ut duo genera propter se expetendorum reperiantur, unum, quod est in iis, in quibus completar illud extremum, quae sunt aut animi aut corporis; De bona autem fama-quam enim appellant eÈdoj¤an, aptius est bonam famam hoc loco appellare quam gloriam-Chrysippus quidem et Diogenes detracta utilitate ne digitum quidem eius causa porrigendum esse dicebant; <a href='http://loripsum.net/' target='_blank'>Quis est tam dissimile homini.</a> Ergo in utroque exercebantur, eaque disciplina effecit tantam illorum utroque in genere dicendi copiam. Quia, cum a Zenone, inquam, hoc magnifice tamquam ex oraculo editur: Virtus ad beate vivendum se ipsa contenta est, et Quare? Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. Scio enim esse quosdam, qui quavis lingua philosophari possint; Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. </p>

<p>E quo efficitur, non ut nos non intellegamus quae vis sit istius verbi, sed ut ille suo more loquatur, nostrum neglegat. His similes sunt omnes, qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. Si enim idem dicit, quod Hieronymus, qui censet summum bonum esse sine ulla molestia vivere, cur mavult dicere voluptatem quam vacuitatem doloris, ut ille facit, qui quid dicat intellegit? Nam si concederetur, etiamsi ad corpus nihil referatur, ista sua sponte et per se esse iucunda, per se esset et virtus et cognitio rerum, quod minime ille vult expetenda. Itaque quae sunt eorum consolationes, quae cohortationes, quae etiam monita et consilia scripta ad summos viros! Erat enim apud eos, ut est rerum ipsarum natura, sic dicendi exercitatio duplex. Quis nostrum dixerit, quos non pudet ea, quae Stoici aspera dicunt, mala dicere, melius esse turpiter aliquid facere cum voluptate quam honeste cum dolore? Ita miser sit aliquando necesse est is, quem vos beatum semper vultis esse, nec vero id, dum omnia ad voluptatem doloremque referetis, efficietis umquam. Hoc vero non videre, maximo argumento esse voluptatem illam, qua sublata neget se intellegere omnino quid sit bonum-eam autem ita persequitur: quae palato percipiatur, quae auribus; Officium, aequitatem, dignitatem, fidem, recta, honesta, digna imperio, digna populo Romano, omnia pericula pro re publica, mori pro patria, haec cum loqueris, nos barones stupemus, tu videlicet tecum ipse rides. Cum sciret confestim esse moriendum eamque mortem ardentiore studio peteret, quam Epicurus voluptatem petendam putat. Utrum enim sit voluptas in iis rebus, quas primas secundum naturam esse diximus, necne sit ad id, quod agimus, nihil interest. Praeclare Laelius, et recte sofñw, illudque vere: O Publi, o gurges, Galloni! es homo miser, inquit. Hoc positum in Phaedro a Platone probavit Epicurus sensitque in omni disputatione id fieri oportere. Nec enim haec movere potest appetitum animi, nec ullum habet ictum, quo pellat animum, status hic non dolendi, itaque in hoc eodem peccat Hieronymus. <a href='http://loripsum.net/' target='_blank'>Non semper, inquam;</a> Manebit ergo amicitia tam diu, quam diu sequetur utilitas, et, si utilitas amicitiam constituet, tollet eadem. </p>

<blockquote cite='http://loripsum.net'>
	Idemque diviserunt naturam hominis in animum et corpus.
</blockquote>


<p>Nemo enim est, qui aliter dixerit quin omnium naturarum simile esset id, ad quod omnia referrentur, quod est ultimum rerum appetendarum. <i>Easdemne res?</i> Quae enim cupiditates a natura proficiscuntur, facile explentur sine ulla iniuria, quae autem inanes sunt, iis parendum non est. <a href='http://loripsum.net/' target='_blank'>Frater et T.</a> Studet enim meus is audire Cicero quaenam sit istius veteris, quam commemoras, Academiae de finibus bonorum Peripateticorumque sententia. Nihil enim est aliud, quam ob rem mihi percipi nihil posse videatur, nisi quod percipiendi vis ita definitur a Stoicis, ut negent quicquam posse percipi nisi tale verum, quale falsum esse non possit. Unum, cum in voluptate sumus, alterum, cum in dolore, tertium hoc, in quo nunc equidem sum, credo item vos, nec in dolore nec in voluptate; Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. </p>

<dl>
	<dt><dfn>Negare non possum.</dfn></dt>
	<dd>Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti.</dd>
	<dt><dfn>Tubulo putas dicere?</dfn></dt>
	<dd>Nam si propter voluptatem, quae est ista laus, quae possit e macello peti?</dd>
	<dt><dfn>Restatis igitur vos;</dfn></dt>
	<dd>Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</dd>
	<dt><dfn>Quid de Pythagora?</dfn></dt>
	<dd>At hoc in eo M.</dd>
	<dt><dfn>Hic ambiguo ludimur.</dfn></dt>
	<dd>Id quaeris, inquam, in quo, utrum respondero, verses te huc atque illuc necesse est.</dd>
	<dt><dfn>Sed videbimus.</dfn></dt>
	<dd>Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur?</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about fourth part',
			'lesson_order'         => '4'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Fifth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At vero si ad vitem sensus accesserit, ut appetitum quendam habeat et per se ipsa moveatur, quid facturam putas? Nam si concederetur, etiamsi ad corpus nihil referatur, ista sua sponte et per se esse iucunda, per se esset et virtus et cognitio rerum, quod minime ille vult expetenda. Si ad prudentes, alterum fortasse dubitabunt, sitne tantum in virtute, ut ea praediti vel in Phalaridis tauro beati sint, alterum non dubitabunt, quin et Stoici conveniente sibi dicant et vos repugnantia. Primum cur ista res digna odio est, nisi quod est turpis? </p>

<p>Illa videamus, quae a te de amicitia dicta sunt. <b>Gloriosa ostentatio in constituendo summo bono.</b> Obsequar igitur voluntati tuae dicamque, si potero, rhetorice, sed hac rhetorica philosophorum, non nostra illa forensi, quam necesse est, cum populariter loquatur, esse interdum paulo hebetiorem. Ut bacillum aliud est inflexum et incurvatum de industria, aliud ita natum, sic ferarum natura non est illa quidem depravata mala disciplina, sed natura sua. Atque ego: Scis me, inquam, istud idem sentire, Piso, sed a te opportune facta mentio est. Aufidio, praetorio, erudito homine, oculis capto, saepe audiebam, cum se lucis magis quam utilitatis desiderio moveri diceret. Corporis igitur nostri partes totaque figura et forma et statura quam apta ad naturam sit, apparet, neque est dubium, quin frons, oculi, aures et reliquae partes quales propriae sint hominis intellegatur. Vide, ne magis, inquam, tuum fuerit, cum re idem tibi, quod mihi, videretur, non nova te rebus nomina inponere. Etsi dedit talem mentem, quae omnem virtutem accipere posset, ingenuitque sine doctrina notitias parvas rerum maximarum et quasi instituit docere et induxit in ea, quae inerant, tamquam elementa virtutis. <mark>Minime vero, inquit ille, consentit.</mark> </p>

<ul>
	<li>Te enim iudicem aequum puto, modo quae dicat ille bene noris.</li>
	<li>Polemoni et iam ante Aristoteli ea prima visa sunt, quae paulo ante dixi.</li>
	<li>Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus;</li>
	<li>Naturales divitias dixit parabiles esse, quod parvo esset natura contenta.</li>
	<li>Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio.</li>
</ul>


<dl>
	<dt><dfn>Peccata paria.</dfn></dt>
	<dd>Claudii libidini, qui tum erat summo ne imperio, dederetur.</dd>
	<dt><dfn>Stoicos roga.</dfn></dt>
	<dd>Quae cum ita sint, effectum est nihil esse malum, quod turpe non sit.</dd>
</dl>


<p><a href='http://loripsum.net/' target='_blank'>Peccata paria.</a> Infinitio ipsa, quam apeirian vocant, tota ab illo est, tum innumerabiles mundi, qui et oriantur et intereant cotidie. Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est. Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. Quam quidem certationem homo et acutus et diligens, Chrysippus, non contemnit totumque discrimen summi boni in earum comparatione positum putat. Nullum inveniri verbum potest quod magis idem declaret Latine, quod Graece, quam declarat voluptas. At quicum ioca seria, ut dicitur, quicum arcana, quicum occulta omnia? <i>Tu quidem reddes;</i> Aberat omnis dolor, qui si adesset, nec molliter ferret et tamen medicis plus quam philosophis uteretur. Cuius oratio attende, quaeso, Brute, satisne videatur Antiochi complexa esse sententiam, quam tibi, qui fratrem eius Aristum frequenter audieris, maxime probatam existimo. </p>

<ul>
	<li>Possumusne ergo in vita summum bonum dicere, cum id ne in cena quidem posse videamur?</li>
	<li>Septem autem illi non suo, sed populorum suffragio omnium nominati sunt.</li>
</ul>


<ol>
	<li>Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum memoria.</li>
	<li>Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit;</li>
	<li>Sed haec quidem liberius ab eo dicuntur et saepius.</li>
</ol>


<dl>
	<dt><dfn>Quis enim redargueret?</dfn></dt>
	<dd>Non est enim vitium in oratione solum, sed etiam in moribus.</dd>
	<dt><dfn>Ille incendat?</dfn></dt>
	<dd>Et hunc idem dico, inquieta sed ad virtutes et ad vitia nihil interesse.</dd>
</dl>


<p>Quod autem principium officii quaerunt, melius quam Pyrrho; Quae enim constituta sunt prima naturae, ad ea si voluptas accesserit, unum aliquod accesserit commodum corporis neque eam constitutionem summi boni, quae est proposta, mutaverit. Nam et amici cultus et parentis ei, qui officio fungitur, in eo ipso prodest, quod ita fungi officio in recte factis est, quae sunt orta virtutibus. Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. Illorum vero ista ipsa quam exilia de virtutis vi! Quam tantam volunt esse, ut beatum per se efficere possit. Quasi ego id curem, quid ille aiat aut neget. <b>Prodest, inquit, mihi eo esse animo.</b> <a href='http://loripsum.net/' target='_blank'>Si longus, levis;</a> Si vero id etiam explanare velles apertiusque diceres nihil eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? </p>

<blockquote cite='http://loripsum.net'>
	Nam voluptatis causa facere omnia, cum, etiamsi nihil consequamur, tamen ipsum illud consilium ita faciendi per se expetendum et honestum et solum bonum sit, nemo dixit.
</blockquote>


<p><a href='http://loripsum.net/' target='_blank'>Falli igitur possumus.</a> <b>Negare non possum.</b> <i>Scaevolam M.</i> Quod certe universum sua sponte ipsum expeti et propter se necesse est, quoniam ante demonstratum est etiam singulas eius partes esse per se expetendas. <mark>Satis est ad hoc responsum.</mark> Deprehensus omnem poenam contemnet. <i>Quae cum dixisset, finem ille.</i> Sed cum ea, quae praeterierunt, acri animo et attento intuemur, tum fit ut aegritudo sequatur, si illa mala sint, laetitia, si bona. <mark>At coluit ipse amicitias.</mark> Dic in quovis conventu te omnia facere, ne doleas. </p>

<blockquote cite='http://loripsum.net'>
	Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio?
</blockquote>


<p>Immo sit sane nihil melius, inquam-nondum enim id quaero-, num propterea idem voluptas est, quod, ut ita dicam, indolentia? Rapior illuc, revocat autem Antiochus, nec est praeterea, quem audiamus. Deinde concludebas summum malum esse dolorem, summum bonum voluptatem! Lucius Thorius Balbus fuit, Lanuvinus, quem meminisse tu non potes. <a href='http://loripsum.net/' target='_blank'>Quis enim redargueret?</a> Iam quae corporis sunt, ea nec auctoritatem cum animi partibus, comparandam et cognitionem habent faciliorem. <i>Si quae forte-possumus.</i> </p>

<p>Quibus autem in rebus tanta obscuratio non fit, fieri tamen potest, ut id ipsum, quod interest, non sit magnum. <b>Sed residamus, inquit, si placet.</b> Si vero id etiam explanare velles apertiusque diceres nihil eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? Sed ut iis bonis erigimur, quae expectamus, sic laetamur iis, quae recordamur. Etsi dedit talem mentem, quae omnem virtutem accipere posset, ingenuitque sine doctrina notitias parvas rerum maximarum et quasi instituit docere et induxit in ea, quae inerant, tamquam elementa virtutis. Ut placet, inquit, etsi enim illud erat aptius, aequum cuique concedere. Vides igitur, si amicitiam sua caritate metiare, nihil esse praestantius, sin emolumento, summas familiaritates praediorum fructuosorum mercede superari. Sed quid sentiat, non videtis. </p>

<p>Quoniamque in iis rebus, quae neque in virtutibus sunt neque in vitiis, est tamen quiddam, quod usui possit esse, tollendum id non est. Cum autem hominem in eo genere posuisset, ut ei tribueret animi excellentiam, summum bonum id constituit, non ut excelleret animus, sed ut nihil esse praeter animum videretur. Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. Quis est enim, qui hoc cadere in sapientem dicere audeat, ut, si fieri possit, virtutem in perpetuum abiciat, ut dolore omni liberetur? Maxime autem in hoc quidem genere vis est perspicua naturae, cum et mendicitatem multi perpetiantur, ut vivant, et angantur adpropinquatione mortis confecti homines senectute et ea perferant, quae Philoctetam videmus in fabulis. Voluptatis causa, etiam si eam non consequare, aut non dolendi, etiam si id assequi nequeas, aut eorum, quae secundum naturam sunt, adipiscendi, etiam si nihil consequare. Ut optime, secundum naturam affectum esse possit. Cum autem usus progrediens familiaritatem effecerit, tum amorem efflorescere tantum, ut, etiamsi nulla sit utilitas ex amicitia, tamen ipsi amici propter se ipsos amentur. Quae cum dixissem, Habeo, inquit Torquatus, ad quos ista referam, et, quamquam aliquid ipse poteram, tamen invenire malo paratiores. <i>Zenonis est, inquam, hoc Stoici.</i> Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. At tu eadem ista dic in iudicio aut, si coronam times, dic in senatu. </p>

<blockquote cite='http://loripsum.net'>
	Quos ille, di inmortales, cum omnes artus ardere viderentur, cruciatus perferebat! nec tamen miser esse, quia summum id malum non erat, tantum modo laboriosus videbatur;
</blockquote>


<p>Sin autem ad animum, falsum est, quod negas animi ullum esse gaudium, quod non referatur ad corpus. Ita finis bonorum existit secundum naturam vivere sic affectum, ut optime is affici possit ad naturamque accommodatissime. Itaque quae sunt eorum consolationes, quae cohortationes, quae etiam monita et consilia scripta ad summos viros! Erat enim apud eos, ut est rerum ipsarum natura, sic dicendi exercitatio duplex. <b>Duo Reges: constructio interrete.</b> Quod quidem mihi si quando dictum est-est autem dictum non parum saepe-, etsi satis clemens sum in disputando, tamen interdum soleo subirasci. <a href='http://loripsum.net/' target='_blank'>Erat enim Polemonis.</a> Equidem in omnibus istis conclusionibus hoc putarem philosophia nobisque dignum, et maxime, cum summum bonum quaereremus, vitam nostram, consilia, voluntates, non verba corrigi. Tum ille timide vel potius verecunde: Facio, inquit. <i>Eam stabilem appellas.</i> <b>Addidisti ad extremum etiam indoctum fuisse.</b> Ita enim parvae et exiguae sunt istae accessiones bonorum, ut, quem ad modum stellae in radiis solis, sic istae in virtutum splendore ne cernantur quidem. Reicietur etiam Carneades, nec ulla de summo bono ratio aut voluptatis non dolendive particeps aut honestatis expers probabitur. </p>

<p>Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. Nam nisi hoc optineatur, id solum bonum esse, quod honestum sit, nullo modo probari possit beatam vitam virtute effici. Unum, cum in voluptate sumus, alterum, cum in dolore, tertium hoc, in quo nunc equidem sum, credo item vos, nec in dolore nec in voluptate; Ergo in bestiis erunt secreta e voluptate humanarum quaedam simulacra virtutum, in ipsis hominibus virtus nisi voluptatis causa nulla erit? Istam voluptatem perpetuam quis potest praestare sapienti? <i>Honesta oratio, Socratica, Platonis etiam.</i> In omni enim animante est summum aliquid atque optimum, ut in equis, in canibus, quibus tamen et dolore vacare opus est et valere; Nam hunc ipsum sive finem sive extremum sive ultimum definiebas id esse, quo omnia, quae recte fierent, referrentur neque id ipsum usquam referretur. Qui si ea, quae dicit, ita sentiret, ut verba significant, quid inter eum et vel Pyrrhonem vel Aristonem interesset? Deque his rebus satis multa in nostris de re publica libris sunt dicta a Laelio. Atque haec contra Aristippum, qui eam voluptatem non modo summam, sed solam etiam ducit, quam omnes unam appellamus voluptatem. <b>Quis Aristidem non mortuum diligit?</b> <a href='http://loripsum.net/' target='_blank'>An nisi populari fama?</a> Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur. </p>

<ol>
	<li>Itaque eos id agere, ut a se dolores, morbos, debilitates repellant.</li>
	<li>Quia voluptatem hanc esse sentiunt omnes, quam sensus accipiens movetur et iucunditate quadam perfunditur.</li>
	<li>Sed quod proximum fuit non vidit.</li>
	<li>Eam si varietatem diceres, intellegerem, ut etiam non dicente te intellego;</li>
</ol>


<p><i>Haec dicuntur fortasse ieiunius;</i> Modo enim fuit Carneadis, quem videre videor-est, enim nota imago -, a sedeque ipsa tanta ingenii, magnitudine orbata desiderari illam vocem puto. Serpere anguiculos, nare anaticulas, evolare merulas, cornibus uti videmus boves, nepas aculeis. <a href='http://loripsum.net/' target='_blank'>Non est ista, inquam, Piso, magna dissensio.</a> <a href='http://loripsum.net/' target='_blank'>Quid censes in Latino fore?</a> <a href='http://loripsum.net/' target='_blank'>Ac tamen hic mallet non dolere.</a> Atque his tribus generibus honestorum notatis quartum sequitur et in eadem pulchritudine et aptum ex illis tribus, in quo inest ordo et moderatio. In qua si nihil est praeter rationem, sit in una virtute finis bonorum; Atque etiam valítudinem, vires, vacuitatem doloris non propter utilitatem solum, sed etiam ipsas propter se expetemus. Itaque et manendi in vita et migrandi ratio omnis iis rebus, quas supra dixi, metienda. <b>Quis est tam dissimile homini.</b> Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. <b>Sed ille, ut dixi, vitiose.</b> <mark>Immo alio genere;</mark> At vero Epicurus una in domo, et ea quidem angusta, quam magnos quantaque amoris conspiratione consentientis tenuit amicorum greges! quod fit etiam nunc ab Epicureis. </p>

<dl>
	<dt><dfn>Quis hoc dicit?</dfn></dt>
	<dd>Earum etiam rerum, quas terra gignit, educatio quaedam et perfectio est non dissimilis animantium.</dd>
	<dt><dfn>Quid Zeno?</dfn></dt>
	<dd>Quid enim tanto opus est instrumento in optimis artibus comparandis?</dd>
	<dt><dfn>Haec dicuntur inconstantissime.</dfn></dt>
	<dd>Non quaeritur autem quid naturae tuae consentaneum sit, sed quid disciplinae.</dd>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Amicitiae vero locus ubi esse potest aut quis amicus esse cuiquam, quem non ipsum amet propter ipsum?</dd>
</dl>


<ul>
	<li>Quam tu ponis in verbis, ego positam in re putabam.</li>
	<li>Intellegi quidem, ut propter aliam quampiam rem, verbi gratia propter voluptatem, nos amemus;</li>
	<li>Ut optime, secundum naturam affectum esse possit.</li>
	<li>Ille incendat?</li>
	<li>Erat enim Polemonis.</li>
	<li>Sed quoniam et advesperascit et mihi ad villam revertendum est, nunc quidem hactenus;</li>
</ul>


<p><b>Que Manilium, ab iisque M.</b> Idem etiam dolorem saepe perpetiuntur, ne, si id non faciant, incidant in maiorem. His enim rebus detractis negat se reperire in asotorum vita quod reprehendat. <mark>Stoicos roga.</mark> Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. Quis suae urbis conservatorem Codrum, quis Erechthei filias non maxime laudat? <a href='http://loripsum.net/' target='_blank'>Quam si explicavisset, non tam haesitaret.</a> Atque haec ita iustitiae propria sunt, ut sint virtutum reliquarum communia. In omni enim arte vel studio vel quavis scientia vel in ipsa virtute optimum quidque rarissimum est. Quis contra in illa aetate pudorem, constantiam, etiamsi sua nihil intersit, non tamen diligat? </p>

<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Ut ad minora veniam, mathematici, poëtae, musici, medici denique ex hac tamquam omnium artificum officina profecti sunt. Atque haec ita iustitiae propria sunt, ut sint virtutum reliquarum communia. Introduci enim virtus nullo modo potest, nisi omnia, quae leget quaeque reiciet, unam referentur ad summam. Alteri negant quicquam esse bonum, nisi quod honestum sit, alteri plurimum se et longe longeque plurimum tribuere honestati, sed tamen et in corpore et extra esse quaedam bona. Ergo et avarus erit, sed finite, et adulter, verum habebit modum, et luxuriosus eodem modo. <i>Restatis igitur vos;</i> Cognitis autem rerum finibus, cum intellegitur, quid sit et bonorum extremum et malorum, inventa vitae via est conformatioque omnium officiorum, cum quaeritur, quo quodque referatur; </p>

<p>Ut enim qui mortem in malis ponit non potest eam non timere, sic nemo ulla in re potest id, quod malum esse decreverit, non curare idque contemnere. <a href='http://loripsum.net/' target='_blank'>Num quid tale Democritus?</a> Huc et illuc, Torquate, vos versetis licet, nihil in hac praeclara epistula scriptum ab Epicuro congruens et conveniens decretis eius reperietis. <i>Idem adhuc;</i> Nihil est enim, de quo aliter tu sentias atque ego, modo commutatis verbis ipsas res conferamus. Ergo in iis adolescentibus bonam spem esse dicemus et magnam indolem, quos suis commodis inservituros et quicquid ipsis expediat facturos arbitrabimur? Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. <a href='http://loripsum.net/' target='_blank'>Moriatur, inquit.</a> Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P. Quae dici eadem de ceteris virtutibus possunt, quarum omnium fundamenta vos in voluptate tamquam in aqua ponitis. Leonidas autem, rex Lacedaemoniorum, se in Thermopylis trecentosque eos, quos eduxerat Sparta, cum esset proposita aut fuga turpis aut gloriosa mors, opposuit hostibus. Nam si concederetur, etiamsi ad corpus nihil referatur, ista sua sponte et per se esse iucunda, per se esset et virtus et cognitio rerum, quod minime ille vult expetenda. </p>

<p>Quaero igitur, quo modo hae tantae commendationes a natura profectae subito a sapientia relictae sint. <mark>Perge porro;</mark> Perfecto enim et concluso neque virtutibus neque amicitiis usquam locum esse, si ad voluptatem omnia referantur, nihil praeterea est magnopere dicendum. <a href='http://loripsum.net/' target='_blank'>Obsecro, inquit, Torquate, haec dicit Epicurus?</a> <a href='http://loripsum.net/' target='_blank'>Sit enim idem caecus, debilis.</a> <mark>Non est igitur voluptas bonum.</mark> </p>

<p>Necesseque est, si quis sibi ipsi inimicus est, eum quae bona sunt mala putare, bona contra quae mala, et quae appetenda fugere, quae fugienda appetere, quae sine dubio vitae est eversio. Et si in ipsa gubernatione neglegentia est navis eversa, maius est peccatum in auro quam in palea. Nam quod ait sensibus ipsis iudicari voluptatem bonum esse, dolorem malum, plus tribuit sensibus, quam nobis leges permittunt, cum privatarum litium iudices sumus. <mark>Haec para/doca illi, nos admirabilia dicamus.</mark> At vero Epicurus una in domo, et ea quidem angusta, quam magnos quantaque amoris conspiratione consentientis tenuit amicorum greges! quod fit etiam nunc ab Epicureis. <b>Sed ad bona praeterita redeamus.</b> Non ego iam Epaminondae, non Leonidae mortem huius morti antepono, quorum alter cum vicisset Lacedaemonios apud Mantineam atque ipse gravi vulnere exanimari se videret, ut primum dispexit, quaesivit salvusne esset clipeus. Crassus fuit, qui tamen solebat uti suo bono, ut hodie est noster Pompeius, cui recte facienti gratia est habenda; Dicet pro me ipsa virtus nec dubitabit isti vestro beato M. Aut etiam, ut vestitum, sic sententiam habeas aliam domesticam, aliam forensem, ut in fronte ostentatio sit, intus veritas occultetur? Ex quo intellegitur nec intemperantiam propter se esse fugiendam temperantiamque expetendam, non quia voluptates fugiat, sed quia maiores consequatur. <b>Praeteritis, inquit, gaudeo.</b> </p>

<ol>
	<li>Res enim fortasse verae, certe graves, non ita tractantur, ut debent, sed aliquanto minutius.</li>
	<li>An me, inquis, tam amentem putas, ut apud imperitos isto modo loquar?</li>
	<li>Sed quanta sit alias, nunc tantum possitne esse tanta.</li>
	<li>Commoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus;</li>
	<li>Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P.</li>
</ol>


<p>Namque ii horum posteri meliores illi quidem mea sententia quam reliquarum philosophi disciplinarum, sed ita degenerant, ut ipsi ex se nati esse videantur. <a href='http://loripsum.net/' target='_blank'>Illa tamen simplicia, vestra versuta.</a> <i>Sed ego in hoc resisto;</i> Omnesque eae sunt genere quattuor, partibus plures, aegritudo, formido, libido, quamque Stoici communi nomine corporis et animi ¾donÆn appellant, ego malo laetitiam appellare, quasi gestientis animi elationem voluptariam. </p>

<p>Atque hoc dabitis, ut opinor, si modo sit aliquid esse beatum, id oportere totum poni in potestate sapientis. Quis autem honesta in familia institutus et educatus ingenue non ipsa turpitudine, etiamsi eum laesura non sit, offenditur? Nam me ipsum huc modo venientem convertebat ad sese Coloneus ille locus, cuius incola Sophocles ob oculos versabatur, quem scis quam admirer quemque eo delecter. Hoc foedus facere si potuerunt, faciant etiam illud, ut aequitatem, modestiam, virtutes omnes per se ipsas gratis diligant. Quid autem sit, quod ita moveat itaque a natura in primo ortu appetatur, non constat deque eo est inter philosophos, cum summum bonum exquiritur, omnis dissensio. <i>Is es profecto tu.</i> <mark>Eadem nunc mea adversum te oratio est.</mark> Itaque nostrum est-quod nostrum dico, artis est-ad ea principia, quae accepimus. Et ais, si una littera commota sit, fore tota ut labet disciplina. Octavio fuit, cum illam severitatem in eo filio adhibuit, quem in adoptionem D. Quia, cum a Zenone, inquam, hoc magnifice tamquam ex oraculo editur: Virtus ad beate vivendum se ipsa contenta est, et Quare? Ea enim vita expetitur, quae sit animi corporisque expleta virtutibus, in eoque summum bonum poni necesse est, quandoquidem id tale esse debet, ut rerum expetendarum sit extremum. Conferam tecum, quam cuique verso rem subicias; <a href='http://loripsum.net/' target='_blank'>Tum Torquatus: Prorsus, inquit, assentior;</a> Ad quorum et cognitionem et usum iam corroborati natura ipsa praeeunte deducimur. </p>

<p>In qua si nihil est praeter rationem, sit in una virtute finis bonorum; Sin autem ad animum, falsum est, quod negas animi ullum esse gaudium, quod non referatur ad corpus. Qui enim voluptatem ipsam contemnunt, iis licet dicere se acupenserem maenae non anteponere. <b>Recte dicis;</b> Haec mirabilia videri intellego, sed cum certe superiora firma ac vera sint, his autem ea consentanea et consequentia, ne de horum quidem est veritate dubitandum. Sed in ceteris artibus cum dicitur artificiose, posterum quodam modo et consequens putandum est, quod illi §pigennhmatikÒn appellant; Atqui reperiemus asotos primum ita non religiosos, ut edint de patella, deinde ita mortem non timentes, ut illud in ore habeant ex Hymnide: Mihi sex menses satis sunt vitae, septimum Orco spondeo. <a href='http://loripsum.net/' target='_blank'>Quis enim redargueret?</a> Sunt enim quasi prima elementa naturae, quibus ubertas orationis adhiberi vix potest, nec equidem eam cogito consectari. <a href='http://loripsum.net/' target='_blank'>Tria genera bonorum;</a> </p>

<p><b>Quid ergo?</b> Res enim se praeclare habebat, et quidem in utraque parte. Eloquentiae vero, quae et principibus maximo ornamento est, et qua te audimus valere plurimum, quantum tibi ex monumentis nostris addidisses! Ea cum dixissent, quid tandem talibus viris responderes? <a href='http://loripsum.net/' target='_blank'>Sed nimis multa.</a> </p>

",
			'lesson_excerpt'       => 'This lesson is about fifth part',
			'lesson_order'         => '5'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Sixth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae quidem res efficit, ne necesse sit isdem de rebus semper quasi dictata decantare neque a commentariolis suis discedere. <b>Ea possunt paria non esse.</b> Quid, quod homines infima fortuna, nulla spe rerum gerendarum, opifices denique delectantur historia? Duo Reges: constructio interrete. Nihil est enim, de quo minus dubitari possit, quam et honesta expetenda per se et eodem modo turpia per se esse fugienda. Sapientia enim et animi magnitudinem complectitur et iustitiam, et ut omnia, quae homini accidant, infra se esse iudicet, quod idem ceteris artibus non contingit. <i>Prioris generis est docilitas, memoria;</i> Vides igitur, si amicitiam sua caritate metiare, nihil esse praestantius, sin emolumento, summas familiaritates praediorum fructuosorum mercede superari. Ex quo illud efficitur, qui bene cenent omnis libenter cenare, qui libenter, non continuo bene. Quo modo igitur evenit, ut hominis natura sola esset, quae hominem relinqueret, quali oblivisceretur corporis, quae summum bonum non in toto homine, sed in parte hominis poneret? Minime vero, inquit ille, consentit. Iure igitur gravissimi philosophi initium summi boni a natura petiverunt et illum appetitum rerum ad naturam accommodatarum ingeneratum putaverunt omnibus, quia continentur ea commendatione naturae, qua se ipsi diligunt. Iam ille sorites, quo nihil putatis esse vitiosius: quod bonum sit, id esse optabile, quod optabile, id expetendum, quod expetendum, id laudabile, deinde reliqui gradus. <a href='http://loripsum.net/' target='_blank'>Velut ego nunc moveor.</a> </p>

<ol>
	<li>Serpere anguiculos, nare anaticulas, evolare merulas, cornibus uti videmus boves, nepas aculeis.</li>
	<li>Consequatur summas voluptates non modo parvo, sed per me nihilo, si potest;</li>
	<li>Nam si quae sunt aliae, falsum est omnis animi voluptates esse e corporis societate.</li>
	<li>Cum salvum esse flentes sui respondissent, rogavit essentne fusi hostes.</li>
</ol>


<p>Quamquam scripsit artem rhetoricam Cleanthes, Chrysippus etiam, sed sic, ut, si quis obmutescere concupierit, nihil aliud legere debeat. Nam ex eisdem verborum praestrigiis et regna nata vobis sunt et imperia et divitiae, et tantae quidem, ut omnia, quae ubique sint, sapientis esse dicatis. Quo posito et omnium adsensu adprobato illud adsumitur, eum, qui magno sit animo atque forti, omnia, quae cadere in hominem possint, despicere ac pro nihilo putare. Namque ii horum posteri meliores illi quidem mea sententia quam reliquarum philosophi disciplinarum, sed ita degenerant, ut ipsi ex se nati esse videantur. </p>

<p>Utrum igitur tibi non placet, inquit, virtutisne tantam esse vim, ut ad beate vivendum se ipsa contenta sit? Quid, si etiam bestiae multa faciunt duce sua quaeque natura partim indulgenter vel cum labore, ut in gignendo, in educando, perfacile appareat aliud quiddam iis propositum, non voluptatem? <i>Sedulo, inquam, faciam.</i> <a href='http://loripsum.net/' target='_blank'>Ut id aliis narrare gestiant?</a> <mark>Nihil opus est exemplis hoc facere longius.</mark> Negarine ullo modo possit numquam quemquam stabili et firmo et magno animo, quem fortem virum dicimus, effici posse, nisi constitutum sit non esse malum dolorem? Eloquentiae vero, quae et principibus maximo ornamento est, et qua te audimus valere plurimum, quantum tibi ex monumentis nostris addidisses! Ea cum dixissent, quid tandem talibus viris responderes? De quibus etsi a Chrysippo maxime est elaboratum, tamen a Zenone minus multo quam ab antiquis; Quid, si efficio ut fateare me non modo quid sit voluptas scire-est enim iucundus motus in sensu-, sed etiam quid eam tu velis esse? Rem videlicet difficilem et obscuram! individua cum dicitis et intermundia, quae nec sunt ulla nec possunt esse, intellegimus, voluptas, quae passeribus omnibus nota est, a nobis intellegi non potest? Quasi vero hoc didicisset a Zenone, non dolere, cum doleret! Illud audierat nec tamen didicerat, malum illud non esse, quia turpe non esset, et esse ferendum viro. Non pugnem cum homine, cur tantum habeat in natura boni; Iam ille sorites, quo nihil putatis esse vitiosius: quod bonum sit, id esse optabile, quod optabile, id expetendum, quod expetendum, id laudabile, deinde reliqui gradus. Et ille, cum erubuisset: Noli, inquit, ex me quaerere, qui in Phalericum etiam descenderim, quo in loco ad fluctum alunt declamare solitum Demosthenem, ut fremitum assuesceret voce vincere. </p>

<blockquote cite='http://loripsum.net'>
	Graece ergo praetor Athenis, id quod maluisti, te, cum ad me accedis, saluto: chaere, inquam, Tite! lictores, turma omnis chorusque: chaere, Tite! hinc hostis mi Albucius, hinc inimicus.
</blockquote>


<dl>
	<dt><dfn>Praeclare hoc quidem.</dfn></dt>
	<dd>Idem etiam dolorem saepe perpetiuntur, ne, si id non faciant, incidant in maiorem.</dd>
	<dt><dfn>Quare conare, quaeso.</dfn></dt>
	<dd>Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis.</dd>
	<dt><dfn>Sit sane ista voluptas.</dfn></dt>
	<dd>At negat Epicurus-hoc enim vestrum lumen estquemquam, qui honeste non vivat, iucunde posse vivere.</dd>
	<dt><dfn>Ut pulsi recurrant?</dfn></dt>
	<dd>Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est.</dd>
	<dt><dfn>Quis hoc dicit?</dfn></dt>
	<dd>Aut haec tibi, Torquate, sunt vituperanda aut patrocinium voluptatis repudiandum.</dd>
	<dt><dfn>Sullae consulatum?</dfn></dt>
	<dd>Te enim iudicem aequum puto, modo quae dicat ille bene noris.</dd>
</dl>


<dl>
	<dt><dfn>Pollicetur certe.</dfn></dt>
	<dd>Quid, quod homines infima fortuna, nulla spe rerum gerendarum, opifices denique delectantur historia?</dd>
	<dt><dfn>Ergo, inquit, tibi Q.</dfn></dt>
	<dd>Quodsi vultum tibi, si incessum fingeres, quo gravior viderere, non esses tui similis;</dd>
	<dt><dfn>Perge porro;</dfn></dt>
	<dd>Idem iste, inquam, de voluptate quid sentit?</dd>
	<dt><dfn>Erat enim Polemonis.</dfn></dt>
	<dd>Non enim in selectione virtus ponenda erat, ut id ipsum, quod erat bonorum ultimum, aliud aliquid adquireret.</dd>
</dl>


<blockquote cite='http://loripsum.net'>
	Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
</blockquote>


<p>Non perfecti autem homines et tamen ingeniis excellentibus praediti excitantur saepe gloria, quae habet speciem honestatis et similitudinem. Magni enim aestimabat pecuniam non modo non contra leges, sed etiam legibus partam. Consequatur summas voluptates non modo parvo, sed per me nihilo, si potest; Ita enim parvae et exiguae sunt istae accessiones bonorum, ut, quem ad modum stellae in radiis solis, sic istae in virtutum splendore ne cernantur quidem. Tum ego: Non mehercule, inquam, soleo temere contra Stoicos, non quo illis admodum assentiar, sed pudore impedior; <a href='http://loripsum.net/' target='_blank'>Negare non possum.</a> Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est? <mark>Nunc haec primum fortasse audientis servire debemus.</mark> Curium putes loqui, interdum ita laudat, ut quid praeterea sit bonum neget se posse ne suspicari quidem. Nec tamen argumentum hoc Epicurus a parvis petivit aut etiam a bestiis, quae putat esse specula naturae, ut diceret ab iis duce natura hanc voluptatem expeti nihil dolendi. Qua exposita scire cupio quae causa sit, cur Zeno ab hac antiqua constitutione desciverit, quidnam horum ab eo non sit probatum; In voluptate corporis-addam, si vis, animi, dum ea ipsa, ut vultis, sit e corpore-situm est vivere beate. Quis enim confidit semper sibi illud stabile et firmum permansurum, quod fragile et caducum sit? Eamne rationem igitur sequere, qua tecum ipse et cum tuis utare, profiteri et in medium proferre non audeas? <b>Confecta res esset.</b> Quod praeceptum quia maius erat, quam ut ab homine videretur, idcirco assignatum est deo. Nemo est igitur, quin hanc affectionem animi probet atque laudet, qua non modo utilitas nulla quaeritur, sed contra utilitatem etiam conservatur fides. </p>

<p><a href='http://loripsum.net/' target='_blank'>Sed ad illum redeo.</a> Quid enim dicis omne animal, simul atque sit ortum, applicatum esse ad se diligendum esseque in se conservando occupatum? Ne tu, inquam, Cato, verbis illustribus et id, quod vis, declarantibus! itaque mihi videris Latine docere philosophiam et ei quasi civitatem dare. Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? At vero illa perfecta atque plena eorum, qui cum de hominis summo bono quaererent, nullam in eo neque animi neque corporis partem vacuam tutela reliquerunt. Nec enim absolvi beata vita sapientis neque ad exitum perduci poterit, si prima quaeque bene ab eo consulta atque facta ipsius oblivione obruentur. Reicietur etiam Carneades, nec ulla de summo bono ratio aut voluptatis non dolendive particeps aut honestatis expers probabitur. <i>Immo videri fortasse.</i> Multoque hoc melius nos veriusque quam Stoici. Numquam audivi in Epicuri schola Lycurgum, Solonem, Miltiadem, Themistoclem, Epaminondam nominari, qui in ore sunt ceterorum omnium philosophorum. Apud ceteros autem philosophos, qui quaesivit aliquid, tacet; Saepe ab Aristotele, a Theophrasto mirabiliter est laudata per se ipsa rerum scientia; <i>Qualem igitur hominem natura inchoavit?</i> Quae enim constituta sunt prima naturae, ad ea si voluptas accesserit, unum aliquod accesserit commodum corporis neque eam constitutionem summi boni, quae est proposta, mutaverit. Gracchum patrem non beatiorem fuisse quam fillum, cum alter stabilire rem publicam studuerit, alter evertere. <b>Explanetur igitur.</b> Se dicere inter honestum et turpe nimium quantum, nescio quid inmensum, inter ceteras res nihil omnino interesse. Aut, si esses Orestes, Pyladem refelleres, te indicares et, si id non probares, quo minus ambo una necaremini non precarere? </p>

<ol>
	<li>Eam si varietatem diceres, intellegerem, ut etiam non dicente te intellego;</li>
	<li>Omnia contraria, quos etiam insanos esse vultis.</li>
	<li>Cum id fugiunt, re eadem defendunt, quae Peripatetici, verba.</li>
	<li>Ea, quae dialectici nunc tradunt et docent, nonne ab illis instituta sunt aut inventa sunt?</li>
</ol>


<p>Video enim et magnos et eosdem bene longinquos dolores, quorum alia toleratio est verior, qua uti vos non potestis, qui honestatem ipsam per se non amatis. Quid affers, cur Thorius, cur Caius Postumius, cur omnium horum magister, Orata, non iucundissime vixerit? Nihil enim desiderabile concupiscunt, plusque in ipsa iniuria detrimenti est quam in iis rebus emolumenti, quae pariuntur iniuria. Atque omnia quidem scire, cuiuscumque modi sint, cupere curiosorum, duci vero maiorum rerum contemplatione ad cupiditatem scientiae summorum virorum est putandum. <mark>At, si voluptas esset bonum, desideraret.</mark> Ipse negat, ut ante dixi, luxuriosorum vitam reprehendendam, nisi plane fatui sint, id est nisi aut cupiant aut metuant. <b>Quid vero?</b> Crassus fuit, qui tamen solebat uti suo bono, ut hodie est noster Pompeius, cui recte facienti gratia est habenda; <b>Eaedem res maneant alio modo.</b> Itaque omnis honos, omnis admiratio, omne studium ad virtutem et ad eas actiones, quae virtuti sunt consentaneae, refertur, eaque omnia, quae aut ita in animis sunt aut ita geruntur, uno nomine honesta dicuntur. Honestum igitur id intellegimus, quod tale est, ut detracta omni utilitate sine ullis praemiis fructibusve per se ipsum possit iure laudari. Concede nihil esse bonum, nisi quod bonestum sit: concedendum est in virtute esse positam beatam vitam vide rursus retro: dato hoc dandum erit illud. <i>Quis enim redargueret?</i> Ea, quae dialectici nunc tradunt et docent, nonne ab illis instituta sunt aut inventa sunt? </p>

<p><b>Et nemo nimium beatus est;</b> Itaque multi, cum in potestate essent hostium aut tyrannorum, multi in custodia, multi in exillo dolorem suum doctrinae studiis levaverunt. Si qua in iis corrigere voluit, deteriora fecit. Atque his tribus generibus honestorum notatis quartum sequitur et in eadem pulchritudine et aptum ex illis tribus, in quo inest ordo et moderatio. <a href='http://loripsum.net/' target='_blank'>Dat enim intervalla et relaxat.</a> <a href='http://loripsum.net/' target='_blank'>Age sane, inquam.</a> Sit voluptas non minor in nasturcio illo, quo vesci Persas esse solitos scribit Xenophon, quam in Syracusanis mensis, quae a Platone graviter vituperantur; <a href='http://loripsum.net/' target='_blank'>Tenent mordicus.</a> <a href='http://loripsum.net/' target='_blank'>Is es profecto tu.</a> <b>De illis, cum volemus.</b> Inest in eadem explicatione naturae insatiabilis quaedam e cognoscendis rebus voluptas,in qua una confectis rebus necessariis vacui negotiis honeste ac liberaliter possimus vivere. <a href='http://loripsum.net/' target='_blank'>Quis istum dolorem timet?</a> </p>

<ul>
	<li>Suam denique cuique naturam esse ad vivendum ducem.</li>
	<li>Gerendus est mos, modo recte sentiat.</li>
	<li>Negabat igitur ullam esse artem, quae ipsa a se proficisceretur;</li>
	<li>An eum locum libenter invisit, ubi Demosthenes et Aeschines inter se decertare soliti sunt?</li>
	<li>Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur.</li>
	<li>Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Deinde disputat, quod cuiusque generis animantium statui deceat extremum.
</blockquote>


<p><mark>Nihil sane.</mark> Peccata paria. Nihil ad rem! Ne sit sane; Sic enim maiores nostri labores non fugiendos tristissimo tamen verbo aerumnas etiam in deo nominaverunt. Minime vero, inquit ille, consentit. Quando enim Socrates, qui parens philosophiae iure dici potest, quicquam tale fecit? Minime vero, inquit ille, consentit. Quae cum dixissem, magis ut illum provocarem quam ut ipse loquerer, tum Triarius leniter arridens: Tu quidem, inquit, totum Epicurum paene e philosophorum choro sustulisti. </p>

<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. Illum mallem levares, quo optimum atque humanissimum virum, Cn. Nam cum Academicis incerta luctatio est, qui nihil affirmant et quasi desperata cognitione certi id sequi volunt, quodcumque veri simile videatur. <i>Quorum sine causa fieri nihil putandum est.</i> <i>Reguli reiciendam;</i> Modo enim fuit Carneadis, quem videre videor-est, enim nota imago -, a sedeque ipsa tanta ingenii, magnitudine orbata desiderari illam vocem puto. <i>Itaque his sapiens semper vacabit.</i> Nam sunt et in animo praecipua quaedam et in corpore, quae cum leviter agnovit, tum discernere incipit, ut ea, quae prima data sunt natura, appetat asperneturque contraria. Equidem etiam curiam nostram-Hostiliam dico, non hanc novam, quae minor mihi esse videtur, posteaquam est maior-solebam intuens Scipionem, Catonem, Laelium, nostrum vero in primis avum cogitare; Non enim in selectione virtus ponenda erat, ut id ipsum, quod erat bonorum ultimum, aliud aliquid adquireret. <i>Ita prorsus, inquam;</i> <b>Non potes, nisi retexueris illa.</b> Quod autem magnum dolorem brevem, longinquum levem esse dicitis, id non intellego quale sit. Sin autem reliqua appetenda sunt, cur, quod est ultimum rerum appetendarum, id non aut ex omnium earum aut ex plurimarum et maximarum appetitione concluditur? <a href='http://loripsum.net/' target='_blank'>Falli igitur possumus.</a> </p>

<p>Cum autem progrediens confirmatur animus, agnoscit ille quidem naturae vim, sed ita, ut progredi possit longius, per se sit tantum inchoata. <b>Iam contemni non poteris.</b> Quo studio cum satiari non possint, omnium ceterarum rerum obliti níhil abiectum, nihil humile cogitant; Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. <b>Nam quid possumus facere melius?</b> Quis enim ignorat, si plures ex alto emergere velint, propius fore eos quidem ad respirandum, qui ad summam iam aquam adpropinquent, sed nihilo magis respirare posse quam eos, qui sint in profundo? <a href='http://loripsum.net/' target='_blank'>Quare conare, quaeso.</a> Ius autem, quod ita dici appellarique possit, id esse natura, alienumque esse a sapiente non modo iniuriam cui facere, verum etiam nocere. Quocirca eodem modo sapiens erit affectus erga amicum, quo in se ipsum, quosque labores propter suam voluptatem susciperet, eosdem suscipiet propter amici voluptatem. Est autem situm in nobis ut et adversa quasi perpetua oblivione obruamus et secunda iucunde ac suaviter meminerimus. <mark>Efficiens dici potest.</mark> <b>Immo videri fortasse.</b> </p>

<p>Sed audiamus ipsum: Compensabatur, inquit, tamen cum his omnibus animi laetitia, quam capiebam memoria rationum inventorumque nostrorum. Quibus rebus intellegitur nec timiditatem ignaviamque vituperari nec fortitudinem patientiamque laudari suo nomine, sed illas reici, quia dolorem pariant, has optari, quia voluptatem. <i>At eum nihili facit;</i> Quem quidem vos, cum improbis poenam proponitis, inpetibilem facitis, cum sapientem semper boni plus habere vultis, tolerabilem. <a href='http://loripsum.net/' target='_blank'>Nihil illinc huc pervenit.</a> Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. Tum enim eam ipsam vis, quam modo ego dixi, et nomen inponis, in motu ut sit et faciat aliquam varietatem, tum aliam quandam summam voluptatem, quo addi nihil possit; Ita fit, ut duo genera propter se expetendorum reperiantur, unum, quod est in iis, in quibus completar illud extremum, quae sunt aut animi aut corporis; Quamquam ego non quaero, quid tibi a me probatum sit, sed huic Ciceroni nostro, quem discipulum cupio a te abducere. <a href='http://loripsum.net/' target='_blank'>Quod totum contra est.</a> </p>

<ul>
	<li>At habetur! Et ego id scilicet nesciebam! Sed ut sit, etiamne post mortem coletur?</li>
	<li>In quo etsi est magnus, tamen nova pleraque et perpauca de moribus.</li>
</ul>


<p><a href='http://loripsum.net/' target='_blank'>Tu quidem reddes;</a> Quae possunt eadem contra Carneadeum illud summum bonum dici, quod is non tam, ut probaret, protulit, quam ut Stoicis, quibuscum bellum gerebat, opponeret. Nam his libris eum malo quam reliquo ornatu villae delectari. Sin est etiam corpus, ista explanatio naturae nempe hoc effecerit, ut ea, quae ante explanationem tenebamus, relinquamus. Nihil enim possumus iudicare, nisi quod est nostri iudicii-in quo frustra iudices solent, cum sententiam pronuntiant, addere: si quid mei iudicii est; <i>Cur, nisi quod turpis oratio est?</i> <a href='http://loripsum.net/' target='_blank'>Dat enim intervalla et relaxat.</a> <mark>Quibus ego vehementer assentior.</mark> </p>

<ol>
	<li>Idem etiam dolorem saepe perpetiuntur, ne, si id non faciant, incidant in maiorem.</li>
	<li>Quam nemo umquam voluptatem appellavit, appellat;</li>
	<li>Ergo, si semel tristior effectus est, hilara vita amissa est?</li>
	<li>Incommoda autem et commoda-ita enim estmata et dustmata appello-communia esse voluerunt, paria noluerunt.</li>
</ol>


<p><b>Quis est tam dissimile homini.</b> <i>Non est ista, inquam, Piso, magna dissensio.</i> <b>A mene tu?</b> Tum enim eam ipsam vis, quam modo ego dixi, et nomen inponis, in motu ut sit et faciat aliquam varietatem, tum aliam quandam summam voluptatem, quo addi nihil possit; Atque ab isto capite fluere necesse est omnem rationem bonorum et malorum. <b>Cyrenaici quidem non recusant;</b> Sed eum qui audiebant, quoad poterant, defendebant sententiam suam. <i>Iam enim adesse poterit.</i> Nec enim, omnes avaritias si aeque avaritias esse dixerimus, sequetur ut etiam aequas esse dicamus. <a href='http://loripsum.net/' target='_blank'>Magna laus.</a> Huic mori optimum esse propter desperationem sapientiae, illi propter spem vivere. Graece ergo praetor Athenis, id quod maluisti, te, cum ad me accedis, saluto: chaere, inquam, Tite! lictores, turma omnis chorusque: chaere, Tite! hinc hostis mi Albucius, hinc inimicus. Sunt autem, qui dicant foedus esse quoddam sapientium, ut ne minus amicos quam se ipsos diligant. Est enim aliquid in his rebus probabile, et quidem ita, ut eius ratio reddi possit, ergo ut etiam probabiliter acti ratio reddi possit. Et si turpitudinem fugimus in statu et motu corporis, quid est cur pulchritudinem non sequamur? Nec enim ignoras his istud honestum non summum modo, sed etiam, ut tu vis, solum bonum videri. <mark>Istic sum, inquit.</mark> Quae enim adhuc protulisti, popularia sunt, ego autem a te elegantiora desidero. </p>

<ul>
	<li>Qualem igitur hominem natura inchoavit?</li>
	<li>Quamvis enim depravatae non sint, pravae tamen esse possunt.</li>
	<li>Deinde disputat, quod cuiusque generis animantium statui deceat extremum.</li>
	<li>Nunc dicam de voluptate, nihil scilicet novi, ea tamen, quae te ipsum probaturum esse confidam.</li>
	<li>Quae tamen a te agetur non melior, quam illae sunt, quas interdum optines.</li>
	<li>Quae similitudo in genere etiam humano apparet.</li>
	<li>Vide ne ista sint Manliana vestra aut maiora etiam, si imperes quod facere non possim.</li>
</ul>


<p>Ne seges quidem igitur spicis uberibus et crebris, si avenam uspiam videris, nec mercatura quaestuosa, si in maximis lucris paulum aliquid damni contraxerit. Ut enim qui mortem in malis ponit non potest eam non timere, sic nemo ulla in re potest id, quod malum esse decreverit, non curare idque contemnere. Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. Princeps huius civitatis Phalereus Demetrius cum patria pulsus esset iniuria, ad Ptolomaeum se regem Alexandream contulit. <mark>Sed nimis multa.</mark> Utrum enim sit voluptas in iis rebus, quas primas secundum naturam esse diximus, necne sit ad id, quod agimus, nihil interest. Eiuro, inquit adridens, iniquum, hac quidem de re; Sin autem eos non probabat, quid attinuit cum iis, quibuscum re concinebat, verbis discrepare? </p>

<p><b>Ut pulsi recurrant?</b> <i>Quid censes in Latino fore?</i> Quod quoniam in quo sit magna dissensio est, Carneadea nobis adhibenda divisio est, qua noster Antiochus libenter uti solet. <a href='http://loripsum.net/' target='_blank'>Nos commodius agimus.</a> </p>

<p>Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus; <b>Sed ego in hoc resisto;</b> Elicerem ex te cogeremque, ut responderes, nisi vererer ne Herculem ipsum ea, quae pro salute gentium summo labore gessisset, voluptatis causa gessisse diceres. Et tamen puto concedi nobis oportere ut Graeco verbo utamur, si quando minus occurret Latinum, ne hoc ephippiis et acratophoris potius quam proegmenis et apoproegmenis concedatur; Elicerem ex te cogeremque, ut responderes, nisi vererer ne Herculem ipsum ea, quae pro salute gentium summo labore gessisset, voluptatis causa gessisse diceres. Quae enim cupiditates a natura proficiscuntur, facile explentur sine ulla iniuria, quae autem inanes sunt, iis parendum non est. Epicurei num desistunt de isdem, de quibus et ab Epicuro scriptum est et ab antiquis, ad arbitrium suum scribere? Nam hunc ipsum sive finem sive extremum sive ultimum definiebas id esse, quo omnia, quae recte fierent, referrentur neque id ipsum usquam referretur. Hic dolor populi Romani duce et auctore Bruto causa civitati libertatis fuit, ob eiusque mulieris memoriam primo anno et vir et pater eius consul est factus. Praeclare enim Plato: Beatum, cui etiam in senectute contigerit, ut sapientiam verasque opiniones assequi possit. <mark>Frater et T.</mark> Nam si pravitatem inminutionemque corporis propter se fugiendam putamus, cur non etiam, ac fortasse magis, propter se formae dignitatem sequamur? Videmusne ut pueri ne verberibus quidem a contemplandis rebus perquirendisque deterreantur? </p>

<p>Ita fit illa conclusio non solum vera, sed ita perspicua, ut dialectici ne rationem quidem reddi putent oportere: si illud, hoc; Sed tamen nonne reprehenderes, Epicure, luxuriosos ob eam ipsam causam, quod ita viverent, ut persequerentur cuiusque modi voluptates, cum esset praesertim, ut ais tu, summa voluptas nihil dolere? <a href='http://loripsum.net/' target='_blank'>Quonam, inquit, modo?</a> <b>Hoc loco tenere se Triarius non potuit.</b> Id autem eius modi est, ut additum ad virtutem auctoritatem videatur habiturum et expleturum cumulate vitam beatam, de quo omnis haec quaestio est. Quae enim constituta sunt prima naturae, ad ea si voluptas accesserit, unum aliquod accesserit commodum corporis neque eam constitutionem summi boni, quae est proposta, mutaverit. </p>

<dl>
	<dt><dfn>Quo tandem modo?</dfn></dt>
	<dd>Quid ergo attinet gloriose loqui, nisi constanter loquare?</dd>
	<dt><dfn>Quare conare, quaeso.</dfn></dt>
	<dd>Ut alios omittam, hunc appello, quem ille unum secutus est.</dd>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Negat enim summo bono afferre incrementum diem.</dd>
	<dt><dfn>Explanetur igitur.</dfn></dt>
	<dd>Verum tamen cum de rebus grandioribus dicas, ipsae res verba rapiunt;</dd>
</dl>


<p>Nunc dicam de voluptate, nihil scilicet novi, ea tamen, quae te ipsum probaturum esse confidam. Quid de Pythagora? A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas. <a href='http://loripsum.net/' target='_blank'>Avaritiamne minuis?</a> Cum autem assumpta ratío est, tanto in dominatu locatur, ut omnia illa prima naturae hulus tutelae subiciantur. Multosque etiam dolores curationis causa perferant, ut, si ipse usus membrorum non modo non maior, verum etiam minor futurus sit, eorum tamen species ad naturam revertatur? Quod autem magnum dolorem brevem, longinquum levem esse dicitis, id non intellego quale sit. Idque quo magis quidam ita faciunt, ut iure etiam reprehendantur, hoc magis intellegendum est haec ipsa nimia in quibusdam futura non fuisse, nisi quaedam essent modica natura. </p>

<p>Idque testamento cavebit is, qui nobis quasi oraculum ediderit nihil post mortem ad nos pertinere? At vero facere omnia, ut adipiscamur, quae secundum naturam sint, etiam si ea non assequamur, id esse et honestum et solum per se expetendum et solum bonum Stoici dicunt. <a href='http://loripsum.net/' target='_blank'>Quae cum dixisset, finem ille.</a> Vitae autem degendae ratio maxime quidem illis placuit quieta. Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. Suis cuiusque sensibus sic, ut, contra si quis dicere velit, non audiatur -, tamen, ne quid praetermittamus, rationes quoque, cur hoc ita sit, afferendas puto. Quae rursus dum sibi evelli ex ordine nolunt, horridiores evadunt, asperiores, duriores et oratione et moribus. Bonum ipsum etiam quid esset, fortasse, si opus fuisset, definisses aut quod esset natura adpetendum aut quod prodesset aut quod iuvaret aut quod liberet modo. <a href='http://loripsum.net/' target='_blank'>Certe non potest.</a> Conferam tecum, quam cuique verso rem subicias; <a href='http://loripsum.net/' target='_blank'>Istic sum, inquit.</a> <b>Certe, nisi voluptatem tanti aestimaretis.</b> </p>

<p>Ergo omni animali illud, quod appetiti positum est in eo, quod naturae est accommodatum. <mark>At enim hic etiam dolore.</mark> Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; <i>Quid ad utilitatem tantae pecuniae?</i> At vero si ad vitem sensus accesserit, ut appetitum quendam habeat et per se ipsa moveatur, quid facturam putas? Longum est enim ad omnia respondere, quae a te dicta sunt. </p>

",
			'lesson_excerpt'       => 'This lesson is about sixth part',
			'lesson_order'         => '6'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <mark>Duo Reges: constructio interrete.</mark> Quasi vero aut concedatur in omnibus stultis aeque magna esse vitia, et eadem inbecillitate et inconstantia L. Respondebo me non quaerere, inquam, hoc tempore quid virtus efficere possit, sed quid constanter dicatur, quid ipsum a se dissentiat. <b>Quae cum dixisset, finem ille.</b> An ne hoc quidem Peripateticis concedis, ut dicant omnium bonorum virorum, id est sapientium omnibusque virtutibus ornatorum, vitam omnibus partibus plus habere semper boni quam mali? Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. <b>Quid de Pythagora?</b> Ut ad minora veniam, mathematici, poëtae, musici, medici denique ex hac tamquam omnium artificum officina profecti sunt. Tum mihi Piso: Quid ergo? </p>

<dl>
	<dt><dfn>Poterat autem inpune;</dfn></dt>
	<dd>Est igitur officium eius generis, quod nec in bonis ponatur nec in contrariis.</dd>
	<dt><dfn>Immo alio genere;</dfn></dt>
	<dd>Bonum integritas corporis: misera debilitas.</dd>
	<dt><dfn>Quis istum dolorem timet?</dfn></dt>
	<dd>Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret.</dd>
	<dt><dfn>Quid de Pythagora?</dfn></dt>
	<dd>Nam aliquando posse recte fieri dicunt nulla expectata nec quaesita voluptate.</dd>
</dl>


<ol>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
	<li>Quo invento omnis ab eo quasi capite de summo bono et malo disputatio ducitur.</li>
	<li>Qui enim voluptatem ipsam contemnunt, iis licet dicere se acupenserem maenae non anteponere.</li>
	<li>Et quidem iure fortasse, sed tamen non gravissimum est testimonium multitudinis.</li>
</ol>


<ol>
	<li>Quid, si non sensus modo ei sit datus, verum etiam animus hominis?</li>
	<li>Quod non faceret, si in voluptate summum bonum poneret.</li>
	<li>Quae si potest singula consolando levare, universa quo modo sustinebit?</li>
	<li>Idemne, quod iucunde?</li>
</ol>


<p>Et quis a Stoicis et quem ad modum diceretur, tamen ego quoque exponam, ut perspiciamus, si potuerimus, quidnam a Zenone novi sit allatum. Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat; Est enim perspicuum nullam artem ipsam in se versari, sed esse aliud artem ipsam, aliud quod propositum sit arti. Non quaero, quid dicat, sed quid convenienter possit rationi et sententiae suae dicere. Nihil est enim, de quo aliter tu sentias atque ego, modo commutatis verbis ipsas res conferamus. Quam haec sunt contraria! hic si definire, si dividere didicisset, si loquendi vim, si denique consuetudinem verborum teneret, numquam in tantas salebras incidisset. Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur? <a href='http://loripsum.net/' target='_blank'>Restatis igitur vos;</a> Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. <i>Iam in altera philosophiae parte.</i> </p>

<p>Ex quo magnitudo quoque animi existebat, qua facile posset repugnari obsistique fortunae, quod maximae res essent in potestate sapientis. Illorum vero ista ipsa quam exilia de virtutis vi! Quam tantam volunt esse, ut beatum per se efficere possit. <i>Quae diligentissime contra Aristonem dicuntur a Chryippo.</i> <a href='http://loripsum.net/' target='_blank'>Sed ad rem redeamus;</a> Aliud igitur esse censet gaudere, aliud non dolere. Admirantes quaeramus ab utroque, quonam modo vitam agere possimus, si nihil interesse nostra putemus, valeamus aegrine simus, vacemus an cruciemur dolore, frigus, famem propulsare possimus necne possimus. Deinde concludebas summum malum esse dolorem, summum bonum voluptatem! Lucius Thorius Balbus fuit, Lanuvinus, quem meminisse tu non potes. Quamquam haec quidem praeposita recte et reiecta dicere licebit. Nam qui valitudinem aestimatione aliqua dignam iudicamus neque eam tamen in bonis ponimus, idem censemus nullam esse tantam aestimationem, ut ea virtuti anteponatur. <i>Quid iudicant sensus?</i> Quae est quaerendi ac disserendi, quae logikh dicitur, iste vester plane, ut mihi quidem videtur, inermis ac nudus est. </p>

<ul>
	<li>Fatebuntur Stoici haec omnia dicta esse praeclare, neque eam causam Zenoni desciscendi fuisse.</li>
	<li>Illa videamus, quae a te de amicitia dicta sunt.</li>
</ul>


<dl>
	<dt><dfn>Quid de Pythagora?</dfn></dt>
	<dd>Non autem hoc: igitur ne illud quidem.</dd>
	<dt><dfn>Primum divisit ineleganter;</dfn></dt>
	<dd>Dat enim id nobis solitudo, quod si qui deus diceret, numquam putarem me in Academia tamquam philosophum disputaturum.</dd>
	<dt><dfn>Bonum valitudo: miser morbus.</dfn></dt>
	<dd>Quam si explicavisset, non tam haesitaret.</dd>
	<dt><dfn>Ita prorsus, inquam;</dfn></dt>
	<dd>At vero illa, quae Peripatetici, quae Stoici dicunt, semper tibi in ore sunt in iudiciis, in senatu.</dd>
	<dt><dfn>Quid Zeno?</dfn></dt>
	<dd>Duae sunt enim res quoque, ne tu verba solum putes.</dd>
	<dt><dfn>Erat enim Polemonis.</dfn></dt>
	<dd>Quibus natura iure responderit non esse verum aliunde finem beate vivendi, a se principia rei gerendae peti;</dd>
</dl>


<p>Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. <a href='http://loripsum.net/' target='_blank'>Negare non possum.</a> <i>Quare conare, quaeso.</i> Qui haec didicerunt, quae ille contemnit, sic solent: Duo genera cupiditatum, naturales et inanes, naturalium duo, necessariae et non necessariae. Quid ergo dubitamus, quin, si non dolere voluptas sit summa, non esse in voluptate dolor sit maximus? Ratio ista, quam defendis, praecepta, quae didicisti, quae probas, funditus evertunt amicitiam, quamvis eam Epicurus, ut facit, in caelum efferat laudibus. Ut enim qui mortem in malis ponit non potest eam non timere, sic nemo ulla in re potest id, quod malum esse decreverit, non curare idque contemnere. <b>Peccata paria.</b> Conveniret, pluribus praeterea conscripsisset qui esset optimus rei publicae status, hoc amplius Theophrastus: quae essent in re publica rerum inclinationes et momenta temporum, quibus esset moderandum, utcumque res postularet. <b>Si longus, levis.</b> </p>

<p><mark>Si longus, levis dictata sunt.</mark> Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus. Quam haec sunt contraria! hic si definire, si dividere didicisset, si loquendi vim, si denique consuetudinem verborum teneret, numquam in tantas salebras incidisset. Sin kakan malitiam dixisses, ad aliud nos unum certum vitium consuetudo Latina traduceret. Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. <b>Istam voluptatem, inquit, Epicurus ignorat?</b> Quam ob rem tandem, inquit, non satisfacit? <a href='http://loripsum.net/' target='_blank'>Ergo, inquit, tibi Q.</a> Natura sic ab iis investigata est, ut nulla pars caelo, mari, terra, ut poëtice loquar, praetermissa sit; </p>

<p><b>Zenonis est, inquam, hoc Stoici.</b> Aderamus nos quidem adolescentes, sed multi amplissimi viri, quorum nemo censuit plus Fadiae dandum, quam posset ad eam lege Voconia pervenire. Non elogia monimentorum id significant, velut hoc ad portam: Hunc unum plurimae consentiunt gentes populi primarium fuisse virum. Itaque quantum adiit periculum! ad honestatem enim illum omnem conatum suum referebat, non ad voluptatem. Una voluptas e multis obscuratur in illa vita voluptaria, sed tamen ea, quamvis parva sit, pars est eius vitae, quae posita est in voluptate. Ita, quod certissimum est, pro vera certaque iustitia simulationem nobis iustitiae traditis praecipitisque quodam modo ut nostram stabilem conscientiam contemnamus, aliorum errantem opinionem aucupemur. </p>

<dl>
	<dt><dfn>Restatis igitur vos;</dfn></dt>
	<dd>Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat;</dd>
	<dt><dfn>Si longus, levis.</dfn></dt>
	<dd>Age nunc isti doceant, vel tu potius quis enim ista melius?</dd>
	<dt><dfn>Venit ad extremum;</dfn></dt>
	<dd>An, partus ancillae sitne in fructu habendus, disseretur inter principes civitatis, P.</dd>
	<dt><dfn>Nihilo magis.</dfn></dt>
	<dd>Sin tantum modo ad indicia veteris memoriae cognoscenda, curiosorum.</dd>
	<dt><dfn>Scaevolam M.</dfn></dt>
	<dd>Vadem te ad mortem tyranno dabis pro amico, ut Pythagoreus ille Siculo fecit tyranno?</dd>
	<dt><dfn>Sint ista Graecorum;</dfn></dt>
	<dd>Quid, cum fictas fabulas, e quibus utilitas nulla elici potest, cum voluptate legimus?</dd>
</dl>


<p>Quid tibi, Torquate, quid huic Triario litterae, quid historiae cognitioque rerum, quid poetarum evolutio, quid tanta tot versuum memoria voluptatis affert? <a href='http://loripsum.net/' target='_blank'>Vide, quaeso, rectumne sit.</a> Cynicorum autem rationem atque vitam alii cadere in sapientem dicunt, si qui eius modi forte casus inciderit, ut id faciendum sit, alii nullo modo. Gracchum patrem non beatiorem fuisse quam fillum, cum alter stabilire rem publicam studuerit, alter evertere. <i>Iam id ipsum absurdum, maximum malum neglegi.</i> Sin autem ad animum, falsum est, quod negas animi ullum esse gaudium, quod non referatur ad corpus. <mark>Si enim ad populum me vocas, eum.</mark> Quodsi, ne quo incommodo afficiare, non relinques amicum, tamen, ne sine fructu alligatus sis, ut moriatur optabis. <mark>Ut id aliis narrare gestiant?</mark> Itaque non ob ea solum incommoda, quae eveniunt inprobis, fugiendam inprobitatem putamus, sed multo etiam magis, quod, cuius in animo versatur, numquam sinit eum respirare, numquam adquiescere. <b>Stoici scilicet.</b> Quae cum essent dicta, finem fecimus et ambulandi et disputandi. <a href='http://loripsum.net/' target='_blank'>Tenent mordicus.</a> Minime vero probatur huic disciplinae, de qua loquor, aut iustitiam aut amicitiam propter utilitates adscisci aut probari. <b>Cur deinde Metrodori liberos commendas?</b> <i>Quis istum dolorem timet?</i> </p>

<p>Dicuntur ista, Cato, magnifice, inquam, sed videsne verborum gloriam tibi cum Pyrrhone et cum Aristone, qui omnia exaequant, esse communem? Deinde qui fit, ut ego nesciam, sciant omnes, quicumque Epicurei esse voluerunt? Nam cum suscepta semel est beata vita, tam permanet quam ipsa illa effectrix beatae vitae sapientia neque expectat ultimum tempus aetatis, quod Croeso scribit Herodotus praeceptum a Solone. Itaque illa non dico me expetere, sed legere, nec optare, sed sumere, contraria autem non fugere, sed quasi secernere. Naturalem enim appetitionem, quam vocant o)rmh)n, itemque officium, ipsam etiam virtutem tuentem volunt esse earum rerum, quae secundum naturam sunt. <i>Nos cum te, M.</i> Quarum adeo omnium sententia pronuntiabit primum de voluptate nihil esse ei loci, non modo ut sola ponatur in summi boni sede, quam quaerimus, sed ne illo quidem modo, ut ad honestatem applicetur. Leonidas autem, rex Lacedaemoniorum, se in Thermopylis trecentosque eos, quos eduxerat Sparta, cum esset proposita aut fuga turpis aut gloriosa mors, opposuit hostibus. Quoniamque non dubium est quin in iis, quae media dicimus, sit aliud sumendum, aliud reiciendum, quicquid ita fit aut dicitur, omne officio continetur. Respondent extrema primis, media utrisque, omnia omnibus. </p>

<p>Ergo in bestiis erunt secreta e voluptate humanarum quaedam simulacra virtutum, in ipsis hominibus virtus nisi voluptatis causa nulla erit? Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. Atqui si, ut convenire debet inter nos, est quaedam appetitio naturalis ea, quae secundum naturam sunt, appetens, eorum omnium est aliquae summa facienda. Quoniamque in iis rebus, quae neque in virtutibus sunt neque in vitiis, est tamen quiddam, quod usui possit esse, tollendum id non est. Cuius tanta tormenta sunt, ut in iis beata vita, si modo dolor summum malum est, esse non possit. <a href='http://loripsum.net/' target='_blank'>Ego vero isti, inquam, permitto.</a> <i>Quid enim?</i> Alia quaedam dicent, credo, magna antiquorum esse peccata, quae ille veri investigandi cupidus nullo modo ferre potuerit. Cynicorum autem rationem atque vitam alii cadere in sapientem dicunt, si qui eius modi forte casus inciderit, ut id faciendum sit, alii nullo modo. <b>Sed quid sentiat, non videtis.</b> Equidem etiam curiam nostram-Hostiliam dico, non hanc novam, quae minor mihi esse videtur, posteaquam est maior-solebam intuens Scipionem, Catonem, Laelium, nostrum vero in primis avum cogitare; <a href='http://loripsum.net/' target='_blank'>Traditur, inquit, ab Epicuro ratio neglegendi doloris.</a> Praeclare Laelius, et recte sofñw, illudque vere: O Publi, o gurges, Galloni! es <i>[redacted]</i> miser, inquit. Sin te auctoritas commovebat, nobisne omnibus et Platoni ipsi nescio quem illum anteponebas? Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. </p>

<p>Sed tu, ut dignum est tua erga me et philosophiam voluntate ab adolescentulo suscepta, fac ut Metrodori tueare liberos. Quocirca intellegi necesse est in ipsis rebus, quae discuntur et cognoscuntur, invitamenta inesse, quibus ad discendum cognoscendumque moveamur. Non perfecti autem homines et tamen ingeniis excellentibus praediti excitantur saepe gloria, quae habet speciem honestatis et similitudinem. <a href='http://loripsum.net/' target='_blank'>Tum ille: Ain tandem?</a> Qui cum cruciaretur non ferendis doloribus, propagabat tamen vitam aucupio, sagittarum ictu configebat tardus celeres, stans volantis, ut apud Accium est, pennarumque contextu corpori tegumenta faciebat. <i>Et quod est munus, quod opus sapientiae?</i> Equidem in omnibus istis conclusionibus hoc putarem philosophia nobisque dignum, et maxime, cum summum bonum quaereremus, vitam nostram, consilia, voluntates, non verba corrigi. Quo posito et omnium adsensu adprobato illud adsumitur, eum, qui magno sit animo atque forti, omnia, quae cadere in hominem possint, despicere ac pro nihilo putare. Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus; Ut iam liceat una comprehensione omnia complecti non dubitantemque dicere omnem naturam esse servatricem sui idque habere propositum quasi finem et extremum, se ut custodiat quam in optimo sui generis statu; Unum, cum in voluptate sumus, alterum, cum in dolore, tertium hoc, in quo nunc equidem sum, credo item vos, nec in dolore nec in voluptate; <a href='http://loripsum.net/' target='_blank'>Illud non continuo, ut aeque incontentae.</a> Quod quidem pluris est haud paulo magisque ipsum propter se expetendum quam aut sensus aut corporis ea, quae diximus, quibus tantum praestat mentis excellens perfectio, ut vix cogitari possit quid intersit. Esse enim quam vellet iniquus iustus poterat inpune. Desideraret enim valitudinem, vacuitatem doloris, appeteret etiam conservationem sui earumque rerum custodiam finemque, sibi constitueret secundum naturam vivere. </p>

<p>Ne seges quidem igitur spicis uberibus et crebris, si avenam uspiam videris, nec mercatura quaestuosa, si in maximis lucris paulum aliquid damni contraxerit. Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? Sed tu, ut dignum est tua erga me et philosophiam voluntate ab adolescentulo suscepta, fac ut Metrodori tueare liberos. <a href='http://loripsum.net/' target='_blank'>Certe, nisi voluptatem tanti aestimaretis.</a> </p>

<p>Ex quo intellegitur, quoniam se ipsi omnes natura diligant, tam insipientem quam sapientem sumpturum, quae secundum naturam sint, reiecturumque contraria. Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. <b>Et quod est munus, quod opus sapientiae?</b> Videsne igitur Zenonem tuum cum Aristone verbis concinere, re dissidere, cum Aristotele et illis re consentire, verbis discrepare? Nam si concederetur, etiamsi ad corpus nihil referatur, ista sua sponte et per se esse iucunda, per se esset et virtus et cognitio rerum, quod minime ille vult expetenda. Equidem in omnibus istis conclusionibus hoc putarem philosophia nobisque dignum, et maxime, cum summum bonum quaereremus, vitam nostram, consilia, voluntates, non verba corrigi. Unum, cum in voluptate sumus, alterum, cum in dolore, tertium hoc, in quo nunc equidem sum, credo item vos, nec in dolore nec in voluptate; Dicis eadem omnia et bona et mala, quae quidem dicunt ii, qui numquam philosophum pictum, ut dicitur, viderunt: valitudinem, vires, staturam, formam, integritatem unguiculorum omnium bona, deformitatem, morbum, debilitatem mala. Haec est nec omnia spernentis praeter virtutem et virtutem ipsam suis laudibus amplificantis oratio, denique haec est undique completa et perfecta explicatio summi boni. Illud enim rectum est quod katortwma dicebas contingitque sapienti soli, hoc autem inchoati cuiusdam officii est, non perfecti, quod cadere in non nullos insipientes potest. Nam interdum nimis etiam novit, quippe qui testificetur ne intellegere quidem se posse ubi sit aut quod sit ullum bonum praeter illud, quod cibo et potione et aurium delectatione et obscena voluptate capiatur. <a href='http://loripsum.net/' target='_blank'>Quid ait Aristoteles reliquique Platonis alumni?</a> <a href='http://loripsum.net/' target='_blank'>Quibusnam praeteritis?</a> Sin autem voluptatem putat adiungendam eam, quae sit in motu-sic enim appellat hanc dulcem: in motu, illam nihil dolentis in stabilitate-, quid tendit? Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. <a href='http://loripsum.net/' target='_blank'>Sed quae tandem ista ratio est?</a> </p>

<p>Piso igitur hoc modo, vir optimus tuique, ut scis, amantissimus. Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia. Non ego iam Epaminondae, non Leonidae mortem huius morti antepono, quorum alter cum vicisset Lacedaemonios apud Mantineam atque ipse gravi vulnere exanimari se videret, ut primum dispexit, quaesivit salvusne esset clipeus. Hic ego: Pomponius quidem, inquam, noster iocari videtur, et fortasse suo iure. Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. <b>Quare conare, quaeso.</b> <b>An eiusdem modi?</b> Primum non saepe, deinde quae est ista relaxatio, cum et praeteriti doloris memoria recens est et futuri atque inpendentis torquet timor? <b>Negare non possum.</b> Nihil est enim, de quo minus dubitari possit, quam et honesta expetenda per se et eodem modo turpia per se esse fugienda. Tum Piso: Atqui, Cicero, inquit, ista studia, si ad imitandos summos viros spectant, ingeniosorum sunt; <i>Minime vero istorum quidem, inquit.</i> Sin autem voluptatem putat adiungendam eam, quae sit in motu-sic enim appellat hanc dulcem: in motu, illam nihil dolentis in stabilitate-, quid tendit? Quorum sine causa fieri nihil putandum est. Iure igitur gravissimi philosophi initium summi boni a natura petiverunt et illum appetitum rerum ad naturam accommodatarum ingeneratum putaverunt omnibus, quia continentur ea commendatione naturae, qua se ipsi diligunt. Nam me ipsum huc modo venientem convertebat ad sese Coloneus ille locus, cuius incola Sophocles ob oculos versabatur, quem scis quam admirer quemque eo delecter. </p>

<blockquote cite='http://loripsum.net'>
	Ita enim parvae et exiguae sunt istae accessiones bonorum, ut, quem ad modum stellae in radiis solis, sic istae in virtutum splendore ne cernantur quidem.
</blockquote>


<p>Rem unam praeclarissimam omnium maximeque laudandam, penitus viderent, quonam gaudio complerentur, cum tantopere eius adumbrata opinione laetentur? In ipsa enim parum magna vis inest, ut quam optime se habere possit, si nulla cultura adhibeatur. Itaque hoc frequenter dici solet a vobis, non intellegere nos, quam dicat Epicurus voluptatem. <i>Dici enim nihil potest verius.</i> <mark>Non semper, inquam;</mark> Persecutus est Aristoteles animantium omnium ortus, victus, figuras, Theophrastus autem stirpium naturas omniumque fere rerum, quae e terra gignerentur, causas atque rationes; </p>

<p>Similiter sensus, cum accessit ad naturam, tuetur illam quidem, sed etiam se tuetur; Tum ille: Finem, inquit, interrogandi, si videtur, quod quidem ego a principio ita me malle dixeram hoc ipsum providens, dialecticas captiones. Cuius similitudine perspecta in formarum specie ac dignitate transitum est ad honestatem dictorum atque factorum. Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. Quoniamque in iis rebus, quae neque in virtutibus sunt neque in vitiis, est tamen quiddam, quod usui possit esse, tollendum id non est. Quod enim ne vivus quidem, inquit, diutius sentire poterat, quam dum fruebatur, quo modo id potuit mortuo permanere? Illorum vero ista ipsa quam exilia de virtutis vi! Quam tantam volunt esse, ut beatum per se efficere possit. Alii rursum isdem a principiis omne officium referent aut ad voluptatem aut ad non dolendum aut ad prima illa secundum naturam optinenda. Ex quo magnitudo quoque animi existebat, qua facile posset repugnari obsistique fortunae, quod maximae res essent in potestate sapientis. <a href='http://loripsum.net/' target='_blank'>Ita nemo beato beatior.</a> Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur. Quae est enim, quae se umquam deserat aut partem aliquam sui aut eius partis habitum aut vini aut ullius earum rerum, quae secundum naturam sunt, aut motum aut statum? </p>

<ul>
	<li>Inquit, respondet: Quia, nisi quod honestum est, nullum est aliud bonum! Non quaero iam verumne sit;</li>
	<li>Nam illud vehementer repugnat, eundem beatum esse et multis malis oppressum.</li>
</ul>


<p>Nunc vero, quoniam haec nos etiam tractare coepimus, suppeditabit nobis Atticus noster e thesauris suis quos et quantos viros! nonne melius est de his aliquid quam tantis voluminibus de Themista loqui? <mark>Sin aliud quid voles, postea.</mark> <b>Eam stabilem appellas.</b> Primum enim, si vera sunt ea, quorum recordatione te gaudere dicis, hoc est, si vera sunt tua scripta et inventa, gaudere non potes. Reliqui sibi constiterunt, ut extrema cum initiis convenirent, ut Aristippo voluptas, Hieronymo doloris vacuitas, Carneadi frui principiis naturalibus esset extremum. Nunc idem, nisi molestum est, quoniam tibi non omnino displicet definire et id facis, cum vis, velim definias quid sit voluptas, de quo omnis haec quaestio est. Atqui eorum nihil est eius generis, ut sit in fine atque extrerno bonorum. Aut pertinacissimus fueris, si in eo perstiteris ad corpus ea, quae dixi, referri, aut deserueris totam Epicuri voluptatem, si negaveris. <b>Peccata paria.</b> Et ego: Piso, inquam, si est quisquam, qui acute in causis videre soleat quae res agatur. At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. <a href='http://loripsum.net/' target='_blank'>Ita prorsus, inquam;</a> </p>

<p><i>Quis hoc dicit?</i> <a href='http://loripsum.net/' target='_blank'>Istic sum, inquit.</a> Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est? Addebat etiam se in legem Voconiam iuratum contra eam facere non audere, nisi aliter amicis videretur. <a href='http://loripsum.net/' target='_blank'>Sed fortuna fortis;</a> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. <a href='http://loripsum.net/' target='_blank'>Erat enim res aperta.</a> Inde sermone vario <i>[redacted]</i> illa a Dipylo stadia confecimus. Quam multa vero iniuste fieri possunt, quae nemo possit reprehendere! si te amicus tuus moriens rogaverit, ut hereditatem reddas suae filiae, nec usquam id scripserit, ut scripsit Fadius, nec cuiquam dixerit, quid facies? Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. Sed finge non solum callidum eum, qui aliquid improbe faciat, verum etiam praepotentem, ut M. Voluptatem cum summum bonum diceret, primum in eo ipso parum vidit, deinde hoc quoque alienum; </p>

<blockquote cite='http://loripsum.net'>
	Tenere autem virtutes eas ipsas, quarum modo feci mentionem, nemo poterit, nisi statuerit nihil esse, quod intersit aut differat aliud ab alio, praeter honesta et turpia.
</blockquote>


<blockquote cite='http://loripsum.net'>
	Quis animo aequo videt eum, quem inpure ac flagitiose putet vivere?
</blockquote>


<p>Atqui si, ut convenire debet inter nos, est quaedam appetitio naturalis ea, quae secundum naturam sunt, appetens, eorum omnium est aliquae summa facienda. Nam si concederetur, etiamsi ad corpus nihil referatur, ista sua sponte et per se esse iucunda, per se esset et virtus et cognitio rerum, quod minime ille vult expetenda. <b>Itaque ab his ordiamur.</b> Possumusne ergo in vita summum bonum dicere, cum id ne in cena quidem posse videamur? Iam vero animus non esse solum, sed etiam cuiusdam modi debet esse, ut et omnis partis suas habeat incolumis et de virtutibus nulla desit. Completur enim et ex eo genere vitae, quod virtute fruitur, et ex iis rebus, quae sunt secundum naturam neque sunt in nostra potestate. Hoc positum in Phaedro a Platone probavit Epicurus sensitque in omni disputatione id fieri oportere. Illa enim, quae sunt a nobis bona corporis numerata, complent ea quidem beatissimam vitam, sed ita, ut sine illis possit beata vita existere. <mark>Quonam, inquit, modo?</mark> <b>Sed nunc, quod agimus;</b> </p>

<p>Physicae quoque non sine causa tributus idem est honos, propterea quod, qui convenienter naturae victurus sit, ei proficiscendum est ab omni mundo atque ab eius procuratione. <i>Nemo igitur esse beatus potest.</i> <i>Poterat autem inpune;</i> <mark>Itaque contra est, ac dicitis;</mark> Quid paulo ante, inquit, dixerim nonne meministi, cum omnis dolor detractus esset, variari, non augeri voluptatem? Etenim nec iustitia nec amicitia esse omnino poterunt, nisi ipsae per se expetuntur. Natura sic ab iis investigata est, ut nulla pars caelo, mari, terra, ut poëtice loquar, praetermissa sit; Cuius ad naturam apta ratio vera illa et summa lex a philosophis dicitur. <mark>Bestiarum vero nullum iudicium puto.</mark> Sit voluptas non minor in nasturcio illo, quo vesci Persas esse solitos scribit Xenophon, quam in Syracusanis mensis, quae a Platone graviter vituperantur; <i>Si longus, levis;</i> Tenuit permagnam <i>[redacted]</i>tilius hereditatem, unde, si secutus esset eorum sententiam, qui honesta et recta emolumentis omnibus et commodis anteponerent, nummum nullum attigisset. </p>

<ol>
	<li>Si mala non sunt, iacet omnis ratio Peripateticorum.</li>
	<li>Sed utrum hortandus es nobis, Luci, inquit, an etiam tua sponte propensus es?</li>
	<li>Nemo nostrum istius generis asotos iucunde putat vivere.</li>
	<li>Inquit, respondet: Quia, nisi quod honestum est, nullum est aliud bonum! Non quaero iam verumne sit;</li>
</ol>


<p>Quid est enim aliud esse versutum? <a href='http://loripsum.net/' target='_blank'>Quis istud possit, inquit, negare?</a> Potius ergo illa dicantur: turpe esse, viri non esse debilitari dolore, frangi, succumbere. Quae enim cupiditates a natura proficiscuntur, facile explentur sine ulla iniuria, quae autem inanes sunt, iis parendum non est. Quoniam enim natura suis omnibus expleri partibus vult, hunc statum corporis per se ipsum expetit, qui est maxime e natura, quae tota perturbatur, si aut aegrum corpus est aut dolet aut, caret viribus. Quid turpius quam sapientis vitam ex insipientium sermone pendere? Fadio Gallo, cuius in testamento scriptum esset se ab eo rogatum ut omnis hereditas ad filiam perveniret. Nam cum Academicis incerta luctatio est, qui nihil affirmant et quasi desperata cognitione certi id sequi volunt, quodcumque veri simile videatur. <i>Compensabatur, inquit, cum summis doloribus laetitia.</i> Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur. Sunt enim quasi prima elementa naturae, quibus ubertas orationis adhiberi vix potest, nec equidem eam cogito consectari. <a href='http://loripsum.net/' target='_blank'>Primum divisit ineleganter;</a> </p>

<ul>
	<li>Videamus animi partes, quarum est conspectus illustrior;</li>
	<li>Qui cum praetor quaestionem inter sicarios exercuisset, ita aperte cepit pecunias ob rem iudicandam, ut anno proximo P.</li>
	<li>Innumerabilia dici possunt in hanc sententiam, sed non necesse est.</li>
	<li>At ille non pertimuit saneque fidenter: Istis quidem ipsis verbis, inquit;</li>
	<li>Nam ante Aristippus, et ille melius.</li>
	<li>Expressa vero in iis aetatibus, quae iam confirmatae sunt.</li>
	<li>Utinam quidem dicerent alium alio beatiorem! Iam ruinas videres.</li>
</ul>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '7'
		]);


		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson One',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tamen ego a philosopho, si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem. Ea denique omni vita, quae in una virtute consisteret, illam vitam, quae etiam ceteris rebus, quae essent secundum naturam, abundaret, magis expetendam non esse, sed magis sumendam. At vero Epicurus una in domo, et ea quidem angusta, quam magnos quantaque amoris conspiratione consentientis tenuit amicorum greges! quod fit etiam nunc ab Epicureis. <b>Tria genera bonorum;</b> Ea enim omnia, quae illi bona dicerent, praeposita esse, non bona, itemque illa, quae in corpore excellerent, stulte antiquos dixisse per se esse expetenda; Duo Reges: constructio interrete. Sic, et quidem diligentius saepiusque ista loquemur inter nos agemusque communiter. Quamquam scripsit artem rhetoricam Cleanthes, Chrysippus etiam, sed sic, ut, si quis obmutescere concupierit, nihil aliud legere debeat. <a href='http://loripsum.net/' target='_blank'>Conferam tecum, quam cuique verso rem subicias;</a> Nam si dicent ab illis has res esse tractatas, ne ipsos quidem Graecos est cur tam multos legant, quam legendi sunt. Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. <b>Istam voluptatem perpetuam quis potest praestare sapienti?</b> </p>

<ul>
	<li>Respondeat totidem verbis.</li>
	<li>Aliter enim nosmet ipsos nosse non possumus.</li>
	<li>Sed quoniam et advesperascit et mihi ad villam revertendum est, nunc quidem hactenus;</li>
	<li>Res enim concurrent contrariae.</li>
	<li>Quid enim necesse est, tamquam meretricem in matronarum coetum, sic voluptatem in virtutum concilium adducere?</li>
	<li>Hoc est vim afferre, Torquate, sensibus, extorquere ex animis cognitiones verborum, quibus inbuti sumus.</li>
</ul>


<p><a href='http://loripsum.net/' target='_blank'>Torquatus, is qui consul cum Cn.</a> Istius modi autem res dicere ornate velle puerile est, plane autem et perspicue expedire posse docti et intellegentis viri. <a href='http://loripsum.net/' target='_blank'>Quae ista amicitia est?</a> <i>Quis non odit sordidos, vanos, leves, futtiles?</i> Quae possunt eadem contra Carneadeum illud summum bonum dici, quod is non tam, ut probaret, protulit, quam ut Stoicis, quibuscum bellum gerebat, opponeret. Totius enim quaestionis eius, quae habetur de finibus bonorum et malorum, cum quaeritur, in his quid sít extremum et ultimum, fons reperiendus est, in quo sint prima invitamenta naturae; Elicerem ex te cogeremque, ut responderes, nisi vererer ne Herculem ipsum ea, quae pro salute gentium summo labore gessisset, voluptatis causa gessisse diceres. Quae enim mala illi non audent appellare, aspera autem et incommoda et reicienda et aliena naturae esse concedunt, ea nos mala dicimus, sed exigua et paene minima. Nec vero ut voluptatem expetat, natura movet infantem, sed tantum ut se ipse diligat, ut integrum se salvumque velit. <mark>Illi enim inter se dissentiunt.</mark> Quibus rebus intellegitur nec timiditatem ignaviamque vituperari nec fortitudinem patientiamque laudari suo nomine, sed illas reici, quia dolorem pariant, has optari, quia voluptatem. <b>Magna laus.</b> </p>

<p>At vero si ad vitem sensus accesserit, ut appetitum quendam habeat et per se ipsa moveatur, quid facturam putas? Omnis sermo elegans sumi potest, tum varietas est tanta artium, ut nemo sine eo instrumento ad ullam rem illustriorem satis ornatus possit accedere. Ita relinquitur sola haec disciplina digna studiosis ingenuarum artium, digna eruditis, digna claris viris, digna principibus, digna regibus. Conferam tecum, quam cuique verso rem subicias; Crassus fuit, qui tamen solebat uti suo bono, ut hodie est noster Pompeius, cui recte facienti gratia est habenda; <mark>Non potes, nisi retexueris illa.</mark> Et tamen vide, ne, si ego non intellegam quid Epicurus loquatur, cum Graece, ut videor, luculenter sciam, sit aliqua culpa eius, qui ita loquatur, ut non intellegatur. Quarum adeo omnium sententia pronuntiabit primum de voluptate nihil esse ei loci, non modo ut sola ponatur in summi boni sede, quam quaerimus, sed ne illo quidem modo, ut ad honestatem applicetur. </p>

<p>Omnem vim loquendi, ut iam ante Aristoteles, in duas tributam esse partes, rhetoricam palmae, dialecticam pugni similem esse dicebat, quod latius loquerentur rhetores, dialectici autem compressius. Itaque, Torquate, cum diceres clamare Epicurum non posse iucunde vivi, nisi honeste et sapienter et iuste viveretur, tu ipse mihi gloriari videbare. Quaero igitur, quo modo hae tantae commendationes a natura profectae subito a sapientia relictae sint. <b>Tubulo putas dicere?</b> </p>

<blockquote cite='http://loripsum.net'>
	Quibus rebus intellegitur nec timiditatem ignaviamque vituperari nec fortitudinem patientiamque laudari suo nomine, sed illas reici, quia dolorem pariant, has optari, quia voluptatem.
</blockquote>


<p>Ergo in utroque exercebantur, eaque disciplina effecit tantam illorum utroque in genere dicendi copiam. Omnis sermo elegans sumi potest, tum varietas est tanta artium, ut nemo sine eo instrumento ad ullam rem illustriorem satis ornatus possit accedere. Id autem eius modi est, ut additum ad virtutem auctoritatem videatur habiturum et expleturum cumulate vitam beatam, de quo omnis haec quaestio est. Quare si potest esse beatus is, qui est in asperis reiciendisque rebus, potest is quoque esse. <a href='http://loripsum.net/' target='_blank'>Satis est ad hoc responsum.</a> Atque omnia quidem scire, cuiuscumque modi sint, cupere curiosorum, duci vero maiorum rerum contemplatione ad cupiditatem scientiae summorum virorum est putandum. Totius enim quaestionis eius, quae habetur de finibus bonorum et malorum, cum quaeritur, in his quid sít extremum et ultimum, fons reperiendus est, in quo sint prima invitamenta naturae; Idque quo magis quidam ita faciunt, ut iure etiam reprehendantur, hoc magis intellegendum est haec ipsa nimia in quibusdam futura non fuisse, nisi quaedam essent modica natura. </p>

<p>Equidem in omnibus istis conclusionibus hoc putarem philosophia nobisque dignum, et maxime, cum summum bonum quaereremus, vitam nostram, consilia, voluntates, non verba corrigi. <a href='http://loripsum.net/' target='_blank'>Contineo me ab exemplis.</a> <a href='http://loripsum.net/' target='_blank'>Istam voluptatem, inquit, Epicurus ignorat?</a> <b>Idem iste, inquam, de voluptate quid sentit?</b> Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. Quam similitudinem videmus in bestiis, quae primo, in quo loco natae sunt, ex eo se non commoventi deinde suo quaeque appetitu movetur. Hic cum uterque me intueretur seseque ad audiendum significarent paratos, Primum, inquam, deprecor, ne me tamquam philosophum putetis scholam vobis aliquam explicaturum, quod ne in ipsis quidem philosophis magnopere umquam probavi. <b>Quonam, inquit, modo?</b> <i>Gloriosa ostentatio in constituendo summo bono.</i> Ut enim, inquit, gubernator aeque peccat, si palearum navem evertit et si auri, item aeque peccat, qui parentem et qui servum iniuria verberat. </p>

<ul>
	<li>Qui non moveatur et offensione turpitudinis et comprobatione honestatis?</li>
	<li>Quid ergo attinet gloriose loqui, nisi constanter loquare?</li>
	<li>Semper enim ex eo, quod maximas partes continet latissimeque funditur, tota res appellatur.</li>
	<li>Praeterea sublata cognitione et scientia tollitur omnis ratio et vitae degendae et rerum gerendarum.</li>
	<li>Traditur, inquit, ab Epicuro ratio neglegendi doloris.</li>
</ul>


<p>Quod autem patrocinium aut quae ista causa est voluptatis, quae nec testes ullos e claris viris nec laudatores poterit adhibere? <b>Deinde dolorem quem maximum?</b> Sic igitur in homine perfectio ista in eo potissimum, quod est optimum, id est in virtute, laudatur. Sed ut ad propositum-de dolore enim cum diceremus, ad istam epistulam delati sumus-, nunc totum illud concludi sic licet: qui in summo malo est, is tum, cum in eo est, non est beatus; </p>

<p>Illo enim addito iuste fit recte factum, per se autem hoc ipsum reddere in officio ponitur. <b>Quonam, inquit, modo?</b> Habebat tamen rationem valitudinis: utebatur iis exercitationibus, ut ad cenam et sitiens et esuriens veniret, eo cibo, qui et suavissimus esset et idem facillimus ad concoquendum, vino et ad voluptatem et ne noceret. Nemo nostrum credebat, eratque veri similius hunc mentiri, cuius interesset, quam illum, qui id se rogasse scripsisset, quod debuisset rogare. Non est enim vitium in oratione solum, sed etiam in moribus. Etenim si loca, si fana, si urbes, si gymnasia, si campum, si canes, si equos, si ludicra exercendi aut venandi consuetudine adamare solemus, quanto id in hominum consuetudine facilius fieri poterit et iustius? <i>Quid de Pythagora?</i> Quae mihi ipsi, qui volo et esse et haberi gratus, grata non essent, nisi eum perspicerem mea causa mihi amicum fuisse, non sua, nisi hoc dicis sua, quod interest omnium recte facere. <i>Sequitur disserendi ratio cognitioque naturae;</i> At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. </p>

<p>Ut ei, qui iucunde vixerit annos decem, si aeque vita iucunda menstrua addatur, quia momentum aliquod habeat ad iucundum accessio, bonum sit; <mark>Nam ista vestra: Si gravis, brevis;</mark> Ex quo intellegitur, quoniam se ipsi omnes natura diligant, tam insipientem quam sapientem sumpturum, quae secundum naturam sint, reiecturumque contraria. Ille igitur vidit, non modo quot fuissent adhuc philosophorum de summo bono, sed quot omnino esse possent sententiae. Ipse enim Metrodorus, paene alter Epicurus, beatum esse describit his fere verbis: cum corpus bene constitutum sit et sit exploratum ita futurum. Princeps huius civitatis Phalereus Demetrius cum patria pulsus esset iniuria, ad Ptolomaeum se regem Alexandream contulit. Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest. Idque si ita dicit, non esse reprehendendos luxuriosos, si sapientes sint, dicit absurde, similiter et si dicat non reprehendendos parricidas, si nec cupidi sint nec deos metuant nec mortem nec dolorem. Nam de summo mox, ut dixi, videbimus et ad id explicandum disputationem omnem conferemus. Et tamen tantis vectigalibus ad liberalitatem utens etiam sine hac Pyladea amicitia multorum te benivolentia praeclare tuebere et munies. Nunc idem, nisi molestum est, quoniam tibi non omnino displicet definire et id facis, cum vis, velim definias quid sit voluptas, de quo omnis haec quaestio est. Pompeius in foedere Numantino infitiando fuit, nec vero omnia timente, sed primum qui animi conscientiam non curet, quam scilicet comprimere nihil est negotii. </p>

<p>Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. Nam si +omnino nos+ neglegemus, in Aristonea vitia incidemus et peccata obliviscemurque quae virtuti ipsi principia dederimus; Ita finis bonorum existit secundum naturam vivere sic affectum, ut optime is affici possit ad naturamque accommodatissime. Attica pubes reliquique Graeci, qui hoc anapaesto citantur, hoc non dolere solum voluptatis nomine appellaret, illud Aristippeum contemneret, aut, si utrumque probaret, ut probat, coniungeret doloris vacuitatem cum voluptate et duobus ultimis uteretur. Quae enim cupiditates a natura proficiscuntur, facile explentur sine ulla iniuria, quae autem inanes sunt, iis parendum non est. In voluptate corporis-addam, si vis, animi, dum ea ipsa, ut vultis, sit e corpore-situm est vivere beate. </p>

<ol>
	<li>Et harum quidem rerum facilis est et expedita distinctio.</li>
	<li>Aliena dixit in physicis nec ea ipsa, quae tibi probarentur;</li>
	<li>Etiam inchoatum, ut, si iuste depositum reddere in recte factis sit, in officiis ponatur depositum reddere;</li>
	<li>Tamen a proposito, inquam, aberramus.</li>
</ol>


<p><a href='http://loripsum.net/' target='_blank'>Mihi enim satis est, ipsis non satis.</a> <a href='http://loripsum.net/' target='_blank'>Quis hoc dicit?</a> Nam et ille apud Trabeam voluptatem animi nimiam laetitiam dicit eandem, quam ille Caecilianus, qui omnibus laetitiis laetum esse se narrat. Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant. Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus. Esse tantam vim virtutis tantamque, ut ita dicam, auctoritatem honestatis, ut reliqua non illa quidem nulla, sed ita parva sint, ut nulla esse videantur. Quae enim adhuc protulisti, popularia sunt, ego autem a te elegantiora desidero. Quae cum dixisset, Explicavi, inquit, sententiam meam, et eo quidem consilio, tuum iudicium ut cognoscerem, quoniam mihi ea facultas, ut id meo arbitratu facerem, ante hoc tempus numquam est data. Equidem etiam curiam nostram-Hostiliam dico, non hanc novam, quae minor mihi esse videtur, posteaquam est maior-solebam intuens Scipionem, Catonem, Laelium, nostrum vero in primis avum cogitare; Nam adhuc, meo fortasse vitio, quid ego quaeram non perspicis. Qualis est igitur omnis haec, quam dico, conspiratio consensusque virtutum, tale est illud ipsum honestum, quandoquidem honestum aut ipsa virtus est aut res gesta virtute; Etiam inchoatum, ut, si iuste depositum reddere in recte factis sit, in officiis ponatur depositum reddere; Quod quoniam in quo sit magna dissensio est, Carneadea nobis adhibenda divisio est, qua noster Antiochus libenter uti solet. Nam et amici cultus et parentis ei, qui officio fungitur, in eo ipso prodest, quod ita fungi officio in recte factis est, quae sunt orta virtutibus. Teneamus enim illud necesse est, cum consequens aliquod falsum sit, illud, cuius id consequens sit, non posse esse verum. </p>

<ul>
	<li>Si longus, levis dictata sunt.</li>
	<li>Quaero igitur, quo modo hae tantae commendationes a natura profectae subito a sapientia relictae sint.</li>
	<li>Isto modo, ne si avia quidem eius nata non esset.</li>
	<li>In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt.</li>
</ul>


<dl>
	<dt><dfn>Haeret in salebra.</dfn></dt>
	<dd>Ergo instituto veterum, quo etiam Stoici utuntur, hinc capiamus exordium.</dd>
	<dt><dfn>Falli igitur possumus.</dfn></dt>
	<dd>Itaque haec cum illis est dissensio, cum Peripateticis nulla sane.</dd>
	<dt><dfn>At certe gravius.</dfn></dt>
	<dd>Ita relinquet duas, de quibus etiam atque etiam consideret.</dd>
	<dt><dfn>Immo videri fortasse.</dfn></dt>
	<dd>Restinguet citius, si ardentem acceperit.</dd>
	<dt><dfn>Sed nimis multa.</dfn></dt>
	<dd>Primum quid tu dicis breve?</dd>
	<dt><dfn>Quis negat?</dfn></dt>
	<dd>Quorum sine causa fieri nihil putandum est.</dd>
</dl>


<p><i>Sit enim idem caecus, debilis.</i> Praeterea et appetendi et refugiendi et omnino rerum gerendarum initia proficiscuntur aut a voluptate aut a dolore. <a href='http://loripsum.net/' target='_blank'>Sed ego in hoc resisto;</a> Sin autem est in ea, quod quidam volunt, nihil impedit hanc nostram comprehensionem summi boni. Quam ob rem utique idem faciunt, ut si laevam partem neglegerent, dexteram tuerentur, aut ipsius animi, ut fecit Erillus, cognitionem amplexarentur, actionem relinquerent. Quod si ita est, ut neque quisquam nisi bonus vir et omnes boni beati sint, quid philosophia magis colendum aut quid est virtute divinius? Nec vero dico eorum metum mortis, qui, quia privari se vitae bonis arbitrentur, aut quia quasdam post mortem formidines extimescant, aut si metuant, ne cum dolore moriantur, idcirco mortem fugiant; Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. E quo efficitur, non ut nos non intellegamus quae vis sit istius verbi, sed ut ille suo more loquatur, nostrum neglegat. Et tamen puto concedi nobis oportere ut Graeco verbo utamur, si quando minus occurret Latinum, ne hoc ephippiis et acratophoris potius quam proegmenis et apoproegmenis concedatur; </p>

<p>Color egregius, integra valitudo, summa gratia, vita denique conferta voluptatum omnium varietate. <i>Non est igitur voluptas bonum.</i> Cui vero in voluptate summum bonum est, huic omnia sensu, non ratione sunt iudicanda, eaque dicenda optima, quae sint suavissima. Alii rursum isdem a principiis omne officium referent aut ad voluptatem aut ad non dolendum aut ad prima illa secundum naturam optinenda. Video enim et magnos et eosdem bene longinquos dolores, quorum alia toleratio est verior, qua uti vos non potestis, qui honestatem ipsam per se non amatis. Quid enim interest, divitias, opes, valitudinem bona dicas anne praeposita, cum ille, qui ista bona dicit, nihilo plus iis tribuat quam tu, qui eadem illa praeposita nominas? Quam illa ardentis amores excitaret sui! Cur tandem? At quicum ioca seria, ut dicitur, quicum arcana, quicum occulta omnia? Quodsi Graeci leguntur a Graecis isdem de rebus alia ratione compositis, quid est, cur nostri a nostris non legantur? Nos paucis ad haec additis finem faciamus aliquando; Earum etiam rerum, quas terra gignit, educatio quaedam et perfectio est non dissimilis animantium. Ipse negat, ut ante dixi, luxuriosorum vitam reprehendendam, nisi plane fatui sint, id est nisi aut cupiant aut metuant. Sed tu, ut dignum est tua erga me et philosophiam voluntate ab adolescentulo suscepta, fac ut Metrodori tueare liberos. Ita enim parvae et exiguae sunt istae accessiones bonorum, ut, quem ad modum stellae in radiis solis, sic istae in virtutum splendore ne cernantur quidem. </p>

<dl>
	<dt><dfn>Id enim natura desiderat.</dfn></dt>
	<dd>Itaque hic ipse iam pridem est reiectus;</dd>
	<dt><dfn>Sedulo, inquam, faciam.</dfn></dt>
	<dd>At modo dixeras nihil in istis rebus esse, quod interesset.</dd>
	<dt><dfn>Sint ista Graecorum;</dfn></dt>
	<dd>Ut in geometria, prima si dederis, danda sunt omnia.</dd>
	<dt><dfn>Nunc agendum est subtilius.</dfn></dt>
	<dd>Hic, qui utrumque probat, ambobus debuit uti, sicut facit re, neque tamen dividit verbis.</dd>
</dl>


<dl>
	<dt><dfn>Sedulo, inquam, faciam.</dfn></dt>
	<dd>Memini vero, inquam;</dd>
	<dt><dfn>Quae sequuntur igitur?</dfn></dt>
	<dd>Illis videtur, qui illud non dubitant bonum dicere -;</dd>
	<dt><dfn>Easdemne res?</dfn></dt>
	<dd>Tum, Quintus et Pomponius cum idem se velle dixissent, Piso exorsus est.</dd>
	<dt><dfn>Idem adhuc;</dfn></dt>
	<dd>Cur igitur, inquam, res tam dissimiles eodem nomine appellas?</dd>
</dl>


<p><i>Quid, quod res alia tota est?</i> Tenuit permagnam Sextilius hereditatem, unde, si secutus esset eorum sententiam, qui honesta et recta emolumentis omnibus et commodis anteponerent, nummum nullum attigisset. <b>Tollenda est atque extrahenda radicitus.</b> Infinitio ipsa, quam apeirian vocant, tota ab illo est, tum innumerabiles mundi, qui et oriantur et intereant cotidie. Illorum vero ista ipsa quam exilia de virtutis vi! Quam tantam volunt esse, ut beatum per se efficere possit. <b>Sed fortuna fortis;</b> Quod si ita est, sequitur id ipsum, quod te velle video, omnes semper beatos esse sapientes. Sed non sunt in eo genere tantae commoditates corporis tamque productae temporibus tamque multae. <b>Expectoque quid ad id, quod quaerebam, respondeas.</b> <i>Quae duo sunt, unum facit.</i> </p>

<p>Hosne igitur laudas et hanc eorum, inquam, sententiam sequi nos censes oportere? Videmus igitur ut conquiescere ne infantes quidem possint. Si movente, quod tamen dicitis, nulla turpis voluptas erit, quae praetermittenda sit, et simul non proficiscitur animal illud modo natum a summa voluptate, quae est a te posita in non dolendo. Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. Quibus expositis facilis est coniectura ea maxime esse expetenda ex nostris, quae plurimum habent dignitatis, ut optimae cuiusque partis, quae per se expetatur, virtus sit expetenda maxime. Principiis autem a natura datis amplitudines quaedam bonorum excitabantur partim profectae a contemplatione rerum occultiorum, quod erat insitus menti cognitionis amor, e quo etiam rationis explicandae disserendique cupiditas consequebatur; Sin autem reliqua appetenda sunt, cur, quod est ultimum rerum appetendarum, id non aut ex omnium earum aut ex plurimarum et maximarum appetitione concluditur? Hoc unum Aristo tenuit: praeter vitia atque virtutes negavit rem esse ullam aut fugiendam aut expetendam. Ea enim vita expetitur, quae sit animi corporisque expleta virtutibus, in eoque summum bonum poni necesse est, quandoquidem id tale esse debet, ut rerum expetendarum sit extremum. Voluptatis causa, etiam si eam non consequare, aut non dolendi, etiam si id assequi nequeas, aut eorum, quae secundum naturam sunt, adipiscendi, etiam si nihil consequare. <i>Id enim natura desiderat.</i> Quamquam enim vereor, ne nimius in hoc genere videar, tamen omnes veteres philosophi, maxime nostri, ad incunabula accedunt, quod in pueritia facillime se arbitrantur naturae voluntatem posse cognoscere. </p>

<blockquote cite='http://loripsum.net'>
	Ut scias me intellegere, primum idem esse dico voluptatem, quod ille don.
</blockquote>


<p><b>Et quidem, inquit, vehementer errat;</b> Mihi quidem Homerus huius modi quiddam vidisse videatur in iis, quae de Sirenum cantibus finxerit. Num igitur dubium est, quin, si in re ipsa nihil peccatur a superioribus, verbis illi commodius utantur? Etenim, cum omnes natura totos se expetendos putent, nec id ob aliam rem, sed propter ipsos, necesse est eius etiam partis propter se expeti, quod universum propter se expetatur. <i>Omnis enim est natura diligens sui.</i> <a href='http://loripsum.net/' target='_blank'>Erat enim res aperta.</a> Ita fit, ut duo genera propter se expetendorum reperiantur, unum, quod est in iis, in quibus completar illud extremum, quae sunt aut animi aut corporis; Iam ille sorites, quo nihil putatis esse vitiosius: quod bonum sit, id esse optabile, quod optabile, id expetendum, quod expetendum, id laudabile, deinde reliqui gradus. Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. Nam si quae sunt aliae, falsum est omnis animi voluptates esse e corporis societate. </p>

<p>Sed si duo honesta proposita sint, alterum cum valitudine, alterum cum morbo, non esse dubium, ad utrum eorum natura nos ipsa deductura sit. Si enim Zenoni licuit, cum rem aliquam invenisset inusitatam, inauditum quoque ei rei nomen inponere, cur non liceat Catoni? <a href='http://loripsum.net/' target='_blank'>Sed nunc, quod agimus;</a> Potius ergo illa dicantur: turpe esse, viri non esse debilitari dolore, frangi, succumbere. <b>Age, inquies, ista parva sunt.</b> Stoici restant, ei quidem non unam aliquam aut alteram rem a nobis, sed totam ad se nostram philosophiam transtulerunt; Ut enim, inquit, gubernator aeque peccat, si palearum navem evertit et si auri, item aeque peccat, qui parentem et qui servum iniuria verberat. <b>Est, ut dicis, inquit;</b> Illo enim addito iuste fit recte factum, per se autem hoc ipsum reddere in officio ponitur. Hoc autem loco tantum explicemus haec honesta, quae dico, praeterquam quod nosmet ipsos diligamus, praeterea suapte natura per se esse expetenda. Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur? </p>

<ol>
	<li>Quod autem in homine praestantissimum atque optimum est, id deseruit.</li>
	<li>Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus?</li>
	<li>Nihil acciderat ei, quod nollet, nisi quod anulum, quo delectabatur, in mari abiecerat.</li>
</ol>


<p><b>Itaque fecimus.</b> Quasi ego id curem, quid ille aiat aut neget. Huc et illuc, Torquate, vos versetis licet, nihil in hac praeclara epistula scriptum ab Epicuro congruens et conveniens decretis eius reperietis. Ne id quidem, nisi multa annorum intercesserint milia, ut omnium siderum eodem, unde profecta sint, fiat ad unum tempus reversio. Quamquam ego non quaero, quid tibi a me probatum sit, sed huic Ciceroni nostro, quem discipulum cupio a te abducere. Nam haec ipsa mihi erunt in promptu, quae modo audivi, nec ante aggrediar, quam te ab istis, quos dicis, instructum videro. Quis est enim, qui hoc cadere in sapientem dicere audeat, ut, si fieri possit, virtutem in perpetuum abiciat, ut dolore omni liberetur? Omnes, qui non sint sapientes, aeque miseros esse, sapientes omnes summe beatos, recte facta omnia aequalia, omnia peccata paria; </p>

<p>Quacumque enim ingredimur, in aliqua historia vestigium ponimus. Ut enim, inquit, gubernator aeque peccat, si palearum navem evertit et si auri, item aeque peccat, qui parentem et qui servum iniuria verberat. Ut Phidias potest a primo instituere signum idque perficere, potest ab alio inchoatum accipere et absolvere, huic est sapientia similis; <i>Nam quid possumus facere melius?</i> <a href='http://loripsum.net/' target='_blank'>Sumenda potius quam expetenda.</a> Quare teneamus Aristotelem et eius filium Nicomachum, cuius accurate scripti de moribus libri dicuntur illi quidem esse Aristoteli, sed non video, cur non potuerit patri similis esse filius. <b>Qualem igitur hominem natura inchoavit?</b> Nam quibus rebus efficiuntur voluptates, eae non sunt in potestate sapientis. Nonne igitur tibi videntur, inquit, mala? His similes sunt omnes, qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Quid tibi, Torquate, quid huic Triario litterae, quid historiae cognitioque rerum, quid poetarum evolutio, quid tanta tot versuum memoria voluptatis affert? Videmus in quodam volucrium genere non nulla indicia pietatis, cognitionem, memoriam, in multis etiam desideria videmus. Namque ii horum posteri meliores illi quidem mea sententia quam reliquarum philosophi disciplinarum, sed ita degenerant, ut ipsi ex se nati esse videantur. </p>

<p>At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. Qui non moveatur et offensione turpitudinis et comprobatione honestatis? Quantam rem agas, ut Circeis qui habitet totum hunc mundum suum municipium esse existimet? Quocumque enim modo summum bonum sic exponitur, ut id vacet honestate, nec officia nec virtutes in ea ratione nec amicitiae constare possunt. Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant. Idque testamento cavebit is, qui nobis quasi oraculum ediderit nihil post mortem ad nos pertinere? Hoc tu nunc in illo probas. <mark>At ille pellit, qui permulcet sensum voluptate.</mark> <b>Tum mihi Piso: Quid ergo?</b> Quis enim confidit semper sibi illud stabile et firmum permansurum, quod fragile et caducum sit? Quae quidem omnia et innumerabilia praeterea quis est quin intellegat et eos qui fecerint dignitatis splendore ductos inmemores fuisse utilitatum suarum nosque, cum ea laudemus, nulla alla re nisi honestate duci? <b>Quae cum essent dicta, discessimus.</b> Certe nihil nisi quod possit ipsum propter se iure laudari. <a href='http://loripsum.net/' target='_blank'>Non laboro, inquit, de nomine.</a> Qui si omnes veri erunt, ut Epicuri ratio docet, tum denique poterit aliquid cognosci et percipi. <i>Equidem, sed audistine modo de Carneade?</i> </p>

<blockquote cite='http://loripsum.net'>
	Ergo opifex plus sibi proponet ad formarum quam civis excellens ad factorum pulchritudinem?
</blockquote>


<ol>
	<li>Quid enim mihi potest esse optatius quam cum Catone, omnium virtutum auctore, de virtutibus disputare?</li>
	<li>Nonne odio multos dignos putamus, qui quodam motu aut statu videntur naturae legem et modum contempsisse?</li>
</ol>


",
			'lesson_excerpt'       => 'This lesson is about first part',
			'lesson_order'         => '1'
		]);

		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson Two',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ait enim se, si uratur, Quam hoc suave! dicturum. Quae enim mala illi non audent appellare, aspera autem et incommoda et reicienda et aliena naturae esse concedunt, ea nos mala dicimus, sed exigua et paene minima. Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. <a href='http://loripsum.net/' target='_blank'>Illi enim inter se dissentiunt.</a> Quae cum dixissem, magis ut illum provocarem quam ut ipse loquerer, tum Triarius leniter arridens: Tu quidem, inquit, totum Epicurum paene e philosophorum choro sustulisti. Nemo enim est, qui aliter dixerit quin omnium naturarum simile esset id, ad quod omnia referrentur, quod est ultimum rerum appetendarum. <mark>Mihi enim satis est, ipsis non satis.</mark> At vero facere omnia, ut adipiscamur, quae secundum naturam sint, etiam si ea non assequamur, id esse et honestum et solum per se expetendum et solum bonum Stoici dicunt. Duo Reges: constructio interrete. <a href='http://loripsum.net/' target='_blank'>Non igitur bene.</a> </p>

<dl>
	<dt><dfn>Itaque fecimus.</dfn></dt>
	<dd>Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas.</dd>
	<dt><dfn>Cur iustitia laudatur?</dfn></dt>
	<dd>Et quae per vim oblatum stuprum volontaria morte lueret inventa est et qui interficeret filiam, ne stupraretur.</dd>
	<dt><dfn>Qui convenit?</dfn></dt>
	<dd>Hoc dixerit potius Ennius: Nimium boni est, cui nihil est mali.</dd>
	<dt><dfn>Sed haec omittamus;</dfn></dt>
	<dd>Quibus autem in rebus tanta obscuratio non fit, fieri tamen potest, ut id ipsum, quod interest, non sit magnum.</dd>
	<dt><dfn>Est, ut dicis, inquit;</dfn></dt>
	<dd>Tu quidem reddes;</dd>
</dl>


<p>Quae si a vobis talia dicerentur, qualibus Caius Marius uti poterat, ut expulsus, egens, in palude demersus tropaeorum recordatione levaret dolorem suum, audirem et plane probarem. An quae de prudentia, de cognitione rerum, de coniunctione generis humani, quaeque ab eisdem de temperantia, de modestia, de magnitudine animi, de omni honestate dicuntur? Quis contra in illa aetate pudorem, constantiam, etiamsi sua nihil intersit, non tamen diligat? Cuius tanta tormenta sunt, ut in iis beata vita, si modo dolor summum malum est, esse non possit. <i>Sumenda potius quam expetenda.</i> </p>

<p>Zeno autem, quod suam, quod propriam speciem habeat, cur appetendum sit, id solum bonum appellat, beatam autem vitam eam solam, quae cum virtute degatur. <b>Sint modo partes vitae beatae.</b> Primum divisit ineleganter; Quamquam enim vereor, ne nimius in hoc genere videar, tamen omnes veteres philosophi, maxime nostri, ad incunabula accedunt, quod in pueritia facillime se arbitrantur naturae voluntatem posse cognoscere. Physicae quoque non sine causa tributus idem est honos, propterea quod, qui convenienter naturae victurus sit, ei proficiscendum est ab omni mundo atque ab eius procuratione. Aderamus nos quidem adolescentes, sed multi amplissimi viri, quorum nemo censuit plus Fadiae dandum, quam posset ad eam lege Voconia pervenire. <mark>Hic nihil fuit, quod quaereremus.</mark> Nam omnia, quae sumenda quaeque legenda aut optanda sunt, inesse debent in summa bonorum, ut is, qui eam adeptus sit, nihil praeterea desideret. </p>

<p>Sed et illum, quem nominavi, et ceteros sophistas, ut e Platone intellegi potest, lusos videmus a Socrate. Dicis eadem omnia et bona et mala, quae quidem dicunt ii, qui numquam philosophum pictum, ut dicitur, viderunt: valitudinem, vires, staturam, formam, integritatem unguiculorum omnium bona, deformitatem, morbum, debilitatem mala. Nam e quibus locis quasi thesauris argumenta depromerentur, vestri ne suspicati quidem sunt, superiores autem artificio et via tradiderunt. Non enim in selectione virtus ponenda erat, ut id ipsum, quod erat bonorum ultimum, aliud aliquid adquireret. <mark>Itaque hic ipse iam pridem est reiectus;</mark> Et si in ipsa gubernatione neglegentia est navis eversa, maius est peccatum in auro quam in palea. Quam ob rem etiam sessiones quaedam et flexi fractique motus, quales protervorum hominum aut mollium esse solent, contra naturam sunt, ut, etiamsi animi vitio id eveniat, tamen in corpore immutari hominis natura videatur. <b>Non igitur bene.</b> Brutus dissentiet quod et acutum genus est et ad usus civium non inutile, nosque ea scripta reliquaque eiusdem generis et legimus libenter et legemus, haec, quae vitam omnem continent, neglegentur? Quid enim dicis omne animal, simul atque sit ortum, applicatum esse ad se diligendum esseque in se conservando occupatum? Nec vero intermittunt aut admirationem earum rerum, quae sunt ab antiquis repertae, aut investigationem novarum. <i>Si mala non sunt, iacet omnis ratio Peripateticorum.</i> A villa enim, credo, et: Si ibi te esse scissem, ad te ipse venissem. Primum enim, si vera sunt ea, quorum recordatione te gaudere dicis, hoc est, si vera sunt tua scripta et inventa, gaudere non potes. Aberat omnis dolor, qui si adesset, nec molliter ferret et tamen medicis plus quam philosophis uteretur. <a href='http://loripsum.net/' target='_blank'>A mene tu?</a> </p>

<p>Nec enim absolvi beata vita sapientis neque ad exitum perduci poterit, si prima quaeque bene ab eo consulta atque facta ipsius oblivione obruentur. <i>Quae similitudo in genere etiam humano apparet.</i> <a href='http://loripsum.net/' target='_blank'>Pollicetur certe.</a> Etenim nec iustitia nec amicitia esse omnino poterunt, nisi ipsae per se expetuntur. Itaque, ne si iucundissimis quidem nos somniis usuros putemus, Endymionis somnum nobis velimus dari, idque si accidat, mortis instar putemus. </p>

<p>Qui mos cum a posterioribus non esset retentus, Arcesilas eum revocavit instituitque ut ii, qui se audire vellent, non de se quaererent, sed ipsi dicerent, quid sentirent; Haec et tu ita posuisti, et verba vestra sunt. <b>Tibi hoc incredibile, quod beatissimum.</b> <i>Prodest, inquit, mihi eo esse animo.</i> Nam constitui virtus nullo modo potesti nisi ea, quae sunt prima naturae, ut ad summam pertinentia tenebit. Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. Cumque duae sint artes, quibus perfecte ratio et oratio compleatur, una inveniendi, altera disserendi, hanc posteriorem et Stoici et Peripatetici, priorem autem illi egregie tradiderunt, hi omnino ne attigerunt quidem. Scis enim me quodam tempore Metapontum venisse tecum neque ad hospitem ante devertisse, quam Pythagorae ipsum illum locum, ubi vitam ediderat, sedemque viderim. Elicerem ex te cogeremque, ut responderes, nisi vererer ne Herculem ipsum ea, quae pro salute gentium summo labore gessisset, voluptatis causa gessisse diceres. <b>Sed haec omittamus;</b> Cum enim superiores, e quibus planissime Polemo, secundum naturam vivere summum bonum esse dixissent, his verbis tria significari Stoici dicunt, unum eius modi, vivere adhibentem scientiam earum rerum, quae natura evenirent. </p>

<p>Sit ista in Graecorum levitate perversitas, qui maledictis insectantur eos, a quibus de veritate dissentiunt. <a href='http://loripsum.net/' target='_blank'>Cur id non ita fit?</a> <mark>Non semper, inquam;</mark> <mark>Quod quidem nobis non saepe contingit.</mark> Sed certe opus est ea valere et vigere et naturales motus ususque habere, ut nec absit quid eorum nec aegrum debilitatumve sit; Quis, quaeso, inquit, est, qui quid sit voluptas nesciat, aut qui, quo magis id intellegat, definitionem aliquam desideret? <a href='http://loripsum.net/' target='_blank'>Ego vero isti, inquam, permitto.</a> Idem fecisset Epicurus, si sententiam hanc, quae nunc Hieronymi est, coniunxisset cum Aristippi vetere sententia. Sic est igitur locutus: Quantus ornatus in Peripateticorum disciplina sit satis est a me, ut brevissime potuit, paulo ante dictum. <mark>Quo modo autem philosophus loquitur?</mark> Quid, cum volumus nomina eorum, qui quid gesserint, nota nobis esse, parentes, patriam, multa praeterea minime necessaria? Quos quidem dies quem ad modum agatis et in quantam hominum facetorum urbanitatem incurratis, non diconihil opus est litibus-; <mark>Quid ad utilitatem tantae pecuniae?</mark> De malis autem et bonis ab iis animalibus, quae nondum depravata sint, ait optime iudicari. Hanc in motu voluptatem -sic enim has suaves et quasi dulces voluptates appellat-interdum ita extenuat, ut M. <a href='http://loripsum.net/' target='_blank'>Minime vero istorum quidem, inquit.</a> </p>

<dl>
	<dt><dfn>Quid ergo?</dfn></dt>
	<dd>Expectoque quid ad id, quod quaerebam, respondeas.</dd>
	<dt><dfn>Ita credo.</dfn></dt>
	<dd>Itaque et manendi in vita et migrandi ratio omnis iis rebus, quas supra dixi, metienda.</dd>
	<dt><dfn>Optime, inquam.</dfn></dt>
	<dd>At multis se probavit.</dd>
</dl>


<blockquote cite='http://loripsum.net'>
	Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente.
</blockquote>


<p><mark>Sed fortuna fortis;</mark> <mark>Utilitatis causa amicitia est quaesita.</mark> Etenim nec iustitia nec amicitia esse omnino poterunt, nisi ipsae per se expetuntur. Quamvis enim depravatae non sint, pravae tamen esse possunt. Ita, quem ad modum in senatu semper est aliquis, qui interpretem postulet, sic, isti nobis cum interprete audiendi sunt. Non ergo Epicurus ineruditus, sed ii indocti, qui, quae pueros non didicisse turpe est, ea putant usque ad senectutem esse discenda. Id autem eius modi est, ut additum ad virtutem auctoritatem videatur habiturum et expleturum cumulate vitam beatam, de quo omnis haec quaestio est. Quoniam, inquiunt, omne peccatum inbecillitatis et inconstantiae est, haec autem vitia in omnibus stultis aeque magna sunt, necesse est paria esse peccata. </p>

<p>Sed cum ea, quae praeterierunt, acri animo et attento intuemur, tum fit ut aegritudo sequatur, si illa mala sint, laetitia, si bona. Nam diligi et carum esse iucundum est propterea, quia tutiorem vitam et voluptatem pleniorem efficit. <mark>Res enim concurrent contrariae.</mark> <mark>Quae est igitur causa istarum angustiarum?</mark> Cum autem paulum firmitatis accessit, et animo utuntur et sensibus conitunturque, ut sese erigant, et manibus utuntur et eos agnoscunt, a quibus educantur. <a href='http://loripsum.net/' target='_blank'>Iam in altera philosophiae parte.</a> Addo etiam illud, multa iam mihi dare signa puerum et pudoris et ingenii, sed aetatem vides. Aeque enim contingit omnibus fidibus, ut incontentae sint. Cynicorum autem rationem atque vitam alii cadere in sapientem dicunt, si qui eius modi forte casus inciderit, ut id faciendum sit, alii nullo modo. <mark>Hic nihil fuit, quod quaereremus.</mark> Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. <a href='http://loripsum.net/' target='_blank'>Quae sequuntur igitur?</a> Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur. Audax negotium, dicerem impudens, nisi hoc institutum postea translatum ad philosophos nostros esset. Atque etiam ad iustitiam colendam, ad tuendas amicitias et reliquas caritates quid natura valeat haec una cognitio potest tradere. <a href='http://loripsum.net/' target='_blank'>A mene tu?</a> </p>

<p><b>Tamen a proposito, inquam, aberramus.</b> Hic si Peripateticus fuisset, permansisset, credo, in sententia, qui dolorem malum dicunt esse, de asperitate autem eius fortiter ferenda praecipiunt eadem, quae Stoici. Docent enim nos, ut scis, dialectici, si ea, quae rem aliquam sequantur, falsa sint, falsam illam ipsam esse, quam sequantur. Ex quo, id quod omnes expetunt, beate vivendi ratio inveniri et comparari potest. Et quidem iure fortasse, sed tamen non gravissimum est testimonium multitudinis. In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt. Nos quidem Virtutes sic natae sumus, ut tibi serviremus, aliud negotii nihil habemus. Isto modo, ne si avia quidem eius nata non esset. </p>

<blockquote cite='http://loripsum.net'>
	Sin autem voluptatem putat adiungendam eam, quae sit in motu-sic enim appellat hanc dulcem: in motu, illam nihil dolentis in stabilitate-, quid tendit?
</blockquote>


<p>Vives, inquit Aristo, magnifice atque praeclare, quod erit cumque visum ages, numquam angere, numquam cupies, numquam timebis. <mark>A mene tu?</mark> Quod quam magnum sit fictae veterum fabulae declarant, in quibus tam multis tamque variis ab ultima antiquitate repetitis tria vix amicorum paria reperiuntur, ut ad Orestem pervenias profectus a Theseo. Praeterea et appetendi et refugiendi et omnino rerum gerendarum initia proficiscuntur aut a voluptate aut a dolore. Eodem modo is enim tibi nemo dabit, quod, expetendum sit, id esse laudabile. Intellegi quidem, ut propter aliam quampiam rem, verbi gratia propter voluptatem, nos amemus; Quin etiam ferae, inquit Pacuvius, quíbus abest, ad praécavendum intéllegendi astútia, iniecto terrore mortis horrescunt. Audi, ne longe abeam, moriens quid dicat Epicurus, ut intellegas facta eius cum dictis discrepare: Epicurus Hermarcho salutem. Nec enim ignoras his istud honestum non summum modo, sed etiam, ut tu vis, solum bonum videri. <b>Sed videbimus.</b> Nunc vero, quoniam haec nos etiam tractare coepimus, suppeditabit nobis Atticus noster e thesauris suis quos et quantos viros! nonne melius est de his aliquid quam tantis voluminibus de Themista loqui? In quibus hoc primum est in quo admirer, cur in gravissimis rebus non delectet eos sermo patrius, cum idem fabellas Latinas ad verbum e Graecis expressas non inviti legant. <i>Quo tandem modo?</i> Sed cum ea, quae praeterierunt, acri animo et attento intuemur, tum fit ut aegritudo sequatur, si illa mala sint, laetitia, si bona. Videsne ut, quibus summa est in voluptate, perspicuum sit quid iis faciendum sit aut non faciendum? </p>

<p>Ut enim, inquit, gubernator aeque peccat, si palearum navem evertit et si auri, item aeque peccat, qui parentem et qui servum iniuria verberat. Vides igitur, si amicitiam sua caritate metiare, nihil esse praestantius, sin emolumento, summas familiaritates praediorum fructuosorum mercede superari. <a href='http://loripsum.net/' target='_blank'>Multoque hoc melius nos veriusque quam Stoici.</a> <b>Quid vero?</b> Ex quo intellegitur officium medium quiddam esse, quod neque in bonis ponatur neque in contrariis. Quod enim dissolutum sit, id esse sine sensu, quod autem sine sensu sit, id nihil ad nos pertinere omnino. Obsequar igitur voluntati tuae dicamque, si potero, rhetorice, sed hac rhetorica philosophorum, non nostra illa forensi, quam necesse est, cum populariter loquatur, esse interdum paulo hebetiorem. Ratio ista, quam defendis, praecepta, quae didicisti, quae probas, funditus evertunt amicitiam, quamvis eam Epicurus, ut facit, in caelum efferat laudibus. Gerendus est mos, modo recte sentiat. Mihi enim satis est, ipsis non satis. </p>

<blockquote cite='http://loripsum.net'>
	Laboribus hic praeteritis gaudet, tu iubes voluptatibus, et hic se ad ea revocat, e quibus nihil umquam rettulerit ad corpus, tu totus haeres in corpore.
</blockquote>


<p>Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. <a href='http://loripsum.net/' target='_blank'>Quo tandem modo?</a> Sin autem reliqua appetenda sunt, cur, quod est ultimum rerum appetendarum, id non aut ex omnium earum aut ex plurimarum et maximarum appetitione concluditur? Nam cum Academicis incerta luctatio est, qui nihil affirmant et quasi desperata cognitione certi id sequi volunt, quodcumque veri simile videatur. Mihi quidem Antiochum, quem audis, satis belle videris attendere. Nam et amici cultus et parentis ei, qui officio fungitur, in eo ipso prodest, quod ita fungi officio in recte factis est, quae sunt orta virtutibus. Videmus in quodam volucrium genere non nulla indicia pietatis, cognitionem, memoriam, in multis etiam desideria videmus. Persecutus est Aristoteles animantium omnium ortus, victus, figuras, Theophrastus autem stirpium naturas omniumque fere rerum, quae e terra gignerentur, causas atque rationes; Primum non saepe, deinde quae est ista relaxatio, cum et praeteriti doloris memoria recens est et futuri atque inpendentis torquet timor? Nam si +omnino nos+ neglegemus, in Aristonea vitia incidemus et peccata obliviscemurque quae virtuti ipsi principia dederimus; Haec mirabilia videri intellego, sed cum certe superiora firma ac vera sint, his autem ea consentanea et consequentia, ne de horum quidem est veritate dubitandum. Iure igitur gravissimi philosophi initium summi boni a natura petiverunt et illum appetitum rerum ad naturam accommodatarum ingeneratum putaverunt omnibus, quia continentur ea commendatione naturae, qua se ipsi diligunt. <a href='http://loripsum.net/' target='_blank'>At certe gravius.</a> Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. </p>

<dl>
	<dt><dfn>Quonam, inquit, modo?</dfn></dt>
	<dd>Scio enim esse quosdam, qui quavis lingua philosophari possint;</dd>
	<dt><dfn>Sullae consulatum?</dfn></dt>
	<dd>Sed tamen enitar et, si minus multa mihi occurrent, non fugiam ista popularia.</dd>
</dl>


<ul>
	<li>Ita enim vivunt quidam, ut eorum vita refellatur oratio.</li>
	<li>In qua si nihil est praeter rationem, sit in una virtute finis bonorum;</li>
	<li>Qui non moveatur et offensione turpitudinis et comprobatione honestatis?</li>
	<li>Nam illud quidem adduci vix possum, ut ea, quae senserit ille, tibi non vera videantur.</li>
</ul>


<p><b>Utilitatis causa amicitia est quaesita.</b> Num igitur utiliorem tibi hunc Triarium putas esse posse, quam si tua sint Puteolis granaria? Si vero id etiam explanare velles apertiusque diceres nihil eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? Et tamen puto concedi nobis oportere ut Graeco verbo utamur, si quando minus occurret Latinum, ne hoc ephippiis et acratophoris potius quam proegmenis et apoproegmenis concedatur; Namque ii horum posteri meliores illi quidem mea sententia quam reliquarum philosophi disciplinarum, sed ita degenerant, ut ipsi ex se nati esse videantur. Verum esto: verbum ipsum voluptatis non habet dignitatem, nec nos fortasse intellegimus. Quis, quaeso, inquit, est, qui quid sit voluptas nesciat, aut qui, quo magis id intellegat, definitionem aliquam desideret? Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. <a href='http://loripsum.net/' target='_blank'>De illis, cum volemus.</a> </p>

<p>Si ad prudentes, alterum fortasse dubitabunt, sitne tantum in virtute, ut ea praediti vel in Phalaridis tauro beati sint, alterum non dubitabunt, quin et Stoici conveniente sibi dicant et vos repugnantia. Illud enim rectum est quod katortwma dicebas contingitque sapienti soli, hoc autem inchoati cuiusdam officii est, non perfecti, quod cadere in non nullos insipientes potest. <i>Videsne, ut haec concinant?</i> <i>Confecta res esset.</i> Quae est enim, quae se umquam deserat aut partem aliquam sui aut eius partis habitum aut vini aut ullius earum rerum, quae secundum naturam sunt, aut motum aut statum? Quae quidem sapientes sequuntur duce natura tamquam videntes; Nam bonum illud et malum, quod saepe iam dictum est, postea consequitur, prima autem illa naturae sive secunda sive contraria sub iudicium sapientis et dilectum cadunt, estque illa subiecta quasi materia sapientiae. Si quicquam extra virtutem habeatur in bonis. </p>

<ol>
	<li>Videamus igitur sententias eorum, tum ad verba redeamus.</li>
	<li>Suam denique cuique naturam esse ad vivendum ducem.</li>
	<li>Tu autem inter haec tantam multitudinem hominum interiectam non vides nec laetantium nec dolentium?</li>
</ol>


<ul>
	<li>Hoc ipsum elegantius poni meliusque potuit.</li>
	<li>Aliter enim nosmet ipsos nosse non possumus.</li>
	<li>Vitiosum est enim in dividendo partem in genere numerare.</li>
</ul>


<p><b>Duo enim genera quae erant, fecit tria.</b> Nunc dicam de voluptate, nihil scilicet novi, ea tamen, quae te ipsum probaturum esse confidam. Deque his rebus satis multa in nostris de re publica libris sunt dicta a Laelio. <a href='http://loripsum.net/' target='_blank'>Fortemne possumus dicere eundem illum Torquatum?</a> Illo enim addito iuste fit recte factum, per se autem hoc ipsum reddere in officio ponitur. Quo posito et omnium adsensu adprobato illud adsumitur, eum, qui magno sit animo atque forti, omnia, quae cadere in hominem possint, despicere ac pro nihilo putare. Itaque primos congressus copulationesque et consuetudinum instituendarum voluntates fieri propter voluptatem; Illud enim rectum est quod katortwma dicebas contingitque sapienti soli, hoc autem inchoati cuiusdam officii est, non perfecti, quod cadere in non nullos insipientes potest. </p>

<ol>
	<li>Sin kakan malitiam dixisses, ad aliud nos unum certum vitium consuetudo Latina traduceret.</li>
	<li>Quod autem in homine praestantissimum atque optimum est, id deseruit.</li>
	<li>Et quidem saepe quaerimus verbum Latinum par Graeco et quod idem valeat;</li>
	<li>Quae in controversiam veniunt, de iis, si placet, disseramus.</li>
	<li>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest.</li>
	<li>Ut necesse sit omnium rerum, quae natura vigeant, similem esse finem, non eundem.</li>
</ol>


<p>Quare obscurentur etiam haec, quae secundum naturam esse dicimus, in vita beata; Negarine ullo modo possit numquam quemquam stabili et firmo et magno animo, quem fortem virum dicimus, effici posse, nisi constitutum sit non esse malum dolorem? Ego autem existimo, si honestum esse aliquid ostendero, quod sit ipsum vi sua propter seque expetendum, iacere vestra omnia. Quod dicit Epicurus etiam de voluptate, quae minime sint voluptates, eas obscurari saepe et obrui. <b>Disserendi artem nullam habuit.</b> Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos. <b>Quare conare, quaeso.</b> Habes undique expletam et perfectam, Torquate, formam honestatis, quae tota quattuor his virtutibus, quae a te quoque commemoratae sunt, continetur. Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. Tantus est igitur innatus in nobis cognitionis amor et scientiae, ut nemo dubitare possit quin ad eas res hominum natura nullo emolumento invitata rapiatur. Consequatur summas voluptates non modo parvo, sed per me nihilo, si potest; Cum vero paulum processerunt, lusionibus vel laboriosis delectantur, ut ne verberibus quidem deterreri possint, eaque cupiditas agendi aliquid adolescit una cum aetatibus. Ita fiet, ut animi virtus corporis virtuti anteponatur animique virtutes non voluntarias vincant virtutes voluntariae, quae quidem proprie virtutes appellantur multumque excellunt, propterea quod ex ratione gignuntur, qua nihil est, in homine divinius. Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? </p>

<ul>
	<li>Ita multo sanguine profuso in laetitia et in victoria est mortuus.</li>
	<li>Non quam nostram quidem, inquit Pomponius iocans;</li>
	<li>Qui autem diffidet perpetuitati bonorum suorum, timeat necesse est, ne aliquando amissis illis sit miser.</li>
	<li>Illa argumenta propria videamus, cur omnia sint paria peccata.</li>
	<li>Ille vero, si insipiens-quo certe, quoniam tyrannus -, numquam beatus;</li>
	<li>Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus;</li>
</ul>


<p>Atque ab his initiis profecti omnium virtutum et originem et progressionem persecuti sunt. Atque ut reliqui fures earum rerum, quas ceperunt, signa commutant, sic illi, ut sententiis nostris pro suis uterentur, nomina tamquam rerum notas mutaverunt. </p>

<p>Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est. Numquam hoc ita defendit Epicurus neque Metrodorus aut quisquam eorum, qui aut saperet aliquid aut ista didicisset. <mark>Aliter homines, aliter philosophos loqui putas oportere?</mark> Et quis a Stoicis et quem ad modum diceretur, tamen ego quoque exponam, ut perspiciamus, si potuerimus, quidnam a Zenone novi sit allatum. Quaeque de virtutibus dicta sunt, quem ad modum eae semper voluptatibus inhaererent, eadem de amicitia dicenda sunt. <a href='http://loripsum.net/' target='_blank'>Id enim natura desiderat.</a> Itaque non ob ea solum incommoda, quae eveniunt inprobis, fugiendam inprobitatem putamus, sed multo etiam magis, quod, cuius in animo versatur, numquam sinit eum respirare, numquam adquiescere. <mark>Non semper, inquam;</mark> Vobis autem, quibus nihil est aliud propositum nisi rectum atque honestum, unde officii, unde agendi principlum nascatur non reperietis. Sin eam, quam Hieronymus, ne fecisset idem, ut voluptatem illam Aristippi in prima commendatione poneret. Quid, si efficio ut fateare me non modo quid sit voluptas scire-est enim iucundus motus in sensu-, sed etiam quid eam tu velis esse? <b>Quam ob rem tandem, inquit, non satisfacit?</b> Cum efficere non possit ut cuiquam, qui ipse sibi notus sit, hoc est qui suam naturam sensumque perspexerit, vacuitas doloris et voluptas idem esse videatur. <i>Pugnant Stoici cum Peripateticis.</i> Pomponius Luciusque Cicero, frater noster cognatione patruelis, amore germanus, constituimus inter nos ut ambulationem postmeridianam conficeremus in Academia, maxime quod is locus ab omni turba id temporis vacuus esset. Omnibus enim artibus volumus attributam esse eam, quae communis appellatur prudentia, quam omnes, qui cuique artificio praesunt, debent habere. </p>

<ol>
	<li>His singulis copiose responderi solet, sed quae perspicua sunt longa esse non debent.</li>
	<li>Multoque hoc melius nos veriusque quam Stoici.</li>
	<li>Quod, inquit, quamquam voluptatibus quibusdam est saepe iucundius, tamen expetitur propter voluptatem.</li>
	<li>Quos quidem tibi studiose et diligenter tractandos magnopere censeo.</li>
</ol>


<p><a href='http://loripsum.net/' target='_blank'>Ratio quidem vestra sic cogit.</a> Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. <a href='http://loripsum.net/' target='_blank'>Graece donan, Latine voluptatem vocant.</a> Minime vero probatur huic disciplinae, de qua loquor, aut iustitiam aut amicitiam propter utilitates adscisci aut probari. Certe non potest. <i>Quis Aristidem non mortuum diligit?</i> Nam me ipsum huc modo venientem convertebat ad sese Coloneus ille locus, cuius incola Sophocles ob oculos versabatur, quem scis quam admirer quemque eo delecter. In ipsa enim parum magna vis inest, ut quam optime se habere possit, si nulla cultura adhibeatur. <a href='http://loripsum.net/' target='_blank'>Quare attende, quaeso.</a> Cumque eorum utrumque per se expetendum esse dixissent, virtutes quoque utriusque eorum per se expetendas esse dicebant, et cum animum infinita quadam laude anteponerent corpori, virtutes quoque animi bonis corporis anteponebant. Illa autem, morbum, egestatem, dolorem, non appello m a l a, sed, si libet, r e i e c t a n e a. </p>


                                    ",
			'lesson_excerpt'       => 'This lesson is about second part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson Three',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Qualis est igitur omnis haec, quam dico, conspiratio consensusque virtutum, tale est illud ipsum honestum, quandoquidem honestum aut ipsa virtus est aut res gesta virtute; Quid de Platone aut de Democrito loquar? <i>Istic sum, inquit.</i> Ut ad minora veniam, mathematici, poëtae, musici, medici denique ex hac tamquam omnium artificum officina profecti sunt. Non igitur potestis voluptate omnia dirigentes aut tueri aut retinere virtutem. <a href='http://loripsum.net/' target='_blank'>An hoc usque quaque, aliter in vita?</a> Duo Reges: constructio interrete. <a href='http://loripsum.net/' target='_blank'>Nos vero, inquit ille;</a> Principiis autem a natura datis amplitudines quaedam bonorum excitabantur partim profectae a contemplatione rerum occultiorum, quod erat insitus menti cognitionis amor, e quo etiam rationis explicandae disserendique cupiditas consequebatur; <b>Moriatur, inquit.</b> Corporis igitur nostri partes totaque figura et forma et statura quam apta ad naturam sit, apparet, neque est dubium, quin frons, oculi, aures et reliquae partes quales propriae sint hominis intellegatur. </p>

<ol>
	<li>Si enim ita est, vide ne facinus facias, cum mori suadeas.</li>
	<li>Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus.</li>
	<li>Quod quidem iam fit etiam in Academia.</li>
</ol>


<p>Est enim perspicuum nullam artem ipsam in se versari, sed esse aliud artem ipsam, aliud quod propositum sit arti. <mark>Itaque ad tempus ad Pisonem omnes.</mark> <a href='http://loripsum.net/' target='_blank'>Est enim effectrix multarum et magnarum voluptatum.</a> Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? <a href='http://loripsum.net/' target='_blank'>Recte, inquit, intellegis.</a> Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus? Obscura, inquit, quaedam esse confiteor, nec tamen ab illis ita dicuntur de industria, sed inest in rebus ipsis obscuritas. <a href='http://loripsum.net/' target='_blank'>Pauca mutat vel plura sane;</a> Quid ergo attinet gloriose loqui, nisi constanter loquare? Quid, si non modo utilitatem tibi nullam afferet, sed iacturae rei familiaris erunt faciendae, labores suscipiendi, adeundum vitae periculum? </p>

<ol>
	<li>Septem autem illi non suo, sed populorum suffragio omnium nominati sunt.</li>
	<li>Quamvis enim depravatae non sint, pravae tamen esse possunt.</li>
	<li>Cur igitur, inquam, res tam dissimiles eodem nomine appellas?</li>
	<li>An potest, inquit ille, quicquam esse suavius quam nihil dolere?</li>
	<li>Quae autem natura suae primae institutionis oblita est?</li>
	<li>Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est.</li>
</ol>


<ol>
	<li>Quem Tiberina descensio festo illo die tanto gaudio affecit, quanto L.</li>
	<li>Tu vero, inquam, ducas licet, si sequetur;</li>
	<li>Haec et tu ita posuisti, et verba vestra sunt.</li>
	<li>-delector enim, quamquam te non possum, ut ais, corrumpere, delector, inquam, et familia vestra et nomine.</li>
	<li>Itaque his sapiens semper vacabit.</li>
</ol>


<p><i>Nunc omni virtuti vitium contrario nomine opponitur.</i> Cum efficere non possit ut cuiquam, qui ipse sibi notus sit, hoc est qui suam naturam sensumque perspexerit, vacuitas doloris et voluptas idem esse videatur. Dolor ergo, id est summum malum, metuetur semper, etiamsi non aderit; Iam id ipsum absurdum, maximum malum neglegi. Primum enim, si vera sunt ea, quorum recordatione te gaudere dicis, hoc est, si vera sunt tua scripta et inventa, gaudere non potes. Nam, ut sint illa vendibiliora, haec uberiora certe sunt. Ego vero volo in virtute vim esse quam maximam; </p>

<p>Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. Videsne ut, quibus summa est in voluptate, perspicuum sit quid iis faciendum sit aut non faciendum? Nos beatam vitam non depulsione mali, sed adeptione boni iudicemus, nec eam cessando, sive gaudentem, ut Aristippus, sive non dolentem, ut hic, sed agendo aliquid considerandove quaeramus. Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus. <a href='http://loripsum.net/' target='_blank'>Prioris generis est docilitas, memoria;</a> Egone non intellego, quid sit don Graece, Latine voluptas? At vero illa, quae Peripatetici, quae Stoici dicunt, semper tibi in ore sunt in iudiciis, in senatu. Hanc initio institutionem confusam habet et incertam, ut tantum modo se tueatur, qualecumque sit, sed nec quid sit nec quid possit nec quid ipsius natura sit intellegit. Sapientia enim et animi magnitudinem complectitur et iustitiam, et ut omnia, quae homini accidant, infra se esse iudicet, quod idem ceteris artibus non contingit. Necesseque est, si quis sibi ipsi inimicus est, eum quae bona sunt mala putare, bona contra quae mala, et quae appetenda fugere, quae fugienda appetere, quae sine dubio vitae est eversio. Equidem e Cn. Sed si duo honesta proposita sint, alterum cum valitudine, alterum cum morbo, non esse dubium, ad utrum eorum natura nos ipsa deductura sit. Aut, si nihil malum, nisi quod turpe, inhonestum, indecorum, pravum, flagitiosum, foedum-ut hoc quoque pluribus nominibus insigne faciamus-, quid praeterea dices esse fugiendum? Sed ad bona praeterita redeamus. Quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit? Qui haec didicerunt, quae ille contemnit, sic solent: Duo genera cupiditatum, naturales et inanes, naturalium duo, necessariae et non necessariae. </p>

<p>Mihi quidem eae verae videntur opiniones, quae honestae, quae laudabiles, quae gloriosae, quae in senatu, quae apud populum, quae in omni coetu concilioque profitendae sint, ne id non pudeat sentire, quod pudeat dicere. Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. Quoniamque non dubium est quin in iis, quae media dicimus, sit aliud sumendum, aliud reiciendum, quicquid ita fit aut dicitur, omne officio continetur. Quae enim mala illi non audent appellare, aspera autem et incommoda et reicienda et aliena naturae esse concedunt, ea nos mala dicimus, sed exigua et paene minima. Etenim si loca, si fana, si urbes, si gymnasia, si campum, si canes, si equos, si ludicra exercendi aut venandi consuetudine adamare solemus, quanto id in hominum consuetudine facilius fieri poterit et iustius? <b>Illi enim inter se dissentiunt.</b> </p>

<p>Ita fit illa conclusio non solum vera, sed ita perspicua, ut dialectici ne rationem quidem reddi putent oportere: si illud, hoc; Quid autem est amare, e quo nomen ductum amicitiae est, nisi velle bonis aliquem affici quam maximis, etiamsi ad se ex iis nihil redundet? Nec vero pietas adversus deos nec quanta iis gratia debeatur sine explicatione naturae intellegi potest. Qui si omnes veri erunt, ut Epicuri ratio docet, tum denique poterit aliquid cognosci et percipi. Quae fere omnia appellantur uno ingenii nomine, easque virtutes qui habent, ingeniosi vocantur. Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos. Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? <a href='http://loripsum.net/' target='_blank'>Primum divisit ineleganter;</a> <i>Illa tamen simplicia, vestra versuta.</i> <b>Egone quaeris, inquit, quid sentiam?</b> Et saepe officium est sapientis desciscere a vita, cum sit beatissimus, si id oportune facere possit, quod est convenienter naturae. Hoc autem loco tantum explicemus haec honesta, quae dico, praeterquam quod nosmet ipsos diligamus, praeterea suapte natura per se esse expetenda. </p>

<ul>
	<li>Quod non subducta utilitatis ratione effici solet, sed ipsum a se oritur et sua sponte nascitur.</li>
	<li>Invidiosum nomen est, infame, suspectum.</li>
	<li>Tum Piso: Quoniam igitur aliquid omnes, quid Lucius noster?</li>
	<li>Beatus autem esse in maximarum rerum timore nemo potest.</li>
</ul>


<p>Equidem etiam curiam nostram-Hostiliam dico, non hanc novam, quae minor mihi esse videtur, posteaquam est maior-solebam intuens Scipionem, Catonem, Laelium, nostrum vero in primis avum cogitare; Pomponius Luciusque Cicero, frater noster cognatione patruelis, amore germanus, constituimus inter nos ut ambulationem postmeridianam conficeremus in Academia, maxime quod is locus ab omni turba id temporis vacuus esset. Nec enim absolvi beata vita sapientis neque ad exitum perduci poterit, si prima quaeque bene ab eo consulta atque facta ipsius oblivione obruentur. Quem quidem locum comit multa venustate et omni sale idem Lucilius, apud quem praeclare Scaevola: Graecum te, Albuci, quam Romanum atque Sabinum, municipem Ponti, Tritani, centurionum, praeclarorum hominum ac primorum signiferumque, maluisti dici. Multi enim et magni philosophi haec ultima bonorum iuncta fecerunt, ut Aristoteles virtutis usum cum vitae perfectae prosperitate coniunxit, Callipho adiunxit ad honestatem voluptatem, Diodorus ad eandem honestatem addidit vacuitatem doloris. <mark>Quantum Aristoxeni ingenium consumptum videmus in musicis?</mark> <i>Videsne, ut haec concinant?</i> <i>Quantum Aristoxeni ingenium consumptum videmus in musicis?</i> Illi autem, quibus summum bonum sine virtute est, non dabunt fortasse vitam beatam habere, in quo iure possit gloriari, etsi illi quidem etiam voluptates faciunt interdum gloriosas. De hominibus dici non necesse est. <b>Sit enim idem caecus, debilis.</b> Quod idem Peripatetici non tenent, quibus dicendum est, quae et honesta actio sit et sine dolore, eam magis esse expetendam, quam si esset eadem actio cum dolore. -, sed ut hoc iudicaremus, non esse in iis partem maximam positam beate aut secus vivendi. <i>Sed tamen intellego quid velit.</i> </p>

<p>Quibus ex omnibus iudicari potest non modo non impediri rationem amicitiae, si summum bonum in voluptate ponatur, sed sine hoc institutionem omnino amicitiae non posse reperiri. Quoniam igitur, ut medicina valitudinis, navigationis gubernatio, sic vivendi ars est prudente, necesse est eam quoque ab aliqua re esse constitutam et profectam. Nam si dicent ab illis has res esse tractatas, ne ipsos quidem Graecos est cur tam multos legant, quam legendi sunt. <i>Maximus dolor, inquit, brevis est.</i> Pompeius in foedere Numantino infitiando fuit, nec vero omnia timente, sed primum qui animi conscientiam non curet, quam scilicet comprimere nihil est negotii. Sunt enim quasi prima elementa naturae, quibus ubertas orationis adhiberi vix potest, nec equidem eam cogito consectari. <b>Cur deinde Metrodori liberos commendas?</b> <a href='http://loripsum.net/' target='_blank'>Itaque fecimus.</a> <b>Respondeat totidem verbis.</b> Eloquentiae vero, quae et principibus maximo ornamento est, et qua te audimus valere plurimum, quantum tibi ex monumentis nostris addidisses! Ea cum dixissent, quid tandem talibus viris responderes? Atqui haec patefactio quasi rerum opertarum, cum quid quidque sit aperitur, definitio est. Paupertas si malum est, mendicus beatus esse nemo potest, quamvis sit sapiens. </p>

<p>Nam quid possumus facere melius? Eamne rationem igitur sequere, qua tecum ipse et cum tuis utare, profiteri et in medium proferre non audeas? Qui cum cruciaretur non ferendis doloribus, propagabat tamen vitam aucupio, sagittarum ictu configebat tardus celeres, stans volantis, ut apud Accium est, pennarumque contextu corpori tegumenta faciebat. Modo enim fuit Carneadis, quem videre videor-est, enim nota imago -, a sedeque ipsa tanta ingenii, magnitudine orbata desiderari illam vocem puto. Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant. Quia, cum a Zenone, inquam, hoc magnifice tamquam ex oraculo editur: Virtus ad beate vivendum se ipsa contenta est, et Quare? Quid enim perversius, quid intolerabilius, quid stultius quam bonam valetudinem, quam dolorum omnium vacuitatem, quam integritatem oculorum reliquorumque sensuum ponere in bonis potius, quam dicerent nihil omnino inter eas res iisque contrarias interesse? Cum autem negant ea quicquam ad beatam vitam pertinere, rursus naturam relinquunt. <b>Deinde dolorem quem maximum?</b> <mark>Vide, quantum, inquam, fallare, Torquate.</mark> </p>

<p><i>Quid de Pythagora?</i> Nec vero ut voluptatem expetat, natura movet infantem, sed tantum ut se ipse diligat, ut integrum se salvumque velit. <a href='http://loripsum.net/' target='_blank'>A mene tu?</a> Ergo in bestiis erunt secreta e voluptate humanarum quaedam simulacra virtutum, in ipsis hominibus virtus nisi voluptatis causa nulla erit? Omne enim animal, simul et ortum est, se ipsum et omnes partes suas diligit duasque, quae maximae sunt, in primis amplectitur, animum et corpus, deinde utriusque partes. Cum enim fertur quasi torrens oratio, quamvis multa cuiusque modi rapiat, nihil tamen teneas, nihil apprehendas, nusquam orationem rapidam coerceas. Admirantes quaeramus ab utroque, quonam modo vitam agere possimus, si nihil interesse nostra putemus, valeamus aegrine simus, vacemus an cruciemur dolore, frigus, famem propulsare possimus necne possimus. Non metuet autem, sive celare poterit, sive opibus magnis quicquid fecerit optinere, certeque malet existimari bonus vir, ut non sit, quam esse, ut non putetur. <i>Bonum patria: miserum exilium.</i> <i>Aliter homines, aliter philosophos loqui putas oportere?</i> Nunc dicam de voluptate, nihil scilicet novi, ea tamen, quae te ipsum probaturum esse confidam. Beatus autem esse in maximarum rerum timore nemo potest. Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. <b>Tum Triarius: Posthac quidem, inquit, audacius.</b> </p>

<blockquote cite='http://loripsum.net'>
	Utrum igitur tibi non placet, inquit, virtutisne tantam esse vim, ut ad beate vivendum se ipsa contenta sit?
</blockquote>


<p>In omni enim animante est summum aliquid atque optimum, ut in equis, in canibus, quibus tamen et dolore vacare opus est et valere; In voluptate corporis-addam, si vis, animi, dum ea ipsa, ut vultis, sit e corpore-situm est vivere beate. Haec qui audierit, ut ridere non curet, discedet tamen nihilo firmior ad dolorem ferendum, quam venerat. Sic enim maiores nostri labores non fugiendos tristissimo tamen verbo aerumnas etiam in deo nominaverunt. In qua quid est boni praeter summam voluptatem, et eam sempiternam? Vides igitur te aut ea sumere, quae non concedantur, aut ea, quae etiam concessa te nihil iuvent. Dempta enim aeternitate nihilo beatior Iuppiter quam Epicurus; <a href='http://loripsum.net/' target='_blank'>Rationis enim perfectio est virtus;</a> Ea denique omni vita, quae in una virtute consisteret, illam vitam, quae etiam ceteris rebus, quae essent secundum naturam, abundaret, magis expetendam non esse, sed magis sumendam. Quod quidem pluris est haud paulo magisque ipsum propter se expetendum quam aut sensus aut corporis ea, quae diximus, quibus tantum praestat mentis excellens perfectio, ut vix cogitari possit quid intersit. Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. <i>Istam voluptatem, inquit, Epicurus ignorat?</i> Tolletur enim appetitus animi, si, ut in lis rebus, inter quas nihil interest, neutram in partem propensiores sumus, item in nobismet ipsis quem ad modum affecti simus nihil nostra arbitrabimur interesse. Quarum cum una sit, qua mores conformari putantur, differo eam partem, quae quasi stirps ets huius quaestionis. <b>Nunc agendum est subtilius.</b> </p>

<p>Et hi quidem ita non sola virtute finem bonorum contineri putant, ut rebus tamen omnibus virtutem anteponant; Sed alii dolore moventur, alii cupiditate, iracundia etiam multi effetuntur et, cum in mala scientes inruunt, tum se optime sibi consulere arbitrantur. Et saepe officium est sapientis desciscere a vita, cum sit beatissimus, si id oportune facere possit, quod est convenienter naturae. <a href='http://loripsum.net/' target='_blank'>Ita prorsus, inquam;</a> Hoc est vim afferre, Torquate, sensibus, extorquere ex animis cognitiones verborum, quibus inbuti sumus. <b>Mihi, inquam, qui te id ipsum rogavi?</b> </p>

<p>Quando enim Socrates, qui parens philosophiae iure dici potest, quicquam tale fecit? Aut etiam, ut vestitum, sic sententiam habeas aliam domesticam, aliam forensem, ut in fronte ostentatio sit, intus veritas occultetur? Vos autem, Cato, quia virtus, ut omnes fatemur, altissimum locum in homine et maxime excellentem tenet, et quod eos, qui sapientes sunt, absolutos et perfectos putamus, aciem animorum nostrorum virtutis splendore praestringitis. Non ego iam Epaminondae, non Leonidae mortem huius morti antepono, quorum alter cum vicisset Lacedaemonios apud Mantineam atque ipse gravi vulnere exanimari se videret, ut primum dispexit, quaesivit salvusne esset clipeus. Nondum autem explanatum satis, erat, quid maxime natura vellet. Gloriosa ostentatio in constituendo summo bono. Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. Quos qui tollunt et nihil posse percipi dicunt, ii remotis sensibus ne id ipsum quidem expedire possunt, quod disserunt. Quo minus animus a se ipse dissidens secumque discordans gustare partem ullam liquidae voluptatis et liberae potest. At vero facere omnia, ut adipiscamur, quae secundum naturam sint, etiam si ea non assequamur, id esse et honestum et solum per se expetendum et solum bonum Stoici dicunt. Audi, ne longe abeam, moriens quid dicat Epicurus, ut intellegas facta eius cum dictis discrepare: Epicurus Hermarcho salutem. Nemo est igitur, quin hanc affectionem animi probet atque laudet, qua non modo utilitas nulla quaeritur, sed contra utilitatem etiam conservatur fides. <b>Recte, inquit, intellegis.</b> Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. <b>Quibus ego vehementer assentior.</b> Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. Aut, si esses Orestes, Pyladem refelleres, te indicares et, si id non probares, quo minus ambo una necaremini non precarere? </p>

<dl>
	<dt><dfn>Recte, inquit, intellegis.</dfn></dt>
	<dd>Quid de Platone aut de Democrito loquar?</dd>
	<dt><dfn>Quis istud, quaeso, nesciebat?</dfn></dt>
	<dd>Nunc vides, quid faciat.</dd>
	<dt><dfn>An eiusdem modi?</dfn></dt>
	<dd>Expectoque quid ad id, quod quaerebam, respondeas.</dd>
	<dt><dfn>Eam stabilem appellas.</dfn></dt>
	<dd>Rem unam praeclarissimam omnium maximeque laudandam, penitus viderent, quonam gaudio complerentur, cum tantopere eius adumbrata opinione laetentur?</dd>
	<dt><dfn>Sed videbimus.</dfn></dt>
	<dd>Nec vero hoc oratione solum, sed multo magis vita et factis et moribus comprobavit.</dd>
</dl>


<ul>
	<li>Ita fit cum gravior, tum etiam splendidior oratio.</li>
	<li>Si longus, levis;</li>
	<li>Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret.</li>
</ul>


<ul>
	<li>A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas.</li>
	<li>Cupit enim dícere nihil posse ad beatam vitam deesse sapienti.</li>
	<li>Totum autem id externum est, et quod externum, id in casu est.</li>
	<li>Itaque primos congressus copulationesque et consuetudinum instituendarum voluntates fieri propter voluptatem;</li>
	<li>Qui enim existimabit posse se miserum esse beatus non erit.</li>
	<li>Cum autem in quo sapienter dicimus, id a primo rectissime dicitur.</li>
</ul>


<p>Nam hunc ipsum sive finem sive extremum sive ultimum definiebas id esse, quo omnia, quae recte fierent, referrentur neque id ipsum usquam referretur. Deque his rebus satis multa in nostris de re publica libris sunt dicta a Laelio. Alii rursum isdem a principiis omne officium referent aut ad voluptatem aut ad non dolendum aut ad prima illa secundum naturam optinenda. <b>Bonum integritas corporis: misera debilitas.</b> Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus. Persecutus est Aristoteles animantium omnium ortus, victus, figuras, Theophrastus autem stirpium naturas omniumque fere rerum, quae e terra gignerentur, causas atque rationes; Nam quod ait sensibus ipsis iudicari voluptatem bonum esse, dolorem malum, plus tribuit sensibus, quam nobis leges permittunt, cum privatarum litium iudices sumus. Quarum adeo omnium sententia pronuntiabit primum de voluptate nihil esse ei loci, non modo ut sola ponatur in summi boni sede, quam quaerimus, sed ne illo quidem modo, ut ad honestatem applicetur. Quodsi non hominis summum bonum quaeremus, sed cuiusdam animantis, is autem esset nihil nisi animus liceat enim fingere aliquid eiusmodi, quo verum facilius reperiamus -, tamen illi animo non esset hic vester finis. <a href='http://loripsum.net/' target='_blank'>Hoc loco tenere se Triarius non potuit.</a> Quorum fuit haec institutio, in qua animadvertas velim quid mutandum putes nec expectes, dum ad omnia dicam, quae a te dicta sunt; Teneamus enim illud necesse est, cum consequens aliquod falsum sit, illud, cuius id consequens sit, non posse esse verum. Hoc vero non videre, maximo argumento esse voluptatem illam, qua sublata neget se intellegere omnino quid sit bonum-eam autem ita persequitur: quae palato percipiatur, quae auribus; Ita est quoddam commune officium sapientis et insipientis, ex quo efficitur versari in iis, quae media dicamus. <a href='http://loripsum.net/' target='_blank'>Dicimus aliquem hilare vivere;</a> <mark>Sic enim censent, oportunitatis esse beate vivere.</mark> </p>

<p>Nemo est igitur, quin hanc affectionem animi probet atque laudet, qua non modo utilitas nulla quaeritur, sed contra utilitatem etiam conservatur fides. Illa autem, morbum, egestatem, dolorem, non appello m a l a, sed, si libet, r e i e c t a n e a. Nam ista commendatio puerorum, memoria et caritas amicitiae, summorum officiorum in extremo spiritu conservatio indicat innatam esse homini probitatem gratuitam, non invitatam voluptatibus nec praemiorum mercedibus evocatam. Quid enim de amicitia statueris utilitatis causa expetenda vides. Antiquorum autem sententiam Antiochus noster mihi videtur persequi diligentissime, quam eandem Aristoteli fuisse et Polemonis docet. <i>Qui convenit?</i> Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. Perspicuum est enim, nisi aequitas, fides, iustitia proficiscantur a natura, et si omnia haec ad utilitatem referantur, virum bonum non posse reperiri; <a href='http://loripsum.net/' target='_blank'>An tu me de L.</a> <mark>Et nemo nimium beatus est;</mark> <b>Quonam modo?</b> </p>

<blockquote cite='http://loripsum.net'>
	Quam similitudinem videmus in bestiis, quae primo, in quo loco natae sunt, ex eo se non commoventi deinde suo quaeque appetitu movetur.
</blockquote>


<dl>
	<dt><dfn>Primum divisit ineleganter;</dfn></dt>
	<dd>Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest.</dd>
	<dt><dfn>Equidem e Cn.</dfn></dt>
	<dd>Nam prius a se poterit quisque discedere quam appetitum earum rerum, quae sibi conducant, amittere.</dd>
</dl>


<dl>
	<dt><dfn>Peccata paria.</dfn></dt>
	<dd>Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus;</dd>
	<dt><dfn>Si longus, levis.</dfn></dt>
	<dd>Quamquam te quidem video minime esse deterritum.</dd>
	<dt><dfn>Reguli reiciendam;</dfn></dt>
	<dd>Neque solum ea communia, verum etiam paria esse dixerunt.</dd>
	<dt><dfn>Confecta res esset.</dfn></dt>
	<dd>Compensabatur, inquit, cum summis doloribus laetitia.</dd>
</dl>


<p><a href='http://loripsum.net/' target='_blank'>Beatus sibi videtur esse moriens.</a> Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? <a href='http://loripsum.net/' target='_blank'>Sullae consulatum?</a> <a href='http://loripsum.net/' target='_blank'>Et nemo nimium beatus est;</a> Nihil enim est aliud, quam ob rem mihi percipi nihil posse videatur, nisi quod percipiendi vis ita definitur a Stoicis, ut negent quicquam posse percipi nisi tale verum, quale falsum esse non possit. <b>Recte, inquit, intellegis.</b> </p>

<blockquote cite='http://loripsum.net'>
	Ita miser sit aliquando necesse est is, quem vos beatum semper vultis esse, nec vero id, dum omnia ad voluptatem doloremque referetis, efficietis umquam.
</blockquote>


<p>Nec mihi illud dixeris: Haec enim ipsa mihi sunt voluptati, et erant illa Torquatis. Itaque Epicurus semper hoc utitur, ut probet voluptatem natura expeti, quod ea voluptas, quae in motu sit, et parvos ad se alliciat et bestias, non illa stabilis, in qua tantum inest nihil dolere. Quid ergo aliud intellegetur nisi uti ne quae pars naturae neglegatur? Si vero id etiam explanare velles apertiusque diceres nihil eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? <i>Sed haec omittamus;</i> Aut, si nihil malum, nisi quod turpe, inhonestum, indecorum, pravum, flagitiosum, foedum-ut hoc quoque pluribus nominibus insigne faciamus-, quid praeterea dices esse fugiendum? <a href='http://loripsum.net/' target='_blank'>Eademne, quae restincta siti?</a> Ego autem existimo, si honestum esse aliquid ostendero, quod sit ipsum vi sua propter seque expetendum, iacere vestra omnia. Rem videlicet difficilem et obscuram! individua cum dicitis et intermundia, quae nec sunt ulla nec possunt esse, intellegimus, voluptas, quae passeribus omnibus nota est, a nobis intellegi non potest? <a href='http://loripsum.net/' target='_blank'>De vacuitate doloris eadem sententia erit.</a> Quare attendo te studiose et, quaecumque rebus iis, de quibus hic sermo est, nomina inponis, memoriae mando; Nemo igitur esse beatus potest. Haec mirabilia videri intellego, sed cum certe superiora firma ac vera sint, his autem ea consentanea et consequentia, ne de horum quidem est veritate dubitandum. <mark>Age sane, inquam.</mark> </p>

<p>Suo genere perveniant ad extremum; <a href='http://loripsum.net/' target='_blank'>Quo modo autem philosophus loquitur?</a> <b>Audeo dicere, inquit.</b> Nec vero sum nescius esse utilitatem in historia, non modo voluptatem. Nam ista commendatio puerorum, memoria et caritas amicitiae, summorum officiorum in extremo spiritu conservatio indicat innatam esse homini probitatem gratuitam, non invitatam voluptatibus nec praemiorum mercedibus evocatam. Quae adhuc, Cato, a te dicta sunt, eadem, inquam, dicere posses, si sequerere Pyrrhonem aut Aristonem. Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur. Alteri negant quicquam esse bonum, nisi quod honestum sit, alteri plurimum se et longe longeque plurimum tribuere honestati, sed tamen et in corpore et extra esse quaedam bona. <i>Tamen a proposito, inquam, aberramus.</i> </p>

<p>Vide, ne magis, inquam, tuum fuerit, cum re idem tibi, quod mihi, videretur, non nova te rebus nomina inponere. <i>Quid adiuvas?</i> Crassus fuit, qui tamen solebat uti suo bono, ut hodie est noster Pompeius, cui recte facienti gratia est habenda; Atque omnia quidem scire, cuiuscumque modi sint, cupere curiosorum, duci vero maiorum rerum contemplatione ad cupiditatem scientiae summorum virorum est putandum. Dicuntur ista, Cato, magnifice, inquam, sed videsne verborum gloriam tibi cum Pyrrhone et cum Aristone, qui omnia exaequant, esse communem? Nec enim ille respirat, ante quam emersit, et catuli aeque caeci, prius quam dispexerunt, ac si ita futuri semper essent. Cum autem paulum firmitatis accessit, et animo utuntur et sensibus conitunturque, ut sese erigant, et manibus utuntur et eos agnoscunt, a quibus educantur. Hac videlicet ratione, quod ea, quae externa sunt, iis tuemur officiis, quae oriuntur a suo cuiusque genere virtutis. <a href='http://loripsum.net/' target='_blank'>Ergo, inquit, tibi Q.</a> Quam multa vitiosa! summum enim bonum et malum vagiens puer utra voluptate diiudicabit, stante an movente? Utrum enim sit voluptas in iis rebus, quas primas secundum naturam esse diximus, necne sit ad id, quod agimus, nihil interest. Et ille, cum erubuisset: Noli, inquit, ex me quaerere, qui in Phalericum etiam descenderim, quo in loco ad fluctum alunt declamare solitum Demosthenem, ut fremitum assuesceret voce vincere. Est enim natura sic generata vis hominis, ut ad omnem virtutem percipiendam facta videatur, ob eamque causam parvi virtutum simulacris, quarum in se habent semina, sine doctrina moventur; Non risu potius quam oratione eiciendum? </p>

<p>Quamquam tu hanc copiosiorem etiam soles dicere. <i>Respondeat totidem verbis.</i> Cum sciret confestim esse moriendum eamque mortem ardentiore studio peteret, quam Epicurus voluptatem petendam putat. <i>Est enim effectrix multarum et magnarum voluptatum.</i> Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant. Ego autem: Ne tu, inquam, Cato, ista exposuisti, ut tam multa memoriter, ut tam obscura, dilucide, itaque aut omittamus contra omnino velle aliquid aut spatium sumamus ad cogitandum; At vero si ad vitem sensus accesserit, ut appetitum quendam habeat et per se ipsa moveatur, quid facturam putas? <a href='http://loripsum.net/' target='_blank'>Conferam tecum, quam cuique verso rem subicias;</a> Ea enim omnia, quae illi bona dicerent, praeposita esse, non bona, itemque illa, quae in corpore excellerent, stulte antiquos dixisse per se esse expetenda; </p>

",
			'lesson_excerpt'       => 'This lesson is about third part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson Fourth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Qualis est igitur omnis haec, quam dico, conspiratio consensusque virtutum, tale est illud ipsum honestum, quandoquidem honestum aut ipsa virtus est aut res gesta virtute; Quid de Platone aut de Democrito loquar? <i>Istic sum, inquit.</i> Ut ad minora veniam, mathematici, poëtae, musici, medici denique ex hac tamquam omnium artificum officina profecti sunt. Non igitur potestis voluptate omnia dirigentes aut tueri aut retinere virtutem. <a href='http://loripsum.net/' target='_blank'>An hoc usque quaque, aliter in vita?</a> Duo Reges: constructio interrete. <a href='http://loripsum.net/' target='_blank'>Nos vero, inquit ille;</a> Principiis autem a natura datis amplitudines quaedam bonorum excitabantur partim profectae a contemplatione rerum occultiorum, quod erat insitus menti cognitionis amor, e quo etiam rationis explicandae disserendique cupiditas consequebatur; <b>Moriatur, inquit.</b> Corporis igitur nostri partes totaque figura et forma et statura quam apta ad naturam sit, apparet, neque est dubium, quin frons, oculi, aures et reliquae partes quales propriae sint hominis intellegatur. </p>

<ol>
	<li>Si enim ita est, vide ne facinus facias, cum mori suadeas.</li>
	<li>Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus.</li>
	<li>Quod quidem iam fit etiam in Academia.</li>
</ol>


<p>Est enim perspicuum nullam artem ipsam in se versari, sed esse aliud artem ipsam, aliud quod propositum sit arti. <mark>Itaque ad tempus ad Pisonem omnes.</mark> <a href='http://loripsum.net/' target='_blank'>Est enim effectrix multarum et magnarum voluptatum.</a> Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? <a href='http://loripsum.net/' target='_blank'>Recte, inquit, intellegis.</a> Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus? Obscura, inquit, quaedam esse confiteor, nec tamen ab illis ita dicuntur de industria, sed inest in rebus ipsis obscuritas. <a href='http://loripsum.net/' target='_blank'>Pauca mutat vel plura sane;</a> Quid ergo attinet gloriose loqui, nisi constanter loquare? Quid, si non modo utilitatem tibi nullam afferet, sed iacturae rei familiaris erunt faciendae, labores suscipiendi, adeundum vitae periculum? </p>

<ol>
	<li>Septem autem illi non suo, sed populorum suffragio omnium nominati sunt.</li>
	<li>Quamvis enim depravatae non sint, pravae tamen esse possunt.</li>
	<li>Cur igitur, inquam, res tam dissimiles eodem nomine appellas?</li>
	<li>An potest, inquit ille, quicquam esse suavius quam nihil dolere?</li>
	<li>Quae autem natura suae primae institutionis oblita est?</li>
	<li>Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est.</li>
</ol>


<ol>
	<li>Quem Tiberina descensio festo illo die tanto gaudio affecit, quanto L.</li>
	<li>Tu vero, inquam, ducas licet, si sequetur;</li>
	<li>Haec et tu ita posuisti, et verba vestra sunt.</li>
	<li>-delector enim, quamquam te non possum, ut ais, corrumpere, delector, inquam, et familia vestra et nomine.</li>
	<li>Itaque his sapiens semper vacabit.</li>
</ol>


<p><i>Nunc omni virtuti vitium contrario nomine opponitur.</i> Cum efficere non possit ut cuiquam, qui ipse sibi notus sit, hoc est qui suam naturam sensumque perspexerit, vacuitas doloris et voluptas idem esse videatur. Dolor ergo, id est summum malum, metuetur semper, etiamsi non aderit; Iam id ipsum absurdum, maximum malum neglegi. Primum enim, si vera sunt ea, quorum recordatione te gaudere dicis, hoc est, si vera sunt tua scripta et inventa, gaudere non potes. Nam, ut sint illa vendibiliora, haec uberiora certe sunt. Ego vero volo in virtute vim esse quam maximam; </p>

<p>Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. Videsne ut, quibus summa est in voluptate, perspicuum sit quid iis faciendum sit aut non faciendum? Nos beatam vitam non depulsione mali, sed adeptione boni iudicemus, nec eam cessando, sive gaudentem, ut Aristippus, sive non dolentem, ut hic, sed agendo aliquid considerandove quaeramus. Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus. <a href='http://loripsum.net/' target='_blank'>Prioris generis est docilitas, memoria;</a> Egone non intellego, quid sit don Graece, Latine voluptas? At vero illa, quae Peripatetici, quae Stoici dicunt, semper tibi in ore sunt in iudiciis, in senatu. Hanc initio institutionem confusam habet et incertam, ut tantum modo se tueatur, qualecumque sit, sed nec quid sit nec quid possit nec quid ipsius natura sit intellegit. Sapientia enim et animi magnitudinem complectitur et iustitiam, et ut omnia, quae homini accidant, infra se esse iudicet, quod idem ceteris artibus non contingit. Necesseque est, si quis sibi ipsi inimicus est, eum quae bona sunt mala putare, bona contra quae mala, et quae appetenda fugere, quae fugienda appetere, quae sine dubio vitae est eversio. Equidem e Cn. Sed si duo honesta proposita sint, alterum cum valitudine, alterum cum morbo, non esse dubium, ad utrum eorum natura nos ipsa deductura sit. Aut, si nihil malum, nisi quod turpe, inhonestum, indecorum, pravum, flagitiosum, foedum-ut hoc quoque pluribus nominibus insigne faciamus-, quid praeterea dices esse fugiendum? Sed ad bona praeterita redeamus. Quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit? Qui haec didicerunt, quae ille contemnit, sic solent: Duo genera cupiditatum, naturales et inanes, naturalium duo, necessariae et non necessariae. </p>

<p>Mihi quidem eae verae videntur opiniones, quae honestae, quae laudabiles, quae gloriosae, quae in senatu, quae apud populum, quae in omni coetu concilioque profitendae sint, ne id non pudeat sentire, quod pudeat dicere. Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem. Quoniamque non dubium est quin in iis, quae media dicimus, sit aliud sumendum, aliud reiciendum, quicquid ita fit aut dicitur, omne officio continetur. Quae enim mala illi non audent appellare, aspera autem et incommoda et reicienda et aliena naturae esse concedunt, ea nos mala dicimus, sed exigua et paene minima. Etenim si loca, si fana, si urbes, si gymnasia, si campum, si canes, si equos, si ludicra exercendi aut venandi consuetudine adamare solemus, quanto id in hominum consuetudine facilius fieri poterit et iustius? <b>Illi enim inter se dissentiunt.</b> </p>

<p>Ita fit illa conclusio non solum vera, sed ita perspicua, ut dialectici ne rationem quidem reddi putent oportere: si illud, hoc; Quid autem est amare, e quo nomen ductum amicitiae est, nisi velle bonis aliquem affici quam maximis, etiamsi ad se ex iis nihil redundet? Nec vero pietas adversus deos nec quanta iis gratia debeatur sine explicatione naturae intellegi potest. Qui si omnes veri erunt, ut Epicuri ratio docet, tum denique poterit aliquid cognosci et percipi. Quae fere omnia appellantur uno ingenii nomine, easque virtutes qui habent, ingeniosi vocantur. Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos. Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? <a href='http://loripsum.net/' target='_blank'>Primum divisit ineleganter;</a> <i>Illa tamen simplicia, vestra versuta.</i> <b>Egone quaeris, inquit, quid sentiam?</b> Et saepe officium est sapientis desciscere a vita, cum sit beatissimus, si id oportune facere possit, quod est convenienter naturae. Hoc autem loco tantum explicemus haec honesta, quae dico, praeterquam quod nosmet ipsos diligamus, praeterea suapte natura per se esse expetenda. </p>

<ul>
	<li>Quod non subducta utilitatis ratione effici solet, sed ipsum a se oritur et sua sponte nascitur.</li>
	<li>Invidiosum nomen est, infame, suspectum.</li>
	<li>Tum Piso: Quoniam igitur aliquid omnes, quid Lucius noster?</li>
	<li>Beatus autem esse in maximarum rerum timore nemo potest.</li>
</ul>


<p>Equidem etiam curiam nostram-Hostiliam dico, non hanc novam, quae minor mihi esse videtur, posteaquam est maior-solebam intuens Scipionem, Catonem, Laelium, nostrum vero in primis avum cogitare; Pomponius Luciusque Cicero, frater noster cognatione patruelis, amore germanus, constituimus inter nos ut ambulationem postmeridianam conficeremus in Academia, maxime quod is locus ab omni turba id temporis vacuus esset. Nec enim absolvi beata vita sapientis neque ad exitum perduci poterit, si prima quaeque bene ab eo consulta atque facta ipsius oblivione obruentur. Quem quidem locum comit multa venustate et omni sale idem Lucilius, apud quem praeclare Scaevola: Graecum te, Albuci, quam Romanum atque Sabinum, municipem Ponti, Tritani, centurionum, praeclarorum hominum ac primorum signiferumque, maluisti dici. Multi enim et magni philosophi haec ultima bonorum iuncta fecerunt, ut Aristoteles virtutis usum cum vitae perfectae prosperitate coniunxit, Callipho adiunxit ad honestatem voluptatem, Diodorus ad eandem honestatem addidit vacuitatem doloris. <mark>Quantum Aristoxeni ingenium consumptum videmus in musicis?</mark> <i>Videsne, ut haec concinant?</i> <i>Quantum Aristoxeni ingenium consumptum videmus in musicis?</i> Illi autem, quibus summum bonum sine virtute est, non dabunt fortasse vitam beatam habere, in quo iure possit gloriari, etsi illi quidem etiam voluptates faciunt interdum gloriosas. De hominibus dici non necesse est. <b>Sit enim idem caecus, debilis.</b> Quod idem Peripatetici non tenent, quibus dicendum est, quae et honesta actio sit et sine dolore, eam magis esse expetendam, quam si esset eadem actio cum dolore. -, sed ut hoc iudicaremus, non esse in iis partem maximam positam beate aut secus vivendi. <i>Sed tamen intellego quid velit.</i> </p>

<p>Quibus ex omnibus iudicari potest non modo non impediri rationem amicitiae, si summum bonum in voluptate ponatur, sed sine hoc institutionem omnino amicitiae non posse reperiri. Quoniam igitur, ut medicina valitudinis, navigationis gubernatio, sic vivendi ars est prudente, necesse est eam quoque ab aliqua re esse constitutam et profectam. Nam si dicent ab illis has res esse tractatas, ne ipsos quidem Graecos est cur tam multos legant, quam legendi sunt. <i>Maximus dolor, inquit, brevis est.</i> Pompeius in foedere Numantino infitiando fuit, nec vero omnia timente, sed primum qui animi conscientiam non curet, quam scilicet comprimere nihil est negotii. Sunt enim quasi prima elementa naturae, quibus ubertas orationis adhiberi vix potest, nec equidem eam cogito consectari. <b>Cur deinde Metrodori liberos commendas?</b> <a href='http://loripsum.net/' target='_blank'>Itaque fecimus.</a> <b>Respondeat totidem verbis.</b> Eloquentiae vero, quae et principibus maximo ornamento est, et qua te audimus valere plurimum, quantum tibi ex monumentis nostris addidisses! Ea cum dixissent, quid tandem talibus viris responderes? Atqui haec patefactio quasi rerum opertarum, cum quid quidque sit aperitur, definitio est. Paupertas si malum est, mendicus beatus esse nemo potest, quamvis sit sapiens. </p>

<p>Nam quid possumus facere melius? Eamne rationem igitur sequere, qua tecum ipse et cum tuis utare, profiteri et in medium proferre non audeas? Qui cum cruciaretur non ferendis doloribus, propagabat tamen vitam aucupio, sagittarum ictu configebat tardus celeres, stans volantis, ut apud Accium est, pennarumque contextu corpori tegumenta faciebat. Modo enim fuit Carneadis, quem videre videor-est, enim nota imago -, a sedeque ipsa tanta ingenii, magnitudine orbata desiderari illam vocem puto. Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant. Quia, cum a Zenone, inquam, hoc magnifice tamquam ex oraculo editur: Virtus ad beate vivendum se ipsa contenta est, et Quare? Quid enim perversius, quid intolerabilius, quid stultius quam bonam valetudinem, quam dolorum omnium vacuitatem, quam integritatem oculorum reliquorumque sensuum ponere in bonis potius, quam dicerent nihil omnino inter eas res iisque contrarias interesse? Cum autem negant ea quicquam ad beatam vitam pertinere, rursus naturam relinquunt. <b>Deinde dolorem quem maximum?</b> <mark>Vide, quantum, inquam, fallare, Torquate.</mark> </p>

<p><i>Quid de Pythagora?</i> Nec vero ut voluptatem expetat, natura movet infantem, sed tantum ut se ipse diligat, ut integrum se salvumque velit. <a href='http://loripsum.net/' target='_blank'>A mene tu?</a> Ergo in bestiis erunt secreta e voluptate humanarum quaedam simulacra virtutum, in ipsis hominibus virtus nisi voluptatis causa nulla erit? Omne enim animal, simul et ortum est, se ipsum et omnes partes suas diligit duasque, quae maximae sunt, in primis amplectitur, animum et corpus, deinde utriusque partes. Cum enim fertur quasi torrens oratio, quamvis multa cuiusque modi rapiat, nihil tamen teneas, nihil apprehendas, nusquam orationem rapidam coerceas. Admirantes quaeramus ab utroque, quonam modo vitam agere possimus, si nihil interesse nostra putemus, valeamus aegrine simus, vacemus an cruciemur dolore, frigus, famem propulsare possimus necne possimus. Non metuet autem, sive celare poterit, sive opibus magnis quicquid fecerit optinere, certeque malet existimari bonus vir, ut non sit, quam esse, ut non putetur. <i>Bonum patria: miserum exilium.</i> <i>Aliter homines, aliter philosophos loqui putas oportere?</i> Nunc dicam de voluptate, nihil scilicet novi, ea tamen, quae te ipsum probaturum esse confidam. Beatus autem esse in maximarum rerum timore nemo potest. Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. <b>Tum Triarius: Posthac quidem, inquit, audacius.</b> </p>

<blockquote cite='http://loripsum.net'>
	Utrum igitur tibi non placet, inquit, virtutisne tantam esse vim, ut ad beate vivendum se ipsa contenta sit?
</blockquote>


<p>In omni enim animante est summum aliquid atque optimum, ut in equis, in canibus, quibus tamen et dolore vacare opus est et valere; In voluptate corporis-addam, si vis, animi, dum ea ipsa, ut vultis, sit e corpore-situm est vivere beate. Haec qui audierit, ut ridere non curet, discedet tamen nihilo firmior ad dolorem ferendum, quam venerat. Sic enim maiores nostri labores non fugiendos tristissimo tamen verbo aerumnas etiam in deo nominaverunt. In qua quid est boni praeter summam voluptatem, et eam sempiternam? Vides igitur te aut ea sumere, quae non concedantur, aut ea, quae etiam concessa te nihil iuvent. Dempta enim aeternitate nihilo beatior Iuppiter quam Epicurus; <a href='http://loripsum.net/' target='_blank'>Rationis enim perfectio est virtus;</a> Ea denique omni vita, quae in una virtute consisteret, illam vitam, quae etiam ceteris rebus, quae essent secundum naturam, abundaret, magis expetendam non esse, sed magis sumendam. Quod quidem pluris est haud paulo magisque ipsum propter se expetendum quam aut sensus aut corporis ea, quae diximus, quibus tantum praestat mentis excellens perfectio, ut vix cogitari possit quid intersit. Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. <i>Istam voluptatem, inquit, Epicurus ignorat?</i> Tolletur enim appetitus animi, si, ut in lis rebus, inter quas nihil interest, neutram in partem propensiores sumus, item in nobismet ipsis quem ad modum affecti simus nihil nostra arbitrabimur interesse. Quarum cum una sit, qua mores conformari putantur, differo eam partem, quae quasi stirps ets huius quaestionis. <b>Nunc agendum est subtilius.</b> </p>

<p>Et hi quidem ita non sola virtute finem bonorum contineri putant, ut rebus tamen omnibus virtutem anteponant; Sed alii dolore moventur, alii cupiditate, iracundia etiam multi effetuntur et, cum in mala scientes inruunt, tum se optime sibi consulere arbitrantur. Et saepe officium est sapientis desciscere a vita, cum sit beatissimus, si id oportune facere possit, quod est convenienter naturae. <a href='http://loripsum.net/' target='_blank'>Ita prorsus, inquam;</a> Hoc est vim afferre, Torquate, sensibus, extorquere ex animis cognitiones verborum, quibus inbuti sumus. <b>Mihi, inquam, qui te id ipsum rogavi?</b> </p>

<p>Quando enim Socrates, qui parens philosophiae iure dici potest, quicquam tale fecit? Aut etiam, ut vestitum, sic sententiam habeas aliam domesticam, aliam forensem, ut in fronte ostentatio sit, intus veritas occultetur? Vos autem, Cato, quia virtus, ut omnes fatemur, altissimum locum in homine et maxime excellentem tenet, et quod eos, qui sapientes sunt, absolutos et perfectos putamus, aciem animorum nostrorum virtutis splendore praestringitis. Non ego iam Epaminondae, non Leonidae mortem huius morti antepono, quorum alter cum vicisset Lacedaemonios apud Mantineam atque ipse gravi vulnere exanimari se videret, ut primum dispexit, quaesivit salvusne esset clipeus. Nondum autem explanatum satis, erat, quid maxime natura vellet. Gloriosa ostentatio in constituendo summo bono. Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. Quos qui tollunt et nihil posse percipi dicunt, ii remotis sensibus ne id ipsum quidem expedire possunt, quod disserunt. Quo minus animus a se ipse dissidens secumque discordans gustare partem ullam liquidae voluptatis et liberae potest. At vero facere omnia, ut adipiscamur, quae secundum naturam sint, etiam si ea non assequamur, id esse et honestum et solum per se expetendum et solum bonum Stoici dicunt. Audi, ne longe abeam, moriens quid dicat Epicurus, ut intellegas facta eius cum dictis discrepare: Epicurus Hermarcho salutem. Nemo est igitur, quin hanc affectionem animi probet atque laudet, qua non modo utilitas nulla quaeritur, sed contra utilitatem etiam conservatur fides. <b>Recte, inquit, intellegis.</b> Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. <b>Quibus ego vehementer assentior.</b> Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. Aut, si esses Orestes, Pyladem refelleres, te indicares et, si id non probares, quo minus ambo una necaremini non precarere? </p>

<dl>
	<dt><dfn>Recte, inquit, intellegis.</dfn></dt>
	<dd>Quid de Platone aut de Democrito loquar?</dd>
	<dt><dfn>Quis istud, quaeso, nesciebat?</dfn></dt>
	<dd>Nunc vides, quid faciat.</dd>
	<dt><dfn>An eiusdem modi?</dfn></dt>
	<dd>Expectoque quid ad id, quod quaerebam, respondeas.</dd>
	<dt><dfn>Eam stabilem appellas.</dfn></dt>
	<dd>Rem unam praeclarissimam omnium maximeque laudandam, penitus viderent, quonam gaudio complerentur, cum tantopere eius adumbrata opinione laetentur?</dd>
	<dt><dfn>Sed videbimus.</dfn></dt>
	<dd>Nec vero hoc oratione solum, sed multo magis vita et factis et moribus comprobavit.</dd>
</dl>


<ul>
	<li>Ita fit cum gravior, tum etiam splendidior oratio.</li>
	<li>Si longus, levis;</li>
	<li>Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret.</li>
</ul>


<ul>
	<li>A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas.</li>
	<li>Cupit enim dícere nihil posse ad beatam vitam deesse sapienti.</li>
	<li>Totum autem id externum est, et quod externum, id in casu est.</li>
	<li>Itaque primos congressus copulationesque et consuetudinum instituendarum voluntates fieri propter voluptatem;</li>
	<li>Qui enim existimabit posse se miserum esse beatus non erit.</li>
	<li>Cum autem in quo sapienter dicimus, id a primo rectissime dicitur.</li>
</ul>


<p>Nam hunc ipsum sive finem sive extremum sive ultimum definiebas id esse, quo omnia, quae recte fierent, referrentur neque id ipsum usquam referretur. Deque his rebus satis multa in nostris de re publica libris sunt dicta a Laelio. Alii rursum isdem a principiis omne officium referent aut ad voluptatem aut ad non dolendum aut ad prima illa secundum naturam optinenda. <b>Bonum integritas corporis: misera debilitas.</b> Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus. Persecutus est Aristoteles animantium omnium ortus, victus, figuras, Theophrastus autem stirpium naturas omniumque fere rerum, quae e terra gignerentur, causas atque rationes; Nam quod ait sensibus ipsis iudicari voluptatem bonum esse, dolorem malum, plus tribuit sensibus, quam nobis leges permittunt, cum privatarum litium iudices sumus. Quarum adeo omnium sententia pronuntiabit primum de voluptate nihil esse ei loci, non modo ut sola ponatur in summi boni sede, quam quaerimus, sed ne illo quidem modo, ut ad honestatem applicetur. Quodsi non hominis summum bonum quaeremus, sed cuiusdam animantis, is autem esset nihil nisi animus liceat enim fingere aliquid eiusmodi, quo verum facilius reperiamus -, tamen illi animo non esset hic vester finis. <a href='http://loripsum.net/' target='_blank'>Hoc loco tenere se Triarius non potuit.</a> Quorum fuit haec institutio, in qua animadvertas velim quid mutandum putes nec expectes, dum ad omnia dicam, quae a te dicta sunt; Teneamus enim illud necesse est, cum consequens aliquod falsum sit, illud, cuius id consequens sit, non posse esse verum. Hoc vero non videre, maximo argumento esse voluptatem illam, qua sublata neget se intellegere omnino quid sit bonum-eam autem ita persequitur: quae palato percipiatur, quae auribus; Ita est quoddam commune officium sapientis et insipientis, ex quo efficitur versari in iis, quae media dicamus. <a href='http://loripsum.net/' target='_blank'>Dicimus aliquem hilare vivere;</a> <mark>Sic enim censent, oportunitatis esse beate vivere.</mark> </p>

<p>Nemo est igitur, quin hanc affectionem animi probet atque laudet, qua non modo utilitas nulla quaeritur, sed contra utilitatem etiam conservatur fides. Illa autem, morbum, egestatem, dolorem, non appello m a l a, sed, si libet, r e i e c t a n e a. Nam ista commendatio puerorum, memoria et caritas amicitiae, summorum officiorum in extremo spiritu conservatio indicat innatam esse homini probitatem gratuitam, non invitatam voluptatibus nec praemiorum mercedibus evocatam. Quid enim de amicitia statueris utilitatis causa expetenda vides. Antiquorum autem sententiam Antiochus noster mihi videtur persequi diligentissime, quam eandem Aristoteli fuisse et Polemonis docet. <i>Qui convenit?</i> Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. Perspicuum est enim, nisi aequitas, fides, iustitia proficiscantur a natura, et si omnia haec ad utilitatem referantur, virum bonum non posse reperiri; <a href='http://loripsum.net/' target='_blank'>An tu me de L.</a> <mark>Et nemo nimium beatus est;</mark> <b>Quonam modo?</b> </p>

<blockquote cite='http://loripsum.net'>
	Quam similitudinem videmus in bestiis, quae primo, in quo loco natae sunt, ex eo se non commoventi deinde suo quaeque appetitu movetur.
</blockquote>


<dl>
	<dt><dfn>Primum divisit ineleganter;</dfn></dt>
	<dd>Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest.</dd>
	<dt><dfn>Equidem e Cn.</dfn></dt>
	<dd>Nam prius a se poterit quisque discedere quam appetitum earum rerum, quae sibi conducant, amittere.</dd>
</dl>


<dl>
	<dt><dfn>Peccata paria.</dfn></dt>
	<dd>Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus;</dd>
	<dt><dfn>Si longus, levis.</dfn></dt>
	<dd>Quamquam te quidem video minime esse deterritum.</dd>
	<dt><dfn>Reguli reiciendam;</dfn></dt>
	<dd>Neque solum ea communia, verum etiam paria esse dixerunt.</dd>
	<dt><dfn>Confecta res esset.</dfn></dt>
	<dd>Compensabatur, inquit, cum summis doloribus laetitia.</dd>
</dl>


<p><a href='http://loripsum.net/' target='_blank'>Beatus sibi videtur esse moriens.</a> Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? <a href='http://loripsum.net/' target='_blank'>Sullae consulatum?</a> <a href='http://loripsum.net/' target='_blank'>Et nemo nimium beatus est;</a> Nihil enim est aliud, quam ob rem mihi percipi nihil posse videatur, nisi quod percipiendi vis ita definitur a Stoicis, ut negent quicquam posse percipi nisi tale verum, quale falsum esse non possit. <b>Recte, inquit, intellegis.</b> </p>

<blockquote cite='http://loripsum.net'>
	Ita miser sit aliquando necesse est is, quem vos beatum semper vultis esse, nec vero id, dum omnia ad voluptatem doloremque referetis, efficietis umquam.
</blockquote>


<p>Nec mihi illud dixeris: Haec enim ipsa mihi sunt voluptati, et erant illa Torquatis. Itaque Epicurus semper hoc utitur, ut probet voluptatem natura expeti, quod ea voluptas, quae in motu sit, et parvos ad se alliciat et bestias, non illa stabilis, in qua tantum inest nihil dolere. Quid ergo aliud intellegetur nisi uti ne quae pars naturae neglegatur? Si vero id etiam explanare velles apertiusque diceres nihil eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? <i>Sed haec omittamus;</i> Aut, si nihil malum, nisi quod turpe, inhonestum, indecorum, pravum, flagitiosum, foedum-ut hoc quoque pluribus nominibus insigne faciamus-, quid praeterea dices esse fugiendum? <a href='http://loripsum.net/' target='_blank'>Eademne, quae restincta siti?</a> Ego autem existimo, si honestum esse aliquid ostendero, quod sit ipsum vi sua propter seque expetendum, iacere vestra omnia. Rem videlicet difficilem et obscuram! individua cum dicitis et intermundia, quae nec sunt ulla nec possunt esse, intellegimus, voluptas, quae passeribus omnibus nota est, a nobis intellegi non potest? <a href='http://loripsum.net/' target='_blank'>De vacuitate doloris eadem sententia erit.</a> Quare attendo te studiose et, quaecumque rebus iis, de quibus hic sermo est, nomina inponis, memoriae mando; Nemo igitur esse beatus potest. Haec mirabilia videri intellego, sed cum certe superiora firma ac vera sint, his autem ea consentanea et consequentia, ne de horum quidem est veritate dubitandum. <mark>Age sane, inquam.</mark> </p>

<p>Suo genere perveniant ad extremum; <a href='http://loripsum.net/' target='_blank'>Quo modo autem philosophus loquitur?</a> <b>Audeo dicere, inquit.</b> Nec vero sum nescius esse utilitatem in historia, non modo voluptatem. Nam ista commendatio puerorum, memoria et caritas amicitiae, summorum officiorum in extremo spiritu conservatio indicat innatam esse homini probitatem gratuitam, non invitatam voluptatibus nec praemiorum mercedibus evocatam. Quae adhuc, Cato, a te dicta sunt, eadem, inquam, dicere posses, si sequerere Pyrrhonem aut Aristonem. Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur. Alteri negant quicquam esse bonum, nisi quod honestum sit, alteri plurimum se et longe longeque plurimum tribuere honestati, sed tamen et in corpore et extra esse quaedam bona. <i>Tamen a proposito, inquam, aberramus.</i> </p>

<p>Vide, ne magis, inquam, tuum fuerit, cum re idem tibi, quod mihi, videretur, non nova te rebus nomina inponere. <i>Quid adiuvas?</i> Crassus fuit, qui tamen solebat uti suo bono, ut hodie est noster Pompeius, cui recte facienti gratia est habenda; Atque omnia quidem scire, cuiuscumque modi sint, cupere curiosorum, duci vero maiorum rerum contemplatione ad cupiditatem scientiae summorum virorum est putandum. Dicuntur ista, Cato, magnifice, inquam, sed videsne verborum gloriam tibi cum Pyrrhone et cum Aristone, qui omnia exaequant, esse communem? Nec enim ille respirat, ante quam emersit, et catuli aeque caeci, prius quam dispexerunt, ac si ita futuri semper essent. Cum autem paulum firmitatis accessit, et animo utuntur et sensibus conitunturque, ut sese erigant, et manibus utuntur et eos agnoscunt, a quibus educantur. Hac videlicet ratione, quod ea, quae externa sunt, iis tuemur officiis, quae oriuntur a suo cuiusque genere virtutis. <a href='http://loripsum.net/' target='_blank'>Ergo, inquit, tibi Q.</a> Quam multa vitiosa! summum enim bonum et malum vagiens puer utra voluptate diiudicabit, stante an movente? Utrum enim sit voluptas in iis rebus, quas primas secundum naturam esse diximus, necne sit ad id, quod agimus, nihil interest. Et ille, cum erubuisset: Noli, inquit, ex me quaerere, qui in Phalericum etiam descenderim, quo in loco ad fluctum alunt declamare solitum Demosthenem, ut fremitum assuesceret voce vincere. Est enim natura sic generata vis hominis, ut ad omnem virtutem percipiendam facta videatur, ob eamque causam parvi virtutum simulacris, quarum in se habent semina, sine doctrina moventur; Non risu potius quam oratione eiciendum? </p>

<p>Quamquam tu hanc copiosiorem etiam soles dicere. <i>Respondeat totidem verbis.</i> Cum sciret confestim esse moriendum eamque mortem ardentiore studio peteret, quam Epicurus voluptatem petendam putat. <i>Est enim effectrix multarum et magnarum voluptatum.</i> Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant. Ego autem: Ne tu, inquam, Cato, ista exposuisti, ut tam multa memoriter, ut tam obscura, dilucide, itaque aut omittamus contra omnino velle aliquid aut spatium sumamus ad cogitandum; At vero si ad vitem sensus accesserit, ut appetitum quendam habeat et per se ipsa moveatur, quid facturam putas? <a href='http://loripsum.net/' target='_blank'>Conferam tecum, quam cuique verso rem subicias;</a> Ea enim omnia, quae illi bona dicerent, praeposita esse, non bona, itemque illa, quae in corpore excellerent, stulte antiquos dixisse per se esse expetenda; </p>

",
			'lesson_excerpt'       => 'This lesson is about fourth part',
			'lesson_order'         => '4'
		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Fifth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Qua igitur re ab deo vincitur, si aeternitate non vincitur? <b>Gerendus est mos, modo recte sentiat.</b> Duo Reges: constructio interrete. Verum ut haec non in posteris et in consequentibus, sed in primis continuo peccata sunt, sic ea, quae proficiscuntur a virtute, susceptione prima, non perfectione recta sunt iudicanda. <a href='http://loripsum.net/' target='_blank'>Et nemo nimium beatus est;</a> <mark>Peccata paria.</mark> Non ergo Epicurus ineruditus, sed ii indocti, qui, quae pueros non didicisse turpe est, ea putant usque ad senectutem esse discenda. <i>Sedulo, inquam, faciam.</i> Atque his tribus generibus honestorum notatis quartum sequitur et in eadem pulchritudine et aptum ex illis tribus, in quo inest ordo et moderatio. <i>Quo igitur, inquit, modo?</i> <b>Tenent mordicus.</b> <mark>Ad eos igitur converte te, quaeso.</mark> <a href='http://loripsum.net/' target='_blank'>Confecta res esset.</a> Quarum cum una sit, qua mores conformari putantur, differo eam partem, quae quasi stirps ets huius quaestionis. <i>Aliter autem vobis placet.</i> Ergo in iis adolescentibus bonam spem esse dicemus et magnam indolem, quos suis commodis inservituros et quicquid ipsis expediat facturos arbitrabimur? </p>

<dl>
	<dt><dfn>ALIO MODO.</dfn></dt>
	<dd>Si qua in iis corrigere voluit, deteriora fecit.</dd>
	<dt><dfn>Quid ergo?</dfn></dt>
	<dd>Cum audissem Antiochum, Brute, ut solebam, cum M.</dd>
	<dt><dfn>Ita nemo beato beatior.</dfn></dt>
	<dd>Tria genera bonorum;</dd>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia.</dd>
</dl>


<p>Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. Nam si concederetur, etiamsi ad corpus nihil referatur, ista sua sponte et per se esse iucunda, per se esset et virtus et cognitio rerum, quod minime ille vult expetenda. Aderamus nos quidem adolescentes, sed multi amplissimi viri, quorum nemo censuit plus Fadiae dandum, quam posset ad eam lege Voconia pervenire. Quod cum accidisset ut alter alterum necopinato videremus, surrexit statim. Nec vero audiendus Hieronymus, cui summum bonum est idem, quod vos interdum vel potius nimium saepe dicitis, nihil dolere. <b>Nunc omni virtuti vitium contrario nomine opponitur.</b> Et quoniam excedens e vita et manens aeque miser est nec diuturnitas magis ei vitam fugiendam facit, non sine causa dicitur iis, qui pluribus naturalibus frui possint, esse in vita manendum. Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum. Hic homo severus luxuriam ipsam per se reprehendendam non putat, et hercule, Torquate, ut verum loquamur, si summum bonum voluptas est, rectissime non putat. Corporis autem voluptas si etiam praeterita delectat, non intellego, cur Aristoteles Sardanapalli epigramma tantopere derideat, in quo ille rex Syriae glorietur se omnis secum libidinum voluptates abstulisse. Qui igitur convenit ab alia voluptate dicere naturam proficisci, in alia summum bonum ponere? Quae possunt eadem contra Carneadeum illud summum bonum dici, quod is non tam, ut probaret, protulit, quam ut Stoicis, quibuscum bellum gerebat, opponeret. Illud urgueam, non intellegere eum quid sibi dicendum sit, cum dolorem summum malum esse dixerit. Quod dicit Epicurus etiam de voluptate, quae minime sint voluptates, eas obscurari saepe et obrui. </p>

<dl>
	<dt><dfn>Recte dicis;</dfn></dt>
	<dd>Ampulla enim sit necne sit, quis non iure optimo irrideatur, si laboret?</dd>
	<dt><dfn>Cur iustitia laudatur?</dfn></dt>
	<dd>Itaque hic ipse iam pridem est reiectus;</dd>
	<dt><dfn>Quid enim?</dfn></dt>
	<dd>Oculorum, inquit Plato, est in nobis sensus acerrimus, quibus sapientiam non cernimus.</dd>
	<dt><dfn>Sed fortuna fortis;</dfn></dt>
	<dd>Iam illud quale tandem est, bona praeterita non effluere sapienti, mala meminisse non oportere?</dd>
</dl>


<p>Itaque et manendi in vita et migrandi ratio omnis iis rebus, quas supra dixi, metienda. Animadverti, ínquam, te isto modo paulo ante ponere, et scio ab Antiocho nostro dici sic solere; Aderamus nos quidem adolescentes, sed multi amplissimi viri, quorum nemo censuit plus Fadiae dandum, quam posset ad eam lege Voconia pervenire. Quae est enim, quae se umquam deserat aut partem aliquam sui aut eius partis habitum aut vini aut ullius earum rerum, quae secundum naturam sunt, aut motum aut statum? Cum vero paulum processerunt, lusionibus vel laboriosis delectantur, ut ne verberibus quidem deterreri possint, eaque cupiditas agendi aliquid adolescit una cum aetatibus. <a href='http://loripsum.net/' target='_blank'>Verum hoc idem saepe faciamus.</a> At hoc in eo M. Potius inflammat, ut coercendi magis quam dedocendi esse videantur. <b>Utilitatis causa amicitia est quaesita.</b> An id exploratum cuiquam potest esse, quo modo se hoc habiturum sit corpus, non dico ad annum, sed ad vesperum? Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. <mark>Aliter enim nosmet ipsos nosse non possumus.</mark> <a href='http://loripsum.net/' target='_blank'>Non laboro, inquit, de nomine.</a> Atque etiam valítudinem, vires, vacuitatem doloris non propter utilitatem solum, sed etiam ipsas propter se expetemus. <mark>Num quid tale Democritus?</mark> <b>Quaerimus enim finem bonorum.</b> </p>

<p>Cur, nisi quod turpis oratio est? Quare si potest esse beatus is, qui est in asperis reiciendisque rebus, potest is quoque esse. <b>Verum hoc idem saepe faciamus.</b> Quamquam scripsit artem rhetoricam Cleanthes, Chrysippus etiam, sed sic, ut, si quis obmutescere concupierit, nihil aliud legere debeat. </p>

<p>Lege laudationes, Torquate, non eorum, qui sunt ab Homero laudati, non Cyri, non Agesilai, non Aristidi aut Themistocli, non Philippi aut Alexandri, lege nostrorum hominum, lege vestrae familiae; <mark>Et quod est munus, quod opus sapientiae?</mark> <i>Bonum integritas corporis: misera debilitas.</i> <b>Non laboro, inquit, de nomine.</b> Atque haec contra Aristippum, qui eam voluptatem non modo summam, sed solam etiam ducit, quam omnes unam appellamus voluptatem. Nos beatam vitam non depulsione mali, sed adeptione boni iudicemus, nec eam cessando, sive gaudentem, ut Aristippus, sive non dolentem, ut hic, sed agendo aliquid considerandove quaeramus. Nec enim ignoras his istud honestum non summum modo, sed etiam, ut tu vis, solum bonum videri. Itaque quantum adiit periculum! ad honestatem enim illum omnem conatum suum referebat, non ad voluptatem. Quasi vero, inquit, perpetua oratio rhetorum solum, non etiam philosophorum sit. Sic igitur in homine perfectio ista in eo potissimum, quod est optimum, id est in virtute, laudatur. Idem fecisset Epicurus, si sententiam hanc, quae nunc Hieronymi est, coniunxisset cum Aristippi vetere sententia. </p>

<ul>
	<li>Consequens enim est et post oritur, ut dixi.</li>
	<li>Tu autem negas fortem esse quemquam posse, qui dolorem malum putet.</li>
	<li>Quia, si mala sunt, is, qui erit in iis, beatus non erit.</li>
	<li>Nam et a te perfici istam disputationem volo, nec tua mihi oratio longa videri potest.</li>
	<li>Sed non sunt in eo genere tantae commoditates corporis tamque productae temporibus tamque multae.</li>
</ul>


<p>Perfecto enim et concluso neque virtutibus neque amicitiis usquam locum esse, si ad voluptatem omnia referantur, nihil praeterea est magnopere dicendum. Quorum fuit haec institutio, in qua animadvertas velim quid mutandum putes nec expectes, dum ad omnia dicam, quae a te dicta sunt; Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? <mark>Neutrum vero, inquit ille.</mark> Nemo enim est, qui aliter dixerit quin omnium naturarum simile esset id, ad quod omnia referrentur, quod est ultimum rerum appetendarum. <i>Equidem e Cn.</i> <b>Quis est tam dissimile homini.</b> Si una virtus, unum istud, quod honestum appellas, rectum, laudabile, decorumerit enim notius quale sit pluribus notatum vocabulis idem declarantibus-, id ergo, inquam, si solum est bonum, quid habebis praeterea, quod sequare? <mark>Ergo, inquit, tibi Q.</mark> Leonidas autem, rex Lacedaemoniorum, se in Thermopylis trecentosque eos, quos eduxerat Sparta, cum esset proposita aut fuga turpis aut gloriosa mors, opposuit hostibus. <b>Mihi, inquam, qui te id ipsum rogavi?</b> Videamus animi partes, quarum est conspectus illustrior; </p>

<dl>
	<dt><dfn>At certe gravius.</dfn></dt>
	<dd>Recte, inquit, intellegis.</dd>
	<dt><dfn>Ille incendat?</dfn></dt>
	<dd>Atqui reperies, inquit, in hoc quidem pertinacem;</dd>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Nam Pyrrho, Aristo, Erillus iam diu abiecti.</dd>
</dl>


<p><a href='http://loripsum.net/' target='_blank'>Tum mihi Piso: Quid ergo?</a> Cum autem in quo sapienter dicimus, id a primo rectissime dicitur. De maximma autem re eodem modo, divina mente atque natura mundum universum et eius maxima partis administrari. Sed in rebus apertissimis nimium longi sumus. Nam me ipsum huc modo venientem convertebat ad sese Coloneus ille locus, cuius incola Sophocles ob oculos versabatur, quem scis quam admirer quemque eo delecter. <i>Sumenda potius quam expetenda.</i> Non est igitur voluptas bonum. Cum autem paulum firmitatis accessit, et animo utuntur et sensibus conitunturque, ut sese erigant, et manibus utuntur et eos agnoscunt, a quibus educantur. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Illa enim, quae sunt a nobis bona corporis numerata, complent ea quidem beatissimam vitam, sed ita, ut sine illis possit beata vita existere. </p>

<p>Est enim aliquid in his rebus probabile, et quidem ita, ut eius ratio reddi possit, ergo ut etiam probabiliter acti ratio reddi possit. Nec vero ut voluptatem expetat, natura movet infantem, sed tantum ut se ipse diligat, ut integrum se salvumque velit. Erillus autem ad scientiam omnia revocans unum quoddam bonum vidit, sed nec optimum nec quo vita gubernari possit. An quae de prudentia, de cognitione rerum, de coniunctione generis humani, quaeque ab eisdem de temperantia, de modestia, de magnitudine animi, de omni honestate dicuntur? Quod est, ut dixi, habere ea, quae secundum naturam sint, vel omnia vel plurima et maxima. <a href='http://loripsum.net/' target='_blank'>Si longus, levis;</a> Quippe, inquieta cum tam docuerim gradus istam rem non habere quam virtutem, in qua sit ipsum etíam beatum. Facile pateremur, qui etiam nunc agendi aliquid discendique causa prope contra naturam vígillas suscipere soleamus. Aliter enim nosmet ipsos nosse non possumus. <b>Age sane, inquam.</b> Ut scias me intellegere, primum idem esse dico voluptatem, quod ille don. </p>

<p>Quia, si mala sunt, is, qui erit in iis, beatus non erit. Pomponius Luciusque Cicero, frater noster cognatione patruelis, amore germanus, constituimus inter nos ut ambulationem postmeridianam conficeremus in Academia, maxime quod is locus ab omni turba id temporis vacuus esset. Ipse negat, ut ante dixi, luxuriosorum vitam reprehendendam, nisi plane fatui sint, id est nisi aut cupiant aut metuant. Nam hunc ipsum sive finem sive extremum sive ultimum definiebas id esse, quo omnia, quae recte fierent, referrentur neque id ipsum usquam referretur. <a href='http://loripsum.net/' target='_blank'>Comprehensum, quod cognitum non habet?</a> Sit voluptas non minor in nasturcio illo, quo vesci Persas esse solitos scribit Xenophon, quam in Syracusanis mensis, quae a Platone graviter vituperantur; Tenesne igitur, inquam, Hieronymus Rhodius quid dicat esse summum bonum, quo putet omnia referri oportere? Quamquam ex omnibus philosophis Stoici plurima novaverunt, Zenoque, eorum princeps, non tam rerum inventor fuit quam verborum novorum. Cumque duae sint artes, quibus perfecte ratio et oratio compleatur, una inveniendi, altera disserendi, hanc posteriorem et Stoici et Peripatetici, priorem autem illi egregie tradiderunt, hi omnino ne attigerunt quidem. </p>

<p>Num igitur eum postea censes anxio animo aut sollicito fuisse? <a href='http://loripsum.net/' target='_blank'>Vide, quantum, inquam, fallare, Torquate.</a> In sapientem solum cadit, isque finis bonorum, ut ab ipsis Stoicis scriptum videmus, a Xenocrate atque ab Aristotele constitutus est. Ita, quae mutat, ea corrumpit, quae sequitur sunt tota Democriti, atomi, inane, imagines, quae eidola nominant, quorum incursione non solum videamus, sed etiam cogitemus; Nam ceteris in rebus síve praetermissum sive ignoratum est quippiam, non plus incommodi est, quam quanti quaeque earum rerum est, in quibus neglectum est aliquíd. Quod enim testimonium maius quaerimus, quae honesta et recta sint, ipsa esse optabilia per sese, cum videamus tanta officia morientis? </p>

<p>Deinde concludebas summum malum esse dolorem, summum bonum voluptatem! Lucius Thorius Balbus fuit, Lanuvinus, quem meminisse tu non potes. <i>Ille enim occurrentia nescio quae comminiscebatur;</i> Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus. Non enim, quod facit in frugibus, ut, cum ad spicam perduxerit ab herba, relinquat et pro nihilo habeat herbam, idem facit in homine, cum eum ad rationis habitum perduxit. Quibus rebus intellegitur nec timiditatem ignaviamque vituperari nec fortitudinem patientiamque laudari suo nomine, sed illas reici, quia dolorem pariant, has optari, quia voluptatem. Quid autem dici poterit, si turpitudinem non ipsam per se fugiendam esse statuemus, quo minus homines tenebras et solitudinem nacti nullo dedecore se abstineant, nisi eos per se foeditate sua turpitudo ipsa deterreat? Quod si ita se habeat, non possit beatam praestare vitam sapientia. <b>Itaque hic ipse iam pridem est reiectus;</b> Nam quod ita positum est, quod dissolutum sit, id esse sine sensu, id eius modi est, ut non satis plane dicat quid sit dissolutum. Quae si a vobis talia dicerentur, qualibus Caius Marius uti poterat, ut expulsus, egens, in palude demersus tropaeorum recordatione levaret dolorem suum, audirem et plane probarem. <i>Quae cum dixisset paulumque institisset, Quid est?</i> <b>Urgent tamen et nihil remittunt.</b> </p>

<p>Natura sic ab iis investigata est, ut nulla pars caelo, mari, terra, ut poëtice loquar, praetermissa sit; Nam si +omnino nos+ neglegemus, in Aristonea vitia incidemus et peccata obliviscemurque quae virtuti ipsi principia dederimus; Quasi enim emendum eis sit, quod addant ad virtutem, primum vilissimas res addunt, dein singulas potius, quam omnia, quae prima natura approbavisset, ea cum honestate coniungerent. Ex quo intellegitur idem illud, solum bonum esse, quod honestum sit, idque esse beate vivere: honeste, id est cum virtute, vivere. In omni autem honesto, de quo loquimur, nihil est tam illustre nec quod latius pateat quam coniunctio inter homines hominum et quasi quaedam societas et communicatio utilitatum et ipsa caritas generis humani. Paulum, cum regem Persem captum adduceret, eodem flumine invectio? </p>

<ol>
	<li>Sed ea mala virtuti magnitudine obruebantur.</li>
	<li>Ut optime, secundum naturam affectum esse possit.</li>
</ol>


<p>Deinde disputat, quod cuiusque generis animantium statui deceat extremum. Sed in rebus apertissimis nimium longi sumus. <mark>Sed nunc, quod agimus;</mark> <mark>Perge porro;</mark> <i>Sed quot homines, tot sententiae;</i> <i>Recte dicis;</i> <i>Quis istud, quaeso, nesciebat?</i> <b>Sed quod proximum fuit non vidit.</b> Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus. Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum. <b>Ita nemo beato beatior.</b> Cognitis autem rerum finibus, cum intellegitur, quid sit et bonorum extremum et malorum, inventa vitae via est conformatioque omnium officiorum, cum quaeritur, quo quodque referatur; </p>

<blockquote cite='http://loripsum.net'>
	Iudicia rerum in sensibus ponit, quibus si semel aliquid falsi pro vero probatum sit, sublatum esse omne iudicium veri et falsi putat.
</blockquote>


<ol>
	<li>Iam illud quale tandem est, bona praeterita non effluere sapienti, mala meminisse non oportere?</li>
	<li>Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur.</li>
</ol>


<p>Age nunc isti doceant, vel tu potius quis enim ista melius? Quam haec sunt contraria! hic si definire, si dividere didicisset, si loquendi vim, si denique consuetudinem verborum teneret, numquam in tantas salebras incidisset. <i>Deinde dolorem quem maximum?</i> <a href='http://loripsum.net/' target='_blank'>Itaque fecimus.</a> Ut enim, inquit, gubernator aeque peccat, si palearum navem evertit et si auri, item aeque peccat, qui parentem et qui servum iniuria verberat. Iam autem Callipho aut Diodorus quo modo poterunt tibi istud concedere, qui ad honestatem aliud adiungant, quod ex eodem genere non sit? <b>An nisi populari fama?</b> In homine autem summa omnis animi est et in animo rationis, ex qua virtus est, quae rationis absolutio definitur, quam etiam atque etiam explicandam putant. Et tamen quid attinet luxuriosis ullam exceptionem dari aut fingere aliquos, qui, cum luxuriose viverent, a summo philosopho non reprehenderentur eo nomine dumtaxat, cetera caverent? Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. Quo modo igitur evenit, ut hominis natura sola esset, quae hominem relinqueret, quali oblivisceretur corporis, quae summum bonum non in toto homine, sed in parte hominis poneret? Aristoteles, Xenocrates, tota illa familia non dabit, quippe qui valitudinem, vires, divitias, gloriam, multa alia bona esse dicant, laudabilia non dicant. Cum autem progrediens confirmatur animus, agnoscit ille quidem naturae vim, sed ita, ut progredi possit longius, per se sit tantum inchoata. </p>

<ul>
	<li>Quamquam haec quidem praeposita recte et reiecta dicere licebit.</li>
	<li>Qui enim voluptatem ipsam contemnunt, iis licet dicere se acupenserem maenae non anteponere.</li>
	<li>Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum.</li>
	<li>Quodsi vultum tibi, si incessum fingeres, quo gravior viderere, non esses tui similis;</li>
	<li>Verba tu fingas et ea dicas, quae non sentias?</li>
	<li>Omnia peccata paria dicitis.</li>
</ul>


<p>Tum ille timide vel potius verecunde: Facio, inquit. Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. Quasi enim emendum eis sit, quod addant ad virtutem, primum vilissimas res addunt, dein singulas potius, quam omnia, quae prima natura approbavisset, ea cum honestate coniungerent. Cum enim summum bonum in voluptate ponat, negat infinito tempore aetatis voluptatem fieri maiorem quam finito atque modico. Nunc ita separantur, ut disiuncta sint, quo nihil potest esse perversius. <a href='http://loripsum.net/' target='_blank'>Ita credo.</a> Admirantes quaeramus ab utroque, quonam modo vitam agere possimus, si nihil interesse nostra putemus, valeamus aegrine simus, vacemus an cruciemur dolore, frigus, famem propulsare possimus necne possimus. Eam si varietatem diceres, intellegerem, ut etiam non dicente te intellego; Quis est autem dignus nomine hominis, qui unum diem totum velit esse in genere isto voluptatis? Voluptatem cum summum bonum diceret, primum in eo ipso parum vidit, deinde hoc quoque alienum; </p>

<blockquote cite='http://loripsum.net'>
	Animadverti, ínquam, te isto modo paulo ante ponere, et scio ab Antiocho nostro dici sic solere;
</blockquote>


<ul>
	<li>Intrandum est igitur in rerum naturam et penitus quid ea postulet pervidendum;</li>
	<li>Huic mori optimum esse propter desperationem sapientiae, illi propter spem vivere.</li>
	<li>Quamquam id quidem licebit iis existimare, qui legerint.</li>
	<li>Hoc non est positum in nostra actione.</li>
	<li>Igitur neque stultorum quisquam beatus neque sapientium non beatus.</li>
	<li>Conclusum est enim contra Cyrenaicos satis acute, nihil ad Epicurum.</li>
</ul>


<p>Nec enim, cum tua causa cui commodes, beneficium illud habendum est, sed faeneratio, nec gratia deberi videtur ei, qui sua causa commodaverit. Ad summam ea, quae Zeno aestimanda et sumenda et apta naturae esse dixit, eadem illi bona appellant, vitam autem beatam illi eam, quae constaret ex iis rebus, quas dixi, aut plurimis aut gravissimis. <i>Praeclare hoc quidem.</i> Id enim ille summum bonum eu)qumi/an et saepe a)qambi/an appellat, id est animum terrore liberum. Nec vero pietas adversus deos nec quanta iis gratia debeatur sine explicatione naturae intellegi potest. <b>Minime vero istorum quidem, inquit.</b> <a href='http://loripsum.net/' target='_blank'>At hoc in eo M.</a> Nam voluptatis causa facere omnia, cum, etiamsi nihil consequamur, tamen ipsum illud consilium ita faciendi per se expetendum et honestum et solum bonum sit, nemo dixit. In voluptate corporis-addam, si vis, animi, dum ea ipsa, ut vultis, sit e corpore-situm est vivere beate. <mark>Graece donan, Latine voluptatem vocant.</mark> </p>

<blockquote cite='http://loripsum.net'>
	Se omnia, quae secundum naturam sint, b o n a appellare, quae autem contra, m a l a.
</blockquote>


<p><a href='http://loripsum.net/' target='_blank'>Tuo vero id quidem, inquam, arbitratu.</a> Haec qui audierit, ut ridere non curet, discedet tamen nihilo firmior ad dolorem ferendum, quam venerat. <a href='http://loripsum.net/' target='_blank'>Quid ergo hoc loco intellegit honestum?</a> Quam quidem certationem homo et acutus et diligens, Chrysippus, non contemnit totumque discrimen summi boni in earum comparatione positum putat. <a href='http://loripsum.net/' target='_blank'>Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</a> <mark>Quae sequuntur igitur?</mark> Tum Piso: Atqui, Cicero, inquit, ista studia, si ad imitandos summos viros spectant, ingeniosorum sunt; <i>Nulla erit controversia.</i> </p>

<p>Quid autem sit, quod ita moveat itaque a natura in primo ortu appetatur, non constat deque eo est inter philosophos, cum summum bonum exquiritur, omnis dissensio. Ut, inquit, in fidibus pluribus, nisi nulla earum non ita contenta nervis sit, ut concentum servare possit, omnes aeque incontentae sint, sic peccata, quia discrepant, aeque discrepant; An ne hoc quidem Peripateticis concedis, ut dicant omnium bonorum virorum, id est sapientium omnibusque virtutibus ornatorum, vitam omnibus partibus plus habere semper boni quam mali? Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. Ita enim se Athenis collocavit, ut sit paene unus ex Atticis, ut id etiam cognomen videatur habiturus. <i>Sed haec nihil sane ad rem;</i> <a href='http://loripsum.net/' target='_blank'>Quid ait Aristoteles reliquique Platonis alumni?</a> Quaeque de virtutibus dicta sunt, quem ad modum eae semper voluptatibus inhaererent, eadem de amicitia dicenda sunt. </p>

<p>Qui haec didicerunt, quae ille contemnit, sic solent: Duo genera cupiditatum, naturales et inanes, naturalium duo, necessariae et non necessariae. Dum enim in una virtute sic omnia esse voluerunt, ut eam rerum selectione expoliarent nec ei quicquam, aut unde oriretur, darent, aut ubi niteretur, virtutem ipsam, quam amplexabantur, sustulerunt. <i>Sed ille, ut dixi, vitiose.</i> Conveniret, pluribus praeterea conscripsisset qui esset optimus rei publicae status, hoc amplius Theophrastus: quae essent in re publica rerum inclinationes et momenta temporum, quibus esset moderandum, utcumque res postularet. Cuius tanta tormenta sunt, ut in iis beata vita, si modo dolor summum malum est, esse non possit. Ex quo, id quod omnes expetunt, beate vivendi ratio inveniri et comparari potest. Tantus est igitur innatus in nobis cognitionis amor et scientiae, ut nemo dubitare possit quin ad eas res hominum natura nullo emolumento invitata rapiatur. Sed quanta sit alias, nunc tantum possitne esse tanta. Et quoniam excedens e vita et manens aeque miser est nec diuturnitas magis ei vitam fugiendam facit, non sine causa dicitur iis, qui pluribus naturalibus frui possint, esse in vita manendum. Nam qui valitudinem aestimatione aliqua dignam iudicamus neque eam tamen in bonis ponimus, idem censemus nullam esse tantam aestimationem, ut ea virtuti anteponatur. <i>An hoc usque quaque, aliter in vita?</i> Cum enim virtutis hoc proprium sit, earum rerum, quae secundum naturam sint, habere delectum, qui omnia sic exaequaverunt, ut in utramque partem ita paria redderent, uti nulla selectione uterentur, hi virtutem ipsam sustulerunt. </p>

<ol>
	<li>Summus dolor plures dies manere non potest?</li>
	<li>Paria sunt igitur.</li>
	<li>Quia, si mala sunt, is, qui erit in iis, beatus non erit.</li>
</ol>


<p><b>Stoici scilicet.</b> Ita finis bonorum existit secundum naturam vivere sic affectum, ut optime is affici possit ad naturamque accommodatissime. Atqui, inquam, Cato, si istud optinueris, traducas me ad te totum licebit. Reperiam multos, vel innumerabilis potius, non tam curiosos nec tam molestos, quam vos estis, quibus, quid velim, facile persuadeam. Dabit hoc Zenoni Polemo, etiam magister eius et tota illa gens et reliqui, qui virtutem omnibus rebus multo anteponentes adiungunt ei tamen aliquid summo in bono finiendo. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Quae dici eadem de ceteris virtutibus possunt, quarum omnium fundamenta vos in voluptate tamquam in aqua ponitis. Quem ad modum quis ambulet, sedeat, qui ductus oris, qui vultus in quoque sit? <a href='http://loripsum.net/' target='_blank'>Est enim effectrix multarum et magnarum voluptatum.</a> Cuius oratio attende, quaeso, Brute, satisne videatur Antiochi complexa esse sententiam, quam tibi, qui fratrem eius Aristum frequenter audieris, maxime probatam existimo. <a href='http://loripsum.net/' target='_blank'>Tria genera bonorum;</a> <a href='http://loripsum.net/' target='_blank'>Comprehensum, quod cognitum non habet?</a> <mark>Sed ego in hoc resisto;</mark> </p>

",
			'lesson_excerpt'       => 'This lesson is about fifth part',
			'lesson_order'         => '1'
		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Sixth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed certe opus est ea valere et vigere et naturales motus ususque habere, ut nec absit quid eorum nec aegrum debilitatumve sit; Hinc est illud exortum, quod Zeno prohgmšnon, contraque quod époprohgmšnon nominavit, cum uteretur in lingua copiosa factis tamen nominibus ac novis, quod nobis in hac inopi lingua non conceditur; Duo Reges: constructio interrete. <mark>Pugnant Stoici cum Peripateticis.</mark> <i>Ut aliquid scire se gaudeant?</i> <mark>Sed haec omittamus;</mark> Atqui perspicuum est hominem e corpore animoque constare, cum primae sint animi partes, secundae corporis. Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum. Philosophi autem in suis lectulis plerumque moriuntur. </p>

<ol>
	<li>Hic, qui utrumque probat, ambobus debuit uti, sicut facit re, neque tamen dividit verbis.</li>
	<li>Sine ea igitur iucunde negat posse se vivere?</li>
	<li>Huic mori optimum esse propter desperationem sapientiae, illi propter spem vivere.</li>
	<li>Quamquam tu hanc copiosiorem etiam soles dicere.</li>
</ol>


<p><mark>Quid, de quo nulla dissensio est?</mark> Sic igitur in homine perfectio ista in eo potissimum, quod est optimum, id est in virtute, laudatur. Hoc dictum in una re latissime patet, ut in omnibus factis re, non teste moveamur. Omnes enim iucundum motum, quo sensus hilaretur. Et hanc quidem primam exigam a te operam, ut audias me quae a te dicta sunt refellentem. Ut enim qui mortem in malis ponit non potest eam non timere, sic nemo ulla in re potest id, quod malum esse decreverit, non curare idque contemnere. Nam et ille apud Trabeam voluptatem animi nimiam laetitiam dicit eandem, quam ille Caecilianus, qui omnibus laetitiis laetum esse se narrat. Atque ut a corpore ordiar, videsne ut, si quae in membris prava aut debilitata aut inminuta sint, occultent homines? Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum. Ex quo illud efficitur, qui bene cenent omnis libenter cenare, qui libenter, non continuo bene. <b>Id est enim, de quo quaerimus.</b> Sin autem est in ea, quod quidam volunt, nihil impedit hanc nostram comprehensionem summi boni. </p>

<blockquote cite='http://loripsum.net'>
	Et si in ipsa gubernatione neglegentia est navis eversa, maius est peccatum in auro quam in palea.
</blockquote>


<dl>
	<dt><dfn>Beatum, inquit.</dfn></dt>
	<dd>Nam et a te perfici istam disputationem volo, nec tua mihi oratio longa videri potest.</dd>
	<dt><dfn>Erat enim Polemonis.</dfn></dt>
	<dd>Sin laboramus, quis est, qui alienae modum statuat industriae?</dd>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Hic quoque suus est de summoque bono dissentiens dici vere Peripateticus non potest.</dd>
</dl>


<ul>
	<li>Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat;</li>
	<li>Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus;</li>
	<li>Nec vero intermittunt aut admirationem earum rerum, quae sunt ab antiquis repertae, aut investigationem novarum.</li>
	<li>An vero displicuit ea, quae tributa est animi virtutibus tanta praestantia?</li>
	<li>Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt.</li>
</ul>


<p>At enim sequor utilitatem. Itaque non ob ea solum incommoda, quae eveniunt inprobis, fugiendam inprobitatem putamus, sed multo etiam magis, quod, cuius in animo versatur, numquam sinit eum respirare, numquam adquiescere. De illis, cum volemus. Laboribus hic praeteritis gaudet, tu iubes voluptatibus, et hic se ad ea revocat, e quibus nihil umquam rettulerit ad corpus, tu totus haeres in corpore. <i>Equidem e Cn.</i> E quo efficitur, non ut nos non intellegamus quae vis sit istius verbi, sed ut ille suo more loquatur, nostrum neglegat. <a href='http://loripsum.net/' target='_blank'>Sedulo, inquam, faciam.</a> Tum ego: Non mehercule, inquam, soleo temere contra Stoicos, non quo illis admodum assentiar, sed pudore impedior; Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. In omni autem honesto, de quo loquimur, nihil est tam illustre nec quod latius pateat quam coniunctio inter homines hominum et quasi quaedam societas et communicatio utilitatum et ipsa caritas generis humani. </p>

<p><b>Oratio me istius philosophi non offendit;</b> Ex ea quae sint apta, ea bonesta, ea pulchra, ea laudabilia, illa autem superiora naturale nominantur, quae coniuncta cum honestis vitam beatam perficiunt et absolvunt. Completur enim et ex eo genere vitae, quod virtute fruitur, et ex iis rebus, quae sunt secundum naturam neque sunt in nostra potestate. <i>In schola desinis.</i> Te enim iudicem aequum puto, modo quae dicat ille bene noris. Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt. Decius, princeps in ea familia consulatus, cum se devoverat et equo admisso in mediam aciem Latinorum irruebat, aliquid de voluptatibus suis cogitabat? Et tamen quid attinet luxuriosis ullam exceptionem dari aut fingere aliquos, qui, cum luxuriose viverent, a summo philosopho non reprehenderentur eo nomine dumtaxat, cetera caverent? Nulla profecto est, quin suam vim retineat a primo ad extremum. Necesseque est, si quis sibi ipsi inimicus est, eum quae bona sunt mala putare, bona contra quae mala, et quae appetenda fugere, quae fugienda appetere, quae sine dubio vitae est eversio. Videamus animi partes, quarum est conspectus illustrior; Cui vero in voluptate summum bonum est, huic omnia sensu, non ratione sunt iudicanda, eaque dicenda optima, quae sint suavissima. Nam cum Academicis incerta luctatio est, qui nihil affirmant et quasi desperata cognitione certi id sequi volunt, quodcumque veri simile videatur. Quodsi non hominis summum bonum quaeremus, sed cuiusdam animantis, is autem esset nihil nisi animus liceat enim fingere aliquid eiusmodi, quo verum facilius reperiamus -, tamen illi animo non esset hic vester finis. </p>

",
			'lesson_excerpt'       => 'This lesson is about sixth part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bacillum aliud est inflexum et incurvatum de industria, aliud ita natum, sic ferarum natura non est illa quidem depravata mala disciplina, sed natura sua. <i>Honesta oratio, Socratica, Platonis etiam.</i> Duo Reges: constructio interrete. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Serpere anguiculos, nare anaticulas, evolare merulas, cornibus uti videmus boves, nepas aculeis. Haec ego non possum dicere non esse hominis quamvis et belli et humani, sapientis vero nullo modo, physici praesertim, quem se ille esse vult, putare ullum esse cuiusquam diem natalem. Ut, inquit, in fidibus pluribus, nisi nulla earum non ita contenta nervis sit, ut concentum servare possit, omnes aeque incontentae sint, sic peccata, quia discrepant, aeque discrepant; Is enim, qui occultus et tectus dicitur, tantum abest ut se indicet, perficiet etiam ut dolere alterius improbe facto videatur. <mark>Hic ambiguo ludimur.</mark> <a href='http://loripsum.net/' target='_blank'>Et quidem, inquit, vehementer errat;</a> Bonum ipsum etiam quid esset, fortasse, si opus fuisset, definisses aut quod esset natura adpetendum aut quod prodesset aut quod iuvaret aut quod liberet modo. Id enim ille summum bonum eu)qumi/an et saepe a)qambi/an appellat, id est animum terrore liberum. <i>Videsne, ut haec concinant?</i> <a href='http://loripsum.net/' target='_blank'>Idemne, quod iucunde?</a> Se dicere inter honestum et turpe nimium quantum, nescio quid inmensum, inter ceteras res nihil omnino interesse. Nihilne est in his rebus, quod dignum libero aut indignum esse ducamus? At vero Epicurus una in domo, et ea quidem angusta, quam magnos quantaque amoris conspiratione consentientis tenuit amicorum greges! quod fit etiam nunc ab Epicureis. Ut ei, qui iucunde vixerit annos decem, si aeque vita iucunda menstrua addatur, quia momentum aliquod habeat ad iucundum accessio, bonum sit; Quae similitudo in genere etiam humano apparet. </p>

<ul>
	<li>Duarum enim vitarum nobis erunt instituta capienda.</li>
	<li>Semper enim ita adsumit aliquid, ut ea, quae prima dederit, non deserat.</li>
	<li>Nam Metrodorum non puto ipsum professum, sed, cum appellaretur ab Epicuro, repudiare tantum beneficium noluisse;</li>
	<li>Quis est enim, in quo sit cupiditas, quin recte cupidus dici possit?</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Illa sunt similia: hebes acies est cuipiam oculorum, corpore alius senescit;
</blockquote>


<p><b>Hunc vos beatum;</b> <a href='http://loripsum.net/' target='_blank'>Graece donan, Latine voluptatem vocant.</a> Ergo infelix una molestia, fellx rursus, cum is ipse anulus in praecordiis piscis inventus est? Quid, si efficio ut fateare me non modo quid sit voluptas scire-est enim iucundus motus in sensu-, sed etiam quid eam tu velis esse? <i>Praeteritis, inquit, gaudeo.</i> Quo modo igitur evenit, ut hominis natura sola esset, quae hominem relinqueret, quali oblivisceretur corporis, quae summum bonum non in toto homine, sed in parte hominis poneret? <mark>Tu quidem reddes;</mark> <b>Praeteritis, inquit, gaudeo.</b> </p>

<dl>
	<dt><dfn>Videsne, ut haec concinant?</dfn></dt>
	<dd>Quo plebiscito decreta a senatu est consuli quaestio Cn.</dd>
	<dt><dfn>Nihilo magis.</dfn></dt>
	<dd>Quod autem ratione actum est, id officium appellamus.</dd>
	<dt><dfn>Immo videri fortasse.</dfn></dt>
	<dd>Ita relinquet duas, de quibus etiam atque etiam consideret.</dd>
	<dt><dfn>ALIO MODO.</dfn></dt>
	<dd>Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus;</dd>
	<dt><dfn>Magna laus.</dfn></dt>
	<dd>Sed fac ista esse non inportuna;</dd>
	<dt><dfn>Erat enim Polemonis.</dfn></dt>
	<dd>Quare attendo te studiose et, quaecumque rebus iis, de quibus hic sermo est, nomina inponis, memoriae mando;</dd>
	<dt><dfn>Immo alio genere;</dfn></dt>
	<dd>Sed ego in hoc resisto;</dd>
</dl>


<p>Tecum optime, deinde etiam cum mediocri amico. <i>Bonum incolumis acies: misera caecitas.</i> Sapiens autem semper beatus est et est aliquando in dolore; <b>Quid ergo?</b> Rem videlicet difficilem et obscuram! individua cum dicitis et intermundia, quae nec sunt ulla nec possunt esse, intellegimus, voluptas, quae passeribus omnibus nota est, a nobis intellegi non potest? Admirantes quaeramus ab utroque, quonam modo vitam agere possimus, si nihil interesse nostra putemus, valeamus aegrine simus, vacemus an cruciemur dolore, frigus, famem propulsare possimus necne possimus. Sic est igitur locutus: Quantus ornatus in Peripateticorum disciplina sit satis est a me, ut brevissime potuit, paulo ante dictum. Ergo in iis adolescentibus bonam spem esse dicemus et magnam indolem, quos suis commodis inservituros et quicquid ipsis expediat facturos arbitrabimur? Neque enim disputari sine reprehensione nec cum iracundia aut pertinacia recte disputari potest. <b>Eadem fortitudinis ratio reperietur.</b> Sed hoc interest, quod voluptas dicitur etiam in animo-vitiosa res, ut Stoici putant, qui eam sic definiunt: sublationem animi sine ratione opinantis se magno bono frui-, non dicitur laetitia nec gaudium in corpore. <a href='http://loripsum.net/' target='_blank'>Si quidem, inquit, tollerem, sed relinquo.</a> Et hanc quidem primam exigam a te operam, ut audias me quae a te dicta sunt refellentem. </p>

<p>Quam ob rem tandem, inquit, non satisfacit? Minime vero probatur huic disciplinae, de qua loquor, aut iustitiam aut amicitiam propter utilitates adscisci aut probari. Non potes ergo ista tueri, Torquate, mihi crede, si te ipse et tuas cogitationes et studia perspexeris; Sin est etiam corpus, ista explanatio naturae nempe hoc effecerit, ut ea, quae ante explanationem tenebamus, relinquamus. Quae enim constituta sunt prima naturae, ad ea si voluptas accesserit, unum aliquod accesserit commodum corporis neque eam constitutionem summi boni, quae est proposta, mutaverit. Posuisti etiam dicere alios foedus quoddam inter se facere sapientis, ut, quem ad modum sint in se ipsos animati, eodem modo sint erga amicos; Mihi autem nihil tam perspicuum videtur, quam has sententias eorum philosophorum re inter se magis quam verbis dissidere; Nam ex his tribus laudibus, quas ante dixi, et temeritatem reformidat et non audet cuiquam aut dicto protervo aut facto nocere vereturque quicquam aut facere aut eloqui, quod parum virile videatur. Itaque non discedit ab eorum curatione, quibus praeposita vitam omnem debet gubernare, ut mirari satis istorum inconstantiam non possim. Etenim, si et sapere expetendum sit et valere, coniunctum utrumque magis expetendum sit quam sapere solum, neque tamen, si utrumque sit aestimatione dignum, pluris sit coniunctum quam sapere ipsum separatim. <a href='http://loripsum.net/' target='_blank'>Certe, nisi voluptatem tanti aestimaretis.</a> Nemo enim est, qui aliter dixerit quin omnium naturarum simile esset id, ad quod omnia referrentur, quod est ultimum rerum appetendarum. Quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit? <b>Quis enim redargueret?</b> <mark>Et quidem, inquit, vehementer errat;</mark> Completur enim et ex eo genere vitae, quod virtute fruitur, et ex iis rebus, quae sunt secundum naturam neque sunt in nostra potestate. </p>

<ol>
	<li>Quod quidem nobis non saepe contingit.</li>
	<li>Quamquam te quidem video minime esse deterritum.</li>
</ol>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '4'

		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque enim in aliqua parte, sed in perpetuitate temporis vita beata dici solet, nec appellatur omnino vita, nisi confecta atque absoluta, nec potest quisquam alias beatus esse, alias miser; Quippe, inquieta cum tam docuerim gradus istam rem non habere quam virtutem, in qua sit ipsum etíam beatum. Quod si ita se habeat, non possit beatam praestare vitam sapientia. Quae quod Aristoni et Pyrrhoni omnino visa sunt pro nihilo, ut inter optime valere et gravissime aegrotare nihil prorsus dicerent interesse, recte iam pridem contra eos desitum est disputari. <mark>Duo Reges: constructio interrete.</mark> <b>Oratio me istius philosophi non offendit;</b> Non quaero, quid dicat, sed quid convenienter possit rationi et sententiae suae dicere. Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere. </p>

<ol>
	<li>In voluptate corporis-addam, si vis, animi, dum ea ipsa, ut vultis, sit e corpore-situm est vivere beate.</li>
	<li>Neque enim disputari sine reprehensione nec cum iracundia aut pertinacia recte disputari potest.</li>
	<li>Atqui perspicuum est hominem e corpore animoque constare, cum primae sint animi partes, secundae corporis.</li>
	<li>Stuprata per vim Lucretia a regis filio testata civis se ipsa interemit.</li>
</ol>


<p>Itaque sensibus rationem adiunxit et ratione effecta sensus non reliquit. Mihi enim erit isdem istis fortasse iam utendum. <mark>Erat enim Polemonis.</mark> <mark>Scrupulum, inquam, abeunti;</mark> Quod enim vituperabile est per se ipsum, id eo ipso vitium nominatum puto, vel etiam a vitio dictum vituperari. Tu autem inter haec tantam multitudinem hominum interiectam non vides nec laetantium nec dolentium? <a href='http://loripsum.net/' target='_blank'>Tu vero, inquam, ducas licet, si sequetur;</a> Ergo in eadem voluptate eum, qui alteri misceat mulsum ipse non sitiens, et eum, qui illud sitiens bibat? Ita fit illa conclusio non solum vera, sed ita perspicua, ut dialectici ne rationem quidem reddi putent oportere: si illud, hoc; <mark>Quis negat?</mark> Epicurus autem cum in prima commendatione voluptatem dixisset, si eam, quam Aristippus, idem tenere debuit ultimum bonorum, quod ille; <b>Quare attende, quaeso.</b> </p>

<blockquote cite='http://loripsum.net'>
	Nunc omni virtuti vitium contrario nomine opponitur.
</blockquote>


<p><a href='http://loripsum.net/' target='_blank'>Bonum incolumis acies: misera caecitas.</a> Tuberonem de dolore patiendo scriberet, quod esse caput debebat, si probari posset, nusquam posuit, non esse malum dolorem, sed quid esset et quale, quantumque in eo inesset alieni, deinde quae ratio esset perferendi; Ex quo, id quod omnes expetunt, beate vivendi ratio inveniri et comparari potest. Me igitur ipsum ames oportet, non mea, si veri amici futuri sumus. Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant? Quae enim constituta sunt prima naturae, ad ea si voluptas accesserit, unum aliquod accesserit commodum corporis neque eam constitutionem summi boni, quae est proposta, mutaverit. Totius enim quaestionis eius, quae habetur de finibus bonorum et malorum, cum quaeritur, in his quid sít extremum et ultimum, fons reperiendus est, in quo sint prima invitamenta naturae; Sic exclusis sententiis reliquorum cum praeterea nulla esse possit, haec antiquorum valeat necesse est. Iure igitur gravissimi philosophi initium summi boni a natura petiverunt et illum appetitum rerum ad naturam accommodatarum ingeneratum putaverunt omnibus, quia continentur ea commendatione naturae, qua se ipsi diligunt. Est enim mihi magnae curae-quamquam hoc quidem proprium tuum munus est-, ut ita erudiatur, ut et patri et Caepioni nostro et tibi tam propinquo respondeat. Alterum autem genus est magnarum verarumque virtutum, quas appellamus voluntarias, ut prudentiam, temperantiam, fortitudinem, iustitiam et reliquas eiusdem generis. Amicitiam autem adhibendam esse censent, quia sit ex eo genere, quae prosunt. <mark>Scrupulum, inquam, abeunti;</mark> Honestum igitur id intellegimus, quod tale est, ut detracta omni utilitate sine ullis praemiis fructibusve per se ipsum possit iure laudari. Nam illud vehementer repugnat, eundem beatum esse et multis malis oppressum. </p>

<dl>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Certe nihil nisi quod possit ipsum propter se iure laudari.</dd>
	<dt><dfn>Falli igitur possumus.</dfn></dt>
	<dd>Qui autem diffidet perpetuitati bonorum suorum, timeat necesse est, ne aliquando amissis illis sit miser.</dd>
	<dt><dfn>Stoici scilicet.</dfn></dt>
	<dd>Ne in odium veniam, si amicum destitero tueri.</dd>
	<dt><dfn>Proclivi currit oratio.</dfn></dt>
	<dd>Haec dicuntur inconstantissime.</dd>
</dl>


<ul>
	<li>Haec et tu ita posuisti, et verba vestra sunt.</li>
	<li>Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere.</li>
	<li>Nam Pyrrho, Aristo, Erillus iam diu abiecti.</li>
	<li>Sed utrum hortandus es nobis, Luci, inquit, an etiam tua sponte propensus es?</li>
</ul>


<p>Tum Piso: Atqui, Cicero, inquit, ista studia, si ad imitandos summos viros spectant, ingeniosorum sunt; <b>Hos contra singulos dici est melius.</b> <b>Haec quo modo conveniant, non sane intellego.</b> Quod nisi ita efficitur, quae Theophrastus de fortuna, de dolore, de cruciatu corporis dixit, cum quibus coniungi vitam beatam nullo modo posse putavit, vereor, ne vera sint. Nec vero pietas adversus deos nec quanta iis gratia debeatur sine explicatione naturae intellegi potest. Quae est enim, quae se umquam deserat aut partem aliquam sui aut eius partis habitum aut vini aut ullius earum rerum, quae secundum naturam sunt, aut motum aut statum? Quorum omnium quae sint notitiae, quae quidem significentur rerum vocabulis, quaeque cuiusque vis et natura sit mox videbimus. Cum sciret confestim esse moriendum eamque mortem ardentiore studio peteret, quam Epicurus voluptatem petendam putat. In homine autem summa omnis animi est et in animo rationis, ex qua virtus est, quae rationis absolutio definitur, quam etiam atque etiam explicandam putant. Est enim mihi magnae curae-quamquam hoc quidem proprium tuum munus est-, ut ita erudiatur, ut et patri et Caepioni nostro et tibi tam propinquo respondeat. Itaque ne iustitiam quidem recte quis dixerit per se ipsam optabilem, sed quia iucunditatis vel plurimum afferat. Si est nihil in eo, quod perficiendum est, praeter motum ingenii quendam, id est rationem, necesse est huic ultimum esse virtute agere; <b>Respondent extrema primis, media utrisque, omnia omnibus.</b> </p>

",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '5'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est autem a te semper dictum nec gaudere quemquam nisi propter corpus nec dolere. Quod idem Peripatetici non tenent, quibus dicendum est, quae et honesta actio sit et sine dolore, eam magis esse expetendam, quam si esset eadem actio cum dolore. <a href='http://loripsum.net/' target='_blank'>Igitur ne dolorem quidem.</a> <i>Age sane, inquam.</i> Ex quo intellegitur, quoniam se ipsi omnes natura diligant, tam insipientem quam sapientem sumpturum, quae secundum naturam sint, reiecturumque contraria. Cum autem hominem in eo genere posuisset, ut ei tribueret animi excellentiam, summum bonum id constituit, non ut excelleret animus, sed ut nihil esse praeter animum videretur. Obscura, inquit, quaedam esse confiteor, nec tamen ab illis ita dicuntur de industria, sed inest in rebus ipsis obscuritas. Duo Reges: constructio interrete. </p>

<ul>
	<li>Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt.</li>
	<li>Non est igitur voluptas bonum.</li>
	<li>Bonum integritas corporis: misera debilitas.</li>
	<li>Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus;</li>
</ul>


<dl>
	<dt><dfn>Efficiens dici potest.</dfn></dt>
	<dd>Possumusne ergo in vita summum bonum dicere, cum id ne in cena quidem posse videamur?</dd>
	<dt><dfn>Scaevolam M.</dfn></dt>
	<dd>Compensabatur, inquit, cum summis doloribus laetitia.</dd>
	<dt><dfn>Quis enim redargueret?</dfn></dt>
	<dd>Dicam, inquam, et quidem discendi causa magis, quam quo te aut Epicurum reprehensum velim.</dd>
	<dt><dfn>Magna laus.</dfn></dt>
	<dd>Minime vero, inquit ille, consentit.</dd>
	<dt><dfn>Numquam facies.</dfn></dt>
	<dd>Videmus in quodam volucrium genere non nulla indicia pietatis, cognitionem, memoriam, in multis etiam desideria videmus.</dd>
</dl>


<p>Dixerit hoc idem Epicurus, semper beatum esse sapientem-quod quidem solet ebullire non numquam -, quem quidem, cum summis doloribus conficiatur, ait dicturum: Quam suave est! quam nihil curo!; Primum non saepe, deinde quae est ista relaxatio, cum et praeteriti doloris memoria recens est et futuri atque inpendentis torquet timor? <a href='http://loripsum.net/' target='_blank'>Tum Triarius: Posthac quidem, inquit, audacius.</a> Hunc ipsum Zenonis aiunt esse finem declarantem illud, quod a te dictum est, convenienter naturae vivere. Et ille ridens: Video, inquit, quid agas; Critolaus imitari voluit antiquos, et quidem est gravitate proximus, et redundat oratio, ac tamen is quidem in patriis institutis manet. <a href='http://loripsum.net/' target='_blank'>Quonam, inquit, modo?</a> </p>

<p>Si de re disceptari oportet, nulla mihi tecum, Cato, potest esse dissensio. <b>Tum ille: Ain tandem?</b> Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos. <i>Paria sunt igitur.</i> <b>An tu me de L.</b> Quae quidem res efficit, ne necesse sit isdem de rebus semper quasi dictata decantare neque a commentariolis suis discedere. In primo enim ortu inest teneritas ac mollitia quaedam, ut nec res videre optimas nec agere possint. Non enim, si malum est dolor, carere eo malo satis est ad bene vivendum. Quo studio cum satiari non possint, omnium ceterarum rerum obliti níhil abiectum, nihil humile cogitant; </p>

<ol>
	<li>Tantum dico, magis fuisse vestrum agere Epicuri diem natalem, quam illius testamento cavere ut ageretur.</li>
	<li>Collatio igitur ista te nihil iuvat.</li>
	<li>Quod autem ratione actum est, id officium appellamus.</li>
	<li>Illud dico, ea, quae dicat, praeclare inter se cohaerere.</li>
	<li>Ut in geometria, prima si dederis, danda sunt omnia.</li>
	<li>Qui non moveatur et offensione turpitudinis et comprobatione honestatis?</li>
</ol>


<p>Quod quidem pluris est haud paulo magisque ipsum propter se expetendum quam aut sensus aut corporis ea, quae diximus, quibus tantum praestat mentis excellens perfectio, ut vix cogitari possit quid intersit. <a href='http://loripsum.net/' target='_blank'>Itaque his sapiens semper vacabit.</a> Ego autem tibi, Piso, assentior usu hoc venire, ut acrius aliquanto et attentius de claris viris locorum admonitu cogitemus. <b>Num quid tale Democritus?</b> Videmus in quodam volucrium genere non nulla indicia pietatis, cognitionem, memoriam, in multis etiam desideria videmus. Qui enim existimabit posse se miserum esse beatus non erit. Tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua distinguantur ostendit; <a href='http://loripsum.net/' target='_blank'>Stoicos roga.</a> <b>Nihil illinc huc pervenit.</b> <mark>Haec dicuntur inconstantissime.</mark> Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P. Vide ne ista sint Manliana vestra aut maiora etiam, si imperes quod facere non possim. Quos ille, di inmortales, cum omnes artus ardere viderentur, cruciatus perferebat! nec tamen miser esse, quia summum id malum non erat, tantum modo laboriosus videbatur; Et quae per vim oblatum stuprum volontaria morte lueret inventa est et qui interficeret filiam, ne stupraretur. Faceres tu quidem, Torquate, haec omnia; Cum autem hominem in eo genere posuisset, ut ei tribueret animi excellentiam, summum bonum id constituit, non ut excelleret animus, sed ut nihil esse praeter animum videretur. </p>

<blockquote cite='http://loripsum.net'>
	Cum enim summum bonum in voluptate ponat, negat infinito tempore aetatis voluptatem fieri maiorem quam finito atque modico.
</blockquote>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '1'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid autem est amare, e quo nomen ductum amicitiae est, nisi velle bonis aliquem affici quam maximis, etiamsi ad se ex iis nihil redundet? Sed si duo honesta proposita sint, alterum cum valitudine, alterum cum morbo, non esse dubium, ad utrum eorum natura nos ipsa deductura sit. Quae si a vobis talia dicerentur, qualibus Caius Marius uti poterat, ut expulsus, egens, in palude demersus tropaeorum recordatione levaret dolorem suum, audirem et plane probarem. Etenim, cum omnes natura totos se expetendos putent, nec id ob aliam rem, sed propter ipsos, necesse est eius etiam partis propter se expeti, quod universum propter se expetatur. Duo Reges: constructio interrete. Officium, aequitatem, dignitatem, fidem, recta, honesta, digna imperio, digna populo Romano, omnia pericula pro re publica, mori pro patria, haec cum loqueris, nos barones stupemus, tu videlicet tecum ipse rides. <a href='http://loripsum.net/' target='_blank'>Scrupulum, inquam, abeunti;</a> <i>Age, inquies, ista parva sunt.</i> Iam argumenti ratione conclusi caput esse faciunt ea, quae perspicua dicunt, deinde ordinem sequuntur, tum, quid verum sit in singulis, extrema conclusio est. Aequam igitur pronuntiabit sententiam ratio adhibita primum divinarum humanarumque rerum scientia, quae potest appellari rite sapientia, deinde adiunctis virtutibus, quas ratio rerum omnium dominas, tu voluptatum satellites et ministras esse voluisti. <a href='http://loripsum.net/' target='_blank'>Inde igitur, inquit, ordiendum est.</a> <a href='http://loripsum.net/' target='_blank'>Bonum patria: miserum exilium.</a> Quo posito et omnium adsensu adprobato illud adsumitur, eum, qui magno sit animo atque forti, omnia, quae cadere in hominem possint, despicere ac pro nihilo putare. Si enim idem dicit, quod Hieronymus, qui censet summum bonum esse sine ulla molestia vivere, cur mavult dicere voluptatem quam vacuitatem doloris, ut ille facit, qui quid dicat intellegit? </p>

<ol>
	<li>Verba tu fingas et ea dicas, quae non sentias?</li>
	<li>Quid turpius quam sapientis vitam ex insipientium sermone pendere?</li>
	<li>Cum autem in quo sapienter dicimus, id a primo rectissime dicitur.</li>
	<li>Eaedem enim utilitates poterunt eas labefactare atque pervertere.</li>
	<li>Aperiendum est igitur, quid sit voluptas;</li>
	<li>Qui enim voluptatem ipsam contemnunt, iis licet dicere se acupenserem maenae non anteponere.</li>
</ol>


<ul>
	<li>Nam si beatus umquam fuisset, beatam vitam usque ad illum a Cyro extructum rogum pertulisset.</li>
	<li>Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</li>
	<li>Quis enim potest istis, quae te, ut ais, delectant, brevibus et acutis auditis de sententia decedere?</li>
	<li>Morbo gravissimo affectus, exul, orbus, egens, torqueatur eculeo: quem hunc appellas, Zeno?</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Quam haec sunt contraria! hic si definire, si dividere didicisset, si loquendi vim, si denique consuetudinem verborum teneret, numquam in tantas salebras incidisset.
</blockquote>


<p><i>Ita prorsus, inquam;</i> Ut iam liceat una comprehensione omnia complecti non dubitantemque dicere omnem naturam esse servatricem sui idque habere propositum quasi finem et extremum, se ut custodiat quam in optimo sui generis statu; Ut, inquit, in fidibus pluribus, nisi nulla earum non ita contenta nervis sit, ut concentum servare possit, omnes aeque incontentae sint, sic peccata, quia discrepant, aeque discrepant; Quocumque enim modo summum bonum sic exponitur, ut id vacet honestate, nec officia nec virtutes in ea ratione nec amicitiae constare possunt. Itaque prima illa commendatio, quae a natura nostri facta est nobis, incerta et obscura est, primusque appetitus ille animi tantum agit, ut salvi atque integri esse possimus. Quod idem Peripatetici non tenent, quibus dicendum est, quae et honesta actio sit et sine dolore, eam magis esse expetendam, quam si esset eadem actio cum dolore. Natura sic ab iis investigata est, ut nulla pars caelo, mari, terra, ut poëtice loquar, praetermissa sit; Itaque omnis honos, omnis admiratio, omne studium ad virtutem et ad eas actiones, quae virtuti sunt consentaneae, refertur, eaque omnia, quae aut ita in animis sunt aut ita geruntur, uno nomine honesta dicuntur. Haec ego non possum dicere non esse hominis quamvis et belli et humani, sapientis vero nullo modo, physici praesertim, quem se ille esse vult, putare ullum esse cuiusquam diem natalem. Ne tu, inquam, Cato, verbis illustribus et id, quod vis, declarantibus! itaque mihi videris Latine docere philosophiam et ei quasi civitatem dare. Perfecto enim et concluso neque virtutibus neque amicitiis usquam locum esse, si ad voluptatem omnia referantur, nihil praeterea est magnopere dicendum. </p>

<p><a href='http://loripsum.net/' target='_blank'>Quid ergo hoc loco intellegit honestum?</a> Video equidem, inquam, sed tamen iam infici debet iis artibus, quas si, dum est tener, conbiberit, ad maiora veniet paratior. Simul atque natum animal est, gaudet voluptate et eam appetit ut bonum, aspernatur dolorem ut malum. <i>Si quae forte-possumus.</i> <a href='http://loripsum.net/' target='_blank'>Sint modo partes vitae beatae.</a> <a href='http://loripsum.net/' target='_blank'>Tamen a proposito, inquam, aberramus.</a> <i>Quid igitur, inquit, eos responsuros putas?</i> </p>

<p>Non potes ergo ista tueri, Torquate, mihi crede, si te ipse et tuas cogitationes et studia perspexeris; Sin te auctoritas commovebat, nobisne omnibus et Platoni ipsi nescio quem illum anteponebas? Sin est etiam corpus, ista explanatio naturae nempe hoc effecerit, ut ea, quae ante explanationem tenebamus, relinquamus. Modo etiam paulum ad dexteram de via declinavi, ut ad Pericli sepulcrum accederem. Vobis autem, quibus nihil est aliud propositum nisi rectum atque honestum, unde officii, unde agendi principlum nascatur non reperietis. <i>Quid ad utilitatem tantae pecuniae?</i> An vero displicuit ea, quae tributa est animi virtutibus tanta praestantia? De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. </p>

<dl>
	<dt><dfn>Sullae consulatum?</dfn></dt>
	<dd>Sed ad haec, nisi molestum est, habeo quae velim.</dd>
	<dt><dfn>Hic ambiguo ludimur.</dfn></dt>
	<dd>Quod vestri quidem vel optime disputant, nihil opus esse eum, qui philosophus futurus sit, scire litteras.</dd>
	<dt><dfn>Recte dicis;</dfn></dt>
	<dd>Si de re disceptari oportet, nulla mihi tecum, Cato, potest esse dissensio.</dd>
	<dt><dfn>Quo modo?</dfn></dt>
	<dd>Quid enim de amicitia statueris utilitatis causa expetenda vides.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '2'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo igitur, inquies, verum esse poterit omnia referri ad summum bonum, si amicítiae, si propinquitates, si reliqua externa summo bono non continentur? Nulla profecto est, quin suam vim retineat a primo ad extremum. <mark>Minime vero, inquit ille, consentit.</mark> Duo Reges: constructio interrete. <b>Primum divisit ineleganter;</b> Ut necesse sit omnium rerum, quae natura vigeant, similem esse finem, non eundem. Ac tamen, ne cui loco non videatur esse responsum, pauca etiam nunc dicam ad reliquam orationem tuam. Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos. <a href='http://loripsum.net/' target='_blank'>Sullae consulatum?</a> <mark>Sed haec nihil sane ad rem;</mark> </p>

<dl>
	<dt><dfn>Si longus, levis.</dfn></dt>
	<dd>At ille pellit, qui permulcet sensum voluptate.</dd>
	<dt><dfn>Si longus, levis;</dfn></dt>
	<dd>Hoc ipsum elegantius poni meliusque potuit.</dd>
	<dt><dfn>ALIO MODO.</dfn></dt>
	<dd>An dolor longissimus quisque miserrimus, voluptatem non optabiliorem diuturnitas facit?</dd>
	<dt><dfn>Quid de Pythagora?</dfn></dt>
	<dd>Ergo hoc quidem apparet, nos ad agendum esse natos.</dd>
</dl>


<blockquote cite='http://loripsum.net'>
	Nam cum Academicis incerta luctatio est, qui nihil affirmant et quasi desperata cognitione certi id sequi volunt, quodcumque veri simile videatur.
</blockquote>


<ul>
	<li>Quod autem principium officii quaerunt, melius quam Pyrrho;</li>
	<li>Satis est tibi in te, satis in legibus, satis in mediocribus amicitiis praesidii.</li>
	<li>Piso igitur hoc modo, vir optimus tuique, ut scis, amantissimus.</li>
	<li>Quorum altera prosunt, nocent altera.</li>
</ul>


<ol>
	<li>Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est.</li>
	<li>Ea possunt paria non esse.</li>
	<li>Compensabatur, inquit, cum summis doloribus laetitia.</li>
	<li>Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt.</li>
	<li>Hic quoque suus est de summoque bono dissentiens dici vere Peripateticus non potest.</li>
</ol>


<p>Quid autem apertius quam, si selectio nulla sit ab iis rebus, quae contra naturam sint, earum rerum, quae sint secundum naturam, fore ut tollatur omnis ea, quae quaeratur laudeturque, prudentia? Honestum igitur id intellegimus, quod tale est, ut detracta omni utilitate sine ullis praemiis fructibusve per se ipsum possit iure laudari. Hominum non spinas vellentium, ut Stoici, nec ossa nudantium, sed eorum, qui grandia ornate vellent, enucleate minora dicere. Quam ob rem utique idem faciunt, ut si laevam partem neglegerent, dexteram tuerentur, aut ipsius animi, ut fecit Erillus, cognitionem amplexarentur, actionem relinquerent. Est enim aliquid in his rebus probabile, et quidem ita, ut eius ratio reddi possit, ergo ut etiam probabiliter acti ratio reddi possit. Quare, quoniam de primis naturae commodis satis dietum est nunc de maioribus consequentibusque videamus. <a href='http://loripsum.net/' target='_blank'>Quid iudicant sensus?</a> <b>Proclivi currit oratio.</b> Quam ob rem utique idem faciunt, ut si laevam partem neglegerent, dexteram tuerentur, aut ipsius animi, ut fecit Erillus, cognitionem amplexarentur, actionem relinquerent. Quodsi Graeci leguntur a Graecis isdem de rebus alia ratione compositis, quid est, cur nostri a nostris non legantur? Sin est etiam corpus, ista explanatio naturae nempe hoc effecerit, ut ea, quae ante explanationem tenebamus, relinquamus. <i>Invidiosum nomen est, infame, suspectum.</i> Commoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus; <mark>Certe non potest.</mark> Quia dolori non voluptas contraria est, sed doloris privatio. Addo etiam illud, multa iam mihi dare signa puerum et pudoris et ingenii, sed aetatem vides. Qui mos cum a posterioribus non esset retentus, Arcesilas eum revocavit instituitque ut ii, qui se audire vellent, non de se quaererent, sed ipsi dicerent, quid sentirent; Quod et posse fieri intellegimus et saepe etiam videmus, et perspicuum est nihil ad iucunde vivendum reperiri posse, quod coniunctione tali sit aptius. </p>

<p><a href='http://loripsum.net/' target='_blank'>Nulla erit controversia.</a> Sic exclusis sententiis reliquorum cum praeterea nulla esse possit, haec antiquorum valeat necesse est. <i>Sed haec omittamus;</i> Quoniamque non dubium est quin in iis, quae media dicimus, sit aliud sumendum, aliud reiciendum, quicquid ita fit aut dicitur, omne officio continetur. <a href='http://loripsum.net/' target='_blank'>In schola desinis.</a> Hic Speusippus, hic Xenocrates, hic eius auditor Polemo, cuius illa ipsa sessio fuit, quam videmus. Quamquam ex omnibus philosophis Stoici plurima novaverunt, Zenoque, eorum princeps, non tam rerum inventor fuit quam verborum novorum. E quo efficitur, non ut nos non intellegamus quae vis sit istius verbi, sed ut ille suo more loquatur, nostrum neglegat. Et qui ipsi sibi bellum indixissent, cruciari dies, noctes torqueri vellent, nec vero sese ipsi accusarent ob eam causam, quod se male suis rebus consuluisse dicerent. Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? Sed tamen nonne reprehenderes, Epicure, luxuriosos ob eam ipsam causam, quod ita viverent, ut persequerentur cuiusque modi voluptates, cum esset praesertim, ut ais tu, summa voluptas nihil dolere? Nam interdum nimis etiam novit, quippe qui testificetur ne intellegere quidem se posse ubi sit aut quod sit ullum bonum praeter illud, quod cibo et potione et aurium delectatione et obscena voluptate capiatur. <a href='http://loripsum.net/' target='_blank'>Erat enim res aperta.</a> Ex quo intellegitur, quoniam se ipsi omnes natura diligant, tam insipientem quam sapientem sumpturum, quae secundum naturam sint, reiecturumque contraria. Totum genus hoc Zeno et qui ab eo sunt aut non potuerunt aut noluerunt, certe reliquerunt. </p>

<p><a href='http://loripsum.net/' target='_blank'>Qui est in parvis malis.</a> Semper enim ex eo, quod maximas partes continet latissimeque funditur, tota res appellatur. Ratio quidem vestra sic cogit. Stulti autem malorum memoria torquentur, sapientes bona praeterita grata recordatione renovata delectant. <mark>Non enim iam stirpis bonum quaeret, sed animalis.</mark> Praeclare Laelius, et recte sofñw, illudque vere: O Publi, o gurges, Galloni! es homo miser, inquit. Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. </p>

",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '3'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si de re disceptari oportet, nulla mihi tecum, Cato, potest esse dissensio. Aderamus nos quidem adolescentes, sed multi amplissimi viri, quorum nemo censuit plus Fadiae dandum, quam posset ad eam lege Voconia pervenire. Omnis sermo elegans sumi potest, tum varietas est tanta artium, ut nemo sine eo instrumento ad ullam rem illustriorem satis ornatus possit accedere. Cuius oratio attende, quaeso, Brute, satisne videatur Antiochi complexa esse sententiam, quam tibi, qui fratrem eius Aristum frequenter audieris, maxime probatam existimo. Sed cum, quod honestum sit, id solum bonum esse dicamus, consentaneum tamen est fungi officio, cum id officium nec in bonis ponamus nec in malis. <a href='http://loripsum.net/' target='_blank'>Sequitur disserendi ratio cognitioque naturae;</a> Immo videri fortasse. Eademne, quae restincta siti? Duo Reges: constructio interrete. Pomponius Luciusque Cicero, frater noster cognatione patruelis, amore germanus, constituimus inter nos ut ambulationem postmeridianam conficeremus in Academia, maxime quod is locus ab omni turba id temporis vacuus esset. <a href='http://loripsum.net/' target='_blank'>Velut ego nunc moveor.</a> Cumque ipsa virtus efficiat ita beatam vitam, ut beatior esse non possit, tamen quaedam deesse sapientibus tum, cum sint beatissimi; </p>

<p>Ut iam liceat una comprehensione omnia complecti non dubitantemque dicere omnem naturam esse servatricem sui idque habere propositum quasi finem et extremum, se ut custodiat quam in optimo sui generis statu; Video equidem, inquam, sed tamen iam infici debet iis artibus, quas si, dum est tener, conbiberit, ad maiora veniet paratior. <a href='http://loripsum.net/' target='_blank'>Cum audissem Antiochum, Brute, ut solebam, cum M.</a> Roges enim Aristonem, bonane ei videantur haec: vacuitas doloris, divitiae, valitudo; <mark>Quae diligentissime contra Aristonem dicuntur a Chryippo.</mark> Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? <b>Ego vero isti, inquam, permitto.</b> Et quoniam excedens e vita et manens aeque miser est nec diuturnitas magis ei vitam fugiendam facit, non sine causa dicitur iis, qui pluribus naturalibus frui possint, esse in vita manendum. <a href='http://loripsum.net/' target='_blank'>Rationis enim perfectio est virtus;</a> <i>Si quae forte-possumus.</i> </p>

<ol>
	<li>Itaque sensibus rationem adiunxit et ratione effecta sensus non reliquit.</li>
	<li>Nos paucis ad haec additis finem faciamus aliquando;</li>
	<li>Eam tum adesse, cum dolor omnis absit;</li>
	<li>Sed quot homines, tot sententiae;</li>
</ol>


<p>Tantus est igitur innatus in nobis cognitionis amor et scientiae, ut nemo dubitare possit quin ad eas res hominum natura nullo emolumento invitata rapiatur. <mark>Tum Triarius: Posthac quidem, inquit, audacius.</mark> Cetera illa adhibebat, quibus demptis negat se Epicurus intellegere quid sit bonum. Summum autem bonum si ignoretur, vivendi rationem ignorari necesse est, ex quo tantus error consequitur, ut quem in portum se recipiant scire non possint. Nam si amitti vita beata potest, beata esse non potest. Si est nihil nisi corpus, summa erunt illa: valitudo, vacuitas doloris, pulchritudo, cetera. Epicurei num desistunt de isdem, de quibus et ab Epicuro scriptum est et ab antiquis, ad arbitrium suum scribere? </p>

<dl>
	<dt><dfn>Sed nimis multa.</dfn></dt>
	<dd>Quem Tiberina descensio festo illo die tanto gaudio affecit, quanto L.</dd>
	<dt><dfn>Ita prorsus, inquam;</dfn></dt>
	<dd>Totum autem id externum est, et quod externum, id in casu est.</dd>
	<dt><dfn>Easdemne res?</dfn></dt>
	<dd>Utrum igitur tibi litteram videor an totas paginas commovere?</dd>
	<dt><dfn>Quonam modo?</dfn></dt>
	<dd>Quid interest, nisi quod ego res notas notis verbis appello, illi nomina nova quaerunt, quibus idem dicant?</dd>
	<dt><dfn>Bonum valitudo: miser morbus.</dfn></dt>
	<dd>Itaque hic ipse iam pridem est reiectus;</dd>
</dl>


<ul>
	<li>Sed tamen intellego quid velit.</li>
	<li>Scripta sane et multa et polita, sed nescio quo pacto auctoritatem oratio non habet.</li>
	<li>Qui enim voluptatem ipsam contemnunt, iis licet dicere se acupenserem maenae non anteponere.</li>
	<li>Non modo carum sibi quemque, verum etiam vehementer carum esse?</li>
	<li>Est autem officium, quod ita factum est, ut eius facti probabilis ratio reddi possit.</li>
	<li>At hoc in eo M.</li>
</ul>


<p>Eamne rationem igitur sequere, qua tecum ipse et cum tuis utare, profiteri et in medium proferre non audeas? <i>Nihil ad rem! Ne sit sane;</i> Cui vero in voluptate summum bonum est, huic omnia sensu, non ratione sunt iudicanda, eaque dicenda optima, quae sint suavissima. Quid enim dicis omne animal, simul atque sit ortum, applicatum esse ad se diligendum esseque in se conservando occupatum? Omne enim animal, simul et ortum est, se ipsum et omnes partes suas diligit duasque, quae maximae sunt, in primis amplectitur, animum et corpus, deinde utriusque partes. <i>Erat enim res aperta.</i> <b>Restatis igitur vos;</b> Si est nihil nisi corpus, summa erunt illa: valitudo, vacuitas doloris, pulchritudo, cetera. Ita similis erit ei finis boni, atque antea fuerat, neque idem tamen; <b>Hunc vos beatum;</b> Brutus dissentiet quod et acutum genus est et ad usus civium non inutile, nosque ea scripta reliquaque eiusdem generis et legimus libenter et legemus, haec, quae vitam omnem continent, neglegentur? Haec mirabilia videri intellego, sed cum certe superiora firma ac vera sint, his autem ea consentanea et consequentia, ne de horum quidem est veritate dubitandum. </p>

<blockquote cite='http://loripsum.net'>
	Societatem coniunctionis humanae munifice et aeque tuens iustitia dicitur, cui sunt adiunctae pietas, bonitas, liberalitas, benignitas, comitas, quaeque sunt generis eiusdem.
</blockquote>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '4'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo autem philosophus loquitur? Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. Hunc ipsum Zenonis aiunt esse finem declarantem illud, quod a te dictum est, convenienter naturae vivere. Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? Duo Reges: constructio interrete. Quae cum dixisset paulumque institisset, Quid est? Recte, inquit, intellegis. Honestum igitur id intellegimus, quod tale est, ut detracta omni utilitate sine ullis praemiis fructibusve per se ipsum possit iure laudari. Stoici restant, ei quidem non unam aliquam aut alteram rem a nobis, sed totam ad se nostram philosophiam transtulerunt; At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. </p>

<ul>
	<li>Quae quidem vel cum periculo est quaerenda vobis;</li>
	<li>Nihilne te delectat umquam -video, quicum loquar-, te igitur, Torquate, ipsum per se nihil delectat?</li>
	<li>Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas.</li>
	<li>Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio?</li>
	<li>Sed non alienum est, quo facilius vis verbi intellegatur, rationem huius verbi faciendi Zenonis exponere.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Una voluptas e multis obscuratur in illa vita voluptaria, sed tamen ea, quamvis parva sit, pars est eius vitae, quae posita est in voluptate.
</blockquote>


<ol>
	<li>Aliter enim explicari, quod quaeritur, non potest.</li>
	<li>De illis, cum volemus.</li>
	<li>Non igitur potestis voluptate omnia dirigentes aut tueri aut retinere virtutem.</li>
	<li>Qui enim existimabit posse se miserum esse beatus non erit.</li>
	<li>Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P.</li>
</ol>


<dl>
	<dt><dfn>Venit ad extremum;</dfn></dt>
	<dd>Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis.</dd>
	<dt><dfn>Perge porro;</dfn></dt>
	<dd>Ergo illi intellegunt quid Epicurus dicat, ego non intellego?</dd>
	<dt><dfn>Si longus, levis;</dfn></dt>
	<dd>Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum.</dd>
	<dt><dfn>Primum divisit ineleganter;</dfn></dt>
	<dd>Tu enim ista lenius, hic Stoicorum more nos vexat.</dd>
	<dt><dfn>Tubulo putas dicere?</dfn></dt>
	<dd>Quicquid porro animo cernimus, id omne oritur a sensibus;</dd>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Nam aliquando posse recte fieri dicunt nulla expectata nec quaesita voluptate.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '5'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo autem philosophus loquitur? Ex quo intellegi debet homini id esse in bonis ultimum, secundum naturam vivere, quod ita interpretemur: vivere ex hominis natura undique perfecta et nihil requirente. Hunc ipsum Zenonis aiunt esse finem declarantem illud, quod a te dictum est, convenienter naturae vivere. Cur ad reliquos Pythagoreos, Echecratem, Timaeum, Arionem, Locros, ut, cum Socratem expressisset, adiungeret Pythagoreorum disciplinam eaque, quae Socrates repudiabat, addisceret? Duo Reges: constructio interrete. Quae cum dixisset paulumque institisset, Quid est? Recte, inquit, intellegis. Honestum igitur id intellegimus, quod tale est, ut detracta omni utilitate sine ullis praemiis fructibusve per se ipsum possit iure laudari. Stoici restant, ei quidem non unam aliquam aut alteram rem a nobis, sed totam ad se nostram philosophiam transtulerunt; At vero Callipho et post eum Diodorus, cum is alter voluptatem adamavisset, alter vacuitatem doloris, neuter honestate carere potuit, quae est a nostris laudata maxime. </p>

<ul>
	<li>Quae quidem vel cum periculo est quaerenda vobis;</li>
	<li>Nihilne te delectat umquam -video, quicum loquar-, te igitur, Torquate, ipsum per se nihil delectat?</li>
	<li>Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas.</li>
	<li>Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio?</li>
	<li>Sed non alienum est, quo facilius vis verbi intellegatur, rationem huius verbi faciendi Zenonis exponere.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Una voluptas e multis obscuratur in illa vita voluptaria, sed tamen ea, quamvis parva sit, pars est eius vitae, quae posita est in voluptate.
</blockquote>


<ol>
	<li>Aliter enim explicari, quod quaeritur, non potest.</li>
	<li>De illis, cum volemus.</li>
	<li>Non igitur potestis voluptate omnia dirigentes aut tueri aut retinere virtutem.</li>
	<li>Qui enim existimabit posse se miserum esse beatus non erit.</li>
	<li>Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P.</li>
</ol>


<dl>
	<dt><dfn>Venit ad extremum;</dfn></dt>
	<dd>Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis.</dd>
	<dt><dfn>Perge porro;</dfn></dt>
	<dd>Ergo illi intellegunt quid Epicurus dicat, ego non intellego?</dd>
	<dt><dfn>Si longus, levis;</dfn></dt>
	<dd>Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum.</dd>
	<dt><dfn>Primum divisit ineleganter;</dfn></dt>
	<dd>Tu enim ista lenius, hic Stoicorum more nos vexat.</dd>
	<dt><dfn>Tubulo putas dicere?</dfn></dt>
	<dd>Quicquid porro animo cernimus, id omne oritur a sensibus;</dd>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Nam aliquando posse recte fieri dicunt nulla expectata nec quaesita voluptate.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '6'

		]);

		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson One',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Tibi hoc incredibile, quod beatissimum.</b> Cyrenaici quidem non recusant; Iam in altera philosophiae parte. Bonum incolumis acies: misera caecitas. </p>

<ul>
	<li>Duo Reges: constructio interrete.</li>
	<li>Et hercule-fatendum est enim, quod sentio -mirabilis est apud illos contextus rerum.</li>
	<li>Nunc haec primum fortasse audientis servire debemus.</li>
	<li>Quem ad modum quis ambulet, sedeat, qui ductus oris, qui vultus in quoque sit?</li>
</ul>


<dl>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Duo enim genera quae erant, fecit tria.</dd>
	<dt><dfn>Quibusnam praeteritis?</dfn></dt>
	<dd>Quod enim testimonium maius quaerimus, quae honesta et recta sint, ipsa esse optabilia per sese, cum videamus tanta officia morientis?</dd>
	<dt><dfn>Scaevolam M.</dfn></dt>
	<dd>Piso igitur hoc modo, vir optimus tuique, ut scis, amantissimus.</dd>
	<dt><dfn>Ut pulsi recurrant?</dfn></dt>
	<dd>Duo enim genera quae erant, fecit tria.</dd>
	<dt><dfn>Praeclare hoc quidem.</dfn></dt>
	<dd>Sin autem est in ea, quod quidam volunt, nihil impedit hanc nostram comprehensionem summi boni.</dd>
	<dt><dfn>Quo modo?</dfn></dt>
	<dd>Dolere malum est: in crucem qui agitur, beatus esse non potest.</dd>
</dl>


<blockquote cite='http://loripsum.net'>
	Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus.
</blockquote>


<ol>
	<li>Ratio enim nostra consentit, pugnat oratio.</li>
	<li>Tum ille: Ain tandem?</li>
	<li>Bona autem corporis huic sunt, quod posterius posui, similiora.</li>
	<li>Multoque hoc melius nos veriusque quam Stoici.</li>
</ol>


",
			'lesson_excerpt'       => 'This lesson is about first part',
			'lesson_order'         => '1'
		]);

		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Two',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Tibi hoc incredibile, quod beatissimum.</b> Cyrenaici quidem non recusant; Iam in altera philosophiae parte. Bonum incolumis acies: misera caecitas. </p>

<ul>
	<li>Duo Reges: constructio interrete.</li>
	<li>Et hercule-fatendum est enim, quod sentio -mirabilis est apud illos contextus rerum.</li>
	<li>Nunc haec primum fortasse audientis servire debemus.</li>
	<li>Quem ad modum quis ambulet, sedeat, qui ductus oris, qui vultus in quoque sit?</li>
</ul>


<dl>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Duo enim genera quae erant, fecit tria.</dd>
	<dt><dfn>Quibusnam praeteritis?</dfn></dt>
	<dd>Quod enim testimonium maius quaerimus, quae honesta et recta sint, ipsa esse optabilia per sese, cum videamus tanta officia morientis?</dd>
	<dt><dfn>Scaevolam M.</dfn></dt>
	<dd>Piso igitur hoc modo, vir optimus tuique, ut scis, amantissimus.</dd>
	<dt><dfn>Ut pulsi recurrant?</dfn></dt>
	<dd>Duo enim genera quae erant, fecit tria.</dd>
	<dt><dfn>Praeclare hoc quidem.</dfn></dt>
	<dd>Sin autem est in ea, quod quidam volunt, nihil impedit hanc nostram comprehensionem summi boni.</dd>
	<dt><dfn>Quo modo?</dfn></dt>
	<dd>Dolere malum est: in crucem qui agitur, beatus esse non potest.</dd>
</dl>


<blockquote cite='http://loripsum.net'>
	Nobis enim ista quaesita, a nobis descripta, notata, praecepta sunt, omniumque rerum publicarum reetionis genera, status, mutationes, leges etiam et instituta ac mores civitatum perscripsimus.
</blockquote>


<ol>
	<li>Ratio enim nostra consentit, pugnat oratio.</li>
	<li>Tum ille: Ain tandem?</li>
	<li>Bona autem corporis huic sunt, quod posterius posui, similiora.</li>
	<li>Multoque hoc melius nos veriusque quam Stoici.</li>
</ol>


",
			'lesson_excerpt'       => 'This lesson is about second part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Three',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Age sane, inquam. Sin aliud quid voles, postea. <a href='http://loripsum.net/' target='_blank'>Ut optime, secundum naturam affectum esse possit.</a> Que Manilium, ab iisque M. Duo Reges: constructio interrete. </p>

<ol>
	<li>Videamus animi partes, quarum est conspectus illustrior;</li>
	<li>Quod est, ut dixi, habere ea, quae secundum naturam sint, vel omnia vel plurima et maxima.</li>
	<li>Vitiosum est enim in dividendo partem in genere numerare.</li>
	<li>At quicum ioca seria, ut dicitur, quicum arcana, quicum occulta omnia?</li>
</ol>


<ul>
	<li>Hoc loco tenere se Triarius non potuit.</li>
	<li>Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere.</li>
	<li>Sed finge non solum callidum eum, qui aliquid improbe faciat, verum etiam praepotentem, ut M.</li>
	<li>Est autem officium, quod ita factum est, ut eius facti probabilis ratio reddi possit.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Sed fortuna fortis;
</blockquote>


<dl>
	<dt><dfn>Sed fortuna fortis;</dfn></dt>
	<dd>Sin te auctoritas commovebat, nobisne omnibus et Platoni ipsi nescio quem illum anteponebas?</dd>
	<dt><dfn>Praeteritis, inquit, gaudeo.</dfn></dt>
	<dd>Indicant pueri, in quibus ut in speculis natura cernitur.</dd>
	<dt><dfn>Avaritiamne minuis?</dfn></dt>
	<dd>Tum Quintus: Est plane, Piso, ut dicis, inquit.</dd>
	<dt><dfn>Quis hoc dicit?</dfn></dt>
	<dd>Sed ea mala virtuti magnitudine obruebantur.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about third part',
			'lesson_order'         => '3'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Fourth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <mark>Quare conare, quaeso.</mark> <b>Ne discipulum abducam, times.</b> Si quidem, inquit, tollerem, sed relinquo. Quae quidem omnia et innumerabilia praeterea quis est quin intellegat et eos qui fecerint dignitatis splendore ductos inmemores fuisse utilitatum suarum nosque, cum ea laudemus, nulla alla re nisi honestate duci? Duo Reges: constructio interrete. Qua ex cognitione facilior facta est investigatio rerum occultissimarum. Quorum omnium quae sint notitiae, quae quidem significentur rerum vocabulis, quaeque cuiusque vis et natura sit mox videbimus. Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest. Nec enim, omnes avaritias si aeque avaritias esse dixerimus, sequetur ut etiam aequas esse dicamus. </p>

<blockquote cite='http://loripsum.net'>
	Sunt autem, qui dicant foedus esse quoddam sapientium, ut ne minus amicos quam se ipsos diligant.
</blockquote>


<ul>
	<li>Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret.</li>
	<li>Isto modo, ne si avia quidem eius nata non esset.</li>
	<li>Illud urgueam, non intellegere eum quid sibi dicendum sit, cum dolorem summum malum esse dixerit.</li>
	<li>Sine ea igitur iucunde negat posse se vivere?</li>
</ul>


<ol>
	<li>Et adhuc quidem ita nobis progresso ratio est, ut ea duceretur omnis a prima commendatione naturae.</li>
	<li>Quia, si mala sunt, is, qui erit in iis, beatus non erit.</li>
</ol>


<dl>
	<dt><dfn>Easdemne res?</dfn></dt>
	<dd>Num igitur dubium est, quin, si in re ipsa nihil peccatur a superioribus, verbis illi commodius utantur?</dd>
	<dt><dfn>Quonam modo?</dfn></dt>
	<dd>Et quidem, inquit, vehementer errat;</dd>
	<dt><dfn>Haeret in salebra.</dfn></dt>
	<dd>Comprehensum, quod cognitum non habet?</dd>
	<dt><dfn>Recte, inquit, intellegis.</dfn></dt>
	<dd>Ne in odium veniam, si amicum destitero tueri.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about fourth part',
			'lesson_order'         => '4'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Fifth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Concinnus deinde et elegans huius, Aristo, sed ea, quae desideratur, a magno philosopho, gravitas, in eo non fuit; Officium, aequitatem, dignitatem, fidem, recta, honesta, digna imperio, digna populo Romano, omnia pericula pro re publica, mori pro patria, haec cum loqueris, nos barones stupemus, tu videlicet tecum ipse rides. <a href='http://loripsum.net/' target='_blank'>Tollenda est atque extrahenda radicitus.</a> Quoniam igitur, ut medicina valitudinis, navigationis gubernatio, sic vivendi ars est prudente, necesse est eam quoque ab aliqua re esse constitutam et profectam. <i>Duo Reges: constructio interrete.</i> Si enim idem dicit, quod Hieronymus, qui censet summum bonum esse sine ulla molestia vivere, cur mavult dicere voluptatem quam vacuitatem doloris, ut ille facit, qui quid dicat intellegit? Cynicorum autem rationem atque vitam alii cadere in sapientem dicunt, si qui eius modi forte casus inciderit, ut id faciendum sit, alii nullo modo. Nam ceteris in rebus síve praetermissum sive ignoratum est quippiam, non plus incommodi est, quam quanti quaeque earum rerum est, in quibus neglectum est aliquíd. Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant? Ergo adhuc, quantum equidem intellego, causa non videtur fuisse mutandi nominis. Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos. </p>

<ul>
	<li>Sed haec quidem liberius ab eo dicuntur et saepius.</li>
	<li>Ipse Epicurus fortasse redderet, ut Sextus Peducaeus, Sex.</li>
	<li>Eaedem enim utilitates poterunt eas labefactare atque pervertere.</li>
	<li>Illud mihi a te nimium festinanter dictum videtur, sapientis omnis esse semper beatos;</li>
</ul>


<dl>
	<dt><dfn>Velut ego nunc moveor.</dfn></dt>
	<dd>Sed ad bona praeterita redeamus.</dd>
	<dt><dfn>Idemne, quod iucunde?</dfn></dt>
	<dd>Illa argumenta propria videamus, cur omnia sint paria peccata.</dd>
</dl>


<blockquote cite='http://loripsum.net'>
	Quae enim constituta sunt prima naturae, ad ea si voluptas accesserit, unum aliquod accesserit commodum corporis neque eam constitutionem summi boni, quae est proposta, mutaverit.
</blockquote>


<ol>
	<li>Facillimum id quidem est, inquam.</li>
	<li>Sed tempus est, si videtur, et recta quidem ad me.</li>
	<li>Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus;</li>
</ol>


",
			'lesson_excerpt'       => 'This lesson is about fifth part',
			'lesson_order'         => '5'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Sixth',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Poterat autem inpune;</i> Huius ego nunc auctoritatem sequens idem faciam. <a href='http://loripsum.net/' target='_blank'>Erat enim Polemonis.</a> Duo Reges: constructio interrete. Idemne, quod iucunde? Murenam te accusante defenderem. Sed haec omittamus; </p>

<dl>
	<dt><dfn>Non igitur bene.</dfn></dt>
	<dd>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest.</dd>
	<dt><dfn>Frater et T.</dfn></dt>
	<dd>Itaque mihi non satis videmini considerare quod iter sit naturae quaeque progressio.</dd>
	<dt><dfn>Memini vero, inquam;</dfn></dt>
	<dd>Rapior illuc, revocat autem Antiochus, nec est praeterea, quem audiamus.</dd>
	<dt><dfn>Confecta res esset.</dfn></dt>
	<dd>-, sed ut hoc iudicaremus, non esse in iis partem maximam positam beate aut secus vivendi.</dd>
</dl>


<p><b>Sed hoc sane concedamus.</b> Stoicos roga. Quonam, inquit, modo? Ita prorsus, inquam; </p>

<ul>
	<li>Sed haec ab Antiocho, familiari nostro, dicuntur multo melius et fortius, quam a Stasea dicebantur.</li>
	<li>Itaque non discedit ab eorum curatione, quibus praeposita vitam omnem debet gubernare, ut mirari satis istorum inconstantiam non possim.</li>
	<li>Deprehensus omnem poenam contemnet.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Coniunctio autem cum honestate vel voluptatis vel non dolendi id ipsum honestum, quod amplecti vult, id efficit turpe.
</blockquote>


<p>Laboro autem non sine causa; Quid autem habent admirationis, cum prope accesseris? <i>Hoc est non dividere, sed frangere.</i> Quam nemo umquam voluptatem appellavit, appellat; </p>

<p>Optime, inquam. <b>Haeret in salebra.</b> <b>Audeo dicere, inquit.</b> Negare non possum. <b>Nihil enim iam habes, quod ad corpus referas;</b> Sed ad illum redeo. Sed ego in hoc resisto; Nos commodius agimus. </p>

<p><i>Bonum valitudo: miser morbus.</i> Quae duo sunt, unum facit. <a href='http://loripsum.net/' target='_blank'>Quid est enim aliud esse versutum?</a> <a href='http://loripsum.net/' target='_blank'>Negare non possum.</a> Non semper, inquam; Nam Pyrrho, Aristo, Erillus iam diu abiecti. </p>

<ol>
	<li>Quid dubitas igitur mutare principia naturae?</li>
	<li>Atqui perspicuum est hominem e corpore animoque constare, cum primae sint animi partes, secundae corporis.</li>
	<li>Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus?</li>
	<li>Est igitur officium eius generis, quod nec in bonis ponatur nec in contrariis.</li>
</ol>


",
			'lesson_excerpt'       => 'This lesson is about sixth part',
			'lesson_order'         => '6'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Murenam te accusante defenderem. <a href='http://loripsum.net/' target='_blank'>Eaedem res maneant alio modo.</a> Duo Reges: constructio interrete. Facete M. <mark>Deprehensus omnem poenam contemnet.</mark> Ille incendat? Negare non possum. </p>

<p>Quae sequuntur igitur? Minime vero, inquit ille, consentit. Inquit, dasne adolescenti veniam? Conferam tecum, quam cuique verso rem subicias; Praeclarae mortes sunt imperatoriae; </p>

<p>Quae cum dixisset, finem ille. Tecum optime, deinde etiam cum mediocri amico. Dici enim nihil potest verius. Sed quid sentiat, non videtis. Maximus dolor, inquit, brevis est. </p>

<ol>
	<li>Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio?</li>
	<li>Utinam quidem dicerent alium alio beatiorem! Iam ruinas videres.</li>
	<li>Nam his libris eum malo quam reliquo ornatu villae delectari.</li>
	<li>Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit.</li>
</ol>


<p>Quare attende, quaeso. Egone quaeris, inquit, quid sentiam? Quid nunc honeste dicit? Nescio quo modo praetervolavit oratio. Frater et T. Quare conare, quaeso. </p>

<p><a href='http://loripsum.net/' target='_blank'>Hunc vos beatum;</a> <i>Non est igitur voluptas bonum.</i> Id enim natura desiderat. Tubulo putas dicere? </p>

<blockquote cite='http://loripsum.net'>
	Virtutibus igitur rectissime mihi videris et ad consuetudinem nostrae orationis vitia posuisse contraria.
</blockquote>


<ul>
	<li>Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur.</li>
	<li>Et certamen honestum et disputatio splendida! omnis est enim de virtutis dignitate contentio.</li>
	<li>Nihil ad rem! Ne sit sane;</li>
	<li>Sed quanta sit alias, nunc tantum possitne esse tanta.</li>
	<li>Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</li>
</ul>


<dl>
	<dt><dfn>Idemne, quod iucunde?</dfn></dt>
	<dd>Qui enim existimabit posse se miserum esse beatus non erit.</dd>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Ut in geometria, prima si dederis, danda sunt omnia.</dd>
	<dt><dfn>Praeteritis, inquit, gaudeo.</dfn></dt>
	<dd>Quos quidem tibi studiose et diligenter tractandos magnopere censeo.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '7'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cyrenaici quidem non recusant; Quid de Pythagora? Sullae consulatum? </p>

<p>Sed tamen intellego quid velit. Nos vero, inquit ille; Hoc mihi cum tuo fratre convenit. In schola desinis. Itaque ab his ordiamur. Non igitur bene. </p>

<p>Bonum incolumis acies: misera caecitas. <i>Duo Reges: constructio interrete.</i> </p>

<ul>
	<li>Sin autem eos non probabat, quid attinuit cum iis, quibuscum re concinebat, verbis discrepare?</li>
	<li>Ea possunt paria non esse.</li>
	<li>Cuius etiam illi hortuli propinqui non memoriam solum mihi afferunt, sed ipsum videntur in conspectu meo ponere.</li>
	<li>Laboro autem non sine causa;</li>
	<li>Transfer idem ad modestiam vel temperantiam, quae est moderatio cupiditatum rationi oboediens.</li>
</ul>


<p>Nonne igitur tibi videntur, inquit, mala? <i>Stoici scilicet.</i> <i>Quid enim?</i> Istic sum, inquit. </p>

<p>Quorum altera prosunt, nocent altera. Nam quid possumus facere melius? Sed nimis multa. Haec dicuntur fortasse ieiunius; Poterat autem inpune; Summae mihi videtur inscitiae. Iam in altera philosophiae parte. </p>

<ol>
	<li>Modo etiam paulum ad dexteram de via declinavi, ut ad Pericli sepulcrum accederem.</li>
	<li>At ille pellit, qui permulcet sensum voluptate.</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Id autem eius modi est, ut additum ad virtutem auctoritatem videatur habiturum et expleturum cumulate vitam beatam, de quo omnis haec quaestio est.
</blockquote>


<dl>
	<dt><dfn>Ut pulsi recurrant?</dfn></dt>
	<dd>Ergo opifex plus sibi proponet ad formarum quam civis excellens ad factorum pulchritudinem?</dd>
	<dt><dfn>Immo videri fortasse.</dfn></dt>
	<dd>Quaesita enim virtus est, non quae relinqueret naturam, sed quae tueretur.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '8'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zenonis est, inquam, hoc Stoici. Istam voluptatem, inquit, Epicurus ignorat? Nihil sane. <mark>Deprehensus omnem poenam contemnet.</mark> </p>

<p>Prioris generis est docilitas, memoria; Eadem fortitudinis ratio reperietur. <b>Addidisti ad extremum etiam indoctum fuisse.</b> Confecta res esset. <i>Sed quid sentiat, non videtis.</i> Haec igitur Epicuri non probo, inquam. </p>

<p><a href='http://loripsum.net/' target='_blank'>Sed haec nihil sane ad rem;</a> Ita nemo beato beatior. Cur post Tarentum ad Archytam? Primum divisit ineleganter; </p>

<ol>
	<li>Quid, si etiam iucunda memoria est praeteritorum malorum?</li>
	<li>Sed hoc sane concedamus.</li>
	<li>Quid enim?</li>
</ol>


<p>Vide, quantum, inquam, fallare, Torquate. <i>Sed nimis multa.</i> <a href='http://loripsum.net/' target='_blank'>Iam in altera philosophiae parte.</a> Respondeat totidem verbis. </p>

<dl>
	<dt><dfn>Ut pulsi recurrant?</dfn></dt>
	<dd>De malis autem et bonis ab iis animalibus, quae nondum depravata sint, ait optime iudicari.</dd>
	<dt><dfn>Quonam modo?</dfn></dt>
	<dd>Quid ergo?</dd>
</dl>


<p>Quippe: habes enim a rhetoribus; <mark>Duo Reges: constructio interrete.</mark> Putabam equidem satis, inquit, me dixisse. </p>

<ul>
	<li>Non enim iam stirpis bonum quaeret, sed animalis.</li>
	<li>Stulti autem malorum memoria torquentur, sapientes bona praeterita grata recordatione renovata delectant.</li>
	<li>Commoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus;</li>
	<li>Si enim ita est, vide ne facinus facias, cum mori suadeas.</li>
	<li>Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est?</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Tum Piso: Atqui, Cicero, inquit, ista studia, si ad imitandos summos viros spectant, ingeniosorum sunt;
</blockquote>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '9'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnes enim iucundum motum, quo sensus hilaretur. Inquit, dasne adolescenti veniam? <b>Non est igitur voluptas bonum.</b> Duo Reges: constructio interrete. </p>

<blockquote cite='http://loripsum.net'>
	At cum tuis cum disseras, multa sunt audienda etiam de obscenis voluptatibus, de quibus ab Epicuro saepissime dicitur.
</blockquote>


<p>Erit enim mecum, si tecum erit. <a href='http://loripsum.net/' target='_blank'>Non est igitur voluptas bonum.</a> </p>

<ol>
	<li>Sic enim maiores nostri labores non fugiendos tristissimo tamen verbo aerumnas etiam in deo nominaverunt.</li>
	<li>Eadem nunc mea adversum te oratio est.</li>
	<li>Illud urgueam, non intellegere eum quid sibi dicendum sit, cum dolorem summum malum esse dixerit.</li>
	<li>Quae cum essent dicta, discessimus.</li>
	<li>Sin autem ad animum, falsum est, quod negas animi ullum esse gaudium, quod non referatur ad corpus.</li>
</ol>


<dl>
	<dt><dfn>Idem adhuc;</dfn></dt>
	<dd>Suam denique cuique naturam esse ad vivendum ducem.</dd>
	<dt><dfn>ALIO MODO.</dfn></dt>
	<dd>Si id dicis, vicimus.</dd>
	<dt><dfn>Peccata paria.</dfn></dt>
	<dd>Utinam quidem dicerent alium alio beatiorem! Iam ruinas videres.</dd>
	<dt><dfn>Non igitur bene.</dfn></dt>
	<dd>Quis suae urbis conservatorem Codrum, quis Erechthei filias non maxime laudat?</dd>
	<dt><dfn>Quaerimus enim finem bonorum.</dfn></dt>
	<dd>Longum est enim ad omnia respondere, quae a te dicta sunt.</dd>
</dl>


<ul>
	<li>An vero, inquit, quisquam potest probare, quod perceptfum, quod.</li>
	<li>Dolere malum est: in crucem qui agitur, beatus esse non potest.</li>
	<li>Egone non intellego, quid sit don Graece, Latine voluptas?</li>
	<li>Paulum, cum regem Persem captum adduceret, eodem flumine invectio?</li>
</ul>


<p><b>Dicimus aliquem hilare vivere;</b> Collige omnia, quae soletis: Praesidium amicorum. Quae cum essent dicta, discessimus. <i>Summae mihi videtur inscitiae.</i> Ita nemo beato beatior. </p>

<p><i>Deprehensus omnem poenam contemnet.</i> Quod ea non occurrentia fingunt, vincunt Aristonem; </p>

<p>Ratio enim nostra consentit, pugnat oratio. Sint ista Graecorum; An haec ab eo non dicuntur? Quid, quod res alia tota est? Stoicos roga. Videsne quam sit magna dissensio? </p>

",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '10'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Negat enim summo bono afferre incrementum diem. Audeo dicere, inquit. Aufert enim sensus actionemque tollit omnem. Itaque contra est, ac dicitis; Duo Reges: constructio interrete. <a href='http://loripsum.net/' target='_blank'>Tria genera bonorum;</a> Compensabatur, inquit, cum summis doloribus laetitia. </p>

<p>Cur iustitia laudatur? Tria genera bonorum; Si id dicis, vicimus. Nonne igitur tibi videntur, inquit, mala? Tanta vis admonitionis inest in locis; </p>

<blockquote cite='http://loripsum.net'>
	Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia.
</blockquote>


<p>Hoc Hieronymus summum bonum esse dixit. <b>Quid, quod res alia tota est?</b> <a href='http://loripsum.net/' target='_blank'>Hunc vos beatum;</a> Quae cum dixisset, finem ille. Ergo, inquit, tibi Q. Quorum altera prosunt, nocent altera. </p>

<p>An potest cupiditas finiri? Graece donan, Latine voluptatem vocant. <i>Non potes, nisi retexueris illa.</i> Certe non potest. In schola desinis. Sed residamus, inquit, si placet. At enim hic etiam dolore. Refert tamen, quo modo. </p>

<blockquote cite='http://loripsum.net'>
	Quid affers, cur Thorius, cur Caius Postumius, cur omnium horum magister, Orata, non iucundissime vixerit?
</blockquote>


<p><i>Inquit, dasne adolescenti veniam?</i> <a href='http://loripsum.net/' target='_blank'>Quae diligentissime contra Aristonem dicuntur a Chryippo.</a> Quo tandem modo? <i>Quod ea non occurrentia fingunt, vincunt Aristonem;</i> <a href='http://loripsum.net/' target='_blank'>Quis enim redargueret?</a> Quamquam te quidem video minime esse deterritum. Ille enim occurrentia nescio quae comminiscebatur; </p>

<p>Quod cum dixissent, ille contra. <i>Utram tandem linguam nescio?</i> <i>Si longus, levis dictata sunt.</i> <a href='http://loripsum.net/' target='_blank'>Honesta oratio, Socratica, Platonis etiam.</a> </p>

<p>Bonum patria: miserum exilium. <mark>Quid adiuvas?</mark> Sed ego in hoc resisto; Sint ista Graecorum; Restinguet citius, si ardentem acceperit. Sed plane dicit quod intellegit. </p>

<ul>
	<li>Ac tamen hic mallet non dolere.</li>
	<li>Deinde qui fit, ut ego nesciam, sciant omnes, quicumque Epicurei esse voluerunt?</li>
	<li>Minime vero istorum quidem, inquit.</li>
	<li>Consequens enim est et post oritur, ut dixi.</li>
	<li>Quamvis enim depravatae non sint, pravae tamen esse possunt.</li>
	<li>Sed venio ad inconstantiae crimen, ne saepius dicas me aberrare;</li>
	<li>Aliena dixit in physicis nec ea ipsa, quae tibi probarentur;</li>
</ul>


<p>At eum nihili facit; Itaque his sapiens semper vacabit. </p>

<p>At enim hic etiam dolore. An haec ab eo non dicuntur? Graccho, eius fere, aequalí? Sint modo partes vitae beatae. Nulla erit controversia. <i>Illi enim inter se dissentiunt.</i> Nunc vides, quid faciat. Beatum, inquit. </p>

<p>Quid de Pythagora? Quonam modo? In schola desinis. Nos cum te, M. </p>

<ol>
	<li>Quod autem patrocinium aut quae ista causa est voluptatis, quae nec testes ullos e claris viris nec laudatores poterit adhibere?</li>
	<li>Laboro autem non sine causa;</li>
	<li>Ita multa dicunt, quae vix intellegam.</li>
	<li>Tamen a proposito, inquam, aberramus.</li>
</ol>


<ol>
	<li>Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat;</li>
	<li>Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet.</li>
	<li>Sed utrum hortandus es nobis, Luci, inquit, an etiam tua sponte propensus es?</li>
	<li>Hunc ipsum Zenonis aiunt esse finem declarantem illud, quod a te dictum est, convenienter naturae vivere.</li>
	<li>Pauca mutat vel plura sane;</li>
	<li>Atqui perspicuum est hominem e corpore animoque constare, cum primae sint animi partes, secundae corporis.</li>
</ol>


<dl>
	<dt><dfn>Immo alio genere;</dfn></dt>
	<dd>Ad quorum et cognitionem et usum iam corroborati natura ipsa praeeunte deducimur.</dd>
	<dt><dfn>Respondeat totidem verbis.</dfn></dt>
	<dd>An vero, inquit, quisquam potest probare, quod perceptfum, quod.</dd>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Iam illud quale tandem est, bona praeterita non effluere sapienti, mala meminisse non oportere?</dd>
	<dt><dfn>Quid adiuvas?</dfn></dt>
	<dd>Teneo, inquit, finem illi videri nihil dolere.</dd>
	<dt><dfn>Videsne, ut haec concinant?</dfn></dt>
	<dd>Quae cum essent dicta, discessimus.</dd>
</dl>


<ul>
	<li>Estne, quaeso, inquam, sitienti in bibendo voluptas?</li>
	<li>Alterum significari idem, ut si diceretur, officia media omnia aut pleraque servantem vivere.</li>
	<li>Putabam equidem satis, inquit, me dixisse.</li>
	<li>Quodsi, ne quo incommodo afficiare, non relinques amicum, tamen, ne sine fructu alligatus sis, ut moriatur optabis.</li>
	<li>Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit;</li>
	<li>Quis non odit sordidos, vanos, leves, futtiles?</li>
</ul>


<dl>
	<dt><dfn>Peccata paria.</dfn></dt>
	<dd>Quis Aristidem non mortuum diligit?</dd>
	<dt><dfn>Peccata paria.</dfn></dt>
	<dd>Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt.</dd>
	<dt><dfn>Sint ista Graecorum;</dfn></dt>
	<dd>Ut id aliis narrare gestiant?</dd>
	<dt><dfn>Quod totum contra est.</dfn></dt>
	<dd>Est igitur officium eius generis, quod nec in bonis ponatur nec in contrariis.</dd>
</dl>


",
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '11'
		]);

	}

}




class TestTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tests')->delete();

		Test::create([
			'lesson_id' => '1',
			'test_title' => '1 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Sed ego in hoc resisto;</i> Murenam te accusante defenderem. Sequitur disserendi ratio cognitioque naturae; Memini vero, inquam; Illi enim inter se dissentiunt. Duo Reges: constructio interrete. Quae cum essent dicta, discessimus. An tu me de L. </p>

<blockquote cite='http://loripsum.net'>
	Mihi quidem etiam lautius videtur, quod eligitur, et ad quod dilectus adhibetur -, sed, cum ego ista omnia bona dixero, tantum refert quam magna dicam, cum expetenda, quam valde.
</blockquote>


<ul>
	<li>Conclusum est enim contra Cyrenaicos satis acute, nihil ad Epicurum.</li>
	<li>Pugnant Stoici cum Peripateticis.</li>
	<li>Virtutis, magnitudinis animi, patientiae, fortitudinis fomentis dolor mitigari solet.</li>
	<li>Commoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus;</li>
</ul>


<ol>
	<li>Et quidem illud ipsum non nimium probo et tantum patior, philosophum loqui de cupiditatibus finiendis.</li>
	<li>Putabam equidem satis, inquit, me dixisse.</li>
	<li>Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius.</li>
	<li>Quod autem satis est, eo quicquid accessit, nimium est;</li>
</ol>


"
		]);

		Test::create([
			'lesson_id'     => '2',
			'test_title'    => '2 Second test',
			'test_body'     => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Quod quidem iam fit etiam in Academia.</i> Equidem e Cn. An eiusdem modi? </p>

<ol>
	<li>Mihi quidem Homerus huius modi quiddam vidisse videatur in iis, quae de Sirenum cantibus finxerit.</li>
	<li>Itaque ad tempus ad Pisonem omnes.</li>
	<li>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest.</li>
	<li>De ingenio eius in his disputationibus, non de moribus quaeritur.</li>
	<li>Non minor, inquit, voluptas percipitur ex vilissimis rebus quam ex pretiosissimis.</li>
</ol>


<ul>
	<li>Isto modo ne improbos quidem, si essent boni viri.</li>
	<li>Quid tanto concursu honestissimorum studiorum, tanto virtutum comitatu, si ea nullam ad aliam rem nisi ad voluptatem conquiruntur?</li>
	<li>Duo Reges: constructio interrete.</li>
</ul>


"
		]);
		Test::create([
			'lesson_id' => '3',
			'test_title' => '3 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Quod quidem iam fit etiam in Academia.</i> Equidem e Cn. An eiusdem modi? </p>

<ol>
	<li>Mihi quidem Homerus huius modi quiddam vidisse videatur in iis, quae de Sirenum cantibus finxerit.</li>
	<li>Itaque ad tempus ad Pisonem omnes.</li>
	<li>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest.</li>
	<li>De ingenio eius in his disputationibus, non de moribus quaeritur.</li>
	<li>Non minor, inquit, voluptas percipitur ex vilissimis rebus quam ex pretiosissimis.</li>
</ol>


<ul>
	<li>Isto modo ne improbos quidem, si essent boni viri.</li>
	<li>Quid tanto concursu honestissimorum studiorum, tanto virtutum comitatu, si ea nullam ad aliam rem nisi ad voluptatem conquiruntur?</li>
	<li>Duo Reges: constructio interrete.</li>
</ul>


"
		]);
		Test::create([
			'lesson_id' => '4',
			'test_title' => '4 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Quod quidem iam fit etiam in Academia.</i> Equidem e Cn. An eiusdem modi? </p>

<ol>
	<li>Mihi quidem Homerus huius modi quiddam vidisse videatur in iis, quae de Sirenum cantibus finxerit.</li>
	<li>Itaque ad tempus ad Pisonem omnes.</li>
	<li>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest.</li>
	<li>De ingenio eius in his disputationibus, non de moribus quaeritur.</li>
	<li>Non minor, inquit, voluptas percipitur ex vilissimis rebus quam ex pretiosissimis.</li>
</ol>


<ul>
	<li>Isto modo ne improbos quidem, si essent boni viri.</li>
	<li>Quid tanto concursu honestissimorum studiorum, tanto virtutum comitatu, si ea nullam ad aliam rem nisi ad voluptatem conquiruntur?</li>
	<li>Duo Reges: constructio interrete.</li>
</ul>


"
		]);
		Test::create([
			'lesson_id' => '5',
			'test_title' => '5 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ego in hoc resisto; <mark>Immo alio genere;</mark> Tollenda est atque extrahenda radicitus. </p>

<ol>
	<li>Dicet pro me ipsa virtus nec dubitabit isti vestro beato M.</li>
	<li>Ne in odium veniam, si amicum destitero tueri.</li>
	<li>Estne, quaeso, inquam, sitienti in bibendo voluptas?</li>
	<li>Theophrasti igitur, inquit, tibi liber ille placet de beata vita?</li>
</ol>


<ul>
	<li>Mihi quidem Homerus huius modi quiddam vidisse videatur in iis, quae de Sirenum cantibus finxerit.</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>Qui autem de summo bono dissentit de tota philosophiae ratione dissentit.</li>
	<li>Cuius ad naturam apta ratio vera illa et summa lex a philosophis dicitur.</li>
	<li>Non pugnem cum homine, cur tantum habeat in natura boni;</li>
	<li>Ut alios omittam, hunc appello, quem ille unum secutus est.</li>
</ul>


"
		]);
		Test::create([
			'lesson_id' => '6',
			'test_title' => '6 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ratio quidem vestra sic cogit. <b>At ille pellit, qui permulcet sensum voluptate.</b> Ut id aliis narrare gestiant? </p>

<ol>
	<li>Ne tum quidem te respicies et cogitabis sibi quemque natum esse et suis voluptatibus?</li>
	<li>Non minor, inquit, voluptas percipitur ex vilissimis rebus quam ex pretiosissimis.</li>
	<li>Similiter sensus, cum accessit ad naturam, tuetur illam quidem, sed etiam se tuetur;</li>
	<li>Nam Pyrrho, Aristo, Erillus iam diu abiecti.</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Potius inflammat, ut coercendi magis quam dedocendi esse videantur.
</blockquote>


<ul>
	<li>Duo Reges: constructio interrete.</li>
	<li>Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum.</li>
	<li>Nulla profecto est, quin suam vim retineat a primo ad extremum.</li>
	<li>Cuius similitudine perspecta in formarum specie ac dignitate transitum est ad honestatem dictorum atque factorum.</li>
</ul>


"
		]);
		Test::create([
			'lesson_id' => '7',
			'test_title' => '7 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. <mark>Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</mark> Egone quaeris, inquit, quid sentiam? Nemo igitur esse beatus potest. Respondent extrema primis, media utrisque, omnia omnibus. </p>

<ol>
	<li>Cur fortior sit, si illud, quod tute concedis, asperum et vix ferendum putabit?</li>
	<li>Si enim, ut mihi quidem videtur, non explet bona naturae voluptas, iure praetermissa est;</li>
	<li>At tu eadem ista dic in iudicio aut, si coronam times, dic in senatu.</li>
	<li>Quid turpius quam sapientis vitam ex insipientium sermone pendere?</li>
</ol>


<ul>
	<li>Cur igitur, inquam, res tam dissimiles eodem nomine appellas?</li>
	<li>Illud quaero, quid ei, qui in voluptate summum bonum ponat, consentaneum sit dicere.</li>
	<li>Quid ergo hoc loco intellegit honestum?</li>
	<li>Videmus igitur ut conquiescere ne infantes quidem possint.</li>
	<li>Sint modo partes vitae beatae.</li>
	<li>Quid enim tanto opus est instrumento in optimis artibus comparandis?</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Se omnia, quae secundum naturam sint, b o n a appellare, quae autem contra, m a l a.
</blockquote>


"
		]);


		Test::create([
			'lesson_id' => '8',
			'test_title' => '8 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restinguet citius, si ardentem acceperit. In schola desinis. Ut pulsi recurrant? Ea possunt paria non esse. Duo Reges: constructio interrete. </p>

<blockquote cite='http://loripsum.net'>
	Magno hic ingenio, sed res se tamen sic habet, ut nimis imperiosi philosophi sit vetare meminisse.
</blockquote>


<ul>
	<li>Sed fortuna fortis;</li>
	<li>Cur igitur, cum de re conveniat, non malumus usitate loqui?</li>
	<li>Quid turpius quam sapientis vitam ex insipientium sermone pendere?</li>
	<li>Huius ego nunc auctoritatem sequens idem faciam.</li>
	<li>Illa enim, quae prosunt aut quae nocent, aut bona sunt aut mala, quae sint paria necesse est.</li>
</ul>


<ol>
	<li>Conferam avum tuum Drusum cum C.</li>
	<li>De vacuitate doloris eadem sententia erit.</li>
	<li>Si quae forte-possumus.</li>
	<li>An me, inquam, nisi te audire vellem, censes haec dicturum fuisse?</li>
</ol>


"
		]);

		Test::create([
			'lesson_id' => '9',
			'test_title' => '9 Second test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Iam in altera philosophiae parte.</i> Primum divisit ineleganter; Comprehensum, quod cognitum non habet? Hoc simile tandem est? Nos cum te, M. Tria genera bonorum; </p>

<ul>
	<li>Summus dolor plures dies manere non potest?</li>
	<li>Si verbum sequimur, primum longius verbum praepositum quam bonum.</li>
	<li>Duo Reges: constructio interrete.</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Sunt enim quasi prima elementa naturae, quibus ubertas orationis adhiberi vix potest, nec equidem eam cogito consectari.
</blockquote>


<ol>
	<li>Itaque hic ipse iam pridem est reiectus;</li>
	<li>Ac tamen, ne cui loco non videatur esse responsum, pauca etiam nunc dicam ad reliquam orationem tuam.</li>
	<li>Quae similitudo in genere etiam humano apparet.</li>
	<li>Eorum enim omnium multa praetermittentium, dum eligant aliquid, quod sequantur, quasi curta sententia;</li>
	<li>Haeret in salebra.</li>
	<li>Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit;</li>
</ol>


"
		]);
		Test::create([
			'lesson_id' => '10',
			'test_title' => '10 Third test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Recte, inquit, intellegis. Eaedem res maneant alio modo. <b>Tibi hoc incredibile, quod beatissimum.</b> An eiusdem modi? Sed tamen intellego quid velit. Tubulo putas dicere? </p>

<ol>
	<li>Scisse enim te quis coarguere possit?</li>
	<li>At ille pellit, qui permulcet sensum voluptate.</li>
	<li>Ergo in utroque exercebantur, eaque disciplina effecit tantam illorum utroque in genere dicendi copiam.</li>
	<li>Sed est forma eius disciplinae, sicut fere ceterarum, triplex: una pars est naturae, disserendi altera, vivendi tertia.</li>
	<li>Est autem etiam actio quaedam corporis, quae motus et status naturae congruentis tenet;</li>
	<li>Nemo igitur esse beatus potest.</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Negarine ullo modo possit numquam quemquam stabili et firmo et magno animo, quem fortem virum dicimus, effici posse, nisi constitutum sit non esse malum dolorem?
</blockquote>


<ul>
	<li>Duo Reges: constructio interrete.</li>
	<li>Videsne quam sit magna dissensio?</li>
	<li>Si enim, ut mihi quidem videtur, non explet bona naturae voluptas, iure praetermissa est;</li>
</ul>


"
		]);
		Test::create([
			'lesson_id' => '11',
			'test_title' => '11 Forth test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Equidem e Cn. <i>Sic enim censent, oportunitatis esse beate vivere.</i> Tum Triarius: Posthac quidem, inquit, audacius. Oratio me istius philosophi non offendit; Duo Reges: constructio interrete. <mark>Si quae forte-possumus.</mark> Quae cum dixisset, finem ille. <i>Paria sunt igitur.</i> </p>

<ol>
	<li>Iam id ipsum absurdum, maximum malum neglegi.</li>
	<li>Ergo illi intellegunt quid Epicurus dicat, ego non intellego?</li>
	<li>Quae quo sunt excelsiores, eo dant clariora indicia naturae.</li>
	<li>Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur?</li>
	<li>Satis est tibi in te, satis in legibus, satis in mediocribus amicitiis praesidii.</li>
	<li>Respondent extrema primis, media utrisque, omnia omnibus.</li>
</ol>


<ul>
	<li>Ita enim vivunt quidam, ut eorum vita refellatur oratio.</li>
	<li>At cum de plurimis eadem dicit, tum certe de maximis.</li>
	<li>Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere.</li>
	<li>Nec vero intermittunt aut admirationem earum rerum, quae sunt ab antiquis repertae, aut investigationem novarum.</li>
	<li>Primum in nostrane potestate est, quid meminerimus?</li>
</ul>


<blockquote cite='http://loripsum.net'>
	Apud imperitos tum illa dicta sunt, aliquid etiam coronae datum;
</blockquote>


"
		]);
		Test::create([
			'lesson_id' => '12',
			'test_title' => '12 ist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Videsne quam sit magna dissensio?</i> Cyrenaici quidem non recusant; Duo Reges: constructio interrete. Quid iudicant sensus? </p>

<ol>
	<li>Maximeque eos videre possumus res gestas audire et legere velle, qui a spe gerendi absunt confecti senectute.</li>
	<li>Earum etiam rerum, quas terra gignit, educatio quaedam et perfectio est non dissimilis animantium.</li>
	<li>Nec tamen ille erat sapiens quis enim hoc aut quando aut ubi aut unde?</li>
	<li>Quid est igitur, inquit, quod requiras?</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Deinde, ubi erubuit-vis enim est permagna naturae-, confugit illuc, ut neget accedere quicquam posse ad voluptatem nihil dolentis.
</blockquote>


"
		]);
		Test::create([
			'lesson_id' => '13',
			'test_title' => '13 Second test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <i>Quid est igitur, inquit, quod requiras?</i> <b>Simus igitur contenti his.</b> Et quidem, inquit, vehementer errat; <i>Nulla erit controversia.</i> Duo Reges: constructio interrete. </p>

<blockquote cite='http://loripsum.net'>
	Nam qui valitudinem aestimatione aliqua dignam iudicamus neque eam tamen in bonis ponimus, idem censemus nullam esse tantam aestimationem, ut ea virtuti anteponatur.
</blockquote>


<ol>
	<li>Universa enim illorum ratione cum tota vestra confligendum puto.</li>
	<li>Si mala non sunt, iacet omnis ratio Peripateticorum.</li>
	<li>Nonne odio multos dignos putamus, qui quodam motu aut statu videntur naturae legem et modum contempsisse?</li>
</ol>


"
		]);
		Test::create([
			'lesson_id' => '14',
			'test_title' => '14 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zenonis est, inquam, hoc Stoici. <mark>Illi enim inter se dissentiunt.</mark> Duo Reges: constructio interrete. Tum Triarius: Posthac quidem, inquit, audacius. </p>

<ol>
	<li>At ille pellit, qui permulcet sensum voluptate.</li>
	<li>Est autem officium, quod ita factum est, ut eius facti probabilis ratio reddi possit.</li>
	<li>Quod est, ut dixi, habere ea, quae secundum naturam sint, vel omnia vel plurima et maxima.</li>
	<li>In his igitur partibus duabus nihil erat, quod Zeno commutare gestiret.</li>
	<li>Eam tum adesse, cum dolor omnis absit;</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Hic, qui utrumque probat, ambobus debuit uti, sicut facit re, neque tamen dividit verbis.
</blockquote>


"

		]);
		Test::create([
			'lesson_id' => '15',
			'test_title' => '15 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sequitur disserendi ratio cognitioque naturae; <mark>Inquit, dasne adolescenti veniam?</mark> Duo Reges: constructio interrete. Cave putes quicquam esse verius. </p>

<blockquote cite='http://loripsum.net'>
	Voluptatis causa, etiam si eam non consequare, aut non dolendi, etiam si id assequi nequeas, aut eorum, quae secundum naturam sunt, adipiscendi, etiam si nihil consequare.
</blockquote>


<ol>
	<li>Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur.</li>
	<li>In contemplatione et cognitione posita rerum, quae quia deorum erat vitae simillima, sapiente visa est dignissima.</li>
	<li>Neutrum vero, inquit ille.</li>
	<li>Non enim, si omnia non sequebatur, idcirco non erat ortus illinc.</li>
</ol>


"

		]);
		Test::create([
			'lesson_id' => '16',
			'test_title' => '16 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Bonum integritas corporis: misera debilitas. Sed tamen intellego quid velit. Sed nimis multa. De hominibus dici non necesse est. Bonum liberi: misera orbitas. </p>

<blockquote cite='http://loripsum.net'>
	Ex quo intellegitur idem illud, solum bonum esse, quod honestum sit, idque esse beate vivere: honeste, id est cum virtute, vivere.
</blockquote>


<ol>
	<li>Et ille ridens: Video, inquit, quid agas;</li>
	<li>Hoc est non modo cor non habere, sed ne palatum quidem.</li>
	<li>Quasi vero aut concedatur in omnibus stultis aeque magna esse vitia, et eadem inbecillitate et inconstantia L.</li>
	<li>Nunc reliqua videamus, nisi aut ad haec, Cato, dicere aliquid vis aut nos iam longiores sumus.</li>
	<li>Vobis autem, quibus nihil est aliud propositum nisi rectum atque honestum, unde officii, unde agendi principlum nascatur non reperietis.</li>
</ol>


"

		]);
		Test::create([
			'lesson_id' => '17',
			'test_title' => '17 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tubulo putas dicere? Non igitur bene. Philosophi autem in suis lectulis plerumque moriuntur. </p>

<blockquote cite='http://loripsum.net'>
	Dat enim id nobis solitudo, quod si qui deus diceret, numquam putarem me in Academia tamquam philosophum disputaturum.
</blockquote>


<ol>
	<li>Recte, inquit, intellegis.</li>
	<li>Verba tu fingas et ea dicas, quae non sentias?</li>
	<li>Nihilne est in his rebus, quod dignum libero aut indignum esse ducamus?</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas.</li>
	<li>Nam de isto magna dissensio est.</li>
	<li>Sit enim idem caecus, debilis.</li>
</ol>


"

		]);
		Test::create([
			'lesson_id' => '18',
			'test_title' => '18 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tubulo putas dicere? Non igitur bene. Philosophi autem in suis lectulis plerumque moriuntur. </p>

<blockquote cite='http://loripsum.net'>
	Dat enim id nobis solitudo, quod si qui deus diceret, numquam putarem me in Academia tamquam philosophum disputaturum.
</blockquote>


<ol>
	<li>Recte, inquit, intellegis.</li>
	<li>Verba tu fingas et ea dicas, quae non sentias?</li>
	<li>Nihilne est in his rebus, quod dignum libero aut indignum esse ducamus?</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas.</li>
	<li>Nam de isto magna dissensio est.</li>
	<li>Sit enim idem caecus, debilis.</li>
</ol>


"

		]);
		Test::create([
			'lesson_id' => '19',
			'test_title' => '19 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hoc non est positum in nostra actione. <mark>At certe gravius.</mark> Quid nunc honeste dicit? </p>

<blockquote cite='http://loripsum.net'>
	Rhetorice igitur, inquam, nos mavis quam dialectice disputare?
</blockquote>


<ol>
	<li>Hoc est dicere: Non reprehenderem asotos, si non essent asoti.</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>Ut in voluptate sit, qui epuletur, in dolore, qui torqueatur.</li>
	<li>Illa tamen simplicia, vestra versuta.</li>
	<li>Quid igitur dubitamus in tota eius natura quaerere quid sit effectum?</li>
</ol>


"

		]);
		Test::create([
			'lesson_id' => '20',
			'test_title' => '20 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Comprehensum, quod cognitum non habet? Sit sane ista voluptas. Duo Reges: constructio interrete. Iam in altera philosophiae parte. </p>

<blockquote cite='http://loripsum.net'>
	Negat enim summo bono afferre incrementum diem.
</blockquote>


<ol>
	<li>Polemoni et iam ante Aristoteli ea prima visa sunt, quae paulo ante dixi.</li>
	<li>Et ais, si una littera commota sit, fore tota ut labet disciplina.</li>
	<li>Experiamur igitur, inquit, etsi habet haec Stoicorum ratio difficilius quiddam et obscurius.</li>
	<li>Nec vero sum nescius esse utilitatem in historia, non modo voluptatem.</li>
	<li>Itaque hic ipse iam pridem est reiectus;</li>
	<li>Polemoni et iam ante Aristoteli ea prima visa sunt, quae paulo ante dixi.</li>
</ol>


"

		]);
		Test::create([
			'lesson_id' => '21',
			'test_title' => '21 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Tubulo putas dicere? </p>

<blockquote cite='http://loripsum.net'>
	Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur.
</blockquote>


<ol>
	<li>Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur?</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>Quis non odit sordidos, vanos, leves, futtiles?</li>
	<li>Si quicquam extra virtutem habeatur in bonis.</li>
	<li>Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus.</li>
</ol>


"

		]);

		Test::create([
			'lesson_id' => '22',
			'test_title' => '22  Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Tubulo putas dicere? </p>

<blockquote cite='http://loripsum.net'>
	Quodsi esset in voluptate summum bonum, ut dicitis, optabile esset maxima in voluptate nullo intervallo interiecto dies noctesque versari, cum omnes sensus dulcedine omni quasi perfusi moverentur.
</blockquote>


<ol>
	<li>Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur?</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>Quis non odit sordidos, vanos, leves, futtiles?</li>
	<li>Si quicquam extra virtutem habeatur in bonis.</li>
	<li>Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus.</li>
</ol>


"
		]);

		Test::create([
			'lesson_id' => '23',
			'test_title' => '23 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non est igitur voluptas bonum. Vide, quantum, inquam, fallare, Torquate. <i>Summum a vobis bonum voluptas dicitur.</i> Prioris generis est docilitas, memoria; </p>

<ol>
	<li>Duo Reges: constructio interrete.</li>
	<li>Ita redarguitur ipse a sese, convincunturque scripta eius probitate ipsius ac moribus.</li>
	<li>Atqui reperies, inquit, in hoc quidem pertinacem;</li>
	<li>Eadem nunc mea adversum te oratio est.</li>
	<li>At miser, si in flagitiosa et vitiosa vita afflueret voluptatibus.</li>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Non est igitur voluptas bonum.
</blockquote>


"
		]);
		Test::create([
			'lesson_id' => '24',
			'test_title' => '24 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non est igitur voluptas bonum. Vide, quantum, inquam, fallare, Torquate. <i>Summum a vobis bonum voluptas dicitur.</i> Prioris generis est docilitas, memoria; </p>

<ol>
	<li>Duo Reges: constructio interrete.</li>
	<li>Ita redarguitur ipse a sese, convincunturque scripta eius probitate ipsius ac moribus.</li>
	<li>Atqui reperies, inquit, in hoc quidem pertinacem;</li>
	<li>Eadem nunc mea adversum te oratio est.</li>
	<li>At miser, si in flagitiosa et vitiosa vita afflueret voluptatibus.</li>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Non est igitur voluptas bonum.
</blockquote>


"
		]);
		Test::create([
			'lesson_id' => '25',
			'test_title' => '25 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non est igitur voluptas bonum. Vide, quantum, inquam, fallare, Torquate. <i>Summum a vobis bonum voluptas dicitur.</i> Prioris generis est docilitas, memoria; </p>

<ol>
	<li>Duo Reges: constructio interrete.</li>
	<li>Ita redarguitur ipse a sese, convincunturque scripta eius probitate ipsius ac moribus.</li>
	<li>Atqui reperies, inquit, in hoc quidem pertinacem;</li>
	<li>Eadem nunc mea adversum te oratio est.</li>
	<li>At miser, si in flagitiosa et vitiosa vita afflueret voluptatibus.</li>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Non est igitur voluptas bonum.
</blockquote>


"
		]);
		Test::create([
			'lesson_id' => '26',
			'test_title' => '26Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non est igitur voluptas bonum. Vide, quantum, inquam, fallare, Torquate. <i>Summum a vobis bonum voluptas dicitur.</i> Prioris generis est docilitas, memoria; </p>

<ol>
	<li>Duo Reges: constructio interrete.</li>
	<li>Ita redarguitur ipse a sese, convincunturque scripta eius probitate ipsius ac moribus.</li>
	<li>Atqui reperies, inquit, in hoc quidem pertinacem;</li>
	<li>Eadem nunc mea adversum te oratio est.</li>
	<li>At miser, si in flagitiosa et vitiosa vita afflueret voluptatibus.</li>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
</ol>


<blockquote cite='http://loripsum.net'>
	Non est igitur voluptas bonum.
</blockquote>


"
		]);
		Test::create([
			'lesson_id' => '27',
			'test_title' => '27 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Egone quaeris, inquit, quid sentiam?</b> Falli igitur possumus. Quid me istud rogas? Summus dolor plures dies manere non potest? Duo Reges: constructio interrete. Ita nemo beato beatior. Itaque ab his ordiamur. </p>

<blockquote cite='http://loripsum.net'>
	Ego autem tibi, Piso, assentior usu hoc venire, ut acrius aliquanto et attentius de claris viris locorum admonitu cogitemus.
</blockquote>


<ol>
	<li>Tum, Quintus et Pomponius cum idem se velle dixissent, Piso exorsus est.</li>
	<li>Deque his rebus satis multa in nostris de re publica libris sunt dicta a Laelio.</li>
	<li>Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret.</li>
	<li>In motu et in statu corporis nihil inest, quod animadvertendum esse ipsa natura iudicet?</li>
	<li>Est enim tanti philosophi tamque nobilis audacter sua decreta defendere.</li>
</ol>


"
		]);
		Test::create([
			'lesson_id' => '28',
			'test_title' => '28 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At ille pellit, qui permulcet sensum voluptate. Confecta res esset. Non est igitur voluptas bonum. Illi enim inter se dissentiunt. <mark>Nobis aliter videtur, recte secusne, postea;</mark> Dat enim intervalla et relaxat. Cyrenaici quidem non recusant; Duo Reges: constructio interrete. </p>

<ol>
	<li>Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant?</li>
	<li>Aut unde est hoc contritum vetustate proverbium: quicum in tenebris?</li>
	<li>Quae animi affectio suum cuique tribuens atque hanc, quam dico.</li>
	<li>Qui ita affectus, beatum esse numquam probabis;</li>
	<li>Non enim iam stirpis bonum quaeret, sed animalis.</li>
	<li>Quamquam tu hanc copiosiorem etiam soles dicere.</li>
</ol>
"
		]);
		Test::create([
			'lesson_id' => '29',
			'test_title' => '29 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At ille pellit, qui permulcet sensum voluptate. Confecta res esset. Non est igitur voluptas bonum. Illi enim inter se dissentiunt. <mark>Nobis aliter videtur, recte secusne, postea;</mark> Dat enim intervalla et relaxat. Cyrenaici quidem non recusant; Duo Reges: constructio interrete. </p>

<ol>
	<li>Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant?</li>
	<li>Aut unde est hoc contritum vetustate proverbium: quicum in tenebris?</li>
	<li>Quae animi affectio suum cuique tribuens atque hanc, quam dico.</li>
	<li>Qui ita affectus, beatum esse numquam probabis;</li>
	<li>Non enim iam stirpis bonum quaeret, sed animalis.</li>
	<li>Quamquam tu hanc copiosiorem etiam soles dicere.</li>
</ol>


"
		]);
		Test::create([
			'lesson_id' => '30',
			'test_title' => '30 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prave, nequiter, turpiter cenabat; Ratio enim nostra consentit, pugnat oratio. Hoc loco tenere se Triarius non potuit. Conferam avum tuum Drusum cum C. Numquam facies. </p>

<ol>
	<li>Refert tamen, quo modo.</li>
	<li>Sed haec quidem liberius ab eo dicuntur et saepius.</li>
	<li>Indicant pueri, in quibus ut in speculis natura cernitur.</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>Amicitiam autem adhibendam esse censent, quia sit ex eo genere, quae prosunt.</li>
</ol>


"
		]);
		Test::create([
			'lesson_id' => '31',
			'test_title' => '31 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Perge porro; Haeret in salebra. <i>Quonam, inquit, modo?</i> Sed tamen intellego quid velit. </p>

<ol>
	<li>Nos cum te, M.</li>
	<li>Duo Reges: constructio interrete.</li>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
	<li>Nam memini etiam quae nolo, oblivisci non possum quae volo.</li>
	<li>Suam denique cuique naturam esse ad vivendum ducem.</li>
</ol>
"
		]);
		Test::create([
			'lesson_id' => '32',
			'test_title' => '32 Fist test',
			'test_body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Paria sunt igitur. <i>Ratio enim nostra consentit, pugnat oratio.</i> Duo Reges: constructio interrete. Iam in altera philosophiae parte. Falli igitur possumus. Quid ad utilitatem tantae pecuniae? </p>

<ol>
	<li>Quae diligentissime contra Aristonem dicuntur a Chryippo.</li>
	<li>Quod quidem iam fit etiam in Academia.</li>
	<li>Et adhuc quidem ita nobis progresso ratio est, ut ea duceretur omnis a prima commendatione naturae.</li>
	<li>Et certamen honestum et disputatio splendida! omnis est enim de virtutis dignitate contentio.</li>
	<li>Ergo opifex plus sibi proponet ad formarum quam civis excellens ad factorum pulchritudinem?</li>
</ol>


"
		]);

	}

}