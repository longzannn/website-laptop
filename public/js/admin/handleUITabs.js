var tabs = document.querySelectorAll(".tab-item span");
var panes = document.querySelectorAll(".tab-pane");

tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = () => {
    var tabItemActive = document.querySelector(
      ".inline-flex.items-center.justify-center.p-4.text-blue-600.border-b-2.border-blue-600.rounded-t-lg.active.group"
    );
    var paneShow = document.querySelector(".tab-pane.block");
    console.log("--------Active and Show-------------");
    console.log(tabItemActive);
    console.log(paneShow);
    console.log("-----------------------------------");
    tabItemActive.classList.remove(
      "text-blue-600",
      "border-b-2",
      "border-blue-600",
      "rounded-t-lg",
      "active",
      "group"
    );
    tabItemActive.classList.add(
      "border-b-2",
      "border-transparent",
      "hover:text-gray-600",
      "rounded-t-lg",
      "hover:border-gray-300",
      "group"
    );
    paneShow.classList.remove("block");
    paneShow.classList.add("hidden");

    console.log("--------UnActive and UnShow-------------");
    console.log(tabItemActive);
    console.log(paneShow);

    tab.classList.remove(
      "border-b-2",
      "border-transparent",
      "hover:text-gray-600",
      "rounded-t-lg",
      "hover:border-gray-300",
      "group"
    );
    tab.classList.add(
      "text-blue-600",
      "border-b-2",
      "border-blue-600",
      "rounded-t-lg",
      "active",
      "group"
    );
    pane.classList.remove("hidden");
    pane.classList.add("block");
  };
});
