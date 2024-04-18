const details = document.querySelectorAll("details");

const isSummary = function(item) {
    return item.tagName === "SUMMARY";
};

const toggleOpen = function(details, shouldClose) {
    const duration = 0.3;
    const action = shouldClose ? "to" : "from";
    const height = shouldClose ? details.clientHeight : details.open ? details.scrollHeight : 0;

    gsap[action](details, {
        duration,
        height,
        onComplete: function() {
            if (shouldClose) details.open = false;
            gsap.set(details, { clearProps: "all" });
        }
    });
};

const clickHandler = function(event) {
    const summary = event.currentTarget;
    if (!isSummary(summary)) return;

    const details = summary.parentElement;
    const shouldClose = details.open;

    if (details.open) event.preventDefault();

    toggleOpen(details, shouldClose);
};

const augment = function(details) {
    const summary = details.querySelector("summary");
    summary.addEventListener("click", clickHandler);
};

details.forEach(augment);
/😭/