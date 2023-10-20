import.meta.glob(["../images/**"]);

import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

import slideshow from "./slideshow";

Alpine.data("slideshow", slideshow);

Alpine.start();
