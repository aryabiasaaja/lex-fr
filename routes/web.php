<?php

use Illuminate\Support\Facades\Route;

class PracticeArea
{
    public $name;
    public $desc;

    public function __construct($name, $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }
}

class OurPartners
{
    public $name;
    public $role;
    public $photo;
    public $desc;

    public function __construct($name, $role, $photo, $desc)
    {
        $this->name = $name;
        $this->role = $role;
        $this->photo = $photo;
        $this->desc = $desc;
    }
}

$practice_areas = [
    new PracticeArea(
        'Employment',
        "Considering that the complexity of Indonesian employment regulations and its tendency to constantly change, we understand that the client will expect a through representation from Lex F&R Advocates in dealing with its employment related matters. Lex F&R Advocates always keep itself in alignment with he relevant updates on Indonesian employment regulation and utilize such knowledge in order to provide the most comprehensive and state of the art legal services to its client.
            <br><br>
        Lex F&R Advocates has advice and represent many of its client on termination of employment and severanc e matters, company regulations, employment contracts, mutual work agreement arrangements, pension funds, secondment arrangements, mandatory training and social security programs. Lex F&R has provide service in relation to expatriate matters, including but not limited to applic ation of work permits, visas, residency permits and all relevant approvals from the relevant authorized institution.
            <br><br>
        Not only that, but Lex F&R Advocates has also provide services in the field of Industrial Relationship Dispute, in order to provide full services for its client for all employment related matters. Lex F&R Advocates possess experience in representing its clients in a negotiations with the relevant employee/labor union, negotiations with the relevant Manpower Agency, and represented its client before the relevant Industrial Relations Court. We also offers additional services in the event that any criminal acts conducted to our client in relation to its employment reljationship, such as fraud and embezzl’ement, and on the remedies available to our client if they find themselves affected by such criminal acts. Sanggam Sianipar and Ricardo Manullang are our main contact for employment related matters.",
    ),
    new PracticeArea(
        'Capital Market',
        "Lex F&R Advoc ates understand that access to capital to fund expansion and operations is critical to any of its clientele to ensure their ability to meet its short- and long-term objectives. Hence, due to growing interest of our client to seek additional capital through capital market, We as a full-service firm, has also actively provide a broad range of legal services covering the entire spectrum of capital market to our list of clientele.
            <br><br>
        This legal services shall consist of counsel on Initial Public Offerings (IPOs) transaction, right issue transac tion, bond’ s issuance transac tion, and Securitizations and struc tured finance arrangement. Lex F&R Advocates also possess sufficient experience in dealing with complex legal structures and technical issues and is accustomed to provide solutions in accordance with the interest of its client.
            <br><br>
        We consistently position the client at the center of our services, treating their interest as our own interest, and in doing so have also successfully built up a very strong reputation in capital market practice. Febrianto Tarihoran is our main contact for capital market related matters.",
    ),
    new PracticeArea(
        'General Corporate',
        "Lex F&R Advocates team offers variety of services for general corporate matters to a private, domestic, and multinational clientele that covers all significant aspects which are necessary for the establishment and operation of a business within the territory of Republic of Indonesia.
            <br><br>
        Our Legal Services includes establishment of a limited liability company, applying for investment approvals and its relevant business permit, as well as draf ting Articles of Association, joint venture agreements, and other relevant corporate documents. Lex F&R Advocates has also provide its client with regulatory advice so that its client shall always comply with Indonesian Company Law as well as other relevant laws and regulations.
            <br><br>
        In addition, we also provide legal services with regards to Merger and Acquisition transaction, where we provide advice on transac tion struc ture, which includes preparation of the sale and purchase transac tion and drafting all the relevant agreements, management and succession, legal due diligence reporting, establishment of new entities, preparation of the necessary internal corporate documents and approvals, as well as completion of regulatory filings to the relevant authorized institution.
            <br><br>
        Lex F&R Advocates in providing its legal services for the general
        corporate matters shall always tailor the client transaction to be in compliance with the relevant laws and regulations without compromising the financial interest of that said client. Sanggam Sianipar is our main contact for General Corporate related matters.",
    ),
    new PracticeArea(
        'Dispute Resolution',
        "Lex F&R Advocates provide full services to its clients for Dispute Resolution matters. We focus on protecting the interests of our clients who have been involved in dispute proceedings and other contentious situations in Indonesia. Lex F&R Advocates has experience in a wide range of civil disputes, including alternative dispute settlement mechanisms, and has also assisted various multinational companies with contentious employment matters, bankruptcy, and suspension over debt payment obligations, as well as criminal litigation, such as fraud, embezzlement, and narcotics-related matters.
            <br><br>
        Over the years, Lex F&R Advocates has been involved in many high-profile litigations in Indonesia. Our Dispute Resolution practice group has extensive experience representing individuals, private and public companies, multinational corporations, state-owned enterprises, as well as governmental agencies and institutions in complex litigation matters. Febrianto Tarihoran is our main contact for dispute resolution matters.",
    ),
    new PracticeArea(
        'Natural Resources',
        "Lex F&R Advocates provide full services to its clients for Natural Resources matters, with a focus on the mining as well as oil and gas sectors. As a full-service law firm, the advice we provide to the mining sector covers the entire range of practice areas for the purpose of offering thorough and comprehensive solutions, from project planning to land rehabilitation processes. We provide counsel to our clientele in relation to land acquisition matters, regulatory and conservation matters, financing aspects, manpower issues, natural resources and forestry law, and mine-closure requirements, in addition to handling IPOs, debt issuances, and mergers and acquisitions in the mining sectors.
            <br><br>
        On top of that, Lex F&R Advocates’ energy and oil and gas practice group also provides top-quality legal services to many of its clients engaged in the business activities of oil and gas, geothermal, and renewable energy sectors. In doing so, Lex F&R Advocates always offers counsel that covers the entire range of practice areas, thereby allowing us to deliver world-class legal services accompanied by thorough and comprehensive commercial results for our clients in a practical and cost-effective way.
            <br><br>
        Among the services we offer are drafting and reviewing oil & gas agreements, advising on the regulatory regime, government policy and guidelines, interpreting newly issued statutory provisions, and providing representation before the relevant authorized institutions. We also provide counsel on sale and acquisition of assets or shares matters; tender processes; oil, gas, and geothermal rights; drilling and operating agreements; joint venture agreements; oil, gas, and geothermal energy purchase and sale agreements; and supply and transportation contracts.
            <br><br>
        Febrianto Tarihoran and Sanggam Sianipar are our main contacts for natural resources matters.",
    ),
    new PracticeArea(
        'Intellectual Property',
        "Lex F&R Advocates understand that Indonesia’s intellectual property laws have experienced significant amendments in recent years. Members of Lex F&R Advocates are familiar with all aspects of intellectual property laws and provide a full range of intellectual property services to clients.
            <br><br>
        In addition, Lex F&R Advocates not only provides services in the administration and application sectors but also offers support when disputes arise concerning intellectual property transactions for clients. This ensures that clients receive comprehensive support from Lex F&R Advocates, affirming our role as a full-service firm.
            <br><br>
        Febrianto Tarihoran and Sanggam Sianipar are our main contacts for intellectual property-related matters.",
    ),
];

$our_partners = [
    new OurPartners(
        'Febrianto Tarihoran',
        'Managing Partner',
        'uploads/our_partners/febrianto-tarihoran.png',
        "Sarjana Hukum (S.H.), Faculty of Law, University of Atmajaya Yogyakarta (2008) Post Graduate (Master) in Laws (M.H.) University of Gadjah Mada (2014)<br><br>
        Mr. Tarihoran is the Founding and Managing Partner of Lex F&R Advocates. During the course of his advocate career, Mr. Tarihoran has also been involved in the establishment of foreign and domestic investment companies as well as in the related corporate matters, such as those that pertain to merger & acquisition, land, securities encumbrance, commercial litigation, criminal litigation, debt restructuring and bankruptcy, civil disputes and anti-monopoly and arbitration matters. Mr. Tarihoran is also a member of Indonesian Advocates Association.<br><br>
        Prior to establishing Lex F&R Advocates, Mr. Tarihoran has also work in three other Indonesian prominent law firms",
    ),
    new OurPartners(
        'SANGGAM I.P. SIANIPAR',
        'Senior Partner',
        'uploads/our_partners/sanggam-sianipar.png',
        "Sarjana Hukum (S.H.), Faculty of Law, University of Kristen Indonesia (2013). Post Graduate (Master) in Law (M.H.), University of Kristen Indonesia (2018).<br><br>
        Mr. sanggam then got an advocate license from PERADI in 2015.<br><br>
        Mr. Sanggam is also an expert in business law and bankruptcy law. Has been education specialized in capital market legal consultant (HKHPM) and was appointed as Curators and administrators in 2020 at IKAPI (Ikatan Kurator dan Pengurus ).",
    ),
    new OurPartners(
        'RICARDO MANULLANG',
        'Senior Partner',
        'uploads/our_partners/ricardo-manullang.png',
        "Sarjana Hukum (S.H.), Faculty of Law, Dharma Andigha School of Law (2015)<br><br>
        Mr. Manullang is a Partner in Commercial Litigation Practice Group of F&R Advocates. During the course of his advocate career, Mr. Manullang has advised local and international client's for broad relating to debt restructuring and bankruptcy, civil disputes and intellectual property rights. Mr. Manullang is also a member of Indonesian Advocates Association.<br><br>
        Prior to join with F&R Advocates, Mr. Manulang has also work in two other Indonesian prominent law firms.",
    ),
];

Route::get('/', function () use ($practice_areas, $our_partners) {
    return view('home', [
        'practice_areas' => $practice_areas,
        'our_partners' => $our_partners,
    ]);
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/practice-areas', function () use ($practice_areas) {
    return view('practice-areas', ['practice_areas' => $practice_areas]);
})->name('practice-areas');

Route::get('/practice-areas/{slug}', function ($slug) use ($practice_areas) {
    foreach ($practice_areas as $area) {
        if (Str::slug($area->name) == $slug) {
            $selected_area = $area;
            break;
        }
    }
    return view('practice-areas-detail', ['area' => $selected_area, 'practice_areas' => $practice_areas]);
})->name('practice-areas.detail');

Route::get('/our-partners', function () use ($our_partners) {
    return view('our-partners', ['our_partners' => $our_partners]);
})->name('our-partners');

Route::get('/our-partners/{slug}', function ($slug) use ($our_partners) {
    foreach ($our_partners as $item) {
        if (Str::slug($item->name) == $slug) {
            $selected_partner = $item;
            break;
        }
    }
    return view('our-partners-detail', ['partner' => $selected_partner]);
})->name('our-partners.detail');

Route::get('/our-clients', function () {
    return view('our-clients');
})->name('our-clients');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
