import BasicInformation from "./BasicInformation";
import Building from "./Building";
import Student from "./Student";
import TutoringSession from "./TutoringSession";

export default interface Tutoring extends BasicInformation {
    tutors: Student[],
    defaultBuilding: Building,
    defaultRoom: string,
    defaultStartTime: Date
    defaultEndTime: Date,
    tutoringSessions: TutoringSession[],
    defaultWeekDays: string[],
}
