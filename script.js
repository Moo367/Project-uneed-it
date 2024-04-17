const details = document.querySelectorAll("details");

const isSummary = (item: any): item is HTMLElement => {
    return (item as HTMLElement).tagName === "SUMMARY";
};

const clickHandler = (event: PointerEvent) => {
    const duration = 0.3;
    const summary: EventTarget | null = event.currentTarget;
    if (!isSummary(summary)) return;

    const details = summary.parentElement;

    if (!details instanceof HTMLDetailsElement) {
        return;
    }

    const action: "to" | "from" = details.open ? "to" : "from";
    let closeOnCompletion = false;

    if (details.open) {
        closeOnCompletion = true;
        event.preventDefault();
    }

    const height = details.open ? summary.offsetHeight + 1 : details.clientHeight;

    gsap[action](details, {
        duration,
        height,
        onComplete: () => {
            if (closeOnCompletion) details.open = false;
            gsap.set(details, { clearProps: "all" });
        }
    });
};

const augment = (details: HTMLDetailsElement) => {
    const summary = details.querySelector("summary");
    summary.addEventListener("click", clickHandler);
};

for (const detail of details) {
    augment(detail);
}
