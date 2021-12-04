<?php
if (!class_exists('Mantrabrain_Theme_Helper')) {

	class Mantrabrain_Theme_Helper
	{

		static function font_awesome_icon_list()
		{
			$fontawesome =

				array(

					"fa-500px" => "f26e",

					"fa-accessible-icon" => "f368",

					"fa-accusoft" => "f369",

					"fa-acquisitions-incorporated" => "f6af",

					"fa-ad" => "f641",

					"fa-address-book" => "f2b9",

					"fa-address-card" => "f2bb",

					"fa-adjust" => "f042",

					"fa-adn" => "f170",

					"fa-adversal" => "f36a",

					"fa-affiliatetheme" => "f36b",

					"fa-air-freshener" => "f5d0",

					"fa-airbnb" => "f834",

					"fa-algolia" => "f36c",

					"fa-align-center" => "f037",

					"fa-align-justify" => "f039",

					"fa-align-left" => "f036",

					"fa-align-right" => "f038",

					"fa-alipay" => "f642",

					"fa-allergies" => "f461",

					"fa-amazon" => "f270",

					"fa-amazon-pay" => "f42c",

					"fa-ambulance" => "f0f9",

					"fa-american-sign-language-interpreting" => "f2a3",

					"fa-amilia" => "f36d",

					"fa-anchor" => "f13d",

					"fa-android" => "f17b",

					"fa-angellist" => "f209",

					"fa-angle-double-down" => "f103",

					"fa-angle-double-left" => "f100",

					"fa-angle-double-right" => "f101",

					"fa-angle-double-up" => "f102",

					"fa-angle-down" => "f107",

					"fa-angle-left" => "f104",

					"fa-angle-right" => "f105",

					"fa-angle-up" => "f106",

					"fa-angry" => "f556",

					"fa-angrycreative" => "f36e",

					"fa-angular" => "f420",

					"fa-ankh" => "f644",

					"fa-app-store" => "f36f",

					"fa-app-store-ios" => "f370",

					"fa-apper" => "f371",

					"fa-apple" => "f179",

					"fa-apple-alt" => "f5d1",

					"fa-apple-pay" => "f415",

					"fa-archive" => "f187",

					"fa-archway" => "f557",

					"fa-arrow-alt-circle-down" => "f358",

					"fa-arrow-alt-circle-left" => "f359",

					"fa-arrow-alt-circle-right" => "f35a",

					"fa-arrow-alt-circle-up" => "f35b",

					"fa-arrow-circle-down" => "f0ab",

					"fa-arrow-circle-left" => "f0a8",

					"fa-arrow-circle-right" => "f0a9",

					"fa-arrow-circle-up" => "f0aa",

					"fa-arrow-down" => "f063",

					"fa-arrow-left" => "f060",

					"fa-arrow-right" => "f061",

					"fa-arrow-up" => "f062",

					"fa-arrows-alt" => "f0b2",

					"fa-arrows-alt-h" => "f337",

					"fa-arrows-alt-v" => "f338",

					"fa-artstation" => "f77a",

					"fa-assistive-listening-systems" => "f2a2",

					"fa-asterisk" => "f069",

					"fa-asymmetrik" => "f372",

					"fa-at" => "f1fa",

					"fa-atlas" => "f558",

					"fa-atlassian" => "f77b",

					"fa-atom" => "f5d2",

					"fa-audible" => "f373",

					"fa-audio-description" => "f29e",

					"fa-autoprefixer" => "f41c",

					"fa-avianex" => "f374",

					"fa-aviato" => "f421",

					"fa-award" => "f559",

					"fa-aws" => "f375",

					"fa-baby" => "f77c",

					"fa-baby-carriage" => "f77d",

					"fa-backspace" => "f55a",

					"fa-backward" => "f04a",

					"fa-bacon" => "f7e5",

					"fa-bacteria" => "e059",

					"fa-bacterium" => "e05a",

					"fa-bahai" => "f666",

					"fa-balance-scale" => "f24e",

					"fa-balance-scale-left" => "f515",

					"fa-balance-scale-right" => "f516",

					"fa-ban" => "f05e",

					"fa-band-aid" => "f462",

					"fa-bandcamp" => "f2d5",

					"fa-barcode" => "f02a",

					"fa-bars" => "f0c9",

					"fa-baseball-ball" => "f433",

					"fa-basketball-ball" => "f434",

					"fa-bath" => "f2cd",

					"fa-battery-empty" => "f244",

					"fa-battery-full" => "f240",

					"fa-battery-half" => "f242",

					"fa-battery-quarter" => "f243",

					"fa-battery-three-quarters" => "f241",

					"fa-battle-net" => "f835",

					"fa-bed" => "f236",

					"fa-beer" => "f0fc",

					"fa-behance" => "f1b4",

					"fa-behance-square" => "f1b5",

					"fa-bell" => "f0f3",

					"fa-bell-slash" => "f1f6",

					"fa-bezier-curve" => "f55b",

					"fa-bible" => "f647",

					"fa-bicycle" => "f206",

					"fa-biking" => "f84a",

					"fa-bimobject" => "f378",

					"fa-binoculars" => "f1e5",

					"fa-biohazard" => "f780",

					"fa-birthday-cake" => "f1fd",

					"fa-bitbucket" => "f171",

					"fa-bitcoin" => "f379",

					"fa-bity" => "f37a",

					"fa-black-tie" => "f27e",

					"fa-blackberry" => "f37b",

					"fa-blender" => "f517",

					"fa-blender-phone" => "f6b6",

					"fa-blind" => "f29d",

					"fa-blog" => "f781",

					"fa-blogger" => "f37c",

					"fa-blogger-b" => "f37d",

					"fa-bluetooth" => "f293",

					"fa-bluetooth-b" => "f294",

					"fa-bold" => "f032",

					"fa-bolt" => "f0e7",

					"fa-bomb" => "f1e2",

					"fa-bone" => "f5d7",

					"fa-bong" => "f55c",

					"fa-book" => "f02d",

					"fa-book-dead" => "f6b7",

					"fa-book-medical" => "f7e6",

					"fa-book-open" => "f518",

					"fa-book-reader" => "f5da",

					"fa-bookmark" => "f02e",

					"fa-bootstrap" => "f836",

					"fa-border-all" => "f84c",

					"fa-border-none" => "f850",

					"fa-border-style" => "f853",

					"fa-bowling-ball" => "f436",

					"fa-box" => "f466",

					"fa-box-open" => "f49e",

					"fa-box-tissue" => "e05b",

					"fa-boxes" => "f468",

					"fa-braille" => "f2a1",

					"fa-brain" => "f5dc",

					"fa-bread-slice" => "f7ec",

					"fa-briefcase" => "f0b1",

					"fa-briefcase-medical" => "f469",

					"fa-broadcast-tower" => "f519",

					"fa-broom" => "f51a",

					"fa-brush" => "f55d",

					"fa-btc" => "f15a",

					"fa-buffer" => "f837",

					"fa-bug" => "f188",

					"fa-building" => "f1ad",

					"fa-bullhorn" => "f0a1",

					"fa-bullseye" => "f140",

					"fa-burn" => "f46a",

					"fa-buromobelexperte" => "f37f",

					"fa-bus" => "f207",

					"fa-bus-alt" => "f55e",

					"fa-business-time" => "f64a",

					"fa-buy-n-large" => "f8a6",

					"fa-buysellads" => "f20d",

					"fa-calculator" => "f1ec",

					"fa-calendar" => "f133",

					"fa-calendar-alt" => "f073",

					"fa-calendar-check" => "f274",

					"fa-calendar-day" => "f783",

					"fa-calendar-minus" => "f272",

					"fa-calendar-plus" => "f271",

					"fa-calendar-times" => "f273",

					"fa-calendar-week" => "f784",

					"fa-camera" => "f030",

					"fa-camera-retro" => "f083",

					"fa-campground" => "f6bb",

					"fa-canadian-maple-leaf" => "f785",

					"fa-candy-cane" => "f786",

					"fa-cannabis" => "f55f",

					"fa-capsules" => "f46b",

					"fa-car" => "f1b9",

					"fa-car-alt" => "f5de",

					"fa-car-battery" => "f5df",

					"fa-car-crash" => "f5e1",

					"fa-car-side" => "f5e4",

					"fa-caravan" => "f8ff",

					"fa-caret-down" => "f0d7",

					"fa-caret-left" => "f0d9",

					"fa-caret-right" => "f0da",

					"fa-caret-square-down" => "f150",

					"fa-caret-square-left" => "f191",

					"fa-caret-square-right" => "f152",

					"fa-caret-square-up" => "f151",

					"fa-caret-up" => "f0d8",

					"fa-carrot" => "f787",

					"fa-cart-arrow-down" => "f218",

					"fa-cart-plus" => "f217",

					"fa-cash-register" => "f788",

					"fa-cat" => "f6be",

					"fa-cc-amazon-pay" => "f42d",

					"fa-cc-amex" => "f1f3",

					"fa-cc-apple-pay" => "f416",

					"fa-cc-diners-club" => "f24c",

					"fa-cc-discover" => "f1f2",

					"fa-cc-jcb" => "f24b",

					"fa-cc-mastercard" => "f1f1",

					"fa-cc-paypal" => "f1f4",

					"fa-cc-stripe" => "f1f5",

					"fa-cc-visa" => "f1f0",

					"fa-centercode" => "f380",

					"fa-centos" => "f789",

					"fa-certificate" => "f0a3",

					"fa-chair" => "f6c0",

					"fa-chalkboard" => "f51b",

					"fa-chalkboard-teacher" => "f51c",

					"fa-charging-station" => "f5e7",

					"fa-chart-area" => "f1fe",

					"fa-chart-bar" => "f080",

					"fa-chart-line" => "f201",

					"fa-chart-pie" => "f200",

					"fa-check" => "f00c",

					"fa-check-circle" => "f058",

					"fa-check-double" => "f560",

					"fa-check-square" => "f14a",

					"fa-cheese" => "f7ef",

					"fa-chess" => "f439",

					"fa-chess-bishop" => "f43a",

					"fa-chess-board" => "f43c",

					"fa-chess-king" => "f43f",

					"fa-chess-knight" => "f441",

					"fa-chess-pawn" => "f443",

					"fa-chess-queen" => "f445",

					"fa-chess-rook" => "f447",

					"fa-chevron-circle-down" => "f13a",

					"fa-chevron-circle-left" => "f137",

					"fa-chevron-circle-right" => "f138",

					"fa-chevron-circle-up" => "f139",

					"fa-chevron-down" => "f078",

					"fa-chevron-left" => "f053",

					"fa-chevron-right" => "f054",

					"fa-chevron-up" => "f077",

					"fa-child" => "f1ae",

					"fa-chrome" => "f268",

					"fa-chromecast" => "f838",

					"fa-church" => "f51d",

					"fa-circle" => "f111",

					"fa-circle-notch" => "f1ce",

					"fa-city" => "f64f",

					"fa-clinic-medical" => "f7f2",

					"fa-clipboard" => "f328",

					"fa-clipboard-check" => "f46c",

					"fa-clipboard-list" => "f46d",

					"fa-clock" => "f017",

					"fa-clone" => "f24d",

					"fa-closed-captioning" => "f20a",

					"fa-cloud" => "f0c2",

					"fa-cloud-download-alt" => "f381",

					"fa-cloud-meatball" => "f73b",

					"fa-cloud-moon" => "f6c3",

					"fa-cloud-moon-rain" => "f73c",

					"fa-cloud-rain" => "f73d",

					"fa-cloud-showers-heavy" => "f740",

					"fa-cloud-sun" => "f6c4",

					"fa-cloud-sun-rain" => "f743",

					"fa-cloud-upload-alt" => "f382",

					"fa-cloudflare" => "e07d",

					"fa-cloudscale" => "f383",

					"fa-cloudsmith" => "f384",

					"fa-cloudversify" => "f385",

					"fa-cocktail" => "f561",

					"fa-code" => "f121",

					"fa-code-branch" => "f126",

					"fa-codepen" => "f1cb",

					"fa-codiepie" => "f284",

					"fa-coffee" => "f0f4",

					"fa-cog" => "f013",

					"fa-cogs" => "f085",

					"fa-coins" => "f51e",

					"fa-columns" => "f0db",

					"fa-comment" => "f075",

					"fa-comment-alt" => "f27a",

					"fa-comment-dollar" => "f651",

					"fa-comment-dots" => "f4ad",

					"fa-comment-medical" => "f7f5",

					"fa-comment-slash" => "f4b3",

					"fa-comments" => "f086",

					"fa-comments-dollar" => "f653",

					"fa-compact-disc" => "f51f",

					"fa-compass" => "f14e",

					"fa-compress" => "f066",

					"fa-compress-alt" => "f422",

					"fa-compress-arrows-alt" => "f78c",

					"fa-concierge-bell" => "f562",

					"fa-confluence" => "f78d",

					"fa-connectdevelop" => "f20e",

					"fa-contao" => "f26d",

					"fa-cookie" => "f563",

					"fa-cookie-bite" => "f564",

					"fa-copy" => "f0c5",

					"fa-copyright" => "f1f9",

					"fa-cotton-bureau" => "f89e",

					"fa-couch" => "f4b8",

					"fa-cpanel" => "f388",

					"fa-creative-commons" => "f25e",

					"fa-creative-commons-by" => "f4e7",

					"fa-creative-commons-nc" => "f4e8",

					"fa-creative-commons-nc-eu" => "f4e9",

					"fa-creative-commons-nc-jp" => "f4ea",

					"fa-creative-commons-nd" => "f4eb",

					"fa-creative-commons-pd" => "f4ec",

					"fa-creative-commons-pd-alt" => "f4ed",

					"fa-creative-commons-remix" => "f4ee",

					"fa-creative-commons-sa" => "f4ef",

					"fa-creative-commons-sampling" => "f4f0",

					"fa-creative-commons-sampling-plus" => "f4f1",

					"fa-creative-commons-share" => "f4f2",

					"fa-creative-commons-zero" => "f4f3",

					"fa-credit-card" => "f09d",

					"fa-critical-role" => "f6c9",

					"fa-crop" => "f125",

					"fa-crop-alt" => "f565",

					"fa-cross" => "f654",

					"fa-crosshairs" => "f05b",

					"fa-crow" => "f520",

					"fa-crown" => "f521",

					"fa-crutch" => "f7f7",

					"fa-css3" => "f13c",

					"fa-css3-alt" => "f38b",

					"fa-cube" => "f1b2",

					"fa-cubes" => "f1b3",

					"fa-cut" => "f0c4",

					"fa-cuttlefish" => "f38c",

					"fa-d-and-d" => "f38d",

					"fa-d-and-d-beyond" => "f6ca",

					"fa-dailymotion" => "e052",

					"fa-dashcube" => "f210",

					"fa-database" => "f1c0",

					"fa-deaf" => "f2a4",

					"fa-deezer" => "e077",

					"fa-delicious" => "f1a5",

					"fa-democrat" => "f747",

					"fa-deploydog" => "f38e",

					"fa-deskpro" => "f38f",

					"fa-desktop" => "f108",

					"fa-dev" => "f6cc",

					"fa-deviantart" => "f1bd",

					"fa-dharmachakra" => "f655",

					"fa-dhl" => "f790",

					"fa-diagnoses" => "f470",

					"fa-diaspora" => "f791",

					"fa-dice" => "f522",

					"fa-dice-d20" => "f6cf",

					"fa-dice-d6" => "f6d1",

					"fa-dice-five" => "f523",

					"fa-dice-four" => "f524",

					"fa-dice-one" => "f525",

					"fa-dice-six" => "f526",

					"fa-dice-three" => "f527",

					"fa-dice-two" => "f528",

					"fa-digg" => "f1a6",

					"fa-digital-ocean" => "f391",

					"fa-digital-tachograph" => "f566",

					"fa-directions" => "f5eb",

					"fa-discord" => "f392",

					"fa-discourse" => "f393",

					"fa-disease" => "f7fa",

					"fa-divide" => "f529",

					"fa-dizzy" => "f567",

					"fa-dna" => "f471",

					"fa-dochub" => "f394",

					"fa-docker" => "f395",

					"fa-dog" => "f6d3",

					"fa-dollar-sign" => "f155",

					"fa-dolly" => "f472",

					"fa-dolly-flatbed" => "f474",

					"fa-donate" => "f4b9",

					"fa-door-closed" => "f52a",

					"fa-door-open" => "f52b",

					"fa-dot-circle" => "f192",

					"fa-dove" => "f4ba",

					"fa-download" => "f019",

					"fa-draft2digital" => "f396",

					"fa-drafting-compass" => "f568",

					"fa-dragon" => "f6d5",

					"fa-draw-polygon" => "f5ee",

					"fa-dribbble" => "f17d",

					"fa-dribbble-square" => "f397",

					"fa-dropbox" => "f16b",

					"fa-drum" => "f569",

					"fa-drum-steelpan" => "f56a",

					"fa-drumstick-bite" => "f6d7",

					"fa-drupal" => "f1a9",

					"fa-dumbbell" => "f44b",

					"fa-dumpster" => "f793",

					"fa-dumpster-fire" => "f794",

					"fa-dungeon" => "f6d9",

					"fa-dyalog" => "f399",

					"fa-earlybirds" => "f39a",

					"fa-ebay" => "f4f4",

					"fa-edge" => "f282",

					"fa-edge-legacy" => "e078",

					"fa-edit" => "f044",

					"fa-egg" => "f7fb",

					"fa-eject" => "f052",

					"fa-elementor" => "f430",

					"fa-ellipsis-h" => "f141",

					"fa-ellipsis-v" => "f142",

					"fa-ello" => "f5f1",

					"fa-ember" => "f423",

					"fa-empire" => "f1d1",

					"fa-envelope" => "f0e0",

					"fa-envelope-open" => "f2b6",

					"fa-envelope-open-text" => "f658",

					"fa-envelope-square" => "f199",

					"fa-envira" => "f299",

					"fa-equals" => "f52c",

					"fa-eraser" => "f12d",

					"fa-erlang" => "f39d",

					"fa-ethereum" => "f42e",

					"fa-ethernet" => "f796",

					"fa-etsy" => "f2d7",

					"fa-euro-sign" => "f153",

					"fa-evernote" => "f839",

					"fa-exchange-alt" => "f362",

					"fa-exclamation" => "f12a",

					"fa-exclamation-circle" => "f06a",

					"fa-exclamation-triangle" => "f071",

					"fa-expand" => "f065",

					"fa-expand-alt" => "f424",

					"fa-expand-arrows-alt" => "f31e",

					"fa-expeditedssl" => "f23e",

					"fa-external-link-alt" => "f35d",

					"fa-external-link-square-alt" => "f360",

					"fa-eye" => "f06e",

					"fa-eye-dropper" => "f1fb",

					"fa-eye-slash" => "f070",

					"fa-facebook" => "f09a",

					"fa-facebook-f" => "f39e",

					"fa-facebook-messenger" => "f39f",

					"fa-facebook-square" => "f082",

					"fa-fan" => "f863",

					"fa-fantasy-flight-games" => "f6dc",

					"fa-fast-backward" => "f049",

					"fa-fast-forward" => "f050",

					"fa-faucet" => "e005",

					"fa-fax" => "f1ac",

					"fa-feather" => "f52d",

					"fa-feather-alt" => "f56b",

					"fa-fedex" => "f797",

					"fa-fedora" => "f798",

					"fa-female" => "f182",

					"fa-fighter-jet" => "f0fb",

					"fa-figma" => "f799",

					"fa-file" => "f15b",

					"fa-file-alt" => "f15c",

					"fa-file-archive" => "f1c6",

					"fa-file-audio" => "f1c7",

					"fa-file-code" => "f1c9",

					"fa-file-contract" => "f56c",

					"fa-file-csv" => "f6dd",

					"fa-file-download" => "f56d",

					"fa-file-excel" => "f1c3",

					"fa-file-export" => "f56e",

					"fa-file-image" => "f1c5",

					"fa-file-import" => "f56f",

					"fa-file-invoice" => "f570",

					"fa-file-invoice-dollar" => "f571",

					"fa-file-medical" => "f477",

					"fa-file-medical-alt" => "f478",

					"fa-file-pdf" => "f1c1",

					"fa-file-powerpoint" => "f1c4",

					"fa-file-prescription" => "f572",

					"fa-file-signature" => "f573",

					"fa-file-upload" => "f574",

					"fa-file-video" => "f1c8",

					"fa-file-word" => "f1c2",

					"fa-fill" => "f575",

					"fa-fill-drip" => "f576",

					"fa-film" => "f008",

					"fa-filter" => "f0b0",

					"fa-fingerprint" => "f577",

					"fa-fire" => "f06d",

					"fa-fire-alt" => "f7e4",

					"fa-fire-extinguisher" => "f134",

					"fa-firefox" => "f269",

					"fa-firefox-browser" => "e007",

					"fa-first-aid" => "f479",

					"fa-first-order" => "f2b0",

					"fa-first-order-alt" => "f50a",

					"fa-firstdraft" => "f3a1",

					"fa-fish" => "f578",

					"fa-fist-raised" => "f6de",

					"fa-flag" => "f024",

					"fa-flag-checkered" => "f11e",

					"fa-flag-usa" => "f74d",

					"fa-flask" => "f0c3",

					"fa-flickr" => "f16e",

					"fa-flipboard" => "f44d",

					"fa-flushed" => "f579",

					"fa-fly" => "f417",

					"fa-folder" => "f07b",

					"fa-folder-minus" => "f65d",

					"fa-folder-open" => "f07c",

					"fa-folder-plus" => "f65e",

					"fa-font" => "f031",

					"fa-font-awesome" => "f2b4",

					"fa-font-awesome-alt" => "f35c",

					"fa-font-awesome-flag" => "f425",

					"fa-font-awesome-logo-full" => "f4e6",

					"fa-fonticons" => "f280",

					"fa-fonticons-fi" => "f3a2",

					"fa-football-ball" => "f44e",

					"fa-fort-awesome" => "f286",

					"fa-fort-awesome-alt" => "f3a3",

					"fa-forumbee" => "f211",

					"fa-forward" => "f04e",

					"fa-foursquare" => "f180",

					"fa-free-code-camp" => "f2c5",

					"fa-freebsd" => "f3a4",

					"fa-frog" => "f52e",

					"fa-frown" => "f119",

					"fa-frown-open" => "f57a",

					"fa-fulcrum" => "f50b",

					"fa-funnel-dollar" => "f662",

					"fa-futbol" => "f1e3",

					"fa-galactic-republic" => "f50c",

					"fa-galactic-senate" => "f50d",

					"fa-gamepad" => "f11b",

					"fa-gas-pump" => "f52f",

					"fa-gavel" => "f0e3",

					"fa-gem" => "f3a5",

					"fa-genderless" => "f22d",

					"fa-get-pocket" => "f265",

					"fa-gg" => "f260",

					"fa-gg-circle" => "f261",

					"fa-ghost" => "f6e2",

					"fa-gift" => "f06b",

					"fa-gifts" => "f79c",

					"fa-git" => "f1d3",

					"fa-git-alt" => "f841",

					"fa-git-square" => "f1d2",

					"fa-github" => "f09b",

					"fa-github-alt" => "f113",

					"fa-github-square" => "f092",

					"fa-gitkraken" => "f3a6",

					"fa-gitlab" => "f296",

					"fa-gitter" => "f426",

					"fa-glass-cheers" => "f79f",

					"fa-glass-martini" => "f000",

					"fa-glass-martini-alt" => "f57b",

					"fa-glass-whiskey" => "f7a0",

					"fa-glasses" => "f530",

					"fa-glide" => "f2a5",

					"fa-glide-g" => "f2a6",

					"fa-globe" => "f0ac",

					"fa-globe-africa" => "f57c",

					"fa-globe-americas" => "f57d",

					"fa-globe-asia" => "f57e",

					"fa-globe-europe" => "f7a2",

					"fa-gofore" => "f3a7",

					"fa-golf-ball" => "f450",

					"fa-goodreads" => "f3a8",

					"fa-goodreads-g" => "f3a9",

					"fa-google" => "f1a0",

					"fa-google-drive" => "f3aa",

					"fa-google-pay" => "e079",

					"fa-google-play" => "f3ab",

					"fa-google-plus" => "f2b3",

					"fa-google-plus-g" => "f0d5",

					"fa-google-plus-square" => "f0d4",

					"fa-google-wallet" => "f1ee",

					"fa-gopuram" => "f664",

					"fa-graduation-cap" => "f19d",

					"fa-gratipay" => "f184",

					"fa-grav" => "f2d6",

					"fa-greater-than" => "f531",

					"fa-greater-than-equal" => "f532",

					"fa-grimace" => "f57f",

					"fa-grin" => "f580",

					"fa-grin-alt" => "f581",

					"fa-grin-beam" => "f582",

					"fa-grin-beam-sweat" => "f583",

					"fa-grin-hearts" => "f584",

					"fa-grin-squint" => "f585",

					"fa-grin-squint-tears" => "f586",

					"fa-grin-stars" => "f587",

					"fa-grin-tears" => "f588",

					"fa-grin-tongue" => "f589",

					"fa-grin-tongue-squint" => "f58a",

					"fa-grin-tongue-wink" => "f58b",

					"fa-grin-wink" => "f58c",

					"fa-grip-horizontal" => "f58d",

					"fa-grip-lines" => "f7a4",

					"fa-grip-lines-vertical" => "f7a5",

					"fa-grip-vertical" => "f58e",

					"fa-gripfire" => "f3ac",

					"fa-grunt" => "f3ad",

					"fa-guilded" => "e07e",

					"fa-guitar" => "f7a6",

					"fa-gulp" => "f3ae",

					"fa-h-square" => "f0fd",

					"fa-hacker-news" => "f1d4",

					"fa-hacker-news-square" => "f3af",

					"fa-hackerrank" => "f5f7",

					"fa-hamburger" => "f805",

					"fa-hammer" => "f6e3",

					"fa-hamsa" => "f665",

					"fa-hand-holding" => "f4bd",

					"fa-hand-holding-heart" => "f4be",

					"fa-hand-holding-medical" => "e05c",

					"fa-hand-holding-usd" => "f4c0",

					"fa-hand-holding-water" => "f4c1",

					"fa-hand-lizard" => "f258",

					"fa-hand-middle-finger" => "f806",

					"fa-hand-paper" => "f256",

					"fa-hand-peace" => "f25b",

					"fa-hand-point-down" => "f0a7",

					"fa-hand-point-left" => "f0a5",

					"fa-hand-point-right" => "f0a4",

					"fa-hand-point-up" => "f0a6",

					"fa-hand-pointer" => "f25a",

					"fa-hand-rock" => "f255",

					"fa-hand-scissors" => "f257",

					"fa-hand-sparkles" => "e05d",

					"fa-hand-spock" => "f259",

					"fa-hands" => "f4c2",

					"fa-hands-helping" => "f4c4",

					"fa-hands-wash" => "e05e",

					"fa-handshake" => "f2b5",

					"fa-handshake-alt-slash" => "e05f",

					"fa-handshake-slash" => "e060",

					"fa-hanukiah" => "f6e6",

					"fa-hard-hat" => "f807",

					"fa-hashtag" => "f292",

					"fa-hat-cowboy" => "f8c0",

					"fa-hat-cowboy-side" => "f8c1",

					"fa-hat-wizard" => "f6e8",

					"fa-hdd" => "f0a0",

					"fa-head-side-cough" => "e061",

					"fa-head-side-cough-slash" => "e062",

					"fa-head-side-mask" => "e063",

					"fa-head-side-virus" => "e064",

					"fa-heading" => "f1dc",

					"fa-headphones" => "f025",

					"fa-headphones-alt" => "f58f",

					"fa-headset" => "f590",

					"fa-heart" => "f004",

					"fa-heart-broken" => "f7a9",

					"fa-heartbeat" => "f21e",

					"fa-helicopter" => "f533",

					"fa-highlighter" => "f591",

					"fa-hiking" => "f6ec",

					"fa-hippo" => "f6ed",

					"fa-hips" => "f452",

					"fa-hire-a-helper" => "f3b0",

					"fa-history" => "f1da",

					"fa-hive" => "e07f",

					"fa-hockey-puck" => "f453",

					"fa-holly-berry" => "f7aa",

					"fa-home" => "f015",

					"fa-hooli" => "f427",

					"fa-hornbill" => "f592",

					"fa-horse" => "f6f0",

					"fa-horse-head" => "f7ab",

					"fa-hospital" => "f0f8",

					"fa-hospital-alt" => "f47d",

					"fa-hospital-symbol" => "f47e",

					"fa-hospital-user" => "f80d",

					"fa-hot-tub" => "f593",

					"fa-hotdog" => "f80f",

					"fa-hotel" => "f594",

					"fa-hotjar" => "f3b1",

					"fa-hourglass" => "f254",

					"fa-hourglass-end" => "f253",

					"fa-hourglass-half" => "f252",

					"fa-hourglass-start" => "f251",

					"fa-house-damage" => "f6f1",

					"fa-house-user" => "e065",

					"fa-houzz" => "f27c",

					"fa-hryvnia" => "f6f2",

					"fa-html5" => "f13b",

					"fa-hubspot" => "f3b2",

					"fa-i-cursor" => "f246",

					"fa-ice-cream" => "f810",

					"fa-icicles" => "f7ad",

					"fa-icons" => "f86d",

					"fa-id-badge" => "f2c1",

					"fa-id-card" => "f2c2",

					"fa-id-card-alt" => "f47f",

					"fa-ideal" => "e013",

					"fa-igloo" => "f7ae",

					"fa-image" => "f03e",

					"fa-images" => "f302",

					"fa-imdb" => "f2d8",

					"fa-inbox" => "f01c",

					"fa-indent" => "f03c",

					"fa-industry" => "f275",

					"fa-infinity" => "f534",

					"fa-info" => "f129",

					"fa-info-circle" => "f05a",

					"fa-innosoft" => "e080",

					"fa-instagram" => "f16d",

					"fa-instagram-square" => "e055",

					"fa-instalod" => "e081",

					"fa-intercom" => "f7af",

					"fa-internet-explorer" => "f26b",

					"fa-invision" => "f7b0",

					"fa-ioxhost" => "f208",

					"fa-italic" => "f033",

					"fa-itch-io" => "f83a",

					"fa-itunes" => "f3b4",

					"fa-itunes-note" => "f3b5",

					"fa-java" => "f4e4",

					"fa-jedi" => "f669",

					"fa-jedi-order" => "f50e",

					"fa-jenkins" => "f3b6",

					"fa-jira" => "f7b1",

					"fa-joget" => "f3b7",

					"fa-joint" => "f595",

					"fa-joomla" => "f1aa",

					"fa-journal-whills" => "f66a",

					"fa-js" => "f3b8",

					"fa-js-square" => "f3b9",

					"fa-jsfiddle" => "f1cc",

					"fa-kaaba" => "f66b",

					"fa-kaggle" => "f5fa",

					"fa-key" => "f084",

					"fa-keybase" => "f4f5",

					"fa-keyboard" => "f11c",

					"fa-keycdn" => "f3ba",

					"fa-khanda" => "f66d",

					"fa-kickstarter" => "f3bb",

					"fa-kickstarter-k" => "f3bc",

					"fa-kiss" => "f596",

					"fa-kiss-beam" => "f597",

					"fa-kiss-wink-heart" => "f598",

					"fa-kiwi-bird" => "f535",

					"fa-korvue" => "f42f",

					"fa-landmark" => "f66f",

					"fa-language" => "f1ab",

					"fa-laptop" => "f109",

					"fa-laptop-code" => "f5fc",

					"fa-laptop-house" => "e066",

					"fa-laptop-medical" => "f812",

					"fa-laravel" => "f3bd",

					"fa-lastfm" => "f202",

					"fa-lastfm-square" => "f203",

					"fa-laugh" => "f599",

					"fa-laugh-beam" => "f59a",

					"fa-laugh-squint" => "f59b",

					"fa-laugh-wink" => "f59c",

					"fa-layer-group" => "f5fd",

					"fa-leaf" => "f06c",

					"fa-leanpub" => "f212",

					"fa-lemon" => "f094",

					"fa-less" => "f41d",

					"fa-less-than" => "f536",

					"fa-less-than-equal" => "f537",

					"fa-level-down-alt" => "f3be",

					"fa-level-up-alt" => "f3bf",

					"fa-life-ring" => "f1cd",

					"fa-lightbulb" => "f0eb",

					"fa-line" => "f3c0",

					"fa-link" => "f0c1",

					"fa-linkedin" => "f08c",

					"fa-linkedin-in" => "f0e1",

					"fa-linode" => "f2b8",

					"fa-linux" => "f17c",

					"fa-lira-sign" => "f195",

					"fa-list" => "f03a",

					"fa-list-alt" => "f022",

					"fa-list-ol" => "f0cb",

					"fa-list-ul" => "f0ca",

					"fa-location-arrow" => "f124",

					"fa-lock" => "f023",

					"fa-lock-open" => "f3c1",

					"fa-long-arrow-alt-down" => "f309",

					"fa-long-arrow-alt-left" => "f30a",

					"fa-long-arrow-alt-right" => "f30b",

					"fa-long-arrow-alt-up" => "f30c",

					"fa-low-vision" => "f2a8",

					"fa-luggage-cart" => "f59d",

					"fa-lungs" => "f604",

					"fa-lungs-virus" => "e067",

					"fa-lyft" => "f3c3",

					"fa-magento" => "f3c4",

					"fa-magic" => "f0d0",

					"fa-magnet" => "f076",

					"fa-mail-bulk" => "f674",

					"fa-mailchimp" => "f59e",

					"fa-male" => "f183",

					"fa-mandalorian" => "f50f",

					"fa-map" => "f279",

					"fa-map-marked" => "f59f",

					"fa-map-marked-alt" => "f5a0",

					"fa-map-marker" => "f041",

					"fa-map-marker-alt" => "f3c5",

					"fa-map-pin" => "f276",

					"fa-map-signs" => "f277",

					"fa-markdown" => "f60f",

					"fa-marker" => "f5a1",

					"fa-mars" => "f222",

					"fa-mars-double" => "f227",

					"fa-mars-stroke" => "f229",

					"fa-mars-stroke-h" => "f22b",

					"fa-mars-stroke-v" => "f22a",

					"fa-mask" => "f6fa",

					"fa-mastodon" => "f4f6",

					"fa-maxcdn" => "f136",

					"fa-mdb" => "f8ca",

					"fa-medal" => "f5a2",

					"fa-medapps" => "f3c6",

					"fa-medium" => "f23a",

					"fa-medium-m" => "f3c7",

					"fa-medkit" => "f0fa",

					"fa-medrt" => "f3c8",

					"fa-meetup" => "f2e0",

					"fa-megaport" => "f5a3",

					"fa-meh" => "f11a",

					"fa-meh-blank" => "f5a4",

					"fa-meh-rolling-eyes" => "f5a5",

					"fa-memory" => "f538",

					"fa-mendeley" => "f7b3",

					"fa-menorah" => "f676",

					"fa-mercury" => "f223",

					"fa-meteor" => "f753",

					"fa-microblog" => "e01a",

					"fa-microchip" => "f2db",

					"fa-microphone" => "f130",

					"fa-microphone-alt" => "f3c9",

					"fa-microphone-alt-slash" => "f539",

					"fa-microphone-slash" => "f131",

					"fa-microscope" => "f610",

					"fa-microsoft" => "f3ca",

					"fa-minus" => "f068",

					"fa-minus-circle" => "f056",

					"fa-minus-square" => "f146",

					"fa-mitten" => "f7b5",

					"fa-mix" => "f3cb",

					"fa-mixcloud" => "f289",

					"fa-mixer" => "e056",

					"fa-mizuni" => "f3cc",

					"fa-mobile" => "f10b",

					"fa-mobile-alt" => "f3cd",

					"fa-modx" => "f285",

					"fa-monero" => "f3d0",

					"fa-money-bill" => "f0d6",

					"fa-money-bill-alt" => "f3d1",

					"fa-money-bill-wave" => "f53a",

					"fa-money-bill-wave-alt" => "f53b",

					"fa-money-check" => "f53c",

					"fa-money-check-alt" => "f53d",

					"fa-monument" => "f5a6",

					"fa-moon" => "f186",

					"fa-mortar-pestle" => "f5a7",

					"fa-mosque" => "f678",

					"fa-motorcycle" => "f21c",

					"fa-mountain" => "f6fc",

					"fa-mouse" => "f8cc",

					"fa-mouse-pointer" => "f245",

					"fa-mug-hot" => "f7b6",

					"fa-music" => "f001",

					"fa-napster" => "f3d2",

					"fa-neos" => "f612",

					"fa-network-wired" => "f6ff",

					"fa-neuter" => "f22c",

					"fa-newspaper" => "f1ea",

					"fa-nimblr" => "f5a8",

					"fa-node" => "f419",

					"fa-node-js" => "f3d3",

					"fa-not-equal" => "f53e",

					"fa-notes-medical" => "f481",

					"fa-npm" => "f3d4",

					"fa-ns8" => "f3d5",

					"fa-nutritionix" => "f3d6",

					"fa-object-group" => "f247",

					"fa-object-ungroup" => "f248",

					"fa-octopus-deploy" => "e082",

					"fa-odnoklassniki" => "f263",

					"fa-odnoklassniki-square" => "f264",

					"fa-oil-can" => "f613",

					"fa-old-republic" => "f510",

					"fa-om" => "f679",

					"fa-opencart" => "f23d",

					"fa-openid" => "f19b",

					"fa-opera" => "f26a",

					"fa-optin-monster" => "f23c",

					"fa-orcid" => "f8d2",

					"fa-osi" => "f41a",

					"fa-otter" => "f700",

					"fa-outdent" => "f03b",

					"fa-page4" => "f3d7",

					"fa-pagelines" => "f18c",

					"fa-pager" => "f815",

					"fa-paint-brush" => "f1fc",

					"fa-paint-roller" => "f5aa",

					"fa-palette" => "f53f",

					"fa-palfed" => "f3d8",

					"fa-pallet" => "f482",

					"fa-paper-plane" => "f1d8",

					"fa-paperclip" => "f0c6",

					"fa-parachute-box" => "f4cd",

					"fa-paragraph" => "f1dd",

					"fa-parking" => "f540",

					"fa-passport" => "f5ab",

					"fa-pastafarianism" => "f67b",

					"fa-paste" => "f0ea",

					"fa-patreon" => "f3d9",

					"fa-pause" => "f04c",

					"fa-pause-circle" => "f28b",

					"fa-paw" => "f1b0",

					"fa-paypal" => "f1ed",

					"fa-peace" => "f67c",

					"fa-pen" => "f304",

					"fa-pen-alt" => "f305",

					"fa-pen-fancy" => "f5ac",

					"fa-pen-nib" => "f5ad",

					"fa-pen-square" => "f14b",

					"fa-pencil-alt" => "f303",

					"fa-pencil-ruler" => "f5ae",

					"fa-penny-arcade" => "f704",

					"fa-people-arrows" => "e068",

					"fa-people-carry" => "f4ce",

					"fa-pepper-hot" => "f816",

					"fa-perbyte" => "e083",

					"fa-percent" => "f295",

					"fa-percentage" => "f541",

					"fa-periscope" => "f3da",

					"fa-person-booth" => "f756",

					"fa-phabricator" => "f3db",

					"fa-phoenix-framework" => "f3dc",

					"fa-phoenix-squadron" => "f511",

					"fa-phone" => "f095",

					"fa-phone-alt" => "f879",

					"fa-phone-slash" => "f3dd",

					"fa-phone-square" => "f098",

					"fa-phone-square-alt" => "f87b",

					"fa-phone-volume" => "f2a0",

					"fa-photo-video" => "f87c",

					"fa-php" => "f457",

					"fa-pied-piper" => "f2ae",

					"fa-pied-piper-alt" => "f1a8",

					"fa-pied-piper-hat" => "f4e5",

					"fa-pied-piper-pp" => "f1a7",

					"fa-pied-piper-square" => "e01e",

					"fa-piggy-bank" => "f4d3",

					"fa-pills" => "f484",

					"fa-pinterest" => "f0d2",

					"fa-pinterest-p" => "f231",

					"fa-pinterest-square" => "f0d3",

					"fa-pizza-slice" => "f818",

					"fa-place-of-worship" => "f67f",

					"fa-plane" => "f072",

					"fa-plane-arrival" => "f5af",

					"fa-plane-departure" => "f5b0",

					"fa-plane-slash" => "e069",

					"fa-play" => "f04b",

					"fa-play-circle" => "f144",

					"fa-playstation" => "f3df",

					"fa-plug" => "f1e6",

					"fa-plus" => "f067",

					"fa-plus-circle" => "f055",

					"fa-plus-square" => "f0fe",

					"fa-podcast" => "f2ce",

					"fa-poll" => "f681",

					"fa-poll-h" => "f682",

					"fa-poo" => "f2fe",

					"fa-poo-storm" => "f75a",

					"fa-poop" => "f619",

					"fa-portrait" => "f3e0",

					"fa-pound-sign" => "f154",

					"fa-power-off" => "f011",

					"fa-pray" => "f683",

					"fa-praying-hands" => "f684",

					"fa-prescription" => "f5b1",

					"fa-prescription-bottle" => "f485",

					"fa-prescription-bottle-alt" => "f486",

					"fa-print" => "f02f",

					"fa-procedures" => "f487",

					"fa-product-hunt" => "f288",

					"fa-project-diagram" => "f542",

					"fa-pump-medical" => "e06a",

					"fa-pump-soap" => "e06b",

					"fa-pushed" => "f3e1",

					"fa-puzzle-piece" => "f12e",

					"fa-python" => "f3e2",

					"fa-qq" => "f1d6",

					"fa-qrcode" => "f029",

					"fa-question" => "f128",

					"fa-question-circle" => "f059",

					"fa-quidditch" => "f458",

					"fa-quinscape" => "f459",

					"fa-quora" => "f2c4",

					"fa-quote-left" => "f10d",

					"fa-quote-right" => "f10e",

					"fa-quran" => "f687",

					"fa-r-project" => "f4f7",

					"fa-radiation" => "f7b9",

					"fa-radiation-alt" => "f7ba",

					"fa-rainbow" => "f75b",

					"fa-random" => "f074",

					"fa-raspberry-pi" => "f7bb",

					"fa-ravelry" => "f2d9",

					"fa-react" => "f41b",

					"fa-reacteurope" => "f75d",

					"fa-readme" => "f4d5",

					"fa-rebel" => "f1d0",

					"fa-receipt" => "f543",

					"fa-record-vinyl" => "f8d9",

					"fa-recycle" => "f1b8",

					"fa-red-river" => "f3e3",

					"fa-reddit" => "f1a1",

					"fa-reddit-alien" => "f281",

					"fa-reddit-square" => "f1a2",

					"fa-redhat" => "f7bc",

					"fa-redo" => "f01e",

					"fa-redo-alt" => "f2f9",

					"fa-registered" => "f25d",

					"fa-remove-format" => "f87d",

					"fa-renren" => "f18b",

					"fa-reply" => "f3e5",

					"fa-reply-all" => "f122",

					"fa-replyd" => "f3e6",

					"fa-republican" => "f75e",

					"fa-researchgate" => "f4f8",

					"fa-resolving" => "f3e7",

					"fa-restroom" => "f7bd",

					"fa-retweet" => "f079",

					"fa-rev" => "f5b2",

					"fa-ribbon" => "f4d6",

					"fa-ring" => "f70b",

					"fa-road" => "f018",

					"fa-robot" => "f544",

					"fa-rocket" => "f135",

					"fa-rocketchat" => "f3e8",

					"fa-rockrms" => "f3e9",

					"fa-route" => "f4d7",

					"fa-rss" => "f09e",

					"fa-rss-square" => "f143",

					"fa-ruble-sign" => "f158",

					"fa-ruler" => "f545",

					"fa-ruler-combined" => "f546",

					"fa-ruler-horizontal" => "f547",

					"fa-ruler-vertical" => "f548",

					"fa-running" => "f70c",

					"fa-rupee-sign" => "f156",

					"fa-rust" => "e07a",

					"fa-sad-cry" => "f5b3",

					"fa-sad-tear" => "f5b4",

					"fa-safari" => "f267",

					"fa-salesforce" => "f83b",

					"fa-sass" => "f41e",

					"fa-satellite" => "f7bf",

					"fa-satellite-dish" => "f7c0",

					"fa-save" => "f0c7",

					"fa-schlix" => "f3ea",

					"fa-school" => "f549",

					"fa-screwdriver" => "f54a",

					"fa-scribd" => "f28a",

					"fa-scroll" => "f70e",

					"fa-sd-card" => "f7c2",

					"fa-search" => "f002",

					"fa-search-dollar" => "f688",

					"fa-search-location" => "f689",

					"fa-search-minus" => "f010",

					"fa-search-plus" => "f00e",

					"fa-searchengin" => "f3eb",

					"fa-seedling" => "f4d8",

					"fa-sellcast" => "f2da",

					"fa-sellsy" => "f213",

					"fa-server" => "f233",

					"fa-servicestack" => "f3ec",

					"fa-shapes" => "f61f",

					"fa-share" => "f064",

					"fa-share-alt" => "f1e0",

					"fa-share-alt-square" => "f1e1",

					"fa-share-square" => "f14d",

					"fa-shekel-sign" => "f20b",

					"fa-shield-alt" => "f3ed",

					"fa-shield-virus" => "e06c",

					"fa-ship" => "f21a",

					"fa-shipping-fast" => "f48b",

					"fa-shirtsinbulk" => "f214",

					"fa-shoe-prints" => "f54b",

					"fa-shopify" => "e057",

					"fa-shopping-bag" => "f290",

					"fa-shopping-basket" => "f291",

					"fa-shopping-cart" => "f07a",

					"fa-shopware" => "f5b5",

					"fa-shower" => "f2cc",

					"fa-shuttle-van" => "f5b6",

					"fa-sign" => "f4d9",

					"fa-sign-in-alt" => "f2f6",

					"fa-sign-language" => "f2a7",

					"fa-sign-out-alt" => "f2f5",

					"fa-signal" => "f012",

					"fa-signature" => "f5b7",

					"fa-sim-card" => "f7c4",

					"fa-simplybuilt" => "f215",

					"fa-sink" => "e06d",

					"fa-sistrix" => "f3ee",

					"fa-sitemap" => "f0e8",

					"fa-sith" => "f512",

					"fa-skating" => "f7c5",

					"fa-sketch" => "f7c6",

					"fa-skiing" => "f7c9",

					"fa-skiing-nordic" => "f7ca",

					"fa-skull" => "f54c",

					"fa-skull-crossbones" => "f714",

					"fa-skyatlas" => "f216",

					"fa-skype" => "f17e",

					"fa-slack" => "f198",

					"fa-slack-hash" => "f3ef",

					"fa-slash" => "f715",

					"fa-sleigh" => "f7cc",

					"fa-sliders-h" => "f1de",

					"fa-slideshare" => "f1e7",

					"fa-smile" => "f118",

					"fa-smile-beam" => "f5b8",

					"fa-smile-wink" => "f4da",

					"fa-smog" => "f75f",

					"fa-smoking" => "f48d",

					"fa-smoking-ban" => "f54d",

					"fa-sms" => "f7cd",

					"fa-snapchat" => "f2ab",

					"fa-snapchat-ghost" => "f2ac",

					"fa-snapchat-square" => "f2ad",

					"fa-snowboarding" => "f7ce",

					"fa-snowflake" => "f2dc",

					"fa-snowman" => "f7d0",

					"fa-snowplow" => "f7d2",

					"fa-soap" => "e06e",

					"fa-socks" => "f696",

					"fa-solar-panel" => "f5ba",

					"fa-sort" => "f0dc",

					"fa-sort-alpha-down" => "f15d",

					"fa-sort-alpha-down-alt" => "f881",

					"fa-sort-alpha-up" => "f15e",

					"fa-sort-alpha-up-alt" => "f882",

					"fa-sort-amount-down" => "f160",

					"fa-sort-amount-down-alt" => "f884",

					"fa-sort-amount-up" => "f161",

					"fa-sort-amount-up-alt" => "f885",

					"fa-sort-down" => "f0dd",

					"fa-sort-numeric-down" => "f162",

					"fa-sort-numeric-down-alt" => "f886",

					"fa-sort-numeric-up" => "f163",

					"fa-sort-numeric-up-alt" => "f887",

					"fa-sort-up" => "f0de",

					"fa-soundcloud" => "f1be",

					"fa-sourcetree" => "f7d3",

					"fa-spa" => "f5bb",

					"fa-space-shuttle" => "f197",

					"fa-speakap" => "f3f3",

					"fa-speaker-deck" => "f83c",

					"fa-spell-check" => "f891",

					"fa-spider" => "f717",

					"fa-spinner" => "f110",

					"fa-splotch" => "f5bc",

					"fa-spotify" => "f1bc",

					"fa-spray-can" => "f5bd",

					"fa-square" => "f0c8",

					"fa-square-full" => "f45c",

					"fa-square-root-alt" => "f698",

					"fa-squarespace" => "f5be",

					"fa-stack-exchange" => "f18d",

					"fa-stack-overflow" => "f16c",

					"fa-stackpath" => "f842",

					"fa-stamp" => "f5bf",

					"fa-star" => "f005",

					"fa-star-and-crescent" => "f699",

					"fa-star-half" => "f089",

					"fa-star-half-alt" => "f5c0",

					"fa-star-of-david" => "f69a",

					"fa-star-of-life" => "f621",

					"fa-staylinked" => "f3f5",

					"fa-steam" => "f1b6",

					"fa-steam-square" => "f1b7",

					"fa-steam-symbol" => "f3f6",

					"fa-step-backward" => "f048",

					"fa-step-forward" => "f051",

					"fa-stethoscope" => "f0f1",

					"fa-sticker-mule" => "f3f7",

					"fa-sticky-note" => "f249",

					"fa-stop" => "f04d",

					"fa-stop-circle" => "f28d",

					"fa-stopwatch" => "f2f2",

					"fa-stopwatch-20" => "e06f",

					"fa-store" => "f54e",

					"fa-store-alt" => "f54f",

					"fa-store-alt-slash" => "e070",

					"fa-store-slash" => "e071",

					"fa-strava" => "f428",

					"fa-stream" => "f550",

					"fa-street-view" => "f21d",

					"fa-strikethrough" => "f0cc",

					"fa-stripe" => "f429",

					"fa-stripe-s" => "f42a",

					"fa-stroopwafel" => "f551",

					"fa-studiovinari" => "f3f8",

					"fa-stumbleupon" => "f1a4",

					"fa-stumbleupon-circle" => "f1a3",

					"fa-subscript" => "f12c",

					"fa-subway" => "f239",

					"fa-suitcase" => "f0f2",

					"fa-suitcase-rolling" => "f5c1",

					"fa-sun" => "f185",

					"fa-superpowers" => "f2dd",

					"fa-superscript" => "f12b",

					"fa-supple" => "f3f9",

					"fa-surprise" => "f5c2",

					"fa-suse" => "f7d6",

					"fa-swatchbook" => "f5c3",

					"fa-swift" => "f8e1",

					"fa-swimmer" => "f5c4",

					"fa-swimming-pool" => "f5c5",

					"fa-symfony" => "f83d",

					"fa-synagogue" => "f69b",

					"fa-sync" => "f021",

					"fa-sync-alt" => "f2f1",

					"fa-syringe" => "f48e",

					"fa-table" => "f0ce",

					"fa-table-tennis" => "f45d",

					"fa-tablet" => "f10a",

					"fa-tablet-alt" => "f3fa",

					"fa-tablets" => "f490",

					"fa-tachometer-alt" => "f3fd",

					"fa-tag" => "f02b",

					"fa-tags" => "f02c",

					"fa-tape" => "f4db",

					"fa-tasks" => "f0ae",

					"fa-taxi" => "f1ba",

					"fa-teamspeak" => "f4f9",

					"fa-teeth" => "f62e",

					"fa-teeth-open" => "f62f",

					"fa-telegram" => "f2c6",

					"fa-telegram-plane" => "f3fe",

					"fa-temperature-high" => "f769",

					"fa-temperature-low" => "f76b",

					"fa-tencent-weibo" => "f1d5",

					"fa-tenge" => "f7d7",

					"fa-terminal" => "f120",

					"fa-text-height" => "f034",

					"fa-text-width" => "f035",

					"fa-th" => "f00a",

					"fa-th-large" => "f009",

					"fa-th-list" => "f00b",

					"fa-the-red-yeti" => "f69d",

					"fa-theater-masks" => "f630",

					"fa-themeco" => "f5c6",

					"fa-themeisle" => "f2b2",

					"fa-thermometer" => "f491",

					"fa-thermometer-empty" => "f2cb",

					"fa-thermometer-full" => "f2c7",

					"fa-thermometer-half" => "f2c9",

					"fa-thermometer-quarter" => "f2ca",

					"fa-thermometer-three-quarters" => "f2c8",

					"fa-think-peaks" => "f731",

					"fa-thumbs-down" => "f165",

					"fa-thumbs-up" => "f164",

					"fa-thumbtack" => "f08d",

					"fa-ticket-alt" => "f3ff",

					"fa-tiktok" => "e07b",

					"fa-times" => "f00d",

					"fa-times-circle" => "f057",

					"fa-tint" => "f043",

					"fa-tint-slash" => "f5c7",

					"fa-tired" => "f5c8",

					"fa-toggle-off" => "f204",

					"fa-toggle-on" => "f205",

					"fa-toilet" => "f7d8",

					"fa-toilet-paper" => "f71e",

					"fa-toilet-paper-slash" => "e072",

					"fa-toolbox" => "f552",

					"fa-tools" => "f7d9",

					"fa-tooth" => "f5c9",

					"fa-torah" => "f6a0",

					"fa-torii-gate" => "f6a1",

					"fa-tractor" => "f722",

					"fa-trade-federation" => "f513",

					"fa-trademark" => "f25c",

					"fa-traffic-light" => "f637",

					"fa-trailer" => "e041",

					"fa-train" => "f238",

					"fa-tram" => "f7da",

					"fa-transgender" => "f224",

					"fa-transgender-alt" => "f225",

					"fa-trash" => "f1f8",

					"fa-trash-alt" => "f2ed",

					"fa-trash-restore" => "f829",

					"fa-trash-restore-alt" => "f82a",

					"fa-tree" => "f1bb",

					"fa-trello" => "f181",

					"fa-trophy" => "f091",

					"fa-truck" => "f0d1",

					"fa-truck-loading" => "f4de",

					"fa-truck-monster" => "f63b",

					"fa-truck-moving" => "f4df",

					"fa-truck-pickup" => "f63c",

					"fa-tshirt" => "f553",

					"fa-tty" => "f1e4",

					"fa-tumblr" => "f173",

					"fa-tumblr-square" => "f174",

					"fa-tv" => "f26c",

					"fa-twitch" => "f1e8",

					"fa-twitter" => "f099",

					"fa-twitter-square" => "f081",

					"fa-typo3" => "f42b",

					"fa-uber" => "f402",

					"fa-ubuntu" => "f7df",

					"fa-uikit" => "f403",

					"fa-umbraco" => "f8e8",

					"fa-umbrella" => "f0e9",

					"fa-umbrella-beach" => "f5ca",

					"fa-uncharted" => "e084",

					"fa-underline" => "f0cd",

					"fa-undo" => "f0e2",

					"fa-undo-alt" => "f2ea",

					"fa-uniregistry" => "f404",

					"fa-unity" => "e049",

					"fa-universal-access" => "f29a",

					"fa-university" => "f19c",

					"fa-unlink" => "f127",

					"fa-unlock" => "f09c",

					"fa-unlock-alt" => "f13e",

					"fa-unsplash" => "e07c",

					"fa-untappd" => "f405",

					"fa-upload" => "f093",

					"fa-ups" => "f7e0",

					"fa-usb" => "f287",

					"fa-user" => "f007",

					"fa-user-alt" => "f406",

					"fa-user-alt-slash" => "f4fa",

					"fa-user-astronaut" => "f4fb",

					"fa-user-check" => "f4fc",

					"fa-user-circle" => "f2bd",

					"fa-user-clock" => "f4fd",

					"fa-user-cog" => "f4fe",

					"fa-user-edit" => "f4ff",

					"fa-user-friends" => "f500",

					"fa-user-graduate" => "f501",

					"fa-user-injured" => "f728",

					"fa-user-lock" => "f502",

					"fa-user-md" => "f0f0",

					"fa-user-minus" => "f503",

					"fa-user-ninja" => "f504",

					"fa-user-nurse" => "f82f",

					"fa-user-plus" => "f234",

					"fa-user-secret" => "f21b",

					"fa-user-shield" => "f505",

					"fa-user-slash" => "f506",

					"fa-user-tag" => "f507",

					"fa-user-tie" => "f508",

					"fa-user-times" => "f235",

					"fa-users" => "f0c0",

					"fa-users-cog" => "f509",

					"fa-users-slash" => "e073",

					"fa-usps" => "f7e1",

					"fa-ussunnah" => "f407",

					"fa-utensil-spoon" => "f2e5",

					"fa-utensils" => "f2e7",

					"fa-vaadin" => "f408",

					"fa-vector-square" => "f5cb",

					"fa-venus" => "f221",

					"fa-venus-double" => "f226",

					"fa-venus-mars" => "f228",

					"fa-vest" => "e085",

					"fa-vest-patches" => "e086",

					"fa-viacoin" => "f237",

					"fa-viadeo" => "f2a9",

					"fa-viadeo-square" => "f2aa",

					"fa-vial" => "f492",

					"fa-vials" => "f493",

					"fa-viber" => "f409",

					"fa-video" => "f03d",

					"fa-video-slash" => "f4e2",

					"fa-vihara" => "f6a7",

					"fa-vimeo" => "f40a",

					"fa-vimeo-square" => "f194",

					"fa-vimeo-v" => "f27d",

					"fa-vine" => "f1ca",

					"fa-virus" => "e074",

					"fa-virus-slash" => "e075",

					"fa-viruses" => "e076",

					"fa-vk" => "f189",

					"fa-vnv" => "f40b",

					"fa-voicemail" => "f897",

					"fa-volleyball-ball" => "f45f",

					"fa-volume-down" => "f027",

					"fa-volume-mute" => "f6a9",

					"fa-volume-off" => "f026",

					"fa-volume-up" => "f028",

					"fa-vote-yea" => "f772",

					"fa-vr-cardboard" => "f729",

					"fa-vuejs" => "f41f",

					"fa-walking" => "f554",

					"fa-wallet" => "f555",

					"fa-warehouse" => "f494",

					"fa-watchman-monitoring" => "e087",

					"fa-water" => "f773",

					"fa-wave-square" => "f83e",

					"fa-waze" => "f83f",

					"fa-weebly" => "f5cc",

					"fa-weibo" => "f18a",

					"fa-weight" => "f496",

					"fa-weight-hanging" => "f5cd",

					"fa-weixin" => "f1d7",

					"fa-whatsapp" => "f232",

					"fa-whatsapp-square" => "f40c",

					"fa-wheelchair" => "f193",

					"fa-whmcs" => "f40d",

					"fa-wifi" => "f1eb",

					"fa-wikipedia-w" => "f266",

					"fa-wind" => "f72e",

					"fa-window-close" => "f410",

					"fa-window-maximize" => "f2d0",

					"fa-window-minimize" => "f2d1",

					"fa-window-restore" => "f2d2",

					"fa-windows" => "f17a",

					"fa-wine-bottle" => "f72f",

					"fa-wine-glass" => "f4e3",

					"fa-wine-glass-alt" => "f5ce",

					"fa-wix" => "f5cf",

					"fa-wizards-of-the-coast" => "f730",

					"fa-wodu" => "e088",

					"fa-wolf-pack-battalion" => "f514",

					"fa-won-sign" => "f159",

					"fa-wordpress" => "f19a",

					"fa-wordpress-simple" => "f411",

					"fa-wpbeginner" => "f297",

					"fa-wpexplorer" => "f2de",

					"fa-wpforms" => "f298",

					"fa-wpressr" => "f3e4",

					"fa-wrench" => "f0ad",

					"fa-x-ray" => "f497",

					"fa-xbox" => "f412",

					"fa-xing" => "f168",

					"fa-xing-square" => "f169",

					"fa-y-combinator" => "f23b",

					"fa-yahoo" => "f19e",

					"fa-yammer" => "f840",

					"fa-yandex" => "f413",

					"fa-yandex-international" => "f414",

					"fa-yarn" => "f7e3",

					"fa-yelp" => "f1e9",

					"fa-yen-sign" => "f157",

					"fa-yin-yang" => "f6ad",

					"fa-yoast" => "f2b1",

					"fa-youtube" => "f167",

					"fa-youtube-square" => "f431",

					"fa-zhihu" => "f63f"

				);
			return $fontawesome;
		}

		static function all_font_varients($font_name = '')
		{
			$varients = array(

				'normal' => esc_html__('Normal', 'yatri'),
				'bold' => esc_html__('Bold', 'yatri'),
				'100' => esc_html__('100', 'yatri'),
				'200' => esc_html__('200', 'yatri'),
				'300' => esc_html__('Light 300', 'yatri'),
				'400' => esc_html__('Normal 400', 'yatri'),
				'500' => esc_html__('Medium 500', 'yatri'),
				'600' => esc_html__('Semi-Bold 600', 'yatri'),
				'700' => esc_html__('Bold 700', 'yatri'),
				'800' => esc_html__('Extra-Bold 800', 'yatri'),
				'900' => esc_html__('Ultra-Bold 900', 'yatri'),

			);

			if (!empty($font_name)) {

				$google_fonts = (self::get_google_fonts());

				$font_varient = array();

				if (isset($google_fonts[$font_name])) {

					$all_varients = isset($google_fonts[$font_name]['variants']) ? $google_fonts[$font_name]['variants'] : array();


					foreach ($all_varients as $varient) {

						$font_varient[$varient] = $varient;
					}
					return (apply_filters('yatri_all_font_varients', $font_varient));

				}
			}

			return (apply_filters('yatri_all_font_varients', $varients));
		}

		static function all_fonts()
		{
			$fonts = array(
				'normal' => array(
					'title' => esc_html__('Default Web Fonts', 'yatri'),
					'fonts' => self::get_normal_fonts(),
				),
				'google' => array(
					'title' => esc_html__('Google Web Fonts', 'yatri'),
					'fonts' => self::get_google_fonts(),
				),
			);

			return (apply_filters('yatri_all_fonts', $fonts));
		}

		static function get_google_fonts()
		{

			return Mantrabrain_Theme_Helper_Google_Fonts::get_all();
		}


		static function get_normal_fonts()
		{
			$fonts = array(
				'Arial' => array(
					'family' => 'Arial',
					'category' => ' sans-serif',
				),
				'Baskerville' => array(
					'family' => 'Baskerville',
					'category' => 'serif',
				),
				'Palatino' => array(
					'family' => 'Palatino',
					'category' => 'serif',
				),

				'Bodoni MT' => array(
					'family' => 'Bodoni MT',
					'category' => 'serif',
				),

				'Georgia' => array(
					'family' => 'Georgia',
					'category' => 'serif',
				),

				'Century Gothic' => array(
					'family' => 'Century Gothic',
					'category' => 'sans-serif',
				),

				'Tahoma' => array(
					'family' => 'Tahoma',
					'category' => 'sans-serif',
				),

				'Arial Narrow' => array(
					'family' => 'Arial Narrow',
					'category' => ' sans-serif',
				),

				'Trebuchet MS' => array(
					'family' => 'Trebuchet MS',
					'category' => ' sans-serif',
				),

				'Consolas' => array(
					'family' => 'Consolas',
					'category' => ' sans-serif',
				),

			);

			return $fonts;
		}

		static function css_units()
		{
			return apply_filters('yatri_css_units', array(
				'px' => esc_html__('px', 'yatri'),
				'rem' => esc_html__('rem', 'yatri'),
				'em' => esc_html__('em', 'yatri'),
				'%' => esc_html__('%', 'yatri'),
			));
		}

		static function css_image_sizes()
		{
			return apply_filters('yatri_css_image_sizes', array(
				'' => esc_html__('Default', 'yatri'),
				'auto' => esc_html__('Auto', 'yatri'),
				'cover' => esc_html__('Cover', 'yatri'),
				'contain' => esc_html__('Contain', 'yatri'),
			));
		}

		public static function css_image_positions()
		{
			return apply_filters('yatri_css_image_positions', array(
				'' => esc_html__('Default', 'yatri'),
				'center' => esc_html__('Center', 'yatri'),
				'top left' => esc_html__('Top Left', 'yatri'),
				'top right' => esc_html__('Top Right', 'yatri'),
				'top center' => esc_html__('Top Center', 'yatri'),
				'bottom left' => esc_html__('Bottom Left', 'yatri'),
				'bottom center' => esc_html__('Bottom Center', 'yatri'),
				'bottom right' => esc_html__('Bottom Right', 'yatri'),
			));
		}

		public static function css_image_repeats()
		{
			return apply_filters('yatri_css_image_sizes', array(
				'repeat' => esc_html__('Default', 'yatri'),
				'no-repeat' => esc_html__('No repeat', 'yatri'),
				'repeat-x' => esc_html__('Repeat horizontal', 'yatri'),
				'repeat-y' => esc_html__('Repeat vertical', 'yatri'),
			));
		}

		public static function css_image_parallax_styles()
		{
			return apply_filters('yatri_css_image_parallax_styles', array(
				'' => esc_html__('Default', 'yatri'),
				'scroll' => esc_html__('Scroll', 'yatri'),
				'fixed' => esc_html__('Fixed', 'yatri'),
			));
		}

		public static function css_border_styles()
		{
			return apply_filters('yatri_css_border_styles', array(
				'' => esc_html__('Default', 'yatri'),
				'none' => esc_html__('None', 'yatri'),
				'solid' => esc_html__('Solid', 'yatri'),
				'dotted' => esc_html__('Dotted', 'yatri'),
				'dashed' => esc_html__('Dashed', 'yatri'),
				'double' => esc_html__('Double', 'yatri'),
				'ridge' => esc_html__('Ridge', 'yatri'),
				'inset' => esc_html__('Inset', 'yatri'),
				'outset' => esc_html__('Outset', 'yatri'),
			));
		}

		public static function css_font_style()
		{
			return array(
				'' => esc_html__('Default', 'yatri'),
				'normal' => esc_html__('Normal', 'yatri'),
				'italic' => esc_html__('Italic', 'yatri'),
				'oblique' => esc_html__('Oblique', 'yatri'),

			);

		}

		public static function css_text_decoration()
		{
			return array(
				'' => esc_html__('Default', 'yatri'),
				'underline' => esc_html__('Underline', 'yatri'),
				'overline' => esc_html__('Overline', 'yatri'),
				'line-through' => esc_html__('Line through', 'yatri'),
				'none' => esc_html__('None', 'yatri'),

			);
		}

		public static function css_text_transform()
		{
			return array(
				'' => esc_html__('Default', 'yatri'),
				'uppercase' => esc_html__('Uppercase', 'yatri'),
				'lowercase' => esc_html__('Lowercase', 'yatri'),
				'capitalize' => esc_html__('Capitalize', 'yatri'),
				'none' => esc_html__('None', 'yatri'),

			);
		}

		public static function all_font_subsets($font_name = '')
		{
			$subsets = array();

			if (!empty($font_name)) {

				$google_fonts = (self::get_google_fonts());

				if (isset($google_fonts[$font_name])) {

					$all_subsets = isset($google_fonts[$font_name]['subsets']) ? $google_fonts[$font_name]['subsets'] : array();


					foreach ($all_subsets as $subset) {

						$subsets[$subset] = $subset;
					}
					return (apply_filters('yatri_all_font_subsets', $subsets));

				}
			}
			return (apply_filters('yatri_all_font_subsets', $subsets));
		}

		static function maybe_positive_number($value)
		{
			if (is_null($value) || $value == '') {

				return null;
			}

			$value = (int)$value;

			if ($value < 1) {

				return 0;
			}

			return absint($value);
		}

		static function media_query()
		{
			return array(
				'all' => '{{query}}',
				'desktop' => '@media (min-width: 1025px) { {{query}} }',
				'tablet' => '@media (min-width: 640px) and (max-width: 1024px) { {{query}} }',
				'mobile' => '@media (max-width: 639px) { {{query}} }',
			);
		}

		static function sanitize_color($color)
		{
			if (empty($color) || is_array($color)) {
				return '';
			}

			// If string does not start with 'rgba', then treat as hex.
			// sanitize the hex color and finally convert hex to rgba.
			if (false === strpos($color, 'rgba')) {
				return sanitize_hex_color($color);
			}

			// By now we know the string is formatted as an rgba color so we need to further sanitize it.
			$color = str_replace(' ', '', $color);
			sscanf($color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha);

			return 'rgba(' . $red . ',' . $green . ',' . $blue . ',' . $alpha . ')';
		}

		static function sanitize_modal($input, $setting)
		{
			$input_array = array();

			$setting_id = $setting->id;

			$setting_id = str_replace(YATRI_THEME_SETTINGS, '', $setting_id);

			$setting_id = trim(str_replace(array('[', ']'), '', $setting_id));

			$all_field_from_modal = yatri_customizer_modal_all_fields($setting_id);

			$all_field_value = array();
			try {

				$all_field_value = json_decode($input, true);

			} catch (Exception $e) {

				$all_field_value = array();
			}

			foreach ($all_field_from_modal as $field) {

				$field_type = isset($field['type']) ? $field['type'] : '';

				$field_name = isset($field['name']) ? $field['name'] : '';

				$devices = isset($field['devices']) ? $field['devices'] : array();

				$field_value = isset($all_field_value[$field_name]) ? $all_field_value[$field_name] : array();

				if ($field_type !== 'heading') {

					$input_array[$field_name] = self::get_modal_value($field_type, $field_name, $field_value, $devices, $field);


				}

			}


			return json_encode($input_array);

		}

		static function mabye_int_empty($value)
		{
			if ('' !== $value) {
				return absint($value);
			}
			return '';

		}

		static function get_modal_value($field_type, $field_name, $field_value, $devices, $field = array())
		{

			$single_value = array();

			foreach ($devices as $device) {

				$field_val = isset($field_value[$device]) ? $field_value[$device] : array();

				$single_value[$device] = self::get_modal_value($field_type, $field_name, $field_val, array());
			}


			if (count($devices) < 1) {

				switch ($field_type) {
					case "image":
						$valid_value = isset($field_value['value']) ? ($field_value['value']) : '';
						$valid_value['attachment_id'] = isset($valid_value['attachment_id']) ? absint($valid_value['attachment_id']) : '';
						$valid_value['attachment_url'] = isset($valid_value['attachment_url']) ? esc_url_raw($valid_value['attachment_url']) : '';
						$valid_value['attachment_mime'] = isset($valid_value['attachment_mime']) ? sanitize_text_field($valid_value['attachment_mime']) : '';
						$valid_value['image_size'] = isset($valid_value['image_size']) ? sanitize_text_field($valid_value['image_size']) : '';
						$valid_value['image_position'] = isset($valid_value['image_position']) ? sanitize_text_field($valid_value['image_position']) : '';
						$valid_value['image_repeat'] = isset($valid_value['image_repeat']) ? sanitize_text_field($valid_value['image_repeat']) : '';
						$valid_value['parallax_image'] = isset($valid_value['parallax_image']) ? sanitize_text_field($valid_value['parallax_image']) : '';
						$single_value['value'] = $valid_value;
						break;
					case "border":
						$valid_value = isset($field_value['value']) ? ($field_value['value']) : '';
						$valid_value['style'] = isset($valid_value['style']) ? sanitize_text_field($valid_value['style']) : '';
						$valid_value['border_top'] = isset($valid_value['border_top']) ? self::mabye_int_empty($valid_value['border_top']) : '';
						$valid_value['border_right'] = isset($valid_value['border_right']) ? self::mabye_int_empty($valid_value['border_right']) : '';
						$valid_value['border_bottom'] = isset($valid_value['border_bottom']) ? self::mabye_int_empty($valid_value['border_bottom']) : '';
						$valid_value['border_left'] = isset($valid_value['border_left']) ? self::mabye_int_empty($valid_value['border_left']) : '';
						$valid_value['border_color'] = isset($valid_value['border_color']) ? self::sanitize_color($valid_value['border_color']) : '';
						$valid_value['border_radius_top'] = isset($valid_value['border_radius_top']) ? self::mabye_int_empty($valid_value['border_radius_top']) : '';
						$valid_value['border_radius_right'] = isset($valid_value['border_radius_right']) ? self::mabye_int_empty($valid_value['border_radius_right']) : '';
						$valid_value['border_radius_bottom'] = isset($valid_value['border_radius_bottom']) ? self::mabye_int_empty($valid_value['border_radius_bottom']) : '';
						$valid_value['border_radius_left'] = isset($valid_value['border_radius_left']) ? self::mabye_int_empty($valid_value['border_radius_left']) : '';
						$valid_value['box_shadow_color'] = isset($valid_value['box_shadow_color']) ? self::sanitize_color($valid_value['box_shadow_color']) : '';
						$valid_value['box_shadow_x'] = isset($valid_value['box_shadow_x']) ? absint($valid_value['box_shadow_x']) : '';
						$valid_value['box_shadow_y'] = isset($valid_value['box_shadow_y']) ? absint($valid_value['box_shadow_y']) : '';
						$valid_value['box_shadow_blur'] = isset($valid_value['box_shadow_blur']) ? absint($valid_value['box_shadow_blur']) : '';
						$valid_value['box_shadow_spread'] = isset($valid_value['box_shadow_spread']) ? absint($valid_value['box_shadow_spread']) : '';
						$valid_value['box_shadow_inset'] = isset($valid_value['box_shadow_inset']) ? absint($valid_value['box_shadow_inset']) : 0;
						$single_value['value'] = $valid_value;
						break;
					case "color":
						$valid_value = isset($field_value['value']) ? self::sanitize_color($field_value['value']) : '';
						$single_value['value'] = $valid_value;
						break;
					case "overlay":
						$valid_value = isset($field_value['value']) ? self::sanitize_color($field_value['value']) : '';
						$single_value['value'] = $valid_value;
						break;
					case "alignment":
						$valid_value = isset($field_value['value']) ? sanitize_text_field($field_value['value']) : '';
						$single_value['value'] = $valid_value;
						break;
					case "number":
						$valid_value = isset($field_value['value']) ? absint($field_value['value']) : '';
						$single_value['value'] = $valid_value;
						break;
					case "font":
					case "select":
					case "font_weight":
					case "text":
						$valid_value = isset($field_value['value']) ? sanitize_text_field($field_value['value']) : '';
						$single_value['value'] = $valid_value;
						break;
					case "checkbox":
					case "font_languages":
						$valid_value = isset($field_value['value']) ? ($field_value['value']) : array();

						if (is_array($valid_value)) {

							foreach ($valid_value as $val_index => $val) {

								$valid_value[$val_index] = sanitize_text_field($val);
							}

						} else {
							$valid_value = array();
						}

						$single_value['value'] = $valid_value;
						break;
					case "range":
						$valid_number = isset($field_value['value']['value']) && ("" !== $field_value['value']['value']) ? ($field_value['value']['value']) : '';

						if ('' != $valid_number) {

							$valid_number = intval($valid_number);

							$max = isset($field['max']) ? $field['max'] : '';

							$min = isset($field['min']) ? $field['min'] : '';

							if ($max < $valid_number && '' != $max) {

								$valid_number = $max;
							}
							if ($min > $valid_number && '' != $max) {

								$valid_number = $min;
							}
						}
						$valid_value['value'] = $valid_number;
						$valid_value['unit'] = isset($field_value['value']['unit']) ? sanitize_text_field($field_value['value']['unit']) : 'px';
						$single_value['value'] = $valid_value;
						break;
					case "margin":

						foreach (array('top', 'right', 'bottom', 'left') as $position) {
							$valid_value[$position]['value'] = isset($field_value[$position]['value']) && "" !== ($field_value[$position]['value']) ? (int)($field_value[$position]['value']) : '';
							$valid_value[$position]['unit'] = isset($field_value[$position]['unit']) ? sanitize_text_field($field_value[$position]['unit']) : 'px';
						}
						$single_value = $valid_value;
						break;
					case "padding":
						foreach (array('top', 'right', 'bottom', 'left') as $position) {
							$valid_value[$position]['value'] = isset($field_value[$position]['value']) && !is_null($field_value[$position]['value']) ? (self::maybe_positive_number($field_value[$position]['value'])) : '';
							$valid_value[$position]['unit'] = isset($field_value[$position]['unit']) ? sanitize_text_field($field_value[$position]['unit']) : 'px';
						}
						$single_value = $valid_value;
						break;
					default:
						$valid_value = isset($field_value['value']) ? sanitize_text_field($field_value['value']) : '';
						$single_value['value'] = $valid_value;
						break;

				}
			}


			return $single_value;
		}

		static function maybe_json_decode($maybe_json_string)
		{
			$decoded_value = array();

			try {

				if (is_string($maybe_json_string)) {

					$decoded = json_decode($maybe_json_string, true);

					$decoded_value = (json_last_error() == JSON_ERROR_NONE) ? $decoded : $decoded_value;

				} else if (is_array($maybe_json_string)) {

					$decoded_value = $maybe_json_string;

				} else if (is_object($maybe_json_string)) {

					$decoded_value = $maybe_json_string;
				}

			} catch (Exception $e) {

				$decoded_value = array();
			}
			return $decoded_value;
		}

		static function sanitize_builder($input, $setting)
		{
			$all_valid_fields = array();

			$fields = ($setting->manager->get_control($setting->id)->fields);

			$field_keys = array_keys($fields);

			$all_field_value = array();

			try {

				$all_field_value = self::maybe_json_decode($input);

			} catch (Exception $e) {

				$all_field_value = array();
			}
			$is_empty_field_count = 0;

			$not_empty_count = 0;

			foreach ($all_field_value as $field_array) {

				$section = isset($field_array['section']) ? sanitize_text_field($field_array['section']) : '';

				$section = in_array($section, $field_keys) ? $section : '';

				$width = isset($field_array['width']) ? sanitize_text_field($field_array['width']) : '';

				if ($width == '') {

					$is_empty_field_count++;
				} else {
					$not_empty_count++;
				}

				$all_valid_fields[] = array(
					'section' => $section,
					'width' => $width
				);


			}

			if (count($all_field_value) == 3 && ($is_empty_field_count == 3 || $not_empty_count == 3)) {

				return $all_valid_fields;
			}
			return $setting->default;

		}

		static function sanitize_switch_group($input, $setting)
		{
			$all_field_value = array();

			$valid_field_value = array();

			try {

				$all_field_value = json_decode($input, true);

			} catch (Exception $e) {

				$all_field_value = array();
			}
			$switch_choices = ($setting->manager->get_control($setting->id)->switch_choices);

			foreach ($switch_choices as $choice_key => $choice_value) {

				$valid_field_value[$choice_key] = isset($all_field_value[$choice_key]) ? (boolean)($all_field_value[$choice_key]) : false;
			}

			return $valid_field_value;

		}
	}


}
