<?php

namespace App\Model;

use App\Entity\Building;
use App\Entity\Tutoring;
use App\Validator\Constraints as AppAssert;
use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[AppAssert\StartTimeEndTimeConstraint]
#[AppAssert\StartDateEndDateConstraint]
class BatchTutoringSessionCreationModel
{
    #[Assert\Valid]
    #[Assert\NotNull]
    private ?Tutoring $tutoring = null;

    #[Assert\NotNull]
    private bool $mondaySelected = false;

    #[Assert\NotNull]
    private bool $tuesdaySelected = false;

    #[Assert\NotNull]
    private bool $wednesdaySelected = false;

    #[Assert\NotNull]
    private bool $thursdaySelected = false;

    #[Assert\NotNull]
    private bool $fridaySelected = false;

    #[Assert\NotNull]
    private ?DateTimeInterface $startTime = null;

    #[Assert\NotNull]
    private ?DateTimeInterface $endTime = null;

    #[Assert\NotNull]
    private ?DateTimeInterface $startDate = null;

    #[Assert\NotNull]
    private ?DateTimeInterface $endDate = null;

    #[Assert\NotNull]
    private ?Building $building = null;

    #[Assert\NotNull]
    private ?string $room = null;

    public function getTutoring(): ?Tutoring
    {
        return $this->tutoring;
    }

    public function setTutoring(Tutoring $tutoring): self
    {
        $this->tutoring = $tutoring;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMondaySelected(): ?bool
    {
        return $this->mondaySelected;
    }

    /**
     * @param bool $mondaySelected
     */
    public function setMondaySelected(?bool $mondaySelected): self
    {
        $this->mondaySelected = $mondaySelected;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTuesdaySelected(): ?bool
    {
        return $this->tuesdaySelected;
    }

    /**
     * @param bool $tuesdaySelected
     */
    public function setTuesdaySelected(?bool $tuesdaySelected): self
    {
        $this->tuesdaySelected = $tuesdaySelected;

        return $this;
    }

    /**
     * @return bool
     */
    public function getWednesdaySelected(): ?bool
    {
        return $this->wednesdaySelected;
    }

    /**
     * @param bool $wednesdaySelected
     */
    public function setWednesdaySelected(?bool $wednesdaySelected): self
    {
        $this->wednesdaySelected = $wednesdaySelected;

        return $this;
    }

    /**
     * @return bool
     */
    public function getThursdaySelected(): ?bool
    {
        return $this->thursdaySelected;
    }

    /**
     * @param bool $thursdaySelected
     */
    public function setThursdaySelected(?bool $thursdaySelected): self
    {
        $this->thursdaySelected = $thursdaySelected;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFridaySelected(): ?bool
    {
        return $this->fridaySelected;
    }

    /**
     * @param bool $fridaySelected
     */
    public function setFridaySelected(?bool $fridaySelected): self
    {
        $this->fridaySelected = $fridaySelected;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartTime(): ?DateTimeInterface
    {
        return $this->startTime;
    }

    /**
     * @param DateTimeInterface $startTime
     */
    public function setStartTime(?DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEndTime(): ?DateTimeInterface
    {
        return $this->endTime;
    }

    /**
     * @param DateTimeInterface $endTime
     */
    public function setEndTime(?DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface $startDate
     */
    public function setStartDate(?DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeInterface $endDate
     */
    public function setEndDate(?DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Building
     */
    public function getBuilding(): ?Building
    {
        return $this->building;
    }

    /**
     * @param Building $building
     */
    public function setBuilding(?Building $building): self
    {
        $this->building = $building;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoom(): ?string
    {
        return $this->room;
    }

    /**
     * @param string $room
     */
    public function setRoom(?string $room): self
    {
        $this->room = $room;

        return $this;
    }
}
