<?php
if (!class_exists('Mantrabrain_Theme_Helper')) {

	class Mantrabrain_Theme_Helper
	{

		static function font_awesome_icon_list()
		{
			$fontawesome =
				array(
					"fab fa-500px" => "f26e",
					"fab fa-accessible-icon" => "f368",
					"fab fa-accusoft" => "f369",
					"fab fa-acquisitions-incorporated" => "f6af",
					"fas fa-ad" => "f641",
					"fas fa-address-book" => "f2b9",
					"far fa-address-book" => "f2b9",
					"fas fa-address-card" => "f2bb",
					"far fa-address-card" => "f2bb",
					"fas fa-adjust" => "f042",
					"fab fa-adn" => "f170",
					"fab fa-adversal" => "f36a",
					"fab fa-affiliatetheme" => "f36b",
					"fas fa-air-freshener" => "f5d0",
					"fab fa-airbnb" => "f834",
					"fab fa-algolia" => "f36c",
					"fas fa-align-center" => "f037",
					"fas fa-align-justify" => "f039",
					"fas fa-align-left" => "f036",
					"fas fa-align-right" => "f038",
					"fab fa-alipay" => "f642",
					"fas fa-allergies" => "f461",
					"fab fa-amazon" => "f270",
					"fab fa-amazon-pay" => "f42c",
					"fas fa-ambulance" => "f0f9",
					"fas fa-american-sign-language-interpreting" => "f2a3",
					"fab fa-amilia" => "f36d",
					"fas fa-anchor" => "f13d",
					"fab fa-android" => "f17b",
					"fab fa-angellist" => "f209",
					"fas fa-angle-double-down" => "f103",
					"fas fa-angle-double-left" => "f100",
					"fas fa-angle-double-right" => "f101",
					"fas fa-angle-double-up" => "f102",
					"fas fa-angle-down" => "f107",
					"fas fa-angle-left" => "f104",
					"fas fa-angle-right" => "f105",
					"fas fa-angle-up" => "f106",
					"fas fa-angry" => "f556",
					"far fa-angry" => "f556",
					"fab fa-angrycreative" => "f36e",
					"fab fa-angular" => "f420",
					"fas fa-ankh" => "f644",
					"fab fa-app-store" => "f36f",
					"fab fa-app-store-ios" => "f370",
					"fab fa-apper" => "f371",
					"fab fa-apple" => "f179",
					"fas fa-apple-alt" => "f5d1",
					"fab fa-apple-pay" => "f415",
					"fas fa-archive" => "f187",
					"fas fa-archway" => "f557",
					"fas fa-arrow-alt-circle-down" => "f358",
					"far fa-arrow-alt-circle-down" => "f358",
					"fas fa-arrow-alt-circle-left" => "f359",
					"far fa-arrow-alt-circle-left" => "f359",
					"fas fa-arrow-alt-circle-right" => "f35a",
					"far fa-arrow-alt-circle-right" => "f35a",
					"fas fa-arrow-alt-circle-up" => "f35b",
					"far fa-arrow-alt-circle-up" => "f35b",
					"fas fa-arrow-circle-down" => "f0ab",
					"fas fa-arrow-circle-left" => "f0a8",
					"fas fa-arrow-circle-right" => "f0a9",
					"fas fa-arrow-circle-up" => "f0aa",
					"fas fa-arrow-down" => "f063",
					"fas fa-arrow-left" => "f060",
					"fas fa-arrow-right" => "f061",
					"fas fa-arrow-up" => "f062",
					"fas fa-arrows-alt" => "f0b2",
					"fas fa-arrows-alt-h" => "f337",
					"fas fa-arrows-alt-v" => "f338",
					"fab fa-artstation" => "f77a",
					"fas fa-assistive-listening-systems" => "f2a2",
					"fas fa-asterisk" => "f069",
					"fab fa-asymmetrik" => "f372",
					"fas fa-at" => "f1fa",
					"fas fa-atlas" => "f558",
					"fab fa-atlassian" => "f77b",
					"fas fa-atom" => "f5d2",
					"fab fa-audible" => "f373",
					"fas fa-audio-description" => "f29e",
					"fab fa-autoprefixer" => "f41c",
					"fab fa-avianex" => "f374",
					"fab fa-aviato" => "f421",
					"fas fa-award" => "f559",
					"fab fa-aws" => "f375",
					"fas fa-baby" => "f77c",
					"fas fa-baby-carriage" => "f77d",
					"fas fa-backspace" => "f55a",
					"fas fa-backward" => "f04a",
					"fas fa-bacon" => "f7e5",
					"fas fa-bacteria" => "e059",
					"fas fa-bacterium" => "e05a",
					"fas fa-bahai" => "f666",
					"fas fa-balance-scale" => "f24e",
					"fas fa-balance-scale-left" => "f515",
					"fas fa-balance-scale-right" => "f516",
					"fas fa-ban" => "f05e",
					"fas fa-band-aid" => "f462",
					"fab fa-bandcamp" => "f2d5",
					"fas fa-barcode" => "f02a",
					"fas fa-bars" => "f0c9",
					"fas fa-baseball-ball" => "f433",
					"fas fa-basketball-ball" => "f434",
					"fas fa-bath" => "f2cd",
					"fas fa-battery-empty" => "f244",
					"fas fa-battery-full" => "f240",
					"fas fa-battery-half" => "f242",
					"fas fa-battery-quarter" => "f243",
					"fas fa-battery-three-quarters" => "f241",
					"fab fa-battle-net" => "f835",
					"fas fa-bed" => "f236",
					"fas fa-beer" => "f0fc",
					"fab fa-behance" => "f1b4",
					"fab fa-behance-square" => "f1b5",
					"fas fa-bell" => "f0f3",
					"far fa-bell" => "f0f3",
					"fas fa-bell-slash" => "f1f6",
					"far fa-bell-slash" => "f1f6",
					"fas fa-bezier-curve" => "f55b",
					"fas fa-bible" => "f647",
					"fas fa-bicycle" => "f206",
					"fas fa-biking" => "f84a",
					"fab fa-bimobject" => "f378",
					"fas fa-binoculars" => "f1e5",
					"fas fa-biohazard" => "f780",
					"fas fa-birthday-cake" => "f1fd",
					"fab fa-bitbucket" => "f171",
					"fab fa-bitcoin" => "f379",
					"fab fa-bity" => "f37a",
					"fab fa-black-tie" => "f27e",
					"fab fa-blackberry" => "f37b",
					"fas fa-blender" => "f517",
					"fas fa-blender-phone" => "f6b6",
					"fas fa-blind" => "f29d",
					"fas fa-blog" => "f781",
					"fab fa-blogger" => "f37c",
					"fab fa-blogger-b" => "f37d",
					"fab fa-bluetooth" => "f293",
					"fab fa-bluetooth-b" => "f294",
					"fas fa-bold" => "f032",
					"fas fa-bolt" => "f0e7",
					"fas fa-bomb" => "f1e2",
					"fas fa-bone" => "f5d7",
					"fas fa-bong" => "f55c",
					"fas fa-book" => "f02d",
					"fas fa-book-dead" => "f6b7",
					"fas fa-book-medical" => "f7e6",
					"fas fa-book-open" => "f518",
					"fas fa-book-reader" => "f5da",
					"fas fa-bookmark" => "f02e",
					"far fa-bookmark" => "f02e",
					"fab fa-bootstrap" => "f836",
					"fas fa-border-all" => "f84c",
					"fas fa-border-none" => "f850",
					"fas fa-border-style" => "f853",
					"fas fa-bowling-ball" => "f436",
					"fas fa-box" => "f466",
					"fas fa-box-open" => "f49e",
					"fas fa-box-tissue" => "e05b",
					"fas fa-boxes" => "f468",
					"fas fa-braille" => "f2a1",
					"fas fa-brain" => "f5dc",
					"fas fa-bread-slice" => "f7ec",
					"fas fa-briefcase" => "f0b1",
					"fas fa-briefcase-medical" => "f469",
					"fas fa-broadcast-tower" => "f519",
					"fas fa-broom" => "f51a",
					"fas fa-brush" => "f55d",
					"fab fa-btc" => "f15a",
					"fab fa-buffer" => "f837",
					"fas fa-bug" => "f188",
					"fas fa-building" => "f1ad",
					"far fa-building" => "f1ad",
					"fas fa-bullhorn" => "f0a1",
					"fas fa-bullseye" => "f140",
					"fas fa-burn" => "f46a",
					"fab fa-buromobelexperte" => "f37f",
					"fas fa-bus" => "f207",
					"fas fa-bus-alt" => "f55e",
					"fas fa-business-time" => "f64a",
					"fab fa-buy-n-large" => "f8a6",
					"fab fa-buysellads" => "f20d",
					"fas fa-calculator" => "f1ec",
					"fas fa-calendar" => "f133",
					"far fa-calendar" => "f133",
					"fas fa-calendar-alt" => "f073",
					"far fa-calendar-alt" => "f073",
					"fas fa-calendar-check" => "f274",
					"far fa-calendar-check" => "f274",
					"fas fa-calendar-day" => "f783",
					"fas fa-calendar-minus" => "f272",
					"far fa-calendar-minus" => "f272",
					"fas fa-calendar-plus" => "f271",
					"far fa-calendar-plus" => "f271",
					"fas fa-calendar-times" => "f273",
					"far fa-calendar-times" => "f273",
					"fas fa-calendar-week" => "f784",
					"fas fa-camera" => "f030",
					"fas fa-camera-retro" => "f083",
					"fas fa-campground" => "f6bb",
					"fab fa-canadian-maple-leaf" => "f785",
					"fas fa-candy-cane" => "f786",
					"fas fa-cannabis" => "f55f",
					"fas fa-capsules" => "f46b",
					"fas fa-car" => "f1b9",
					"fas fa-car-alt" => "f5de",
					"fas fa-car-battery" => "f5df",
					"fas fa-car-crash" => "f5e1",
					"fas fa-car-side" => "f5e4",
					"fas fa-caravan" => "f8ff",
					"fas fa-caret-down" => "f0d7",
					"fas fa-caret-left" => "f0d9",
					"fas fa-caret-right" => "f0da",
					"fas fa-caret-square-down" => "f150",
					"far fa-caret-square-down" => "f150",
					"fas fa-caret-square-left" => "f191",
					"far fa-caret-square-left" => "f191",
					"fas fa-caret-square-right" => "f152",
					"far fa-caret-square-right" => "f152",
					"fas fa-caret-square-up" => "f151",
					"far fa-caret-square-up" => "f151",
					"fas fa-caret-up" => "f0d8",
					"fas fa-carrot" => "f787",
					"fas fa-cart-arrow-down" => "f218",
					"fas fa-cart-plus" => "f217",
					"fas fa-cash-register" => "f788",
					"fas fa-cat" => "f6be",
					"fab fa-cc-amazon-pay" => "f42d",
					"fab fa-cc-amex" => "f1f3",
					"fab fa-cc-apple-pay" => "f416",
					"fab fa-cc-diners-club" => "f24c",
					"fab fa-cc-discover" => "f1f2",
					"fab fa-cc-jcb" => "f24b",
					"fab fa-cc-mastercard" => "f1f1",
					"fab fa-cc-paypal" => "f1f4",
					"fab fa-cc-stripe" => "f1f5",
					"fab fa-cc-visa" => "f1f0",
					"fab fa-centercode" => "f380",
					"fab fa-centos" => "f789",
					"fas fa-certificate" => "f0a3",
					"fas fa-chair" => "f6c0",
					"fas fa-chalkboard" => "f51b",
					"fas fa-chalkboard-teacher" => "f51c",
					"fas fa-charging-station" => "f5e7",
					"fas fa-chart-area" => "f1fe",
					"fas fa-chart-bar" => "f080",
					"far fa-chart-bar" => "f080",
					"fas fa-chart-line" => "f201",
					"fas fa-chart-pie" => "f200",
					"fas fa-check" => "f00c",
					"fas fa-check-circle" => "f058",
					"far fa-check-circle" => "f058",
					"fas fa-check-double" => "f560",
					"fas fa-check-square" => "f14a",
					"far fa-check-square" => "f14a",
					"fas fa-cheese" => "f7ef",
					"fas fa-chess" => "f439",
					"fas fa-chess-bishop" => "f43a",
					"fas fa-chess-board" => "f43c",
					"fas fa-chess-king" => "f43f",
					"fas fa-chess-knight" => "f441",
					"fas fa-chess-pawn" => "f443",
					"fas fa-chess-queen" => "f445",
					"fas fa-chess-rook" => "f447",
					"fas fa-chevron-circle-down" => "f13a",
					"fas fa-chevron-circle-left" => "f137",
					"fas fa-chevron-circle-right" => "f138",
					"fas fa-chevron-circle-up" => "f139",
					"fas fa-chevron-down" => "f078",
					"fas fa-chevron-left" => "f053",
					"fas fa-chevron-right" => "f054",
					"fas fa-chevron-up" => "f077",
					"fas fa-child" => "f1ae",
					"fab fa-chrome" => "f268",
					"fab fa-chromecast" => "f838",
					"fas fa-church" => "f51d",
					"fas fa-circle" => "f111",
					"far fa-circle" => "f111",
					"fas fa-circle-notch" => "f1ce",
					"fas fa-city" => "f64f",
					"fas fa-clinic-medical" => "f7f2",
					"fas fa-clipboard" => "f328",
					"far fa-clipboard" => "f328",
					"fas fa-clipboard-check" => "f46c",
					"fas fa-clipboard-list" => "f46d",
					"fas fa-clock" => "f017",
					"far fa-clock" => "f017",
					"fas fa-clone" => "f24d",
					"far fa-clone" => "f24d",
					"fas fa-closed-captioning" => "f20a",
					"far fa-closed-captioning" => "f20a",
					"fas fa-cloud" => "f0c2",
					"fas fa-cloud-download-alt" => "f381",
					"fas fa-cloud-meatball" => "f73b",
					"fas fa-cloud-moon" => "f6c3",
					"fas fa-cloud-moon-rain" => "f73c",
					"fas fa-cloud-rain" => "f73d",
					"fas fa-cloud-showers-heavy" => "f740",
					"fas fa-cloud-sun" => "f6c4",
					"fas fa-cloud-sun-rain" => "f743",
					"fas fa-cloud-upload-alt" => "f382",
					"fab fa-cloudflare" => "e07d",
					"fab fa-cloudscale" => "f383",
					"fab fa-cloudsmith" => "f384",
					"fab fa-cloudversify" => "f385",
					"fas fa-cocktail" => "f561",
					"fas fa-code" => "f121",
					"fas fa-code-branch" => "f126",
					"fab fa-codepen" => "f1cb",
					"fab fa-codiepie" => "f284",
					"fas fa-coffee" => "f0f4",
					"fas fa-cog" => "f013",
					"fas fa-cogs" => "f085",
					"fas fa-coins" => "f51e",
					"fas fa-columns" => "f0db",
					"fas fa-comment" => "f075",
					"far fa-comment" => "f075",
					"fas fa-comment-alt" => "f27a",
					"far fa-comment-alt" => "f27a",
					"fas fa-comment-dollar" => "f651",
					"fas fa-comment-dots" => "f4ad",
					"far fa-comment-dots" => "f4ad",
					"fas fa-comment-medical" => "f7f5",
					"fas fa-comment-slash" => "f4b3",
					"fas fa-comments" => "f086",
					"far fa-comments" => "f086",
					"fas fa-comments-dollar" => "f653",
					"fas fa-compact-disc" => "f51f",
					"fas fa-compass" => "f14e",
					"far fa-compass" => "f14e",
					"fas fa-compress" => "f066",
					"fas fa-compress-alt" => "f422",
					"fas fa-compress-arrows-alt" => "f78c",
					"fas fa-concierge-bell" => "f562",
					"fab fa-confluence" => "f78d",
					"fab fa-connectdevelop" => "f20e",
					"fab fa-contao" => "f26d",
					"fas fa-cookie" => "f563",
					"fas fa-cookie-bite" => "f564",
					"fas fa-copy" => "f0c5",
					"far fa-copy" => "f0c5",
					"fas fa-copyright" => "f1f9",
					"far fa-copyright" => "f1f9",
					"fab fa-cotton-bureau" => "f89e",
					"fas fa-couch" => "f4b8",
					"fab fa-cpanel" => "f388",
					"fab fa-creative-commons" => "f25e",
					"fab fa-creative-commons-by" => "f4e7",
					"fab fa-creative-commons-nc" => "f4e8",
					"fab fa-creative-commons-nc-eu" => "f4e9",
					"fab fa-creative-commons-nc-jp" => "f4ea",
					"fab fa-creative-commons-nd" => "f4eb",
					"fab fa-creative-commons-pd" => "f4ec",
					"fab fa-creative-commons-pd-alt" => "f4ed",
					"fab fa-creative-commons-remix" => "f4ee",
					"fab fa-creative-commons-sa" => "f4ef",
					"fab fa-creative-commons-sampling" => "f4f0",
					"fab fa-creative-commons-sampling-plus" => "f4f1",
					"fab fa-creative-commons-share" => "f4f2",
					"fab fa-creative-commons-zero" => "f4f3",
					"fas fa-credit-card" => "f09d",
					"far fa-credit-card" => "f09d",
					"fab fa-critical-role" => "f6c9",
					"fas fa-crop" => "f125",
					"fas fa-crop-alt" => "f565",
					"fas fa-cross" => "f654",
					"fas fa-crosshairs" => "f05b",
					"fas fa-crow" => "f520",
					"fas fa-crown" => "f521",
					"fas fa-crutch" => "f7f7",
					"fab fa-css3" => "f13c",
					"fab fa-css3-alt" => "f38b",
					"fas fa-cube" => "f1b2",
					"fas fa-cubes" => "f1b3",
					"fas fa-cut" => "f0c4",
					"fab fa-cuttlefish" => "f38c",
					"fab fa-d-and-d" => "f38d",
					"fab fa-d-and-d-beyond" => "f6ca",
					"fab fa-dailymotion" => "e052",
					"fab fa-dashcube" => "f210",
					"fas fa-database" => "f1c0",
					"fas fa-deaf" => "f2a4",
					"fab fa-deezer" => "e077",
					"fab fa-delicious" => "f1a5",
					"fas fa-democrat" => "f747",
					"fab fa-deploydog" => "f38e",
					"fab fa-deskpro" => "f38f",
					"fas fa-desktop" => "f108",
					"fab fa-dev" => "f6cc",
					"fab fa-deviantart" => "f1bd",
					"fas fa-dharmachakra" => "f655",
					"fab fa-dhl" => "f790",
					"fas fa-diagnoses" => "f470",
					"fab fa-diaspora" => "f791",
					"fas fa-dice" => "f522",
					"fas fa-dice-d20" => "f6cf",
					"fas fa-dice-d6" => "f6d1",
					"fas fa-dice-five" => "f523",
					"fas fa-dice-four" => "f524",
					"fas fa-dice-one" => "f525",
					"fas fa-dice-six" => "f526",
					"fas fa-dice-three" => "f527",
					"fas fa-dice-two" => "f528",
					"fab fa-digg" => "f1a6",
					"fab fa-digital-ocean" => "f391",
					"fas fa-digital-tachograph" => "f566",
					"fas fa-directions" => "f5eb",
					"fab fa-discord" => "f392",
					"fab fa-discourse" => "f393",
					"fas fa-disease" => "f7fa",
					"fas fa-divide" => "f529",
					"fas fa-dizzy" => "f567",
					"far fa-dizzy" => "f567",
					"fas fa-dna" => "f471",
					"fab fa-dochub" => "f394",
					"fab fa-docker" => "f395",
					"fas fa-dog" => "f6d3",
					"fas fa-dollar-sign" => "f155",
					"fas fa-dolly" => "f472",
					"fas fa-dolly-flatbed" => "f474",
					"fas fa-donate" => "f4b9",
					"fas fa-door-closed" => "f52a",
					"fas fa-door-open" => "f52b",
					"fas fa-dot-circle" => "f192",
					"far fa-dot-circle" => "f192",
					"fas fa-dove" => "f4ba",
					"fas fa-download" => "f019",
					"fab fa-draft2digital" => "f396",
					"fas fa-drafting-compass" => "f568",
					"fas fa-dragon" => "f6d5",
					"fas fa-draw-polygon" => "f5ee",
					"fab fa-dribbble" => "f17d",
					"fab fa-dribbble-square" => "f397",
					"fab fa-dropbox" => "f16b",
					"fas fa-drum" => "f569",
					"fas fa-drum-steelpan" => "f56a",
					"fas fa-drumstick-bite" => "f6d7",
					"fab fa-drupal" => "f1a9",
					"fas fa-dumbbell" => "f44b",
					"fas fa-dumpster" => "f793",
					"fas fa-dumpster-fire" => "f794",
					"fas fa-dungeon" => "f6d9",
					"fab fa-dyalog" => "f399",
					"fab fa-earlybirds" => "f39a",
					"fab fa-ebay" => "f4f4",
					"fab fa-edge" => "f282",
					"fab fa-edge-legacy" => "e078",
					"fas fa-edit" => "f044",
					"far fa-edit" => "f044",
					"fas fa-egg" => "f7fb",
					"fas fa-eject" => "f052",
					"fab fa-elementor" => "f430",
					"fas fa-ellipsis-h" => "f141",
					"fas fa-ellipsis-v" => "f142",
					"fab fa-ello" => "f5f1",
					"fab fa-ember" => "f423",
					"fab fa-empire" => "f1d1",
					"fas fa-envelope" => "f0e0",
					"far fa-envelope" => "f0e0",
					"fas fa-envelope-open" => "f2b6",
					"far fa-envelope-open" => "f2b6",
					"fas fa-envelope-open-text" => "f658",
					"fas fa-envelope-square" => "f199",
					"fab fa-envira" => "f299",
					"fas fa-equals" => "f52c",
					"fas fa-eraser" => "f12d",
					"fab fa-erlang" => "f39d",
					"fab fa-ethereum" => "f42e",
					"fas fa-ethernet" => "f796",
					"fab fa-etsy" => "f2d7",
					"fas fa-euro-sign" => "f153",
					"fab fa-evernote" => "f839",
					"fas fa-exchange-alt" => "f362",
					"fas fa-exclamation" => "f12a",
					"fas fa-exclamation-circle" => "f06a",
					"fas fa-exclamation-triangle" => "f071",
					"fas fa-expand" => "f065",
					"fas fa-expand-alt" => "f424",
					"fas fa-expand-arrows-alt" => "f31e",
					"fab fa-expeditedssl" => "f23e",
					"fas fa-external-link-alt" => "f35d",
					"fas fa-external-link-square-alt" => "f360",
					"fas fa-eye" => "f06e",
					"far fa-eye" => "f06e",
					"fas fa-eye-dropper" => "f1fb",
					"fas fa-eye-slash" => "f070",
					"far fa-eye-slash" => "f070",
					"fab fa-facebook" => "f09a",
					"fab fa-facebook-f" => "f39e",
					"fab fa-facebook-messenger" => "f39f",
					"fab fa-facebook-square" => "f082",
					"fas fa-fan" => "f863",
					"fab fa-fantasy-flight-games" => "f6dc",
					"fas fa-fast-backward" => "f049",
					"fas fa-fast-forward" => "f050",
					"fas fa-faucet" => "e005",
					"fas fa-fax" => "f1ac",
					"fas fa-feather" => "f52d",
					"fas fa-feather-alt" => "f56b",
					"fab fa-fedex" => "f797",
					"fab fa-fedora" => "f798",
					"fas fa-female" => "f182",
					"fas fa-fighter-jet" => "f0fb",
					"fab fa-figma" => "f799",
					"fas fa-file" => "f15b",
					"far fa-file" => "f15b",
					"fas fa-file-alt" => "f15c",
					"far fa-file-alt" => "f15c",
					"fas fa-file-archive" => "f1c6",
					"far fa-file-archive" => "f1c6",
					"fas fa-file-audio" => "f1c7",
					"far fa-file-audio" => "f1c7",
					"fas fa-file-code" => "f1c9",
					"far fa-file-code" => "f1c9",
					"fas fa-file-contract" => "f56c",
					"fas fa-file-csv" => "f6dd",
					"fas fa-file-download" => "f56d",
					"fas fa-file-excel" => "f1c3",
					"far fa-file-excel" => "f1c3",
					"fas fa-file-export" => "f56e",
					"fas fa-file-image" => "f1c5",
					"far fa-file-image" => "f1c5",
					"fas fa-file-import" => "f56f",
					"fas fa-file-invoice" => "f570",
					"fas fa-file-invoice-dollar" => "f571",
					"fas fa-file-medical" => "f477",
					"fas fa-file-medical-alt" => "f478",
					"fas fa-file-pdf" => "f1c1",
					"far fa-file-pdf" => "f1c1",
					"fas fa-file-powerpoint" => "f1c4",
					"far fa-file-powerpoint" => "f1c4",
					"fas fa-file-prescription" => "f572",
					"fas fa-file-signature" => "f573",
					"fas fa-file-upload" => "f574",
					"fas fa-file-video" => "f1c8",
					"far fa-file-video" => "f1c8",
					"fas fa-file-word" => "f1c2",
					"far fa-file-word" => "f1c2",
					"fas fa-fill" => "f575",
					"fas fa-fill-drip" => "f576",
					"fas fa-film" => "f008",
					"fas fa-filter" => "f0b0",
					"fas fa-fingerprint" => "f577",
					"fas fa-fire" => "f06d",
					"fas fa-fire-alt" => "f7e4",
					"fas fa-fire-extinguisher" => "f134",
					"fab fa-firefox" => "f269",
					"fab fa-firefox-browser" => "e007",
					"fas fa-first-aid" => "f479",
					"fab fa-first-order" => "f2b0",
					"fab fa-first-order-alt" => "f50a",
					"fab fa-firstdraft" => "f3a1",
					"fas fa-fish" => "f578",
					"fas fa-fist-raised" => "f6de",
					"fas fa-flag" => "f024",
					"far fa-flag" => "f024",
					"fas fa-flag-checkered" => "f11e",
					"fas fa-flag-usa" => "f74d",
					"fas fa-flask" => "f0c3",
					"fab fa-flickr" => "f16e",
					"fab fa-flipboard" => "f44d",
					"fas fa-flushed" => "f579",
					"far fa-flushed" => "f579",
					"fab fa-fly" => "f417",
					"fas fa-folder" => "f07b",
					"far fa-folder" => "f07b",
					"fas fa-folder-minus" => "f65d",
					"fas fa-folder-open" => "f07c",
					"far fa-folder-open" => "f07c",
					"fas fa-folder-plus" => "f65e",
					"fas fa-font" => "f031",
					"fab fa-font-awesome" => "f2b4",
					"fab fa-font-awesome-alt" => "f35c",
					"fab fa-font-awesome-flag" => "f425",
					"far fa-font-awesome-logo-full" => "f4e6",
					"fas fa-font-awesome-logo-full" => "f4e6",
					"fab fa-font-awesome-logo-full" => "f4e6",
					"fab fa-fonticons" => "f280",
					"fab fa-fonticons-fi" => "f3a2",
					"fas fa-football-ball" => "f44e",
					"fab fa-fort-awesome" => "f286",
					"fab fa-fort-awesome-alt" => "f3a3",
					"fab fa-forumbee" => "f211",
					"fas fa-forward" => "f04e",
					"fab fa-foursquare" => "f180",
					"fab fa-free-code-camp" => "f2c5",
					"fab fa-freebsd" => "f3a4",
					"fas fa-frog" => "f52e",
					"fas fa-frown" => "f119",
					"far fa-frown" => "f119",
					"fas fa-frown-open" => "f57a",
					"far fa-frown-open" => "f57a",
					"fab fa-fulcrum" => "f50b",
					"fas fa-funnel-dollar" => "f662",
					"fas fa-futbol" => "f1e3",
					"far fa-futbol" => "f1e3",
					"fab fa-galactic-republic" => "f50c",
					"fab fa-galactic-senate" => "f50d",
					"fas fa-gamepad" => "f11b",
					"fas fa-gas-pump" => "f52f",
					"fas fa-gavel" => "f0e3",
					"fas fa-gem" => "f3a5",
					"far fa-gem" => "f3a5",
					"fas fa-genderless" => "f22d",
					"fab fa-get-pocket" => "f265",
					"fab fa-gg" => "f260",
					"fab fa-gg-circle" => "f261",
					"fas fa-ghost" => "f6e2",
					"fas fa-gift" => "f06b",
					"fas fa-gifts" => "f79c",
					"fab fa-git" => "f1d3",
					"fab fa-git-alt" => "f841",
					"fab fa-git-square" => "f1d2",
					"fab fa-github" => "f09b",
					"fab fa-github-alt" => "f113",
					"fab fa-github-square" => "f092",
					"fab fa-gitkraken" => "f3a6",
					"fab fa-gitlab" => "f296",
					"fab fa-gitter" => "f426",
					"fas fa-glass-cheers" => "f79f",
					"fas fa-glass-martini" => "f000",
					"fas fa-glass-martini-alt" => "f57b",
					"fas fa-glass-whiskey" => "f7a0",
					"fas fa-glasses" => "f530",
					"fab fa-glide" => "f2a5",
					"fab fa-glide-g" => "f2a6",
					"fas fa-globe" => "f0ac",
					"fas fa-globe-africa" => "f57c",
					"fas fa-globe-americas" => "f57d",
					"fas fa-globe-asia" => "f57e",
					"fas fa-globe-europe" => "f7a2",
					"fab fa-gofore" => "f3a7",
					"fas fa-golf-ball" => "f450",
					"fab fa-goodreads" => "f3a8",
					"fab fa-goodreads-g" => "f3a9",
					"fab fa-google" => "f1a0",
					"fab fa-google-drive" => "f3aa",
					"fab fa-google-pay" => "e079",
					"fab fa-google-play" => "f3ab",
					"fab fa-google-plus" => "f2b3",
					"fab fa-google-plus-g" => "f0d5",
					"fab fa-google-plus-square" => "f0d4",
					"fab fa-google-wallet" => "f1ee",
					"fas fa-gopuram" => "f664",
					"fas fa-graduation-cap" => "f19d",
					"fab fa-gratipay" => "f184",
					"fab fa-grav" => "f2d6",
					"fas fa-greater-than" => "f531",
					"fas fa-greater-than-equal" => "f532",
					"fas fa-grimace" => "f57f",
					"far fa-grimace" => "f57f",
					"fas fa-grin" => "f580",
					"far fa-grin" => "f580",
					"fas fa-grin-alt" => "f581",
					"far fa-grin-alt" => "f581",
					"fas fa-grin-beam" => "f582",
					"far fa-grin-beam" => "f582",
					"fas fa-grin-beam-sweat" => "f583",
					"far fa-grin-beam-sweat" => "f583",
					"fas fa-grin-hearts" => "f584",
					"far fa-grin-hearts" => "f584",
					"fas fa-grin-squint" => "f585",
					"far fa-grin-squint" => "f585",
					"fas fa-grin-squint-tears" => "f586",
					"far fa-grin-squint-tears" => "f586",
					"fas fa-grin-stars" => "f587",
					"far fa-grin-stars" => "f587",
					"fas fa-grin-tears" => "f588",
					"far fa-grin-tears" => "f588",
					"fas fa-grin-tongue" => "f589",
					"far fa-grin-tongue" => "f589",
					"fas fa-grin-tongue-squint" => "f58a",
					"far fa-grin-tongue-squint" => "f58a",
					"fas fa-grin-tongue-wink" => "f58b",
					"far fa-grin-tongue-wink" => "f58b",
					"fas fa-grin-wink" => "f58c",
					"far fa-grin-wink" => "f58c",
					"fas fa-grip-horizontal" => "f58d",
					"fas fa-grip-lines" => "f7a4",
					"fas fa-grip-lines-vertical" => "f7a5",
					"fas fa-grip-vertical" => "f58e",
					"fab fa-gripfire" => "f3ac",
					"fab fa-grunt" => "f3ad",
					"fab fa-guilded" => "e07e",
					"fas fa-guitar" => "f7a6",
					"fab fa-gulp" => "f3ae",
					"fas fa-h-square" => "f0fd",
					"fab fa-hacker-news" => "f1d4",
					"fab fa-hacker-news-square" => "f3af",
					"fab fa-hackerrank" => "f5f7",
					"fas fa-hamburger" => "f805",
					"fas fa-hammer" => "f6e3",
					"fas fa-hamsa" => "f665",
					"fas fa-hand-holding" => "f4bd",
					"fas fa-hand-holding-heart" => "f4be",
					"fas fa-hand-holding-medical" => "e05c",
					"fas fa-hand-holding-usd" => "f4c0",
					"fas fa-hand-holding-water" => "f4c1",
					"fas fa-hand-lizard" => "f258",
					"far fa-hand-lizard" => "f258",
					"fas fa-hand-middle-finger" => "f806",
					"fas fa-hand-paper" => "f256",
					"far fa-hand-paper" => "f256",
					"fas fa-hand-peace" => "f25b",
					"far fa-hand-peace" => "f25b",
					"fas fa-hand-point-down" => "f0a7",
					"far fa-hand-point-down" => "f0a7",
					"fas fa-hand-point-left" => "f0a5",
					"far fa-hand-point-left" => "f0a5",
					"fas fa-hand-point-right" => "f0a4",
					"far fa-hand-point-right" => "f0a4",
					"fas fa-hand-point-up" => "f0a6",
					"far fa-hand-point-up" => "f0a6",
					"fas fa-hand-pointer" => "f25a",
					"far fa-hand-pointer" => "f25a",
					"fas fa-hand-rock" => "f255",
					"far fa-hand-rock" => "f255",
					"fas fa-hand-scissors" => "f257",
					"far fa-hand-scissors" => "f257",
					"fas fa-hand-sparkles" => "e05d",
					"fas fa-hand-spock" => "f259",
					"far fa-hand-spock" => "f259",
					"fas fa-hands" => "f4c2",
					"fas fa-hands-helping" => "f4c4",
					"fas fa-hands-wash" => "e05e",
					"fas fa-handshake" => "f2b5",
					"far fa-handshake" => "f2b5",
					"fas fa-handshake-alt-slash" => "e05f",
					"fas fa-handshake-slash" => "e060",
					"fas fa-hanukiah" => "f6e6",
					"fas fa-hard-hat" => "f807",
					"fas fa-hashtag" => "f292",
					"fas fa-hat-cowboy" => "f8c0",
					"fas fa-hat-cowboy-side" => "f8c1",
					"fas fa-hat-wizard" => "f6e8",
					"fas fa-hdd" => "f0a0",
					"far fa-hdd" => "f0a0",
					"fas fa-head-side-cough" => "e061",
					"fas fa-head-side-cough-slash" => "e062",
					"fas fa-head-side-mask" => "e063",
					"fas fa-head-side-virus" => "e064",
					"fas fa-heading" => "f1dc",
					"fas fa-headphones" => "f025",
					"fas fa-headphones-alt" => "f58f",
					"fas fa-headset" => "f590",
					"fas fa-heart" => "f004",
					"far fa-heart" => "f004",
					"fas fa-heart-broken" => "f7a9",
					"fas fa-heartbeat" => "f21e",
					"fas fa-helicopter" => "f533",
					"fas fa-highlighter" => "f591",
					"fas fa-hiking" => "f6ec",
					"fas fa-hippo" => "f6ed",
					"fab fa-hips" => "f452",
					"fab fa-hire-a-helper" => "f3b0",
					"fas fa-history" => "f1da",
					"fab fa-hive" => "e07f",
					"fas fa-hockey-puck" => "f453",
					"fas fa-holly-berry" => "f7aa",
					"fas fa-home" => "f015",
					"fab fa-hooli" => "f427",
					"fab fa-hornbill" => "f592",
					"fas fa-horse" => "f6f0",
					"fas fa-horse-head" => "f7ab",
					"fas fa-hospital" => "f0f8",
					"far fa-hospital" => "f0f8",
					"fas fa-hospital-alt" => "f47d",
					"fas fa-hospital-symbol" => "f47e",
					"fas fa-hospital-user" => "f80d",
					"fas fa-hot-tub" => "f593",
					"fas fa-hotdog" => "f80f",
					"fas fa-hotel" => "f594",
					"fab fa-hotjar" => "f3b1",
					"fas fa-hourglass" => "f254",
					"far fa-hourglass" => "f254",
					"fas fa-hourglass-end" => "f253",
					"fas fa-hourglass-half" => "f252",
					"fas fa-hourglass-start" => "f251",
					"fas fa-house-damage" => "f6f1",
					"fas fa-house-user" => "e065",
					"fab fa-houzz" => "f27c",
					"fas fa-hryvnia" => "f6f2",
					"fab fa-html5" => "f13b",
					"fab fa-hubspot" => "f3b2",
					"fas fa-i-cursor" => "f246",
					"fas fa-ice-cream" => "f810",
					"fas fa-icicles" => "f7ad",
					"fas fa-icons" => "f86d",
					"fas fa-id-badge" => "f2c1",
					"far fa-id-badge" => "f2c1",
					"fas fa-id-card" => "f2c2",
					"far fa-id-card" => "f2c2",
					"fas fa-id-card-alt" => "f47f",
					"fab fa-ideal" => "e013",
					"fas fa-igloo" => "f7ae",
					"fas fa-image" => "f03e",
					"far fa-image" => "f03e",
					"fas fa-images" => "f302",
					"far fa-images" => "f302",
					"fab fa-imdb" => "f2d8",
					"fas fa-inbox" => "f01c",
					"fas fa-indent" => "f03c",
					"fas fa-industry" => "f275",
					"fas fa-infinity" => "f534",
					"fas fa-info" => "f129",
					"fas fa-info-circle" => "f05a",
					"fab fa-innosoft" => "e080",
					"fab fa-instagram" => "f16d",
					"fab fa-instagram-square" => "e055",
					"fab fa-instalod" => "e081",
					"fab fa-intercom" => "f7af",
					"fab fa-internet-explorer" => "f26b",
					"fab fa-invision" => "f7b0",
					"fab fa-ioxhost" => "f208",
					"fas fa-italic" => "f033",
					"fab fa-itch-io" => "f83a",
					"fab fa-itunes" => "f3b4",
					"fab fa-itunes-note" => "f3b5",
					"fab fa-java" => "f4e4",
					"fas fa-jedi" => "f669",
					"fab fa-jedi-order" => "f50e",
					"fab fa-jenkins" => "f3b6",
					"fab fa-jira" => "f7b1",
					"fab fa-joget" => "f3b7",
					"fas fa-joint" => "f595",
					"fab fa-joomla" => "f1aa",
					"fas fa-journal-whills" => "f66a",
					"fab fa-js" => "f3b8",
					"fab fa-js-square" => "f3b9",
					"fab fa-jsfiddle" => "f1cc",
					"fas fa-kaaba" => "f66b",
					"fab fa-kaggle" => "f5fa",
					"fas fa-key" => "f084",
					"fab fa-keybase" => "f4f5",
					"fas fa-keyboard" => "f11c",
					"far fa-keyboard" => "f11c",
					"fab fa-keycdn" => "f3ba",
					"fas fa-khanda" => "f66d",
					"fab fa-kickstarter" => "f3bb",
					"fab fa-kickstarter-k" => "f3bc",
					"fas fa-kiss" => "f596",
					"far fa-kiss" => "f596",
					"fas fa-kiss-beam" => "f597",
					"far fa-kiss-beam" => "f597",
					"fas fa-kiss-wink-heart" => "f598",
					"far fa-kiss-wink-heart" => "f598",
					"fas fa-kiwi-bird" => "f535",
					"fab fa-korvue" => "f42f",
					"fas fa-landmark" => "f66f",
					"fas fa-language" => "f1ab",
					"fas fa-laptop" => "f109",
					"fas fa-laptop-code" => "f5fc",
					"fas fa-laptop-house" => "e066",
					"fas fa-laptop-medical" => "f812",
					"fab fa-laravel" => "f3bd",
					"fab fa-lastfm" => "f202",
					"fab fa-lastfm-square" => "f203",
					"fas fa-laugh" => "f599",
					"far fa-laugh" => "f599",
					"fas fa-laugh-beam" => "f59a",
					"far fa-laugh-beam" => "f59a",
					"fas fa-laugh-squint" => "f59b",
					"far fa-laugh-squint" => "f59b",
					"fas fa-laugh-wink" => "f59c",
					"far fa-laugh-wink" => "f59c",
					"fas fa-layer-group" => "f5fd",
					"fas fa-leaf" => "f06c",
					"fab fa-leanpub" => "f212",
					"fas fa-lemon" => "f094",
					"far fa-lemon" => "f094",
					"fab fa-less" => "f41d",
					"fas fa-less-than" => "f536",
					"fas fa-less-than-equal" => "f537",
					"fas fa-level-down-alt" => "f3be",
					"fas fa-level-up-alt" => "f3bf",
					"fas fa-life-ring" => "f1cd",
					"far fa-life-ring" => "f1cd",
					"fas fa-lightbulb" => "f0eb",
					"far fa-lightbulb" => "f0eb",
					"fab fa-line" => "f3c0",
					"fas fa-link" => "f0c1",
					"fab fa-linkedin" => "f08c",
					"fab fa-linkedin-in" => "f0e1",
					"fab fa-linode" => "f2b8",
					"fab fa-linux" => "f17c",
					"fas fa-lira-sign" => "f195",
					"fas fa-list" => "f03a",
					"fas fa-list-alt" => "f022",
					"far fa-list-alt" => "f022",
					"fas fa-list-ol" => "f0cb",
					"fas fa-list-ul" => "f0ca",
					"fas fa-location-arrow" => "f124",
					"fas fa-lock" => "f023",
					"fas fa-lock-open" => "f3c1",
					"fas fa-long-arrow-alt-down" => "f309",
					"fas fa-long-arrow-alt-left" => "f30a",
					"fas fa-long-arrow-alt-right" => "f30b",
					"fas fa-long-arrow-alt-up" => "f30c",
					"fas fa-low-vision" => "f2a8",
					"fas fa-luggage-cart" => "f59d",
					"fas fa-lungs" => "f604",
					"fas fa-lungs-virus" => "e067",
					"fab fa-lyft" => "f3c3",
					"fab fa-magento" => "f3c4",
					"fas fa-magic" => "f0d0",
					"fas fa-magnet" => "f076",
					"fas fa-mail-bulk" => "f674",
					"fab fa-mailchimp" => "f59e",
					"fas fa-male" => "f183",
					"fab fa-mandalorian" => "f50f",
					"fas fa-map" => "f279",
					"far fa-map" => "f279",
					"fas fa-map-marked" => "f59f",
					"fas fa-map-marked-alt" => "f5a0",
					"fas fa-map-marker" => "f041",
					"fas fa-map-marker-alt" => "f3c5",
					"fas fa-map-pin" => "f276",
					"fas fa-map-signs" => "f277",
					"fab fa-markdown" => "f60f",
					"fas fa-marker" => "f5a1",
					"fas fa-mars" => "f222",
					"fas fa-mars-double" => "f227",
					"fas fa-mars-stroke" => "f229",
					"fas fa-mars-stroke-h" => "f22b",
					"fas fa-mars-stroke-v" => "f22a",
					"fas fa-mask" => "f6fa",
					"fab fa-mastodon" => "f4f6",
					"fab fa-maxcdn" => "f136",
					"fab fa-mdb" => "f8ca",
					"fas fa-medal" => "f5a2",
					"fab fa-medapps" => "f3c6",
					"fab fa-medium" => "f23a",
					"fab fa-medium-m" => "f3c7",
					"fas fa-medkit" => "f0fa",
					"fab fa-medrt" => "f3c8",
					"fab fa-meetup" => "f2e0",
					"fab fa-megaport" => "f5a3",
					"fas fa-meh" => "f11a",
					"far fa-meh" => "f11a",
					"fas fa-meh-blank" => "f5a4",
					"far fa-meh-blank" => "f5a4",
					"fas fa-meh-rolling-eyes" => "f5a5",
					"far fa-meh-rolling-eyes" => "f5a5",
					"fas fa-memory" => "f538",
					"fab fa-mendeley" => "f7b3",
					"fas fa-menorah" => "f676",
					"fas fa-mercury" => "f223",
					"fas fa-meteor" => "f753",
					"fab fa-microblog" => "e01a",
					"fas fa-microchip" => "f2db",
					"fas fa-microphone" => "f130",
					"fas fa-microphone-alt" => "f3c9",
					"fas fa-microphone-alt-slash" => "f539",
					"fas fa-microphone-slash" => "f131",
					"fas fa-microscope" => "f610",
					"fab fa-microsoft" => "f3ca",
					"fas fa-minus" => "f068",
					"fas fa-minus-circle" => "f056",
					"fas fa-minus-square" => "f146",
					"far fa-minus-square" => "f146",
					"fas fa-mitten" => "f7b5",
					"fab fa-mix" => "f3cb",
					"fab fa-mixcloud" => "f289",
					"fab fa-mixer" => "e056",
					"fab fa-mizuni" => "f3cc",
					"fas fa-mobile" => "f10b",
					"fas fa-mobile-alt" => "f3cd",
					"fab fa-modx" => "f285",
					"fab fa-monero" => "f3d0",
					"fas fa-money-bill" => "f0d6",
					"fas fa-money-bill-alt" => "f3d1",
					"far fa-money-bill-alt" => "f3d1",
					"fas fa-money-bill-wave" => "f53a",
					"fas fa-money-bill-wave-alt" => "f53b",
					"fas fa-money-check" => "f53c",
					"fas fa-money-check-alt" => "f53d",
					"fas fa-monument" => "f5a6",
					"fas fa-moon" => "f186",
					"far fa-moon" => "f186",
					"fas fa-mortar-pestle" => "f5a7",
					"fas fa-mosque" => "f678",
					"fas fa-motorcycle" => "f21c",
					"fas fa-mountain" => "f6fc",
					"fas fa-mouse" => "f8cc",
					"fas fa-mouse-pointer" => "f245",
					"fas fa-mug-hot" => "f7b6",
					"fas fa-music" => "f001",
					"fab fa-napster" => "f3d2",
					"fab fa-neos" => "f612",
					"fas fa-network-wired" => "f6ff",
					"fas fa-neuter" => "f22c",
					"fas fa-newspaper" => "f1ea",
					"far fa-newspaper" => "f1ea",
					"fab fa-nimblr" => "f5a8",
					"fab fa-node" => "f419",
					"fab fa-node-js" => "f3d3",
					"fas fa-not-equal" => "f53e",
					"fas fa-notes-medical" => "f481",
					"fab fa-npm" => "f3d4",
					"fab fa-ns8" => "f3d5",
					"fab fa-nutritionix" => "f3d6",
					"fas fa-object-group" => "f247",
					"far fa-object-group" => "f247",
					"fas fa-object-ungroup" => "f248",
					"far fa-object-ungroup" => "f248",
					"fab fa-octopus-deploy" => "e082",
					"fab fa-odnoklassniki" => "f263",
					"fab fa-odnoklassniki-square" => "f264",
					"fas fa-oil-can" => "f613",
					"fab fa-old-republic" => "f510",
					"fas fa-om" => "f679",
					"fab fa-opencart" => "f23d",
					"fab fa-openid" => "f19b",
					"fab fa-opera" => "f26a",
					"fab fa-optin-monster" => "f23c",
					"fab fa-orcid" => "f8d2",
					"fab fa-osi" => "f41a",
					"fas fa-otter" => "f700",
					"fas fa-outdent" => "f03b",
					"fab fa-page4" => "f3d7",
					"fab fa-pagelines" => "f18c",
					"fas fa-pager" => "f815",
					"fas fa-paint-brush" => "f1fc",
					"fas fa-paint-roller" => "f5aa",
					"fas fa-palette" => "f53f",
					"fab fa-palfed" => "f3d8",
					"fas fa-pallet" => "f482",
					"fas fa-paper-plane" => "f1d8",
					"far fa-paper-plane" => "f1d8",
					"fas fa-paperclip" => "f0c6",
					"fas fa-parachute-box" => "f4cd",
					"fas fa-paragraph" => "f1dd",
					"fas fa-parking" => "f540",
					"fas fa-passport" => "f5ab",
					"fas fa-pastafarianism" => "f67b",
					"fas fa-paste" => "f0ea",
					"fab fa-patreon" => "f3d9",
					"fas fa-pause" => "f04c",
					"fas fa-pause-circle" => "f28b",
					"far fa-pause-circle" => "f28b",
					"fas fa-paw" => "f1b0",
					"fab fa-paypal" => "f1ed",
					"fas fa-peace" => "f67c",
					"fas fa-pen" => "f304",
					"fas fa-pen-alt" => "f305",
					"fas fa-pen-fancy" => "f5ac",
					"fas fa-pen-nib" => "f5ad",
					"fas fa-pen-square" => "f14b",
					"fas fa-pencil-alt" => "f303",
					"fas fa-pencil-ruler" => "f5ae",
					"fab fa-penny-arcade" => "f704",
					"fas fa-people-arrows" => "e068",
					"fas fa-people-carry" => "f4ce",
					"fas fa-pepper-hot" => "f816",
					"fab fa-perbyte" => "e083",
					"fas fa-percent" => "f295",
					"fas fa-percentage" => "f541",
					"fab fa-periscope" => "f3da",
					"fas fa-person-booth" => "f756",
					"fab fa-phabricator" => "f3db",
					"fab fa-phoenix-framework" => "f3dc",
					"fab fa-phoenix-squadron" => "f511",
					"fas fa-phone" => "f095",
					"fas fa-phone-alt" => "f879",
					"fas fa-phone-slash" => "f3dd",
					"fas fa-phone-square" => "f098",
					"fas fa-phone-square-alt" => "f87b",
					"fas fa-phone-volume" => "f2a0",
					"fas fa-photo-video" => "f87c",
					"fab fa-php" => "f457",
					"fab fa-pied-piper" => "f2ae",
					"fab fa-pied-piper-alt" => "f1a8",
					"fab fa-pied-piper-hat" => "f4e5",
					"fab fa-pied-piper-pp" => "f1a7",
					"fab fa-pied-piper-square" => "e01e",
					"fas fa-piggy-bank" => "f4d3",
					"fas fa-pills" => "f484",
					"fab fa-pinterest" => "f0d2",
					"fab fa-pinterest-p" => "f231",
					"fab fa-pinterest-square" => "f0d3",
					"fas fa-pizza-slice" => "f818",
					"fas fa-place-of-worship" => "f67f",
					"fas fa-plane" => "f072",
					"fas fa-plane-arrival" => "f5af",
					"fas fa-plane-departure" => "f5b0",
					"fas fa-plane-slash" => "e069",
					"fas fa-play" => "f04b",
					"fas fa-play-circle" => "f144",
					"far fa-play-circle" => "f144",
					"fab fa-playstation" => "f3df",
					"fas fa-plug" => "f1e6",
					"fas fa-plus" => "f067",
					"fas fa-plus-circle" => "f055",
					"fas fa-plus-square" => "f0fe",
					"far fa-plus-square" => "f0fe",
					"fas fa-podcast" => "f2ce",
					"fas fa-poll" => "f681",
					"fas fa-poll-h" => "f682",
					"fas fa-poo" => "f2fe",
					"fas fa-poo-storm" => "f75a",
					"fas fa-poop" => "f619",
					"fas fa-portrait" => "f3e0",
					"fas fa-pound-sign" => "f154",
					"fas fa-power-off" => "f011",
					"fas fa-pray" => "f683",
					"fas fa-praying-hands" => "f684",
					"fas fa-prescription" => "f5b1",
					"fas fa-prescription-bottle" => "f485",
					"fas fa-prescription-bottle-alt" => "f486",
					"fas fa-print" => "f02f",
					"fas fa-procedures" => "f487",
					"fab fa-product-hunt" => "f288",
					"fas fa-project-diagram" => "f542",
					"fas fa-pump-medical" => "e06a",
					"fas fa-pump-soap" => "e06b",
					"fab fa-pushed" => "f3e1",
					"fas fa-puzzle-piece" => "f12e",
					"fab fa-python" => "f3e2",
					"fab fa-qq" => "f1d6",
					"fas fa-qrcode" => "f029",
					"fas fa-question" => "f128",
					"fas fa-question-circle" => "f059",
					"far fa-question-circle" => "f059",
					"fas fa-quidditch" => "f458",
					"fab fa-quinscape" => "f459",
					"fab fa-quora" => "f2c4",
					"fas fa-quote-left" => "f10d",
					"fas fa-quote-right" => "f10e",
					"fas fa-quran" => "f687",
					"fab fa-r-project" => "f4f7",
					"fas fa-radiation" => "f7b9",
					"fas fa-radiation-alt" => "f7ba",
					"fas fa-rainbow" => "f75b",
					"fas fa-random" => "f074",
					"fab fa-raspberry-pi" => "f7bb",
					"fab fa-ravelry" => "f2d9",
					"fab fa-react" => "f41b",
					"fab fa-reacteurope" => "f75d",
					"fab fa-readme" => "f4d5",
					"fab fa-rebel" => "f1d0",
					"fas fa-receipt" => "f543",
					"fas fa-record-vinyl" => "f8d9",
					"fas fa-recycle" => "f1b8",
					"fab fa-red-river" => "f3e3",
					"fab fa-reddit" => "f1a1",
					"fab fa-reddit-alien" => "f281",
					"fab fa-reddit-square" => "f1a2",
					"fab fa-redhat" => "f7bc",
					"fas fa-redo" => "f01e",
					"fas fa-redo-alt" => "f2f9",
					"fas fa-registered" => "f25d",
					"far fa-registered" => "f25d",
					"fas fa-remove-format" => "f87d",
					"fab fa-renren" => "f18b",
					"fas fa-reply" => "f3e5",
					"fas fa-reply-all" => "f122",
					"fab fa-replyd" => "f3e6",
					"fas fa-republican" => "f75e",
					"fab fa-researchgate" => "f4f8",
					"fab fa-resolving" => "f3e7",
					"fas fa-restroom" => "f7bd",
					"fas fa-retweet" => "f079",
					"fab fa-rev" => "f5b2",
					"fas fa-ribbon" => "f4d6",
					"fas fa-ring" => "f70b",
					"fas fa-road" => "f018",
					"fas fa-robot" => "f544",
					"fas fa-rocket" => "f135",
					"fab fa-rocketchat" => "f3e8",
					"fab fa-rockrms" => "f3e9",
					"fas fa-route" => "f4d7",
					"fas fa-rss" => "f09e",
					"fas fa-rss-square" => "f143",
					"fas fa-ruble-sign" => "f158",
					"fas fa-ruler" => "f545",
					"fas fa-ruler-combined" => "f546",
					"fas fa-ruler-horizontal" => "f547",
					"fas fa-ruler-vertical" => "f548",
					"fas fa-running" => "f70c",
					"fas fa-rupee-sign" => "f156",
					"fab fa-rust" => "e07a",
					"fas fa-sad-cry" => "f5b3",
					"far fa-sad-cry" => "f5b3",
					"fas fa-sad-tear" => "f5b4",
					"far fa-sad-tear" => "f5b4",
					"fab fa-safari" => "f267",
					"fab fa-salesforce" => "f83b",
					"fab fa-sass" => "f41e",
					"fas fa-satellite" => "f7bf",
					"fas fa-satellite-dish" => "f7c0",
					"fas fa-save" => "f0c7",
					"far fa-save" => "f0c7",
					"fab fa-schlix" => "f3ea",
					"fas fa-school" => "f549",
					"fas fa-screwdriver" => "f54a",
					"fab fa-scribd" => "f28a",
					"fas fa-scroll" => "f70e",
					"fas fa-sd-card" => "f7c2",
					"fas fa-search" => "f002",
					"fas fa-search-dollar" => "f688",
					"fas fa-search-location" => "f689",
					"fas fa-search-minus" => "f010",
					"fas fa-search-plus" => "f00e",
					"fab fa-searchengin" => "f3eb",
					"fas fa-seedling" => "f4d8",
					"fab fa-sellcast" => "f2da",
					"fab fa-sellsy" => "f213",
					"fas fa-server" => "f233",
					"fab fa-servicestack" => "f3ec",
					"fas fa-shapes" => "f61f",
					"fas fa-share" => "f064",
					"fas fa-share-alt" => "f1e0",
					"fas fa-share-alt-square" => "f1e1",
					"fas fa-share-square" => "f14d",
					"far fa-share-square" => "f14d",
					"fas fa-shekel-sign" => "f20b",
					"fas fa-shield-alt" => "f3ed",
					"fas fa-shield-virus" => "e06c",
					"fas fa-ship" => "f21a",
					"fas fa-shipping-fast" => "f48b",
					"fab fa-shirtsinbulk" => "f214",
					"fas fa-shoe-prints" => "f54b",
					"fab fa-shopify" => "e057",
					"fas fa-shopping-bag" => "f290",
					"fas fa-shopping-basket" => "f291",
					"fas fa-shopping-cart" => "f07a",
					"fab fa-shopware" => "f5b5",
					"fas fa-shower" => "f2cc",
					"fas fa-shuttle-van" => "f5b6",
					"fas fa-sign" => "f4d9",
					"fas fa-sign-in-alt" => "f2f6",
					"fas fa-sign-language" => "f2a7",
					"fas fa-sign-out-alt" => "f2f5",
					"fas fa-signal" => "f012",
					"fas fa-signature" => "f5b7",
					"fas fa-sim-card" => "f7c4",
					"fab fa-simplybuilt" => "f215",
					"fas fa-sink" => "e06d",
					"fab fa-sistrix" => "f3ee",
					"fas fa-sitemap" => "f0e8",
					"fab fa-sith" => "f512",
					"fas fa-skating" => "f7c5",
					"fab fa-sketch" => "f7c6",
					"fas fa-skiing" => "f7c9",
					"fas fa-skiing-nordic" => "f7ca",
					"fas fa-skull" => "f54c",
					"fas fa-skull-crossbones" => "f714",
					"fab fa-skyatlas" => "f216",
					"fab fa-skype" => "f17e",
					"fab fa-slack" => "f198",
					"fab fa-slack-hash" => "f3ef",
					"fas fa-slash" => "f715",
					"fas fa-sleigh" => "f7cc",
					"fas fa-sliders-h" => "f1de",
					"fab fa-slideshare" => "f1e7",
					"fas fa-smile" => "f118",
					"far fa-smile" => "f118",
					"fas fa-smile-beam" => "f5b8",
					"far fa-smile-beam" => "f5b8",
					"fas fa-smile-wink" => "f4da",
					"far fa-smile-wink" => "f4da",
					"fas fa-smog" => "f75f",
					"fas fa-smoking" => "f48d",
					"fas fa-smoking-ban" => "f54d",
					"fas fa-sms" => "f7cd",
					"fab fa-snapchat" => "f2ab",
					"fab fa-snapchat-ghost" => "f2ac",
					"fab fa-snapchat-square" => "f2ad",
					"fas fa-snowboarding" => "f7ce",
					"fas fa-snowflake" => "f2dc",
					"far fa-snowflake" => "f2dc",
					"fas fa-snowman" => "f7d0",
					"fas fa-snowplow" => "f7d2",
					"fas fa-soap" => "e06e",
					"fas fa-socks" => "f696",
					"fas fa-solar-panel" => "f5ba",
					"fas fa-sort" => "f0dc",
					"fas fa-sort-alpha-down" => "f15d",
					"fas fa-sort-alpha-down-alt" => "f881",
					"fas fa-sort-alpha-up" => "f15e",
					"fas fa-sort-alpha-up-alt" => "f882",
					"fas fa-sort-amount-down" => "f160",
					"fas fa-sort-amount-down-alt" => "f884",
					"fas fa-sort-amount-up" => "f161",
					"fas fa-sort-amount-up-alt" => "f885",
					"fas fa-sort-down" => "f0dd",
					"fas fa-sort-numeric-down" => "f162",
					"fas fa-sort-numeric-down-alt" => "f886",
					"fas fa-sort-numeric-up" => "f163",
					"fas fa-sort-numeric-up-alt" => "f887",
					"fas fa-sort-up" => "f0de",
					"fab fa-soundcloud" => "f1be",
					"fab fa-sourcetree" => "f7d3",
					"fas fa-spa" => "f5bb",
					"fas fa-space-shuttle" => "f197",
					"fab fa-speakap" => "f3f3",
					"fab fa-speaker-deck" => "f83c",
					"fas fa-spell-check" => "f891",
					"fas fa-spider" => "f717",
					"fas fa-spinner" => "f110",
					"fas fa-splotch" => "f5bc",
					"fab fa-spotify" => "f1bc",
					"fas fa-spray-can" => "f5bd",
					"fas fa-square" => "f0c8",
					"far fa-square" => "f0c8",
					"fas fa-square-full" => "f45c",
					"fas fa-square-root-alt" => "f698",
					"fab fa-squarespace" => "f5be",
					"fab fa-stack-exchange" => "f18d",
					"fab fa-stack-overflow" => "f16c",
					"fab fa-stackpath" => "f842",
					"fas fa-stamp" => "f5bf",
					"fas fa-star" => "f005",
					"far fa-star" => "f005",
					"fas fa-star-and-crescent" => "f699",
					"fas fa-star-half" => "f089",
					"far fa-star-half" => "f089",
					"fas fa-star-half-alt" => "f5c0",
					"fas fa-star-of-david" => "f69a",
					"fas fa-star-of-life" => "f621",
					"fab fa-staylinked" => "f3f5",
					"fab fa-steam" => "f1b6",
					"fab fa-steam-square" => "f1b7",
					"fab fa-steam-symbol" => "f3f6",
					"fas fa-step-backward" => "f048",
					"fas fa-step-forward" => "f051",
					"fas fa-stethoscope" => "f0f1",
					"fab fa-sticker-mule" => "f3f7",
					"fas fa-sticky-note" => "f249",
					"far fa-sticky-note" => "f249",
					"fas fa-stop" => "f04d",
					"fas fa-stop-circle" => "f28d",
					"far fa-stop-circle" => "f28d",
					"fas fa-stopwatch" => "f2f2",
					"fas fa-stopwatch-20" => "e06f",
					"fas fa-store" => "f54e",
					"fas fa-store-alt" => "f54f",
					"fas fa-store-alt-slash" => "e070",
					"fas fa-store-slash" => "e071",
					"fab fa-strava" => "f428",
					"fas fa-stream" => "f550",
					"fas fa-street-view" => "f21d",
					"fas fa-strikethrough" => "f0cc",
					"fab fa-stripe" => "f429",
					"fab fa-stripe-s" => "f42a",
					"fas fa-stroopwafel" => "f551",
					"fab fa-studiovinari" => "f3f8",
					"fab fa-stumbleupon" => "f1a4",
					"fab fa-stumbleupon-circle" => "f1a3",
					"fas fa-subscript" => "f12c",
					"fas fa-subway" => "f239",
					"fas fa-suitcase" => "f0f2",
					"fas fa-suitcase-rolling" => "f5c1",
					"fas fa-sun" => "f185",
					"far fa-sun" => "f185",
					"fab fa-superpowers" => "f2dd",
					"fas fa-superscript" => "f12b",
					"fab fa-supple" => "f3f9",
					"fas fa-surprise" => "f5c2",
					"far fa-surprise" => "f5c2",
					"fab fa-suse" => "f7d6",
					"fas fa-swatchbook" => "f5c3",
					"fab fa-swift" => "f8e1",
					"fas fa-swimmer" => "f5c4",
					"fas fa-swimming-pool" => "f5c5",
					"fab fa-symfony" => "f83d",
					"fas fa-synagogue" => "f69b",
					"fas fa-sync" => "f021",
					"fas fa-sync-alt" => "f2f1",
					"fas fa-syringe" => "f48e",
					"fas fa-table" => "f0ce",
					"fas fa-table-tennis" => "f45d",
					"fas fa-tablet" => "f10a",
					"fas fa-tablet-alt" => "f3fa",
					"fas fa-tablets" => "f490",
					"fas fa-tachometer-alt" => "f3fd",
					"fas fa-tag" => "f02b",
					"fas fa-tags" => "f02c",
					"fas fa-tape" => "f4db",
					"fas fa-tasks" => "f0ae",
					"fas fa-taxi" => "f1ba",
					"fab fa-teamspeak" => "f4f9",
					"fas fa-teeth" => "f62e",
					"fas fa-teeth-open" => "f62f",
					"fab fa-telegram" => "f2c6",
					"fab fa-telegram-plane" => "f3fe",
					"fas fa-temperature-high" => "f769",
					"fas fa-temperature-low" => "f76b",
					"fab fa-tencent-weibo" => "f1d5",
					"fas fa-tenge" => "f7d7",
					"fas fa-terminal" => "f120",
					"fas fa-text-height" => "f034",
					"fas fa-text-width" => "f035",
					"fas fa-th" => "f00a",
					"fas fa-th-large" => "f009",
					"fas fa-th-list" => "f00b",
					"fab fa-the-red-yeti" => "f69d",
					"fas fa-theater-masks" => "f630",
					"fab fa-themeco" => "f5c6",
					"fab fa-themeisle" => "f2b2",
					"fas fa-thermometer" => "f491",
					"fas fa-thermometer-empty" => "f2cb",
					"fas fa-thermometer-full" => "f2c7",
					"fas fa-thermometer-half" => "f2c9",
					"fas fa-thermometer-quarter" => "f2ca",
					"fas fa-thermometer-three-quarters" => "f2c8",
					"fab fa-think-peaks" => "f731",
					"fas fa-thumbs-down" => "f165",
					"far fa-thumbs-down" => "f165",
					"fas fa-thumbs-up" => "f164",
					"far fa-thumbs-up" => "f164",
					"fas fa-thumbtack" => "f08d",
					"fas fa-ticket-alt" => "f3ff",
					"fab fa-tiktok" => "e07b",
					"fas fa-times" => "f00d",
					"fas fa-times-circle" => "f057",
					"far fa-times-circle" => "f057",
					"fas fa-tint" => "f043",
					"fas fa-tint-slash" => "f5c7",
					"fas fa-tired" => "f5c8",
					"far fa-tired" => "f5c8",
					"fas fa-toggle-off" => "f204",
					"fas fa-toggle-on" => "f205",
					"fas fa-toilet" => "f7d8",
					"fas fa-toilet-paper" => "f71e",
					"fas fa-toilet-paper-slash" => "e072",
					"fas fa-toolbox" => "f552",
					"fas fa-tools" => "f7d9",
					"fas fa-tooth" => "f5c9",
					"fas fa-torah" => "f6a0",
					"fas fa-torii-gate" => "f6a1",
					"fas fa-tractor" => "f722",
					"fab fa-trade-federation" => "f513",
					"fas fa-trademark" => "f25c",
					"fas fa-traffic-light" => "f637",
					"fas fa-trailer" => "e041",
					"fas fa-train" => "f238",
					"fas fa-tram" => "f7da",
					"fas fa-transgender" => "f224",
					"fas fa-transgender-alt" => "f225",
					"fas fa-trash" => "f1f8",
					"fas fa-trash-alt" => "f2ed",
					"far fa-trash-alt" => "f2ed",
					"fas fa-trash-restore" => "f829",
					"fas fa-trash-restore-alt" => "f82a",
					"fas fa-tree" => "f1bb",
					"fab fa-trello" => "f181",
					"fas fa-trophy" => "f091",
					"fas fa-truck" => "f0d1",
					"fas fa-truck-loading" => "f4de",
					"fas fa-truck-monster" => "f63b",
					"fas fa-truck-moving" => "f4df",
					"fas fa-truck-pickup" => "f63c",
					"fas fa-tshirt" => "f553",
					"fas fa-tty" => "f1e4",
					"fab fa-tumblr" => "f173",
					"fab fa-tumblr-square" => "f174",
					"fas fa-tv" => "f26c",
					"fab fa-twitch" => "f1e8",
					"fab fa-twitter" => "f099",
					"fab fa-twitter-square" => "f081",
					"fab fa-typo3" => "f42b",
					"fab fa-uber" => "f402",
					"fab fa-ubuntu" => "f7df",
					"fab fa-uikit" => "f403",
					"fab fa-umbraco" => "f8e8",
					"fas fa-umbrella" => "f0e9",
					"fas fa-umbrella-beach" => "f5ca",
					"fab fa-uncharted" => "e084",
					"fas fa-underline" => "f0cd",
					"fas fa-undo" => "f0e2",
					"fas fa-undo-alt" => "f2ea",
					"fab fa-uniregistry" => "f404",
					"fab fa-unity" => "e049",
					"fas fa-universal-access" => "f29a",
					"fas fa-university" => "f19c",
					"fas fa-unlink" => "f127",
					"fas fa-unlock" => "f09c",
					"fas fa-unlock-alt" => "f13e",
					"fab fa-unsplash" => "e07c",
					"fab fa-untappd" => "f405",
					"fas fa-upload" => "f093",
					"fab fa-ups" => "f7e0",
					"fab fa-usb" => "f287",
					"fas fa-user" => "f007",
					"far fa-user" => "f007",
					"fas fa-user-alt" => "f406",
					"fas fa-user-alt-slash" => "f4fa",
					"fas fa-user-astronaut" => "f4fb",
					"fas fa-user-check" => "f4fc",
					"fas fa-user-circle" => "f2bd",
					"far fa-user-circle" => "f2bd",
					"fas fa-user-clock" => "f4fd",
					"fas fa-user-cog" => "f4fe",
					"fas fa-user-edit" => "f4ff",
					"fas fa-user-friends" => "f500",
					"fas fa-user-graduate" => "f501",
					"fas fa-user-injured" => "f728",
					"fas fa-user-lock" => "f502",
					"fas fa-user-md" => "f0f0",
					"fas fa-user-minus" => "f503",
					"fas fa-user-ninja" => "f504",
					"fas fa-user-nurse" => "f82f",
					"fas fa-user-plus" => "f234",
					"fas fa-user-secret" => "f21b",
					"fas fa-user-shield" => "f505",
					"fas fa-user-slash" => "f506",
					"fas fa-user-tag" => "f507",
					"fas fa-user-tie" => "f508",
					"fas fa-user-times" => "f235",
					"fas fa-users" => "f0c0",
					"fas fa-users-cog" => "f509",
					"fas fa-users-slash" => "e073",
					"fab fa-usps" => "f7e1",
					"fab fa-ussunnah" => "f407",
					"fas fa-utensil-spoon" => "f2e5",
					"fas fa-utensils" => "f2e7",
					"fab fa-vaadin" => "f408",
					"fas fa-vector-square" => "f5cb",
					"fas fa-venus" => "f221",
					"fas fa-venus-double" => "f226",
					"fas fa-venus-mars" => "f228",
					"fas fa-vest" => "e085",
					"fas fa-vest-patches" => "e086",
					"fab fa-viacoin" => "f237",
					"fab fa-viadeo" => "f2a9",
					"fab fa-viadeo-square" => "f2aa",
					"fas fa-vial" => "f492",
					"fas fa-vials" => "f493",
					"fab fa-viber" => "f409",
					"fas fa-video" => "f03d",
					"fas fa-video-slash" => "f4e2",
					"fas fa-vihara" => "f6a7",
					"fab fa-vimeo" => "f40a",
					"fab fa-vimeo-square" => "f194",
					"fab fa-vimeo-v" => "f27d",
					"fab fa-vine" => "f1ca",
					"fas fa-virus" => "e074",
					"fas fa-virus-slash" => "e075",
					"fas fa-viruses" => "e076",
					"fab fa-vk" => "f189",
					"fab fa-vnv" => "f40b",
					"fas fa-voicemail" => "f897",
					"fas fa-volleyball-ball" => "f45f",
					"fas fa-volume-down" => "f027",
					"fas fa-volume-mute" => "f6a9",
					"fas fa-volume-off" => "f026",
					"fas fa-volume-up" => "f028",
					"fas fa-vote-yea" => "f772",
					"fas fa-vr-cardboard" => "f729",
					"fab fa-vuejs" => "f41f",
					"fas fa-walking" => "f554",
					"fas fa-wallet" => "f555",
					"fas fa-warehouse" => "f494",
					"fab fa-watchman-monitoring" => "e087",
					"fas fa-water" => "f773",
					"fas fa-wave-square" => "f83e",
					"fab fa-waze" => "f83f",
					"fab fa-weebly" => "f5cc",
					"fab fa-weibo" => "f18a",
					"fas fa-weight" => "f496",
					"fas fa-weight-hanging" => "f5cd",
					"fab fa-weixin" => "f1d7",
					"fab fa-whatsapp" => "f232",
					"fab fa-whatsapp-square" => "f40c",
					"fas fa-wheelchair" => "f193",
					"fab fa-whmcs" => "f40d",
					"fas fa-wifi" => "f1eb",
					"fab fa-wikipedia-w" => "f266",
					"fas fa-wind" => "f72e",
					"fas fa-window-close" => "f410",
					"far fa-window-close" => "f410",
					"fas fa-window-maximize" => "f2d0",
					"far fa-window-maximize" => "f2d0",
					"fas fa-window-minimize" => "f2d1",
					"far fa-window-minimize" => "f2d1",
					"fas fa-window-restore" => "f2d2",
					"far fa-window-restore" => "f2d2",
					"fab fa-windows" => "f17a",
					"fas fa-wine-bottle" => "f72f",
					"fas fa-wine-glass" => "f4e3",
					"fas fa-wine-glass-alt" => "f5ce",
					"fab fa-wix" => "f5cf",
					"fab fa-wizards-of-the-coast" => "f730",
					"fab fa-wodu" => "e088",
					"fab fa-wolf-pack-battalion" => "f514",
					"fas fa-won-sign" => "f159",
					"fab fa-wordpress" => "f19a",
					"fab fa-wordpress-simple" => "f411",
					"fab fa-wpbeginner" => "f297",
					"fab fa-wpexplorer" => "f2de",
					"fab fa-wpforms" => "f298",
					"fab fa-wpressr" => "f3e4",
					"fas fa-wrench" => "f0ad",
					"fas fa-x-ray" => "f497",
					"fab fa-xbox" => "f412",
					"fab fa-xing" => "f168",
					"fab fa-xing-square" => "f169",
					"fab fa-y-combinator" => "f23b",
					"fab fa-yahoo" => "f19e",
					"fab fa-yammer" => "f840",
					"fab fa-yandex" => "f413",
					"fab fa-yandex-international" => "f414",
					"fab fa-yarn" => "f7e3",
					"fab fa-yelp" => "f1e9",
					"fas fa-yen-sign" => "f157",
					"fas fa-yin-yang" => "f6ad",
					"fab fa-yoast" => "f2b1",
					"fab fa-youtube" => "f167",
					"fab fa-youtube-square" => "f431",
					"fab fa-zhihu" => "f63f"

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
